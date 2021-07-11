<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SuccessStory;

class SuccessStoryController extends Controller
{

    public function index()
    {
        $success_stories = SuccessStory::orderBy('id', 'desc')->get();
        return view('admin.success_story.index', compact('success_stories'));
    }

  
    public function create()
    {
        return view('admin.success_story.create');
    }

 
    public function store(Request $request)
    {
        $this->validate($request, [
            'bride_name' => 'required',
            'groom_name' => 'required',             
            'location' => 'required', 
            'marriage_date' => 'required', 
            'image' => 'required', 
            'comment' => 'required', 
        ]);

        $SuccessStory = new SuccessStory;

        $SuccessStory->bride_name = $request->bride_name;
        $SuccessStory->groom_name = $request->groom_name;
        $SuccessStory->location = $request->location;
        $SuccessStory->marriage_date = $request->marriage_date;

        $image = $request->file('image');
        if (isset($image)){
            $slug = $SuccessStory->bride_name.'&'.$SuccessStory->groom_name.'-'.rand(10,100);
            $imagename = $slug.'-'.uniqid().'.'.$image->getClientOriginalExtension();
            if (!file_exists('images/success_story')){
                mkdir('images/success_story',0777, true);
            }
            $image->move('images/success_story',$imagename);
            $SuccessStory->image  = $imagename;
        }

        $SuccessStory->comment = $request->comment;
        $SuccessStory->status = $request->status;

        $SuccessStory->save();
        return redirect()->route('admin.success-story.index')->with('message','Success Story Create Successfully.');
    }

 
    public function show($id)
    {
        $success_story = SuccessStory::find($id);
        return view('admin.success_story.show', compact('success_story'));
    }

 
    public function edit($id)
    {
        $success_story = SuccessStory::find($id);
        return view('admin.success_story.edit', compact('success_story'));
    }

  
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'bride_name' => 'required',
            'groom_name' => 'required',             
            'location' => 'required', 
            'marriage_date' => 'required', 
            'comment' => 'required', 
        ]);

        $SuccessStory = SuccessStory::find($id);

        $SuccessStory->bride_name = $request->bride_name;
        $SuccessStory->groom_name = $request->groom_name;
        $SuccessStory->location = $request->location;
        $SuccessStory->marriage_date = $request->marriage_date;

        $image = $request->file('image');
        if (isset($image)){
            $slug = $SuccessStory->bride_name.'&'.$SuccessStory->groom_name.'-'.rand(10,100);
            $imagename = $slug.'-'.uniqid().'.'.$image->getClientOriginalExtension();
            if (!file_exists('images/success_story')){
                mkdir('images/success_story',0777, true);
            }
            $image->move('images/success_story',$imagename);
            $SuccessStory->image  = $imagename;
        }

        $SuccessStory->comment = $request->comment;
        $SuccessStory->status = $request->status;

        $SuccessStory->save();
        return redirect()->route('admin.success-story.index')->with('message','Success Story Update Successfully.');
    }

    public function destroy($id)
    {
        $success_story = SuccessStory::find($id);
        $success_story->delete();
        return redirect()->route('admin.success-story.index')->with('message','Success Story Delete Successfully.');
    }
}
