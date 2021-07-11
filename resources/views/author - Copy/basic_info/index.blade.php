@extends('author.layouts.master')
@section('title','Author | Basic Info')
@section('content')
<section class="content session_contect">
    <div class="container-fluid">
        <div class="row">
            @if(session()->has('message'))
                <div class="col-lg-12 col-xl-12 d-flex justify-content-center session_message">
                    <div class="alert alert-success text-center pr-3 pl-3 p-1 mb-1">
                        {{session('message')}}
                        <button type="button" class="close ml-4" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
            @endif
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header p-2">
                        <a class="float-right btn btn-sm btn-primary" href="{{route('author.basic-info.edit', $user->id)}}">
                            <i class="nav-icon fas fa-edit"></i> Edit
                        </a>
                    </div>
                    <div class="p-3">
                        <div class="form-row">
                            <div class="col-md-4 form-group mb-1">
                                <label class="mb-0">Name</label>   
                                <p class="border p-1 m-0">{{ $user->first_name }} {{ $user->last_name }}</p>
                            </div>
                            <div class="col-md-4 form-group mb-1">
                                <label class="mb-0">Email address</label>   
                                <p class="border p-1 m-0">{{ $user->email }}</p>
                            </div>
                            <div class="col-md-4 form-group mb-1">
                                <label class="mb-0">mobile</label>
                                <p class="border p-1 m-0">{{ $user->mobile }}</p>
                            </div>

                            <div class="form-group mb-1 col-md-4">
                                <label class="mb-0">Gender</label>
                                 <p class="border p-1 m-0">{{ $user->gender }}</p>
                            </div>

                            <div class="form-group mb-1 col-md-4">
                                <label class="mb-0">Profession</label>
                                <p class="border p-1 m-0">{{ $user->profession }}</p>
                            </div>

                            <div class="form-group mb-1 col-md-4">
                                <label class="mb-0">Meretial status</label>
                                 <p class="border p-1 m-0">{{ $user->marital_status }}</p>
                            </div>

                            <div class="col-md-4 form-group mb-1">
                                <label class="mb-0">Birthday</label>
                                <p class="border p-1 m-0">{{ $user->birthday }}</p>
                            </div>

                            <div class="form-group mb-1 col-md-4">
                                <label class="mb-0">Country</label>
                                <p class="border p-1 m-0">{{ $user->country }}</p>
                            </div>

                            <div class="form-group mb-1 col-md-4">
                                <label class="mb-0">City / District</label>
                                 <p class="border p-1 m-0">{{ $user->district }}</p>
                            </div>

                            <div class="form-group mb-1 col-md-4">
                                <label class="mb-0">Looking For</label>
                                 <p class="border p-1 m-0">{{ $user->looking_for }}</p>
                            </div>

                            <div class="form-group mb-1 col-md-4">
                                <label class="mb-0">Religion</label>
                                 <p class="border p-1 m-0">{{ $user->religion }}</p>
                            </div>

                            <div class="form-group mb-1 col-md-4">
                                <label class="mb-0">Caste</label>
                                 <p class="border p-1 m-0">{{ $user->social_order }}</p>
                            </div>

                            <div class="col-md-4 form-group mb-1">
                                <label class="mb-0">Profile Create By</label>
                                 <p class="border p-1 m-0">{{ $user->createdby }}</p>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection