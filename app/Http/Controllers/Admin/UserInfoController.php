<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Models\PersonalInfo;
use App\Models\UserProfileImage;

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
        if ($PersonalInfo) {
            $UserProfileImages = UserProfileImage::where('user_id', $id)->get();
            return view('admin.user_info.show', compact('user', 'PersonalInfo', 'UserProfileImages'));
        }else{
            return view('admin.user_info.inactive_show', compact('user', 'PersonalInfo', 'UserProfileImages'));
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
        if ($request->user_status) {
            $PersonalInfo->status = $request->PersonalInfo_status;
            $user->activation = 1;
        }else{
            $PersonalInfo->status = 0;
        }
        
        $user->save();
        $PersonalInfo->save();

        return redirect()->route('admin.user-info.index');

    }

    public function destroy($id)
    {
        //
    }
}
