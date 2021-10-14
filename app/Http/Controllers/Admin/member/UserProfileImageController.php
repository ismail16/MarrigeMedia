<?php

namespace App\Http\Controllers\Admin\member;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\UserProfileImage;
use App\User;

class UserProfileImageController extends Controller
{
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

        return 

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

        return redirect()->route('admin.user-info.images.index', $user->id );
    }


    public function show($id)
    {

        
    }

    public function edit($id)
    {
       $UserProfileImage = UserProfileImage::find($id);
       return view('admin.member.user_image.edit', compact('UserProfileImage'));
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
