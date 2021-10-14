<?php
namespace App\Http\Traits;
use App\User;
use App\Models\UserProfileImage;


trait UserProfileImageTrait{

	public function SaveUserImage($request){
		$this->validate($request, [
            'image' => 'required'
        ]);

        $user = User::find($request->user_id);
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
	}

	public function UpdateUserImage($request, $id){

		$user = User::find($request->user_id);
        $UserProfileImage = UserProfileImage::find($id);
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
	}
	
}