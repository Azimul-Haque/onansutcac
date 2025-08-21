<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

use App\User;
use App\Message;

use App\Product;
use App\Market;
use App\Team;
use App\News;
use App\Newscategory;
use App\Event;
use App\Successstory;
use App\Faq;

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
        $totalproducts = Product::count();
        if($request->search) {
            $products = Product::where('title', 'LIKE', "%$request->search%")
                         ->orWhere('slug', 'LIKE', "%$request->search%")
                         ->orWhere('text', 'LIKE', "%$request->search%")
                         ->orderBy('id', 'desc')
                         ->paginate(10);
        } else {
            $products = Product::orderBy('id', 'desc')->paginate(10);
        }

        return view('dashboard.products.index')
                            ->withProducts($products)
                            ->withTotalproducts($totalproducts);
    }

    public function storeProduct(Request $request)
    {
        $this->validate($request, array(
            'type' => 'required',
            'title' => 'required|string|max:191',
            'slug'  => 'required|string|max:300|unique:products,slug',
            'text'  => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
        ));

        $product = new Product;
        $product->type = $request->type;
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
            'type' => 'required',
            'title' => 'required|string|max:191',
            'slug'  => 'required|string|max:300|unique:products,slug,' . $id,
            'text'  => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
        ]);

        $product = Product::findOrFail($id);
        $product->type = $request->type;
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
        $totalmarkets = Market::count();

        if($request->search) {
            $markets = Market::where('title', 'LIKE', "%$request->search%")
                             ->orWhere('slug', 'LIKE', "%$request->search%")
                             ->orWhere('text', 'LIKE', "%$request->search%")
                             ->orderBy('id', 'desc')
                             ->paginate(10);
        } else {
            $markets = Market::orderBy('id', 'desc')->paginate(10);
        }

        return view('dashboard.markets.index')
                            ->withMarkets($markets)
                            ->withTotalmarkets($totalmarkets);
    }

    public function storeMarket(Request $request)
    {
        $this->validate($request, array(
            'type' => 'required',
            'title' => 'required|string|max:191',
            'slug'  => 'required|string|max:300|unique:markets,slug',
            'text'  => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
        ));

        $market = new Market;
        $market->type = $request->type;
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
        $market->type = $request->type;
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

    public function getTeams(Request $request)
    {
        if($request->search) {
            $teams = Team::where('name', 'LIKE', "%$request->search%")
                             ->orWhere('designation', 'LIKE', "%$request->search%")
                             ->orderBy('id', 'desc')
                             ->paginate(10);
        } else {
            $teams = Team::orderBy('id', 'desc')->paginate(10);
        }

        return view('dashboard.teams.index')->withTeams($teams);
    }

    public function storeTeam(Request $request)
    {
        $this->validate($request, array(
            'name'        => 'required|string|max:191',
            'designation' => 'required|string|max:191',
            'serial'      => 'required|integer',
            'about'       => 'required',
            'image'       => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
        ));

        $team = new Team;
        $team->name = $request->name;
        $team->designation = $request->designation;
        $team->serial = $request->serial;
        $team->about = Purifier::clean($request->about, 'youtube');

        if($request->hasFile('image')) {
            $image    = $request->file('image');
            $filename = Str::random(5) . time() .'.' . "webp";
            $location = public_path('images/teams/'. $filename);
            Image::make($image)->fit(300, 300)->save($location);
            $team->image        = $filename;
        }

        $team->save();

        Session::flash('success', 'Team member created successfully!');
        return redirect()->route('dashboard.teams');
    }

    public function updateTeam(Request $request, $id)
    {
        $this->validate($request, [
            'name'        => 'required|string|max:191',
            'designation' => 'required|string|max:191',
            'serial'      => 'required|integer',
            'about'       => 'required',
            'image'       => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
        ]);

        $team = Team::findOrFail($id);
        $team->name = $request->name;
        $team->designation = $request->designation;
        $team->serial = $request->serial;
        $team->about = Purifier::clean($request->about, 'youtube');

        if($request->hasFile('image')) {
            if ($team->image && file_exists(public_path('images/teams/' . $team->image))) {
                unlink(public_path('images/teams/' . $team->image));
            }

            $image    = $request->file('image');
            $filename = Str::random(5) . time() . '.' . "webp";
            $location = public_path('images/teams/' . $filename);
            Image::make($image)->fit(300, 300)->save($location);
            $team->image = $filename;
        }

        $team->save();

        Session::flash('success', 'Team member updated successfully!');
        return redirect()->route('dashboard.teams');
    }

    public function deleteTeam($id)
    {
        $team = Team::findOrFail($id);

        if ($team->image && file_exists(public_path('images/teams/' . $team->image))) {
            unlink(public_path('images/teams/' . $team->image));
        }

        $team->delete();

        Session::flash('success', 'Team member deleted successfully!');
        return redirect()->route('dashboard.teams');
    }

    public function getAbouts(Request $request)
    {
        // Check if a search query is present in the request
        if ($request->search) {
            // If a search query is present, search by page-location and content
            $abouts = About::where('page_location', 'LIKE', "%{$request->search}%")
                            ->orWhere('content', 'LIKE', "%{$request->search}%")
                            ->orderBy('id', 'desc')
                            ->paginate(10);
        } else {
            // Otherwise, get all abouts records with pagination
            $abouts = About::orderBy('id', 'desc')->paginate(10);
        }

        // Return the view with the paginated abouts data
        return view('dashboard.abouts.index')->with('abouts', $abouts);
    }

    /**
     * Store a newly created 'abouts' resource in storage.
     * This method is analogous to the storeTeam method, but without image handling.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function storeAbout(Request $request)
    {
        // Validate the incoming request data
        $this->validate($request, [
            'page_location' => 'required|string|max:191|unique:abouts',
            'content'       => 'required',
        ]);

        // Create a new About model instance
        $about = new About;
        $about->page_location = $request->page_location;
        $about->content = Purifier::clean($request->content, 'youtube');

        // Save the new record to the database
        $about->save();

        // Flash a success message to the session
        Session::flash('success', 'About page content created successfully!');

        // Redirect to the abouts index page
        return redirect()->route('dashboard.abouts');
    }

    /**
     * Update the specified 'abouts' resource in storage.
     * This method is analogous to the updateTeam method, without image handling.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function updateAbout(Request $request, $id)
    {
        // Validate the incoming request data
        $this->validate($request, [
            'page_location' => 'required|string|max:191|unique:abouts,page_location,' . $id,
            'content'       => 'required',
        ]);

        // Find the record by its ID or fail
        $about = About::findOrFail($id);
        $about->page_location = $request->page_location;
        $about->content = Purifier::clean($request->content, 'youtube');

        // Save the updated record to the database
        $about->save();

        // Flash a success message to the session
        Session::flash('success', 'About page content updated successfully!');

        // Redirect to the abouts index page
        return redirect()->route('dashboard.abouts');
    }

    public function getNews(Request $request)
    {
        $newscategories = Newscategory::orderBy('name', 'asc')->get();

        if($request->search) {
            $allNews = News::where('title', 'LIKE', "%$request->search%")
                             ->orWhere('type', 'LIKE', "%$request->search%")
                             ->orWhere('slug', 'LIKE', "%$request->search%")
                             ->orWhere('text', 'LIKE', "%$request->search%")
                             ->orderBy('id', 'desc')
                             ->paginate(10);
        } else {
            $allNews = News::orderBy('id', 'desc')->paginate(10);
        }

        return view('dashboard.news.index')
               ->withAllNews($allNews)
               ->withNewscategories($newscategories);
    }

    public function storeNews(Request $request)
    {
        $this->validate($request, [
            'newscategory_id' => 'required|integer|exists:newscategories,id',
            'title'           => 'required|string|max:191',
            'type'            => 'nullable|string|max:191',
            'slug'            => 'sometimes|max:300|unique:news,slug',
            'newslink'        => 'sometimes',
            'text'            => 'sometimes',
            'image'           => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
        ]);

        $news = new News;
        $news->newscategory_id = $request->newscategory_id;
        $news->title = $request->title;
        $news->type = $request->type;
        $news->slug = Str::slug($request->slug);
        if($request->newslink) {
            $news->newslink = $request->newslink;
        }
        if($request->text) {
            $news->text = Purifier::clean($request->text, 'youtube');
        }

        if($request->hasFile('image')) {
            $image    = $request->file('image');
            $filename = Str::random(5) . time() .'.' . "webp";
            $location = public_path('images/news/'. $filename);
            Image::make($image)->fit(711, 400)->save($location);
            $news->image = $filename;
        }

        $news->save();

        Session::flash('success', 'News created successfully!');
        return redirect()->route('dashboard.news');
    }

    public function updateNews(Request $request, $id)
    {
        $this->validate($request, [
            'newscategory_id' => 'required|integer|exists:newscategories,id',
            'title'           => 'required|string|max:191',
            'type'            => 'nullable|string|max:191',
            'slug'            => 'sometimes|max:300|unique:news,slug,' . $id,
            'newslink'        => 'sometimes',
            'text'            => 'sometimes',
            'image'           => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
        ]);

        $news = News::findOrFail($id);
        $news->newscategory_id = $request->newscategory_id;
        $news->title = $request->title;
        $news->type = $request->type;
        $news->slug = Str::slug($request->slug);
        if($request->newslink) {
            $news->newslink = $request->newslink;
        }
        if($request->text) {
            $news->text = Purifier::clean($request->text, 'youtube');
        }


        if($request->hasFile('image')) {
            if ($news->image && file_exists(public_path('images/news/' . $news->image))) {
                unlink(public_path('images/news/' . $news->image));
            }

            $image    = $request->file('image');
            $filename = Str::random(5) . time() . '.' . "webp";
            $location = public_path('images/news/' . $filename);
            Image::make($image)->fit(711, 400)->save($location);
            $news->image = $filename;
        }

        $news->save();

        Session::flash('success', 'News updated successfully!');
        return redirect()->route('dashboard.news');
    }

    public function deleteNews($id)
    {
        $news = News::findOrFail($id);

        if ($news->image && file_exists(public_path('images/news/' . $news->image))) {
            unlink(public_path('images/news/' . $news->image));
        }

        $news->delete();

        Session::flash('success', 'News deleted successfully!');
        return redirect()->route('dashboard.news');
    }

    public function storeNewscategory(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:191|unique:newscategories,name',
        ]);

        $newscategory = new Newscategory;
        $newscategory->name = $request->name;
        $newscategory->save();

        Session::flash('success', 'News category created successfully!');
        return redirect()->route('dashboard.news');
    }

    public function updateNewscategory(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|string|max:191|unique:newscategories,name,' . $id,
        ]);

        $newscategory = Newscategory::findOrFail($id);
        $newscategory->name = $request->name;
        $newscategory->save();

        Session::flash('success', 'News category updated successfully!');
        return redirect()->route('dashboard.news');
    }

    public function deleteNewscategory($id)
    {
        $newscategory = Newscategory::findOrFail($id);
        $newscategory->delete();

        Session::flash('success', 'News category deleted successfully!');
        return redirect()->route('dashboard.newscategories');
    }

    public function getEvents(Request $request)
    {
        if($request->search) {
            $allEvents = Event::where('title', 'LIKE', "%$request->search%")
                             ->orWhere('type', 'LIKE', "%$request->search%")
                             ->orWhere('event_date', 'LIKE', "%$request->search%")
                             ->orWhere('reg_url', 'LIKE', "%$request->search%")
                             ->orWhere('address', 'LIKE', "%$request->search%")
                             ->orWhere('text', 'LIKE', "%$request->search%")
                             ->orderBy('id', 'desc')
                             ->paginate(10);
        } else {
            $allEvents = Event::orderBy('id', 'desc')->paginate(10);
        }

        return view('dashboard.events.index')
               ->withAllEvents($allEvents);
    }

    // Store
    public function storeEvent(Request $request)
    {
        $request->validate([
            'title'      => 'required|string|max:191',
            'type'       => 'nullable|string|max:100',
            'event_date' => 'nullable|date',
            'from_to'    => 'nullable|string|max:100',
            'address'    => 'nullable|string|max:255',
            'reg_url'    => 'nullable|url',
            'text'       => 'nullable|string',
            'image'      => 'nullable|image|max:2048',
        ]);

        $event = new Event;
        $event->title = $request->title;
        $event->type = $request->type;
        $event->event_date = $request->event_date;
        $event->from_to = $request->from_to;
        $event->address = $request->address;
        if($request->reg_url) {
            $event->reg_url = $request->reg_url;
        }
        if($request->text) {
            $event->text = Purifier::clean($request->text, 'youtube');
        }

        if($request->hasFile('image')) {
            $image    = $request->file('image');
            $filename = Str::random(5) . time() .'.' . "webp";
            $location = public_path('images/events/'. $filename);
            Image::make($image)->fit(711, 400)->save($location);
            $event->image = $filename;
        }

        $event->save();

        Session::flash('success', 'Event created successfully!');
        return redirect()->route('dashboard.events');
    }

    // Update
    public function updateEvent(Request $request, $id)
    {
        $event = Event::findOrFail($id);

        $request->validate([
            'title'      => 'required|string|max:191',
            'type'       => 'nullable|string|max:100',
            'event_date' => 'nullable|date',
            'from_to'    => 'nullable|string|max:100',
            'address'    => 'nullable|string|max:255',
            'reg_url'    => 'nullable|url',
            'text'       => 'nullable|string',
            'image'      => 'nullable|image|max:2048',
        ]);

        $event = Event::findOrFail($id);
        $event->title = $request->title;
        $event->type = $request->type;
        $event->event_date = $request->event_date;
        $event->from_to = $request->from_to;
        $event->address = $request->address;
        if($request->reg_url) {
            $event->reg_url = $request->reg_url;
        }
        if($request->text) {
            $event->text = Purifier::clean($request->text, 'youtube');
        }


        if($request->hasFile('image')) {
            if ($event->image && file_exists(public_path('images/event/' . $event->image))) {
                unlink(public_path('images/events/' . $event->image));
            }

            $image    = $request->file('image');
            $filename = Str::random(5) . time() . '.' . "webp";
            $location = public_path('images/events/' . $filename);
            Image::make($image)->fit(711, 400)->save($location);
            $event->image = $filename;
        }

        $event->save();

        Session::flash('success', 'Event updated successfully!');
        return redirect()->route('dashboard.events');


    }

    // Delete
    public function deleteEvent($id)
    {
        $event = Event::findOrFail($id);

        if ($event->image && Storage::disk('public')->exists($event->image)) {
            Storage::disk('public')->delete($event->image);
        }

        $event->delete();
        return redirect()->back()->with('success', 'Event deleted successfully.');
    }

    public function getSuccessStories(Request $request)
    {
        $query = Successstory::query();

        if ($search = $request->input('search')) {
            $query->where('title', 'like', '%' . $search . '%')
                  ->orWhere('type', 'like', '%' . $search . '%')
                  ->orWhere('text', 'like', '%' . $search . '%');
        }

        $allSuccessStories = $query->latest()->paginate(10);

        return view('dashboard.successstories.index', compact('allSuccessStories'));
    }

    public function storeSuccessStory(Request $request)
    {
        $rules = [
            'title' => 'required|string|max:191',
            'type' => 'required|string|max:191',
            'custom_type' => 'nullable|string|max:191|required_if:type,Other',
            'text' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'file' => 'nullable|file|mimes:pdf,doc,docx,xls,xlsx|max:3072',
        ];

        $validatedData = $request->validate($rules);

        $finalType = $validatedData['type'];
        if ($finalType === 'Other' && !empty($validatedData['custom_type'])) {
            $finalType = $validatedData['custom_type'];
        }

        $successstory = new Successstory;
        $successstory->title = $request->title;
        $successstory->type = $request->type;
        if($request->text) {
            $successstory->text = Purifier::clean($request->text, 'youtube');
        }

        $imageName = null;
        if($request->hasFile('image')) {
            $image    = $request->file('image');
            $imageName = Str::random(5) . time() .'.' . "webp";
            $location = public_path('images/success-stories/'. $imageName);
            Image::make($image)->fit(711, 400)->save($location);
            $successstory->image = $imageName;
        }

        $fileName = null;
        if($request->hasFile('file')) {
            $newfile = $request->file('file');
            $fileName   = 'file_'.time() .'.' . $newfile->getClientOriginalExtension();
            $location   = public_path('files/success-stories');
            $newfile->move($location, $fileName);
            $successstory->file = $fileName;
        }

        $successstory->save();

        Session::flash('success', 'Success story created successfully!');
        return redirect()->route('dashboard.success-stories');
    }

    public function updateSuccessStory(Request $request, $id)
    {
        $rules = [
            'title' => 'required|string|max:191',
            'type' => 'required|string|max:191',
            'custom_type' => 'nullable|string|max:191|required_if:type,Other',
            'text' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'file' => 'nullable|file|mimes:pdf,doc,docx,xls,xlsx|max:3072',
        ];

        $successStory = SuccessStory::findOrFail($id);
        $validatedData = $request->validate($rules);

        $finalType = $validatedData['type'];
        if ($finalType === 'Other' && !empty($validatedData['custom_type'])) {
            $finalType = $validatedData['custom_type'];
        }

        $successStory->title = $validatedData['title'];
        $successStory->type = $finalType;
        if (isset($validatedData['text'])) {
            $successStory->text = Purifier::clean($validatedData['text'], 'youtube');
        } else {
            $successStory->text = null;
        }

        // Handle image update
        if ($request->hasFile('image')) {
            // Delete old image if it exists
            if ($successStory->image && File::exists(public_path('images/success-stories/' . $successStory->image))) {
                File::delete(public_path('images/success-stories/' . $successStory->image));
            }
            $image = $request->file('image');
            $imageName = Str::random(5) . time() .'.' . "webp";
            $location = public_path('images/success-stories/'. $imageName);
            Image::make($image)->fit(711, 400)->save($location);
            $successStory->image = $imageName;
        }

        // Handle file update
        if ($request->hasFile('file')) {
            // Delete old file if it exists
            if ($successStory->file && File::exists(public_path('files/success-stories/' . $successStory->file))) {
                File::delete(public_path('files/success-stories/' . $successStory->file));
            }
            $newfile = $request->file('file');
            $fileName = 'file_'.time() .'.' . $newfile->getClientOriginalExtension();
            $location = public_path('files/success-stories');
            $newfile->move($location, $fileName);
            $successStory->file = $fileName;
        }

        $successStory->save();

        return redirect()->route('dashboard.success-stories')->with('success', 'Success story updated successfully!');
    }

    public function deleteSuccessStory($id)
    {
        $successStory = SuccessStory::findOrFail($id);
        
        // Delete associated image and file from storage
        if ($successStory->image && File::exists(public_path('images/success-stories/' . $successStory->image))) {
            File::delete(public_path('images/success-stories/' . $successStory->image));
        }
        if ($successStory->file && File::exists(public_path('files/success-stories/' . $successStory->file))) {
            File::delete(public_path('files/success-stories/' . $successStory->file));
        }

        $successStory->delete();

        return redirect()->route('dashboard.success-stories')->with('success', 'Success story deleted successfully!');
    }











    public function getHelpCenter(Request $request)
    {
        if($request->search) {
            $faqs = Faq::where('type', 'LIKE', "%$request->search%")
                         ->orWhere('question', 'LIKE', "%$request->search%")
                         ->orWhere('answer', 'LIKE', "%$request->search%")
                         ->orderBy('id', 'desc')
                         ->paginate(10);
        } else {
            $faqs = Faq::orderBy('id', 'desc')->paginate(10);
        }

        return view('dashboard.help-center.index')->withFaqs($faqs);
    }

    public function storeHelpCenter(Request $request)
    {
        $this->validate($request, [
            'type'     => 'required|string|max:191',
            'question' => 'required|string|max:500',
            'answer'   => 'required',
        ]);

        $faq = new Faq;
        $faq->type = $request->type;
        $faq->question = $request->question;
        $faq->answer = Purifier::clean($request->answer, 'youtube');

        $faq->save();

        Session::flash('success', 'Help Center item created successfully!');
        return redirect()->route('dashboard.help-center');
    }

    public function updateHelpCenter(Request $request, $id)
    {
        $this->validate($request, [
            'type'     => 'required|string|max:191',
            'question' => 'required|string|max:500',
            'answer'   => 'required',
        ]);

        $faq = Faq::findOrFail($id);
        $faq->type = $request->type;
        $faq->question = $request->question;
        $faq->answer = Purifier::clean($request->answer, 'youtube');

        $faq->save();

        Session::flash('success', 'Help Center item updated successfully!');
        return redirect()->route('dashboard.help-center');
    }

    public function deleteHelpCenter($id)
    {
        $faq = Faq::findOrFail($id);

        $faq->delete();

        Session::flash('success', 'Help Center item deleted successfully!');
        return redirect()->route('dashboard.help-center');
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
