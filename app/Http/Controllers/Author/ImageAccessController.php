<?php

namespace App\Http\Controllers\Author;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UserProfileImage;
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
        $image_access = ImageAccess::where('user_id_req_to', Auth::user()->id)->first();
        return view('author.image_access.index', compact('image_access'));
    }

    // public function index()
    // {
    //     $user = Auth::user();
    //     $image_access = UserProfileImage::where('user_id', Auth::user()->id)->first()->show_request_ids;
    //     $user_req_for_images = json_decode($image_access);

    //     $image_access_app = UserProfileImage::where('user_id', Auth::user()->id)->first()->show_approved_ids;
    //     $user_req_app_for_images = json_decode($image_access_app);

    //     return view('author.image_access.index', compact('user_req_for_images','user_req_app_for_images'));
    // }

    public function create()
    {
        return view('author.preference.create');
    }

    public function store(Request $request)
    {

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
