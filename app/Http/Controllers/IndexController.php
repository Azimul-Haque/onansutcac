<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Package;
use App\Product;

use App\Balance;
use App\Site;
use App\Category;
use App\Expense;
use App\Creditor;
use App\Due;
use App\Temppayment;
use App\Payment;

use App\Exam;

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
use PDF;
use Shipu\Aamarpay\Facades\Aamarpay;


class IndexController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
        
    // }

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
        $product = Product::where('slug', $slug)->first();

        return view('index.singleproduct')
                    ->withProduct($product);
    }

    public function getMarkets()
    {
        return view('index.markets');
    }

    public function getMarket($id)
    {
        return view('index.singlemarket');
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
    

    public function paymentProceed(Request $request)
    {
        $this->validate($request,array(
            'user_number'    =>   'required',
            'package_id'     =>   'required',
            'amount'         =>   'required',
        ));

        $user = User::where('mobile', $request->user_number)->first();
        $package = Package::findOrFail($request->package_id);

        if($user) {
            // $temppayment = new Temppayment;
            // $temppayment->user_id = $user->id;
            // $temppayment->package_id = $request->package_id;
            // $temppayment->uid = $user->uid;
            // // generate Trx_id
            // $trx_id = 'BJS' . random_string(10);
            // $temppayment->trx_id = $trx_id;
            // $temppayment->amount = $request->amount;
            // $temppayment->save();

            Session::flash('info','পেমেন্টটি সম্পন্ন করুন!');
            return view('index.payments.bkashpay')
                            ->withUser($user)
                            ->withAmount($request->amount)
                            ->withPackageid($package->id)
                            ->withPackagedesc($package->name . ' - ' . $package->duration . ' - ৳ ' . $package->price);
        } else {
            // Session::flash('warning','নাম্বারটি পাওয়া যায়নি! অ্যাপে গিয়ে রেজিস্ট্রেশন করুন।');
            Session::flash('swalwarning','নাম্বারটি পাওয়া যায়নি! অ্যাপে গিয়ে রেজিস্ট্রেশন করুন।');
            // Session::flash('swalwarningappling','https://play.google.com/store/apps/details?id=com.orbachinujbuk.bcs_constitution&pcampaignid=pcampaignidMKT-Other-global-all-co-prtnr-py-PartBadge-Mar2515-1');
            return redirect()->route('index.index');
        }
    }

    public function paymentSuccess(Request $request)
    {
        
        $user_id = $request->get('opt_a');
        
        if($request->get('pay_status') == 'Failed') {
            Session::flash('info', 'পেমেন্ট সম্পন্ন হয়নি, আবার চেষ্টা করুন!');
            return redirect()->route('index.index');
        }
        
        $amount_request = $request->get('opt_b');
        $amount_paid = $request->get('amount');

        if($request->pay_status == "Successful" && $amount_paid == $amount_request) {
            // OLD VERIFICATION METHOD
            
            $temppayment = Temppayment::where('trx_id', $request->mer_txnid)->first();
            // dd($request->all());
            $payment = new Payment;
            $payment->user_id = $user_id;
            $payment->package_id = $temppayment->package_id;
            $payment->uid = $temppayment->uid;
            $payment->payment_status = 1;
            $payment->card_type = $request->card_type;
            $payment->trx_id = $request->mer_txnid;
            $payment->amount = $request->amount;
            $payment->store_amount = $request->store_amount;
            $payment->save();

            $user = User::findOrFail($user_id);
            $current_package_date = Carbon::parse($user->package_expiry_date);
            $package = Package::findOrFail($temppayment->package_id);
            if($current_package_date->greaterThanOrEqualTo(Carbon::now())) {
                $package_expiry_date = $current_package_date->addDays($package->numeric_duration)->format('Y-m-d') . ' 23:59:59';
            } else {
                $package_expiry_date = Carbon::now()->addDays($package->numeric_duration)->format('Y-m-d') . ' 23:59:59';
            }
            // dd($package_expiry_date);
            $user->package_expiry_date = $package_expiry_date;
            $user->save();
            // ARO KAAJ THAKTE PARE, JODI FIREBASE EO UPDATE KORA LAAGE
            // ARO KAAJ THAKTE PARE, JODI FIREBASE EO UPDATE KORA LAAGE
            // dd($payment);

            $temppayment->delete();

            Session::flash('swalsuccess', 'পেমেন্ট সফল হয়েছে। অ্যাপটি ব্যবহার করুন। ধন্যবাদ!');
            return redirect()->route('index.index');
        } else {
            // dd($request->all());
            // $paymentdata = json_encode($request->all());
            // Session::flash('swalsuccess', $paymentdata);
            Session::flash('info', 'পেমেন্ট সম্পন্ন হয়নি, অনুগ্রহ করে Contact ফর্ম এর মাধ্যমে আমাদের জানান।');
            return redirect()->route('index.index');
        }

        // $valid  = Aamarpay::valid($request, $amount_request);
        // if($valid)
        // {
        //     // dd($request->all());
        // } 
    }

    public function paymentCancel(Request $request)
    {
        Session::flash('info','পেমেন্টটি ক্যানসেল করা হয়েছে!');
        return redirect()->route('index.index');
    }

    public function paymentFailed(Request $request)
    {
        Session::flash('info','পেমেন্টটি ব্যর্থ হয়েছে! অনুগ্রহ করে যোগাযোগ করুন।');
        return redirect()->route('index.index');
    }



    public function paymentSuccessApp(Request $request)
    {
        if($request->get('pay_status') == 'Failed') {
            Session::flash('info', 'পেমেন্ট সম্পন্ন হয়নি, আবার চেষ্টা করুন!');
            return redirect()->route('index.index');
        }
        
        $amount_request = $request->get('opt_b');
        $amount_paid = $request->get('amount');

        if($request->pay_status == "Successful" && $amount_paid == $amount_request) {
            // OLD VERIFICATION METHOD
            
            $temppayment = Temppayment::where('trx_id', $request->mer_txnid)->first();
            // dd($request->all());
            $payment = new Payment;
            $payment->user_id = $temppayment->user_id;
            $payment->package_id = $temppayment->package_id;
            $payment->uid = $temppayment->uid;
            $payment->payment_status = 1;
            $payment->card_type = $request->card_type;
            $payment->trx_id = $request->mer_txnid;
            $payment->amount = $request->amount;
            $payment->store_amount = $request->store_amount;
            $payment->save();

            $user = User::findOrFail($temppayment->user_id);
            $current_package_date = Carbon::parse($user->package_expiry_date);
            $package = Package::findOrFail($temppayment->package_id);
            if($current_package_date->greaterThanOrEqualTo(Carbon::now())) {
                $package_expiry_date = $current_package_date->addDays($package->numeric_duration)->format('Y-m-d') . ' 23:59:59';
            } else {
                $package_expiry_date = Carbon::now()->addDays($package->numeric_duration)->format('Y-m-d') . ' 23:59:59';
            }
            // dd($package_expiry_date);
            $user->package_expiry_date = $package_expiry_date;
            $user->save();
            // ARO KAAJ THAKTE PARE, JODI FIREBASE EO UPDATE KORA LAAGE
            // ARO KAAJ THAKTE PARE, JODI FIREBASE EO UPDATE KORA LAAGE
            // dd($payment);

            $temppayment->delete();

            Session::flash('swalsuccess', 'পেমেন্ট সফল হয়েছে। অ্যাপটি ব্যবহার করুন। ধন্যবাদ!');
            // return redirect()->route('index.index');
        } else {
            // dd($request->all());
            // $paymentdata = json_encode($request->all());
            // Session::flash('swalsuccess', $paymentdata);
            Session::flash('info', 'পেমেন্ট সম্পন্ন হয়নি, অনুগ্রহ করে Contact ফর্ম এর মাধ্যমে আমাদের জানান।');
            // return redirect()->route('index.index');
        }

        // $valid  = Aamarpay::valid($request, $amount_request);
        // if($valid)
        // {
        //     // dd($request->all());
        // } 
    }

    public function paymentCancelApp(Request $request)
    {
        Session::flash('info','পেমেন্টটি ক্যানসেল করা হয়েছে!');
    }


    // Generate PDF...

    public function getExamSolvePDF($softtoken, $examid)
    {
        if($softtoken == env('SOFT_TOKEN'))
        {
            $exam = Exam::findOrFail($examid);

            // return view('index.pdf.test')->withExam($exam);

            $pdf = PDF::loadView('index.pdf.examsolvepdf', ['exam' => $exam]);
            $fileName = 'Single-Exam-Solve-Sheet-' . $exam->id . '.pdf';
            return $pdf->stream($fileName); // download/stream
        } else {
            return response()->json([
                'success' => false
            ]);
        }
    }

    public function checkIP()
    {
        $response = file_get_contents('http://66.45.237.70/api.php');

        dd($response);
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
