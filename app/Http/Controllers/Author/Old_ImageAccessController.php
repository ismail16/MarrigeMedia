<?php

namespace App\Http\Controllers\Author;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UserProfileImage;
use App\Models\ImageAccess;
use Illuminate\Support\Facades\Auth;
use App\User;

class ImageAccessController extends Controller
{
    public function imageAccessRequest(Request $request){
    	$this->validate($request, [
            'image_request_from_id' => 'required',
            'image_request_to_id' => 'required',
        ]);

        $UserProfileImages = UserProfileImage::where('user_id', $request->image_request_to_id)->get();
        foreach ($UserProfileImages as $UserProfileImage) {
            if ($UserProfileImage->show_request_ids == null) {
                $arr=array($request->image_request_from_id);
            }else{
                $arr = json_decode($UserProfileImage->show_request_ids);
                foreach($arr as $a_arr) {
                    if ($a_arr == $request->image_request_from_id) {
                       return back()->with('message','Already Sent Request.');
                    }
                }
                array_push($arr, $request->image_request_from_id);                
            }
            $UserProfileImage->show_request_ids = json_encode($arr);
            $UserProfileImage->save();
        }        
        return back()->with('message','Request Sent Successfully.');
    }

    public function imageAccessApproved(Request $request){

        $UserProfileImages = UserProfileImage::where('user_id', $request->image_request_to_id)->get();
        
        foreach ($UserProfileImages as $UserProfileImage) {
            if ($UserProfileImage->show_approved_ids == null) {
                $arr=array($request->image_request_from_id);
            }else{
                $arr = json_decode($UserProfileImage->show_request_ids);
                foreach($arr as $a_arr) {
                    if ($a_arr == $request->image_request_from_id) {
                       return back()->with('message','Already Sent Request.');
                    }
                }
                array_push($arr, $request->image_request_from_id);                
            }
            $UserProfileImage->show_approved_ids = json_encode($arr);
            $UserProfileImage->save();
        }        
        return back()->with('message','Request Approved Successfully.');
    }

    public function index()
    {
        $user = Auth::user();
        $image_access_reqs = ImageAccess::where('img_req_to_user', Auth::user()->id)->get();
        return view('author.image_access.index', compact('image_access_reqs'));
    }

    public function create()
    {
        return view('author.preference.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'img_req_from_user' => 'required',
            'img_req_to_user' => 'required',
        ]);

        $user_froms = ImageAccess::where('img_req_from_user', $request->img_req_from_user)->get();

        foreach ($user_froms as $user_from) {
            if ($user_from->img_req_to_user == $request->img_req_to_user) {
               return back()->with('message','Already Image Request Sent');
            }
        }   
        $ImageAccess = new ImageAccess();
        $ImageAccess->img_req_from_user = $request->img_req_from_user;
        $ImageAccess->img_req_to_user = $request->img_req_to_user;
        $ImageAccess->save();
        return back()->with('message','Image Request Sent Successfully.');
    }

    public function show($id)
    {
        
    }

    public function edit($id)
    {

    }

    public function update(Request $request, $id)
    {
   

    }

    public function destroy($id)
    {
        //
    }
}
