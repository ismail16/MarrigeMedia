<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Models\PersonalInfo;
use App\Models\UserProfileImage;
use App\Models\Preference;

class UserInfoController extends Controller
{

    public function index()
    {
        $users = User::orderBy('id', 'desc')->where('role_id', '!=', '1')->get();
        return view('admin.user_info.index', compact('users'));
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

        $user = User::find($id);
        $PersonalInfo = PersonalInfo::where('user_id', $id)->first();
        $Preference = Preference::where('user_id', $id)->first();
        $UserProfileImages = UserProfileImage::where('user_id', $id)->get();

        if ($user->status == 1 && $PersonalInfo) {
            return view('admin.user_info.show', compact('user', 'PersonalInfo','UserProfileImages', 'Preference'));
        }else{
            return view('admin.user_info.inactive_show', compact('user', 'PersonalInfo','UserProfileImages', 'Preference'));
        }
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {

        $user = User::find($id);
        if ($request->user_status) {
            $user->status = $request->user_status;
        }else{
            $user->status = 0;
        }

        $PersonalInfo = PersonalInfo::where('user_id', $id)->first();
        if ($request->user_status && $request->activation) {
            $PersonalInfo->status = 1;
            $user->activation = 1;
            $PersonalInfo->save();
        }else if($PersonalInfo){
            $PersonalInfo->status = 0;
            $PersonalInfo->save();
        }else{
            $user->activation = 0;
        }
        $user->save();
        return redirect()->route('admin.user-info.index');
    }

    public function destroy($id)
    {
        $user = User::find($id);
        $PersonalInfo = PersonalInfo::where('user_id', $user->id)->first();
        if ($PersonalInfo) {
             $PersonalInfo->delete();
        }
        $UserProfileImages = UserProfileImage::where('user_id', $user->id)->get();
        foreach($UserProfileImages as $image){
            if (file_exists('images/user_profile_image/'.$image->image)){
                unlink('images/user_profile_image/'.$image->image);
            }
            $image->delete();
        }


        // $receive_proposal = Proposal::where('receive_proposal_user', Auth::user()->id)->get();
        // $sent_messages =  PrivateMessages::where('from_id', $user->id)->orderBy('id', 'desc')->get();
        $preference =  Preference::where('user_id', $user->id)->first();
        if ($preference) {
             $preference->delete();
        }
        $user->delete();
        return back()->with('message','User Delete Successfully.');

    }
}
