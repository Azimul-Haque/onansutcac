<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
use Cache;
// use Redirect;
// use OneSignal;
// use PDF;
use View;


class IndexController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        View::share('productsforfooter', Cache::remember('products_for_footer', 60 * 24 * 30, function () {
            return Product::orderBy('id', 'desc')->get()->take(6);
        }));

        View::share('marketsforfooter', Cache::remember('markets_for_footer', 60 * 24 * 30, function () {
            return Market::orderBy('id', 'desc')->get()->take(6);
        }));
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // return redirect()->route('dashboard.index');

        return view('index.index');
    }

    public function getContact ()
    {
        return view('index.contact');
    }

    public function getAboutUs ()
    {
        return view('index.aboutus');
    }

    public function termsAndConditions()
    {
        return view('index.termsandconditions');
    }

    public function privacyPolicy()
    {
        return view('index.privacypolicy');
    }

    public function refundPolicy()
    {
        return view('index.refundpolicy');
    }

    public function getProducts()
    {
        $products = Product::orderBy('id', 'desc')->get();

        return view('index.products')
                    ->withProducts($products);
    }

    public function getProduct($slug)
    {
        $product = Product::where('slug', $slug)->orderBy('id', 'desc')->firstOrFail();

        $markets = Market::orderBy('id', 'desc')->get()->take(6);
        $products = Product::orderBy('id', 'desc')->get()->take(6);

        return view('index.singleproduct')
                    ->withProduct($product)
                    ->withMarkets($markets)
                    ->withProducts($products);
    }

    public function getMarkets()
    {
        $markets = Market::orderBy('id', 'desc')->get();
        return view('index.markets')
                    ->withMarkets($markets);
    }

    public function getMarket($slug)
    {
        $market = Market::where('slug', $slug)->orderBy('id', 'desc')->firstOrFail();
        
        $markets = Market::orderBy('id', 'desc')->get()->take(6);
        $products = Product::orderBy('id', 'desc')->get()->take(6);

        return view('index.singlemarket')
                    ->withMarket($market)
                    ->withMarkets($markets)
                    ->withProducts($products);
    }

    public function getRegionalOffices()
    {
        return view('index.regional-offices');
    }

    public function getRegionalOffice()
    {
        return view('index.single-regional-office');
    }

    public function getNews()
    {
        return view('index.news');
    }

    public function getSingleNews($slug)
    {
        return view('index.single-news');
    }

    public function getEvents()
    {
        return view('index.events');
    }

    public function getSuccessStories()
    {
        return view('index.success-stories');
    }

    public function getSingleSuccessStory($slug)
    {
        return view('index.single-success-story');
    }

    public function getAcademia()
    {
        return view('index.academia');
    }

    public function getInformationCenter()
    {
        return view('index.information-center');
    }

    public function getHelpCenter()
    {
        return view('index.help-center');
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
