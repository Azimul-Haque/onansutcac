<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

use App\User;
use App\Message;
use App\Product;
use App\Market;
use App\About;
use App\Team;
use App\News;
use App\Successstory;
use App\Client;
use App\Testimonial;
use App\Newscategory;
use App\Event;
use App\Faq;
use App\Contact;
use App\Globalpresence;

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
            return Product::orderBy('serial', 'asc')->get()->take(6);
        }));

        View::share('marketsforfooter', Cache::remember('markets_for_footer', 60 * 24 * 30, function () {
            return Market::orderBy('serial', 'asc')->get()->take(6);
        }));
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $featuredprodandtechs = Product::where('isfeatured', 1)->orderBy('serial', 'asc')->get()->take(3);
        $featuredevents = Event::orderBy('id', 'desc')->get()->take(4);
        $newsforhomepage = News::orderBy('id', 'desc')->get()->take(3);
        $clientsforhomepage = Client::orderBy('id', 'desc')->get();
        $testimonials = Testimonial::orderBy('id', 'desc')->get()->take(6);
        $metadata = About::get();

        return view('index.index')
                    ->withNewsforhomepage($newsforhomepage)
                    ->withFeaturedprodandtechs($featuredprodandtechs)
                    ->withFeaturedevents($featuredevents)
                    ->withClientsforhomepage($clientsforhomepage)
                    ->withTestimonials($testimonials)
                    ->withMetadata($metadata);
    }

    public function getContact()
    {
        $contactdata = About::where('id', "!=", 1)->get();

        return view('index.contact')
                    ->withContactdata($contactdata);
    }

    public function generateCaptcha()
    {
        // Define image dimensions
        $width = 120;
        $height = 35;

        // Create a new image
        $image = imagecreatetruecolor($width, $height);

        // Define colors
        $white = imagecolorallocate($image, 223, 227, 209);
        $black = imagecolorallocate($image, 0, 0, 0);

        // Fill the background with white
        imagefilledrectangle($image, 0, 0, $width, $height, $white);

        // Generate a random string for the CAPTCHA
        $captchaText = substr(str_shuffle('ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789'), 0, 6);

        // Store the captcha in the session
        Session::put('captcha', $captchaText);

        // Draw the text on the image
        imagestring($image, 5, 30, 10, $captchaText, $black);

        // Capture the image output as a string
        ob_start();
        imagepng($image);
        $imageData = ob_get_clean();
        imagedestroy($image);

        // Return the image data with the correct content type header
        return Response::make($imageData, 200, ['Content-Type' => 'image/png']);
    }

    public function storeContact(Request $request)
        {
            // First, validate other form fields
            $request->validate([
                'name'    => 'required|string|max:255',
                'email'   => 'required|email|max:255',
                'subject' => 'required|string|max:255',
                'message' => 'required|string',
                'captcha' => 'required|string', // The user's captcha input
            ]);

            // Retrieve the CAPTCHA text from the session
            $sessionCaptcha = Session::get('captcha');

            // Check if the user's input matches the session value.
            // We use strtolower() to make the comparison case-insensitive.
            if (strtolower($request->input('captcha')) != strtolower($sessionCaptcha)) {
                // If the CAPTCHA is incorrect, redirect back with an error.
                return redirect()->back()->withErrors(['captcha' => 'The entered CAPTCHA is incorrect.']);
            }

            try {
                $message = new Contact();
                $message->name = $request->input('name');
                $message->email = $request->input('email');
                $message->subject = $request->input('subject');
                $message->message = $request->input('message');
                $message->save();
            } catch (\Exception $e) {
                // Handle any database saving errors
                return redirect()->back()->with('error', 'There was an issue sending your message. Please try again.');
            }
            return redirect()->back()->with('success', 'Your message has been sent successfully!');
        }

    public function getAboutUs()
    {
        $aboutpagetop = About::where('id', 1)->first();
        $ourhistory = About::where('id', 8)->first();
        $missionvission = About::where('id', 12)->first();
        $teams = Team::orderBy('serial', 'asc')->get();

        return view('index.aboutus')
                    ->withTeams($teams)
                    ->withAboutpagetop($aboutpagetop)
                    ->withOurhistory($ourhistory)
                    ->withMissionvission($missionvission);
    }

    public function getWhyWWU()
    {
        $wwwutop = About::where('id', 5)->first();
        $globalpresences = Globalpresence::orderBy('id', 'desc')->get();
                    
        return view('index.why-work-with-us')
                            ->withWwwutop($wwwutop)
                            ->withGlobalpresences($globalpresences);
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
        $products = Product::orderBy('serial', 'asc')->get();

        return view('index.products')
                    ->withProducts($products);
    }

    public function getProduct($slug)
    {
        $product = Product::where('slug', $slug)->orderBy('id', 'desc')->firstOrFail();

        $markets = Market::orderBy('serial', 'asc')->get()->take(6);
        $products = Product::orderBy('serial', 'asc')->get()->take(6);
        $recentsuccessstories = Successstory::orderBy('id', 'desc')->get()->take(5);

        return view('index.singleproduct')
                    ->withProduct($product)
                    ->withMarkets($markets)
                    ->withProducts($products)
                    ->withRecentsuccessstories($recentsuccessstories);
    }

    public function getMarkets()
    {
        $markets = Market::orderBy('serial', 'asc')->get();
        $products = Product::orderBy('serial', 'asc')->get()->take(6);
        $recentsuccessstories = Successstory::orderBy('id', 'desc')->get()->take(5);
        return view('index.markets')
                    ->withMarkets($markets)
                    ->withProducts($products)
                    ->withRecentsuccessstories($recentsuccessstories);
    }

    public function getMarket($slug)
    {
        $market = Market::where('slug', $slug)->orderBy('id', 'desc')->firstOrFail();
        
        $markets = Market::orderBy('id', 'desc')->get()->take(6);
        $products = Product::orderBy('id', 'desc')->get()->take(6);
        $recentsuccessstories = Successstory::orderBy('id', 'desc')->get()->take(5);

        return view('index.singlemarket')
                    ->withMarket($market)
                    ->withMarkets($markets)
                    ->withProducts($products)
                    ->withRecentsuccessstories($recentsuccessstories);
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
        $allNews = News::orderBy('id', 'desc')->paginate(6);
        $recentsuccessstories = Successstory::orderBy('id', 'desc')->get()->take(5);

        return view('index.news')
                    ->withAllNews($allNews)
                    ->withRecentsuccessstories($recentsuccessstories);
    }

    public function getCategoryWiseNews($name)
    {
        $unslugged_item = unslug($name);
        $newscategory = Newscategory::where('name', 'LIKE', "%$unslugged_item%")->firstOrFail();
        $recentsuccessstories = Successstory::orderBy('id', 'desc')->get()->take(5);

        $allNews = News::where('newscategory_id', $newscategory->id)
                       ->orderBy('id', 'desc')
                       ->paginate(6);

        return view('index.news')
                    ->withNewscategory($newscategory)
                    ->withAllNews($allNews)
                    ->withRecentsuccessstories($recentsuccessstories);
    }

    public function getSingleNews($slug)
    {
        $news = News::where('slug', $slug)->first();
        $recentnews = News::orderBy('id', 'desc')->get()->take(5);
        $recentsuccessstories = Successstory::orderBy('id', 'desc')->get()->take(5);
        $newscategories = Newscategory::orderBy('name', 'asc')->get();

        return view('index.single-news')
                    ->withNews($news)
                    ->withRecentnews($recentnews)
                    ->withRecentsuccessstories($recentsuccessstories)
                    ->withNewscategories($newscategories);
    }

    public function getEvents()
    {
        $allEvents = Event::orderBy('id', 'desc')->get();
        $recentnews = News::orderBy('id', 'desc')->get()->take(5);

        return view('index.events')
                        ->withAllEvents($allEvents)
                        ->withRecentnews($recentnews);
    }

    public function getSuccessStories()
    {
        $successstories = Successstory::orderBy('id', 'desc')->paginate(6);

        return view('index.success-stories')
                        ->withSuccessstories($successstories);
    }

    public function getSingleSuccessStory($slug)
    {
        $successstory = Successstory::where('slug', $slug)->first();
        $recentnews = News::orderBy('id', 'desc')->get()->take(5);
        $recentsuccessstories = Successstory::orderBy('id', 'desc')->get()->take(5);
        $newscategories = Newscategory::orderBy('name', 'asc')->get();

        return view('index.single-success-story')
                        ->withSuccessstory($successstory)
                        ->withRecentnews($recentnews)
                        ->withRecentsuccessstories($recentsuccessstories)
                        ->withNewscategories($newscategories);
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
        $faqs = Faq::orderBy('id', 'desc')->get();
        $contactdata = About::where('id', "!=", 1)->get();
        
        return view('index.help-center')
                                ->withFaqs($faqs)
                                ->withContactdata($contactdata);
    }

    public function getSDGAlignment()
    {
        $sdgdata = About::where('id', 6)->first();
                    
        return view('index.sdgpage')->withSdgdata($sdgdata);
    }

    public function getSocialimpact()
    {
        $sdgdata = About::where('id', 7)->first();
                    
        return view('index.sdgpage')->withSdgdata($sdgdata);
    }













    public function getSitemap()
    {
        // Define an array to hold the sitemap URLs.
        $sitemapLinks = [];

        // Here we'll generate the sitemap dynamically. You can add any URLs you want.
        // For demonstration, we'll add some static pages and a dynamic one.
        $sitemap = SitemapGenerator::create(URL::to('/'))
            ->getSitemap();

        // Add some custom URLs to the sitemap.
        // You can use a loop to add all your routes or models.
        $sitemap->add(URL::to('/about'));
        $sitemap->add(URL::to('/contact'));

        // You could also add URLs from your database, for example:
        // $posts = Post::all();
        // foreach ($posts as $post) {
        //     $sitemap->add(URL::to('/posts/' . $post->slug));
        // }

        // Get all the URLs from the generated sitemap.
        // The sitemap object doesn't have a simple method to get all URLs,
        // so we'll simulate it for the view. In a real-world scenario, you might
        // generate a file and then read it, but for a user-facing view, this works.
        // Here's a simplified way to get a list of URLs.
        $sitemapLinks = [
            'Home' => url('/'),
            'About Us' => url('/about'),
            'Contact Us' => url('/contact'),
            // Add more links as needed
        ];


        return view('index.sitemap');
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
        Artisan::call('sitemap:generate');
        Session::flush();
        return 'Config and Route Cached. All Cache Cleared.';
    }
}
