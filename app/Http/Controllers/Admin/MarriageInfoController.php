<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Models\Preference;
// use App\Http\Traits\PreferenceTrait;

class MarriageInfoController extends Controller
{
    // use PreferenceTrait;
    public function index($id)
    {
        $user = User::find($id);
        return view('admin.marriage_info.index', compact('user'));
    }

    public function create($id)
    {
        $user = User::find($id);
        return view('admin.member.preference.create', compact('user'));
    }

    public function store(Request $request)
    {
        // $this->SavePreference($request);
        // return redirect()->route('admin.user-info.show', $request->user_id)->with('message','Preference Save Successfully.');
        // return redirect()->route('admin.member.preference.index')->with('message','Preference Save Successfully.');
    }

    public function show($id)
    {
        return "0";   
    }

    public function edit($user_id, $preference_id)
    {
        return "0";
       // $preference =  Preference::find($preference_id);
       // return view('admin.member.preference.edit', compact('preference'));
    }

    public function update(Request $request, $id)
    {

        return "0";
        // return redirect()->route('admin.user-info.show', $request->user_id)->with('message','Preference Update Successfully.');
        // return redirect()->route('member.preference.index')->with('message','Preference Update Successfully.');
    }

    public function destroy($id)
    {
        //
    }
}
