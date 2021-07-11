<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PackagePrice;

class PackagePriceController extends Controller
{
     public function index()
    {
        $package_prices = PackagePrice::orderBy('id', 'desc')->get();
        return view('admin.package_price.index', compact('package_prices'));
    }

  
    public function create()
    {
        return view('admin.package_price.create');
    }

 
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'price' => 'required',             
            'duration' => 'required', 
            'proposal' => 'required', 
            'contact' => 'required', 
        ]);

        $PackagePrice = new PackagePrice;

        $PackagePrice->title = $request->title;
        $PackagePrice->price = $request->price;
        $PackagePrice->duration = $request->duration;
        $PackagePrice->discount = $request->discount;
        $PackagePrice->proposal = $request->proposal;
        $PackagePrice->contact = $request->contact;

        $image = $request->file('image');
        if (isset($image)){
            $slug = $PackagePrice->title.rand(10,100);
            $imagename = $slug.'-'.uniqid().'.'.$image->getClientOriginalExtension();
            if (!file_exists('images/package_price')){
                mkdir('images/package_price',0777, true);
            }
            $image->move('images/package_price',$imagename);
            $PackagePrice->image  = $imagename;
        }

        $PackagePrice->status = $request->status;
        $PackagePrice->save();
        return redirect()->route('admin.package-price.index')->with('message','Success Package Create Successfully.');
    }

 
    public function show($id)
    {
        $package_price = PackagePrice::find($id);
        return view('admin.package_price.show', compact('package_price'));
    }

 
    public function edit($id)
    {
        $package_price = PackagePrice::find($id);
        return view('admin.package_price.edit', compact('package_price'));
    }

  
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'price' => 'required',             
            'duration' => 'required', 
            'proposal' => 'required', 
            'contact' => 'required', 
        ]);

        $PackagePrice = PackagePrice::find($id);

        $PackagePrice->title = $request->title;
        $PackagePrice->price = $request->price;
        $PackagePrice->duration = $request->duration;
        $PackagePrice->discount = $request->discount;
        $PackagePrice->proposal = $request->proposal;
        $PackagePrice->contact = $request->contact;

        $image = $request->file('image');
        if (isset($image)){
            $slug = $PackagePrice->title.rand(10,100);
            $imagename = $slug.'-'.uniqid().'.'.$image->getClientOriginalExtension();
            if (!file_exists('images/package_price')){
                mkdir('images/package_price',0777, true);
            }
            $image->move('images/package_price',$imagename);
            $PackagePrice->image  = $imagename;
        }

        $PackagePrice->status = $request->status;
        $PackagePrice->save();
        return redirect()->route('admin.package-price.index')->with('message','Success Package Update Successfully.');
    }

    public function destroy($id)
    {
        $package_price = PackagePrice::find($id);
        $package_price->delete();
        return redirect()->route('admin.package-price.index')->with('message','Success Package Delete Successfully.');
    }
}
