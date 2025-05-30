<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\District;
use App\Upazilla;
use App\Ambulance;
use App\Ambulanceimage;

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

class AmbulanceController extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->middleware(['admin'])->only('indexSearch');
    }

    public function index()
    {
        if(Auth::user()->role == 'editor') {
            $ambulancescount = Ambulance::where('district_id', Auth::user()->district_id)->count();
            $ambulances = Ambulance::where('district_id', Auth::user()->district_id)->orderBy('id', 'desc')->paginate(10);
        } elseif(Auth::user()->role == 'admin') {
            $ambulancescount = Ambulance::count();
            $ambulances = Ambulance::orderBy('id', 'desc')->paginate(10);
        } else {
            abort(403, 'Access Denied');
        }
        

        $districts = District::all();
                
        return view('dashboard.ambulances.index')
                            ->withAmbulancescount($ambulancescount)
                            ->withAmbulances($ambulances)
                            ->withDistricts($districts);
    }

    public function indexSearch($search)
    {
        if(Auth::user()->role == 'editor' || Auth::user()->role == 'manager') {
            abort(403, 'Access Denied');
        }
        $ambulancescount = Ambulance::where('name', 'LIKE', "%$search%")
                                  ->orWhere('mobile', 'LIKE', "%$search%")
                                  ->orWhereHas('district', function ($query) use ($search){
                                      $query->where('name', 'like', '%'.$search.'%');
                                      $query->orWhere('name_bangla', 'like', '%'.$search.'%');
                                  })->orWhereHas('upazilla', function ($query) use ($search){
                                      $query->where('name', 'like', '%'.$search.'%');
                                      $query->orWhere('name_bangla', 'like', '%'.$search.'%');
                                  })
                                  ->count();
        $ambulances = Ambulance::where('name', 'LIKE', "%$search%")
                                  ->orWhere('mobile', 'LIKE', "%$search%")
                                  ->orWhereHas('district', function ($query) use ($search){
                                      $query->where('name', 'like', '%'.$search.'%');
                                      $query->orWhere('name_bangla', 'like', '%'.$search.'%');
                                  })->orWhereHas('upazilla', function ($query) use ($search){
                                      $query->where('name', 'like', '%'.$search.'%');
                                      $query->orWhere('name_bangla', 'like', '%'.$search.'%');
                                  })
                                  ->orderBy('id', 'desc')
                                  ->paginate(10);

        $districts = District::all();
        
        return view('dashboard.ambulances.index')
                            ->withAmbulancescount($ambulancescount)
                            ->withAmbulances($ambulances)
                            ->withDistricts($districts);
    }

    public function storeAmbulance(Request $request)
    {
        $this->validate($request,array(
            'district_id'            => 'required',
            'upazilla_id'            => 'required',
            'name'                => 'required|string|max:191',
            'mobile'              => 'required|string|max:191',
            'image'              => 'sometimes',
            'description'        => 'sometimes|max:500',
        ));

        $ambulance = new Ambulance;
        $ambulance->district_id = $request->district_id;
        $ambulance->upazilla_id = $request->upazilla_id;
        $ambulance->name = $request->name;
        $ambulance->mobile = $request->mobile;
        if($request->description) {
            $ambulance->description = $request->description;
        }
        $ambulance->save();

        // image upload
        if($request->hasFile('image')) {
            $image    = $request->file('image');
            $filename = random_string(5) . time() .'.' . "webp";
            $location = public_path('images/ambulances/'. $filename);
            Image::make($image)->fit(200, 200)->save($location);
            $ambulanceimage              = new Ambulanceimage;
            $ambulanceimage->ambulance_id   = $ambulance->id;
            $ambulanceimage->image       = $filename;
            $ambulanceimage->save();
        }
        
        Cache::forget('ambulances' . $request->district_id);
        Cache::forget('ambulances' . $request->district_id. $request->upazilla_id);
        Session::flash('success', 'Ambulance added successfully!');
        return redirect()->route('dashboard.ambulances');
    }

    public function updateAmbulance(Request $request, $id)
    {
        $this->validate($request,array(
            'district_id'            => 'required',
            'upazilla_id'            => 'required',
            'name'                => 'required|string|max:191',
            'mobile'              => 'required|string|max:191',
            'image'              => 'sometimes',
            'description'              => 'sometimes|max:500',
        ));

        $ambulance = Ambulance::find($id);
        $ambulance->district_id = $request->district_id;
        $ambulance->upazilla_id = $request->upazilla_id;
        $ambulance->name = $request->name;
        $ambulance->mobile = $request->mobile;
        if($request->description) {
            $ambulance->description = $request->description;
        }
        $ambulance->save();

        // image upload
        if($request->hasFile('image')) {
            if($ambulance->ambulanceimage != null) {
                $image_path = public_path('images/ambulances/'. $ambulance->ambulanceimage->image);
                // dd($image_path);
                if(File::exists($image_path)) {
                    File::delete($image_path);
                }
                $ambulanceimage              = Ambulanceimage::where('ambulance_id', $ambulance->id)->first();
            } else {
                $ambulanceimage              = new Ambulanceimage;
            }
            $image    = $request->file('image');
            $filename = random_string(5) . time() .'.' . "webp";
            $location = public_path('images/ambulances/'. $filename);
            Image::make($image)->fit(200, 200)->save($location);
            $ambulanceimage->ambulance_id = $ambulance->id;
            $ambulanceimage->image       = $filename;
            $ambulanceimage->save();
        }

        
        Cache::forget('ambulances'. $request->district_id);
        Cache::forget('ambulances'. $request->district_id. $request->upazilla_id);
        Session::flash('success', 'Ambulance updated successfully!');
        return redirect()->route('dashboard.ambulances');
    }

    public function deleteAmbulance($id)
    {
        $ambulance = Ambulance::find($id);
        if($ambulance->ambulanceimage) {
            $image_path = public_path('images/ambulances/'. $ambulance->ambulanceimage->image);
            if(File::exists($image_path)) {
                File::delete($image_path);
            }
            $ambulance->ambulanceimage->delete();
        }
        $ambulance->delete();

        Cache::forget('ambulances'. Auth::user()->district_id);
        Session::flash('success', 'Ambulances deleted successfully!');
        return redirect()->back();
    }
}
