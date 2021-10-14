<?php

namespace App\Http\Controllers\Author;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\UserProfileImage;
use App\Http\Traits\UserProfileImageTrait;

class UserProfileImageController extends Controller
{
    use UserProfileImageTrait;

    public function index()
    {
        $UserProfileImages = UserProfileImage::where('user_id', Auth::user()->id )->get();
        return view('author.user_image.index', compact('UserProfileImages'));
    }

    public function create()
    {
        return view('author.user_image.create');
    }

    public function store(Request $request)
    {

        $this->SaveUserImage($request);

        return redirect()->route('member.images.index');
    }

    public function show($id)
    {
        
    }

    public function edit($id)
    {
       $UserProfileImage = UserProfileImage::find($id);
       return view('author.user_image.edit', compact('UserProfileImage'));
    }

    public function update(Request $request, $id)
    {    
        $this->UpdateUserImage($request, $id);
        return redirect()->route('member.images.index');
    }

    public function destroy($id)
    {
        $UserProfileImage = UserProfileImage::find($id);
        if (file_exists('images/user_profile_image/'.$UserProfileImage->image)){
            unlink('images/user_profile_image/'.$UserProfileImage->image);
        }
        $UserProfileImage->delete();
        return back();
    }
}
