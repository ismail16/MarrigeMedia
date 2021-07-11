<?php

namespace App\Http\Controllers\Author;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UserProfileImage;
use App\User;

class ImageAccessController extends Controller
{
    public function imageAccessRequest(Request $request){
    	$this->validate($request, [
            'user_id' => 'required',
        ]);

        $UserProfileImage = UserProfileImage::where('user_id', $request->user_id);

        $UserProfileImage->show_request_ids = $request->user_id;

        $UserProfileImage->save();
         return back()->with('message','Request Sent Successfully.');
    }
}
