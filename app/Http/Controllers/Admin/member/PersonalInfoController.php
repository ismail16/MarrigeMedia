<?php

namespace App\Http\Controllers\Admin\member;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Models\PersonalInfo;
use App\Http\Traits\UserPersonalInfoTrait;

class PersonalInfoController extends Controller
{
    use UserPersonalInfoTrait;
    public function index($id)
    {
        $user = User::find($id);
        $PersonalInfo =  PersonalInfo::where('user_id', $user->id)->first();
        return view('admin.member.personal_info.show', compact('user','PersonalInfo'));
    }

    public function create($id)
    {
        $user = User::find($id);
        return view('admin.member.personal_info.create', compact('user'));
    }

    public function store(Request $request)
    {
        $this->SaveUserPersonalInfo($request);
        return redirect()->route('admin.user-info.show', $request->user_id)->with('message','Personal Information Save Successfully.');
    }

    public function show($id)
    {
        
    }

    public function edit($user_id, $personal_info_id)
    {
       $PersonalInfo =  PersonalInfo::find($personal_info_id);
       return view('admin.member.personal_info.edit', compact('PersonalInfo'));
    }

    public function update(Request $request, $id)
    {

        $this->UpdateUserPersonalInfo($request, $id);
        return redirect()->route('admin.user-info.show', $request->user_id)->with('message','Personal Information Update Successfully.');
    }

    public function destroy($id)
    {
        //
    }
}
