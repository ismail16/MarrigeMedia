@extends('admin.layouts.master')
@section('title','Create Package Price')
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
                        <form action="{{route('admin.package-price.store')}}" method="post" enctype="multipart/form-data" class="">
                            @csrf
                            <div class="form-row">
                                <div class="col-md-6 form-group mb-1">
                                    <label class="mb-0">Title </label>   
                                    <input type="text" name="title" class="form-control-sm w-100 border">
                                </div>
                                <div class="col-md-6 form-group mb-1">
                                    <label class="mb-0">Price </label>   
                                    <input type="number" name="price" class="form-control-sm w-100 border">
                                </div>
                                 <div class="col-md-6 form-group mb-1">
                                    <label class="mb-0">Discount </label>   
                                    <input type="number" name="discount" class="form-control-sm w-100 border">
                                </div>
                                <div class="col-md-6 form-group mb-1">
                                    <label class="mb-0">Duration (Day) </label>   
                                    <input type="number" name="duration" class="form-control-sm w-100 border">
                                </div>
                                <div class="col-md-6 form-group mb-1">
                                    <label class="mb-0">Proposal </label>   
                                    <input type="number" name="proposal" class="form-control-sm w-100 border">
                                </div>
                                <div class="col-md-6 form-group mb-1">
                                    <label class="mb-0">contact </label>   
                                    <input type="number" name="contact" class="form-control-sm w-100 border">
                                </div>
                                <div class="col-md-6 form-group mb-1">
                                    <label class="mb-0">Icon </label>   
                                    <input type="file" name="image" class="form-control-sm w-100 border">
                                </div>
                                <div class="form-group mb-1 col-md-6">
                                    <label class="mb-0">Show Frontend</label>
                                    <select id="gender" name="status" class="form-control-sm w-100" >
                                        <option value="1">Yes</option>
                                        <option value="0">No</option>
                                    </select>
                                </div>
                                <div class="col-md-12 d-flex justify-content-end">
                                    <button type="submit" name="upload" value="upload" id="upload" class="btn btn-primary mt-1"><i class="fa fa-fw fa-upload"></i> Save</button>
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