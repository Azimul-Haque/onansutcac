<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

use App\User;
use App\Message;

use App\Product;
use App\Market;

use Carbon\Carbon;
use DB;
use Hash;
use Auth;
use Image;
use File;
use Session;
use Artisan;
// use Redirect;
use OneSignal;
use Purifier;
use Cache;
use View;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
        $unresolvedmessagecount = Message::where('status', 0)->count();
        View::share('unresolvedmessagecount', $unresolvedmessagecount);

        $this->middleware('auth')->except('clear');
        $this->middleware(['admin'])->only('getUsers', 'storeUser', 'updateUser', 'deleteUser', 'getUser', 'getMessages', 'updateMessage', 'getNotifications');

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // if user is a manager, redirect him to his profile
        // if user is a manager, redirect him to his profile
        if(Auth::user()->role == 'user') {
            abort(403, 'Access Denied');
        }

        return view('dashboard.index');
    }

    public function clearQueryCache()
    {
        Cache::flush();
        Session::flash('success', 'All query caches have been cleared!');
        return redirect()->route('dashboard.index');
    }

    public function getUsers()
    {
        $userscount = User::count() - 2;
        $users = User::where('name', '!=', null)
                     ->whereNotIn('mobile', ['01751398392'])
                     ->orderBy('id', 'asc')
                     ->paginate(10);

        return view('dashboard.users.index')
                    ->withUsers($users)
                    ->withUserscount($userscount);
    }

    public function getUsersSearch($search)
    {
        $userscount = User::where('name', 'LIKE', "%$search%")
                          ->orWhere('email', 'LIKE', "%$search%")
                          ->orWhere('mobile', 'LIKE', "%$search%")
                          ->orderBy('id', 'desc')
                          ->count();

        $users = User::where('name', 'LIKE', "%$search%")
                     ->orWhere('email', 'LIKE', "%$search%")
                     ->orWhere('mobile', 'LIKE', "%$search%")
                     ->orderBy('id', 'desc')
                     ->paginate(10);


        return view('dashboard.users.index')
                    ->withUsers($users)
                    ->withUserscount($userscount);
    }

    public function storeUser(Request $request)
    {
        // dd(serialize($request->sitecheck));
        $this->validate($request,array(
            'name'        => 'required|string|max:191',
            'email' => 'required|email|unique:users,email',
            'mobile'      => 'required|string|max:191|unique:users,mobile',
            'password'    => 'required|string|min:8|max:191',
        ));

        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->mobile = $request->mobile;
        $user->role = 'admin';
        $user->password = Hash::make($request->password);
        $user->save();

        Session::flash('success', 'User created successfully!');
        return redirect()->route('dashboard.users');
    }

    public function updateUser(Request $request, $id)
    {
        $this->validate($request,array(
            'name'        => 'required|string|max:191',
            'email' => 'required|email|unique:users,email,'.$id,
            'mobile'      => 'required|string|max:191|unique:users,mobile,'.$id,
            'password'    => 'nullable|string|min:8|max:191',
        ));

        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->mobile = $request->mobile;
        $user->save();

        Session::flash('success', 'User updated successfully!');
        return redirect()->route('dashboard.users');
    }

    public function deleteUser($id)
    {
        $user = User::find($id);
        $user->delete();

        Session::flash('success', 'User deleted successfully!');
        return redirect()->route('dashboard.users');
    }

    public function getProducts(Request $request)
    {
        if($request->search) {
            $products = Product::where('title', 'LIKE', "%$request->search%")
                         ->orWhere('slug', 'LIKE', "%$request->search%")
                         ->orWhere('text', 'LIKE', "%$request->search%")
                         ->orderBy('id', 'desc')
                         ->paginate(10);
        } else {
            $products = Product::orderBy('id', 'desc')->paginate(10);
        }

        return view('dashboard.products.index')->withProducts($products);
    }

    public function storeProduct(Request $request)
    {
        $this->validate($request, array(
            'title' => 'required|string|max:191',
            'slug'  => 'required|string|max:300|unique:products,slug',
            'text'  => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
        ));

        $product = new Product;
        $product->title = $request->title;
        $product->slug = Str::slug($request->slug);
        $product->text = Purifier::clean($request->text, 'youtube');

        // image upload
        if($request->hasFile('image')) {
            $image    = $request->file('image');
            $filename = random_string(5) . time() .'.' . "webp";
            $location = public_path('images/products/'. $filename);
            Image::make($image)->fit(711, 400)->save($location);
            $product->image       = $filename;
        }

        $product->save();

        Cache::forget('products_for_footer');
        Session::flash('success', 'Product created successfully!');
        return redirect()->route('dashboard.products');
    }

    public function updateProduct(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required|string|max:191',
            'slug'  => 'required|string|max:300|unique:products,slug,' . $id,
            'text'  => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
        ]);

        $product = Product::findOrFail($id);
        $product->title = $request->title;
        $product->slug = Str::slug($request->slug);

        $product->text = Purifier::clean($request->text, 'youtube');

        if($request->hasFile('image')) {
            if ($product->image && file_exists(public_path('images/products/' . $product->image))) {
                unlink(public_path('images/products/' . $product->image));
            }

            $image    = $request->file('image');
            $filename = Str::random(5) . time() . '.' . "webp";
            $location = public_path('images/products/' . $filename);
            Image::make($image)->fit(711, 400)->save($location);
            $product->image = $filename;
        }

        $product->save();

        Cache::forget('products_for_footer');
        Session::flash('success', 'Product updated successfully!');
        return redirect()->route('dashboard.products');
    }

    public function deleteProduct($id)
    {
        $product = Product::findOrFail($id);

        if ($product->image && file_exists(public_path('images/products/' . $product->image))) {
            unlink(public_path('images/products/' . $product->image));
        }

        $product->delete();

        Cache::forget('products_for_footer');
        Session::flash('success', 'Product deleted successfully!');
        return redirect()->route('dashboard.products');
    }

    public function getMarkets(Request $request)
    {
        if($request->search) {
            $markets = Market::where('title', 'LIKE', "%$request->search%")
                             ->orWhere('slug', 'LIKE', "%$request->search%")
                             ->orWhere('text', 'LIKE', "%$request->search%")
                             ->orderBy('id', 'desc')
                             ->paginate(10);
        } else {
            $markets = Market::orderBy('id', 'desc')->paginate(10);
        }

        return view('dashboard.markets.index')->withMarkets($markets);
    }

    public function storeMarket(Request $request)
    {
        $this->validate($request, array(
            'title' => 'required|string|max:191',
            'slug'  => 'required|string|max:300|unique:markets,slug',
            'text'  => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
        ));

        $market = new Market;
        $market->title = $request->title;
        $market->slug = Str::slug($request->slug);
        $market->text = Purifier::clean($request->text, 'youtube');

        if($request->hasFile('image')) {
            $image    = $request->file('image');
            $filename = Str::random(5) . time() .'.' . "webp";
            $location = public_path('images/markets/'. $filename);
            Image::make($image)->fit(711, 400)->save($location);
            $market->image        = $filename;
        }

        $market->save();

        Cache::forget('markets_for_footer');
        Session::flash('success', 'Market created successfully!');
        return redirect()->route('dashboard.markets');
    }

    public function updateMarket(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required|string|max:191',
            'slug'  => 'required|string|max:300|unique:markets,slug,' . $id,
            'text'  => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
        ]);

        $market = Market::findOrFail($id);
        $market->title = $request->title;
        $market->slug = Str::slug($request->slug);

        $market->text = Purifier::clean($request->text, 'youtube');

        if($request->hasFile('image')) {
            if ($market->image && file_exists(public_path('images/markets/' . $market->image))) {
                unlink(public_path('images/markets/' . $market->image));
            }

            $image    = $request->file('image');
            $filename = Str::random(5) . time() . '.' . "webp";
            $location = public_path('images/markets/' . $filename);
            Image::make($image)->fit(711, 400)->save($location);
            $market->image = $filename;
        }

        $market->save();

        Cache::forget('markets_for_footer');
        Session::flash('success', 'Market updated successfully!');
        return redirect()->route('dashboard.markets');
    }

    public function deleteMarket($id)
    {
        $market = Market::findOrFail($id);

        if ($market->image && file_exists(public_path('images/markets/' . $market->image))) {
            unlink(public_path('images/markets/' . $market->image));
        }

        $market->delete();

        Cache::forget('markets_for_footer');
        Session::flash('success', 'Market deleted successfully!');
        return redirect()->route('dashboard.markets');
    }


    

    public function getComponents()
    {
        return view('components');
    }

    // clear configs, routes and serve
    public function clear()
    {
        Artisan::call('route:clear');
        // Artisan::call('optimize');
        Artisan::call('cache:clear');
        Artisan::call('view:clear');
        Artisan::call('key:generate');
        Artisan::call('config:clear');
        Session::flush();
        return 'Config and Route Cached. All Cache Cleared';
    }
}
