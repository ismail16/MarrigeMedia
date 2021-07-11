<?php

namespace App\Http\Controllers\Author;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\UserProfileImage;

class UserProfileImageController extends Controller
{
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

        $this->validate($request, [
            'image' => 'required'
        ]);

        $user = Auth::user();
        $UserProfileImage = new UserProfileImage;

        $UserProfileImage->user_id  = $user->id;
        $UserProfileImage->profile_image  = 0;
        $image = $request->file('image');

        if (isset($image)){
            $slug = $user->first_name.'-'.$user->last_name.'-'.$user->id.'-'.rand(10,100);
            $imagename = $slug.'-'.uniqid().'.'.$image->getClientOriginalExtension();
            if (!file_exists('images/user_profile_image')){
                mkdir('images/user_profile_image',0777, true);
            }
            $image->move('images/user_profile_image',$imagename);
            $UserProfileImage->image  = $imagename;
        }
        $UserProfileImage->image_slug  = $slug;
        $UserProfileImage->status  = $request->status;
        $UserProfileImage->save();

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

        $user = Auth::user();
        $UserProfileImage = UserProfileImage::find($id);

        // $UserProfileImage->profile_image  = 0;

        $image = $request->file('image');

        if (isset($image)){
            $slug = $user->first_name.'-'.$user->last_name.'-'.$user->id.'-'.rand(10,100);
            if (file_exists('images/user_profile_image/'.$UserProfileImage->image)){
                unlink('images/user_profile_image/'.$UserProfileImage->image);
            }
            $imagename = $slug.'-'.uniqid().'.'.$image->getClientOriginalExtension();
            if (!file_exists('images/user_profile_image')){
                mkdir('images/user_profile_image',0777, true);
            }
            $image->move('images/user_profile_image',$imagename);
            $UserProfileImage->image = $imagename;
            $UserProfileImage->image_slug  = $slug;
        }

        $UserProfileImage->status  = $request->status;
        $UserProfileImage->save();

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
