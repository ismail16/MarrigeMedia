<?php

namespace App\Http\Controllers\Admin\member;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Models\Preference;
use App\Http\Traits\PreferenceTrait;

class PreferenceController extends Controller
{
    use PreferenceTrait;
    public function index($id)
    {
        $user = User::find($id);
        $preference =  Preference::where('user_id', $user->id)->first();
        return view('admin.member.preference.show', compact('preference'));
    }

    public function create($id)
    {
        $user = User::find($id);
        return view('admin.member.preference.create', compact('user'));
    }

    public function store(Request $request)
    {

        return $this->SavePreference($request);
        // return redirect()->route('admin.member.preference.index')->with('message','Preference Save Successfully.');
    }

    public function show($id)
    {
        
    }

    public function edit($user_id, $preference_id)
    {
       $preference =  Preference::find($preference_id);
       return view('admin.member.preference.edit', compact('preference'));
    }

    public function update(Request $request, $id)
    {

        return $this->UpdatePreference($request, $id);
        // return redirect()->route('member.preference.index')->with('message','Preference Update Successfully.');
    }

    public function destroy($id)
    {
        //
    }
}
