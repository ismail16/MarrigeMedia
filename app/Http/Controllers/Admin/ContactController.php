<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
     public function index()
    {
        $messages = Contact::orderBy('id', 'desc')->get();
        return view('admin.message.index', compact('messages'));
    }

  
    public function create()
    {

    }

 
    public function store(Request $request)
    {

    }

 
    public function show($id)
    {
        $message = Contact::find($id);
        $message->status = 1;
        $message->save();
        return view('admin.message.show', compact('message'));
    }

 
    public function edit($id)
    {

    }

  
    public function update(Request $request, $id)
    {
        
    }

    public function destroy($id)
    {
        $Contact = Contact::find($id);
        $Contact->delete();
        return redirect()->route('admin.message.index')->with('message','Message Deleted Successfully.');
    }
}
