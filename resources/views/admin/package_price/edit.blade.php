@extends('admin.layouts.master')
@section('title','Edit Package Price')
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="p-3">
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            @foreach ($errors->all() as $error)
                            <span class="badge badge-danger">{{ $error }}</span>
                            @endforeach
                        </div>
                        @endif
                        <form action="{{route('admin.package-price.update', $package_price->id )}}" method="post" enctype="multipart/form-data" class="">
                            @csrf
                            @method('put')
                            <div class="form-row">
                                <div class="col-md-6 form-group mb-1">
                                    <label class="mb-0">Title </label>   
                                    <input type="text" name="title" value="{{ $package_price->title }}" class="form-control-sm w-100 border">
                                </div>
                                <div class="col-md-6 form-group mb-1">
                                    <label class="mb-0">Price </label>   
                                    <input type="number" name="price" value="{{ $package_price->price }}" class="form-control-sm w-100 border">
                                </div>
                                 <div class="col-md-6 form-group mb-1">
                                    <label class="mb-0">Discount </label>   
                                    <input type="number" name="discount" value="{{ $package_price->discount }}" class="form-control-sm w-100 border">
                                </div>
                                <div class="col-md-6 form-group mb-1">
                                    <label class="mb-0">Duration (Day) </label>   
                                    <input type="number" name="duration" value="{{ $package_price->duration }}" class="form-control-sm w-100 border">
                                </div>
                                <div class="col-md-6 form-group mb-1">
                                    <label class="mb-0">Proposal </label>   
                                    <input type="number" name="proposal" value="{{ $package_price->proposal }}" class="form-control-sm w-100 border">
                                </div>
                                <div class="col-md-6 form-group mb-1">
                                    <label class="mb-0">contact </label>   
                                    <input type="number" name="contact" value="{{ $package_price->contact }}" class="form-control-sm w-100 border">
                                </div>
                                <div class="col-md-6 form-group mb-1">
                                    <label class="mb-0">Icon </label>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input type="file" name="image" class="form-control-sm w-100 border">
                                        </div>
                                        <div class="col-md-6">
                                            <img src="{{ asset('images/package_price/'.$package_price->image) }}" class="img-fluid" style="width: 50px;">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mb-1 col-md-6">
                                    <label class="mb-0">Show Frontend</label>
                                    <select id="gender" name="status" class="form-control-sm w-100" >
                                        <option value="1" {{ $package_price->status=='1'?'selected':'' }}>Yes</option>
                                        <option value="0" {{ $package_price->status=='0'?'selected':'' }}>No</option>
                                    </select>
                                </div>
                                <div class="col-md-12 d-flex justify-content-end">
                                    <button type="submit" name="upload" value="upload" id="upload" class="btn btn-primary mt-1"><i class="fa fa-fw fa-sync"></i> Update</button>
                                </div>
                            </div>                                    
                        </div> 
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
@endsection