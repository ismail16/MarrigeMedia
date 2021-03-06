<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Models\UserProfileImage;
use App\Models\SuccessStory;
use App\Models\PackagePrice;
use App\Models\Contact;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use App\Models\Preference;


class PagesController extends Controller
{

    public function index()
    {
        $users = User::where('role_id', 2)->get();
        $grooms = User::where('role_id', 2)->where('looking_for', 'Bride')->where('activation', 1)->where('status', 1)->get();
        $brides = User::where('role_id', 2)->where('looking_for', 'Groom')->where('activation', 1)->where('status', 1)->get();
        $success_stories = SuccessStory::where('status', 1)->get();
        $package_prices = PackagePrice::where('status', 1)->get();
        
        return view('frontend.pages.index',compact('users', 'grooms', 'brides','success_stories','package_prices'));
    } 

    public function grooms()
    {
        $grooms = User::where('role_id', 2)->where('looking_for', 'Bride')->where('activation', 1)->where('status', 1)->paginate(5);
        return view('frontend.pages.grooms',compact('grooms'));
    } 

    public function brides()
    {
        $brides = User::where('role_id', 2)->where('looking_for', 'Groom')->where('activation', 1)->where('status', 1)->paginate(5);
        return view('frontend.pages.brides',compact('brides'));
    } 

    public function single_groom_bride($id)
    {
        $user = User::find($id);
        $preference = Preference::where('user_id', $user->id)->first();

        // $auth_user = Auth::user();

        // $package_price = PackagePrice::where('id', $auth_user->package_price_id)->first();

        // return $package_price;

        return view('frontend.pages.single_groom_bride', compact('user','preference'));
    }

    public function single_groom_bride_gallary($id)
    {
        $user = User::find($id);
        $images = UserProfileImage::where('user_id', $id)->get();
        return view('frontend.pages.single_groom_bride_gallary', compact('user','images'));
    }

    public function search_groom_bride(Request $request)
    {
        // return $request;
        $looking_for = $request->looking_for;
        $birthday = $request->birthday;
        $marital_status = $request->marital_status;
        $religion = $request->religion;
        $profession = $request->profession;

        // explode the range and set as follows
        $minAge = $request->minAge;
        $maxAge = $request->maxAge;

        // prepare dates for comparison
        $minDate = Carbon::today()->subYears($maxAge); // make sure to use Carbon\Carbon in the class
        $maxDate = Carbon::today()->subYears($minAge)->endOfDay();
        $search_results = User::orderByDesc('id')
                ->Where('looking_for', 'LIKE', '%' . $looking_for . '%')
                ->Where('religion', 'LIKE', '%' . $religion . '%')
                ->Where(function ($query) use ($profession) {
                    $query->where('profession', 'LIKE', '%' . $profession . '%')
                            ->orWhere('profession', 'LIKE', '%' . $profession . '%');
                    })
                ->Where([
                    ['status',1]
                ])
                ->where('activation', 1)
                ->where('marital_status', $marital_status)
                ->Where([
                    ['role_id',2]
                ])
                ->whereBetween('birthday', [$minDate, $maxDate])
                ->paginate(5);
        $search_results->appends ( array (
                'profession' => $profession
        ));

        // return $search_results;

        // $users = User::where('role_id', 2)->get();

        return view('frontend.pages.search_result_groom_bride',compact('search_results'));
    }

    public function login()
    {
        return view('frontend.pages.login');
    }

    public function about_us()
    {
        return view('frontend.pages.about_us');
    }

    public function terms_conditions()
    {
        return view('frontend.pages.terms_conditions');
    }

    public function privacy_policy()
    {
        return view('frontend.pages.privacy_policy');
    }

    public function contact_us()
    {
        return view('frontend.pages.contact_us');
    } 

    

    public function contact_us_post(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'message' => 'required',
        ]);

        $Contact = new Contact;
        $Contact->name = $request->name;
        $Contact->email = $request->email;
        $Contact->subject = $request->subject;
        $Contact->message = $request->message;

        $Contact->save();
        return redirect()->route('contact_us')->with('message','Sent Your Message Successfully.');
    }
  
    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

  
    public function edit($id)
    {
        //
    }

   
    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
