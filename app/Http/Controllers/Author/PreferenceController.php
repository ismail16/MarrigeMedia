<?php

namespace App\Http\Controllers\Author;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Models\Preference;

class PreferenceController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $preference =  Preference::where('user_id', $user->id)->first();
        // return $preference;
        return view('author.preference.show', compact('preference'));
    }

    public function create()
    {
        return view('author.preference.create');
    }

    public function store(Request $request)
    {

        $user = Auth::user();
        $preference = new Preference;
        $preference->user_id = $user->id;
        $preference->minAge = $request->minAge;
        $preference->maxAge = $request->maxAge;
        $preference->religion = $request->religion;
        $preference->family_status = json_encode($request->family_status);
        $preference->marital_status = json_encode($request->marital_status);
        $preference->allow_children = $request->allow_children;
        $preference->details_you_prefer = $request->details_you_prefer;

        $preference->minHeight = $request->minHeight;
        $preference->maxHeight = $request->maxHeight;
        $preference->minWeight = $request->minWeight;
        $preference->maxWeight = $request->maxWeight;
        $preference->blood_group = json_encode($request->blood_group);
        $preference->hair_color = $request->hair_color;
        $preference->eye_color = $request->eye_color;
        $preference->skin_color = json_encode($request->skin_color);
        $preference->disabilities_status = $request->disabilities_status;

        $preference->education_level = json_encode($request->education_level);
        $preference->subject = json_encode($request->subject);
        $preference->profession = json_encode($request->profession);

        $preference->country = json_encode($request->country);
        $preference->district = json_encode($request->district);
        $preference->citizenship = json_encode($request->citizenship);
        $preference->smoke_status = $request->smoke_status;
        $preference->alcohol_status = $request->alcohol_status;
        $preference->diat_status = $request->diat_status;
        $preference->language = $request->have_children;
        $preference->language = json_encode($request->language);
        $preference->status = 0;
        $preference->save();
        return redirect()->route('member.preference.index')->with('message','Preference Save Successfully.');
    }

    public function show($id)
    {
        
    }

    public function edit($id)
    {
       $preference =  Preference::find($id);
        // $m_status = ($preference->marital_status);

       return view('author.preference.edit', compact('preference'));
    }

    public function update(Request $request, $id)
    {
   
        $preference =  Preference::find($id);
        $preference->user_id = $user->id;
        $preference->minAge = $request->minAge;
        $preference->maxAge = $request->maxAge;
        $preference->religion = $request->religion;
        $preference->family_status = json_encode($request->family_status);
        $preference->marital_status = json_encode($request->marital_status);
        $preference->allow_children = $request->allow_children;
        $preference->details_you_prefer = $request->details_you_prefer;

        $preference->minHeight = $request->minHeight;
        $preference->maxHeight = $request->maxHeight;
        $preference->minWeight = $request->minWeight;
        $preference->maxWeight = $request->maxWeight;
        $preference->blood_group = json_encode($request->blood_group);
        $preference->hair_color = $request->hair_color;
        $preference->eye_color = $request->eye_color;
        $preference->skin_color = json_encode($request->skin_color);
        $preference->disabilities_status = $request->disabilities_status;

        $preference->education_level = json_encode($request->education_level);
        $preference->subject = json_encode($request->subject);
        $preference->profession = json_encode($request->profession);

        $preference->country = json_encode($request->country);
        $preference->district = json_encode($request->district);
        $preference->citizenship = json_encode($request->citizenship);
        $preference->smoke_status = $request->smoke_status;
        $preference->alcohol_status = $request->alcohol_status;
        $preference->diat_status = $request->diat_status;
        $preference->language = $request->have_children;
        $preference->language = json_encode($request->language);
        $preference->save();

        return $preference;
        // return redirect()->route('member.preference.index')->with('message','Preference Update Successfully.');
    }

    public function destroy($id)
    {
        //
    }
}
