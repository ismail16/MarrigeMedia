@extends('admin.layouts.master')
@section('title','Personal Information')
@section('content')

    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body pt-2">
                    <h5 class="border-bottom font-italic font-weight-bold">Basic Information</h5>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-4">
                                    <span>First Name </span>
                                </div> 
                                <div class="col-md-8">
                                    : <b>  {{ $user->first_name }}</b>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-4">
                                    <span>Last Name </span>
                                </div> 
                                <div class="col-md-8">
                                    : <b>  {{ $user->last_name }}</b>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-4">
                                    <span>Email address</span>
                                </div>
                                <div class="col-md-8">
                                    : <b>{{ $user->email }}</b>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-4">
                                    <span>Mobile </span>
                                </div>
                                <div class="col-md-8">
                                    : <b>{{$user->mobile}}</b>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-4">
                                    <span>mobile </span>
                                </div>
                                <div class="col-md-8">
                                    : <b>{{$user->mobile}}</b>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-4">
                                    <span>Gender </span>
                                </div>
                                <div class="col-md-8">
                                    : <b>{{$user->gender}}</b>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-4">
                                    <span>Profession </span>
                                </div>
                                <div class="col-md-8">
                                    : <b>{{$user->profession}}</b>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-4">
                                    <span>Birthday </span>
                                </div>
                                <div class="col-md-8">
                                    : <b>{{$user->birthday}}</b>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-4">
                                    <span>Country </span>
                                </div>
                                <div class="col-md-8">
                                    : <b>{{$user->country}}</b>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-4">
                                    <span>City / District </span>
                                </div>
                                <div class="col-md-8">
                                    : <b>{{$user->district}}</b>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-4">
                                    <span>Looking For </span>
                                </div>
                                <div class="col-md-8">
                                    : <b>{{$user->looking_for}}</b>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-4">
                                    <span>Religion </span>
                                </div>
                                <div class="col-md-8">
                                    : <b>{{$user->religion}}</b>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-4">
                                    <span>Religion </span>
                                </div>
                                <div class="col-md-8">
                                    : <b>{{$user->religion}}</b>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-4">
                                    <span>Caste </span>
                                </div>
                                <div class="col-md-8">
                                    : <b>{{$user->social_order}}</b>
                                </div>
                            </div>
                        </div>


                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-4">
                                    <span>Profile Create By </span>
                                </div>
                                <div class="col-md-8">
                                    : <b>{{$user->createdby}}</b>
                                </div>
                            </div>
                        </div>

                    </div>

                    <h5 class="border-bottom font-italic font-weight-bold">Images</h5>
                    <div class="row">
                        
                    </div>




                    <div class="card-footer border-top">
                        <form action="{{route('admin.user-info.update', $user->id)}}" method="post"
                          style="display: inline;"
                          onsubmit="return confirm('Are you Sure? Confirming User')">
                            @csrf
                            @method('PUT')
                            <input type="checkbox" name="user_status" value="1" {{ $user->status==1?'checked':'' }}> Confirm User <br>
                            <button class="btn btn-md btn-success" type="submit"> Confirm </button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection