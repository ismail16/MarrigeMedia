<?php

namespace App\Http\Controllers\Admin\member;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\UserProfileImage;
use App\User;
use App\Http\Traits\UserProfileImageTrait;

class UserProfileImageController extends Controller
{
    use UserProfileImageTrait;
    public function index($id)
    {
        $user = User::find($id);
        $UserProfileImages = UserProfileImage::where('user_id', $id)->get();
        return view('admin.member.user_image.index', compact('user','UserProfileImages'));
    }

    public function create($id)
    {
        $user = User::find($id);
        return view('admin.member.user_image.create', compact('user'));
    }

    public function store(Request $request)
    {
        $this->SaveUserImage($request);
        return redirect()->route('admin.user-info.show', $request->user_id);
    }


    public function show($id)
    {

        
    }

    public function edit($user_id, $image_id)
    {

        // return $image_id;
       $UserProfileImage = UserProfileImage::find($image_id);
       return view('admin.member.user_image.edit', compact('UserProfileImage'));
    }

    public function update(Request $request, $id)
    {
        $this->UpdateUserImage($request, $request->image_id);
        return redirect()->route('admin.user-info.images.index', $request->image_id);
    }

    public function destroy(Request $request, $id)
    {
        $UserProfileImage = UserProfileImage::find($request->image_id);
        if (file_exists('images/user_profile_image/'.$UserProfileImage->image)){
            unlink('images/user_profile_image/'.$UserProfileImage->image);
        }
        $UserProfileImage->delete();
        return redirect()->route('admin.user-info.images.index', $id);
    }
}
