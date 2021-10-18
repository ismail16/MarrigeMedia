@extends('admin.layouts.master')
@section('title','Personal Information')
@section('content')

    <section class="content">
        <div class="container-fluid">


            <div class="card mt-2 bg-light-green">
                <div class="card-header pb-0 pt-2">
                    <div id="verifiedItems" class="float-right">
                    <span>Verified:</span>
                    <i class="fas fa-user-check text-success"></i>
                    </div>
                    <div >
                        <h3>Basic Information</h3>
                    </div>
                </div>  
                <div class="card-body p-2">
                    <ul class="timeline timeline-left">
                        <li class="timeline-inverted timeline-item">
                            <div class="timeline-badge bg_primary">
                                <img src="{{ asset('images/icons/flaticon/018-info-1.png') }}" class="w-75">
                            </div>
                            <div class="timeline-panel bg-body-green border-0">
                                <div class="timeline-body">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <div class="form-group mb-1">
                                                <label class="mb-0 form-label"> Name </label>
                                                <p class="border p-1 m-0 bg-light text-dark font-weight-bold">
                                                    {{ $user->first_name }} {{ $user->last_name }}
                                                </p>
                                            </div>
                                        </div>

                                        <div class="col-sm-3">
                                            <div class="form-group mb-1">
                                                <label class="mb-0 form-label"> Email address </label>
                                                <p class="border p-1 m-0 bg-light text-dark font-weight-bold">
                                                    {{ $user->email }}
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-group mb-1">
                                                <label class="mb-0 form-label"> Mobile </label>
                                                <p class="border p-1 m-0 bg-light text-dark font-weight-bold">
                                                    {{ $user->mobile }}
                                                </p>
                                            </div>
                                        </div>

                                        <div class="col-sm-3">
                                            <div class="form-group mb-1">
                                                <label class="mb-0 form-label"> Gender </label>
                                                <p class="border p-1 m-0 bg-light text-dark font-weight-bold">
                                                    {{ $user->gender }}
                                                </p>
                                            </div>
                                        </div>

                                        <div class="col-sm-3">
                                            <div class="form-group mb-1">
                                                <label class="mb-0 form-label"> Profession </label>
                                                <p class="border p-1 m-0 bg-light text-dark font-weight-bold">
                                                    {{str_replace('_', ' ',  $user->profession) }}
                                                </p>
                                            </div>
                                        </div>

                                        <div class="col-sm-3">
                                            <div class="form-group mb-1">
                                                <label class="mb-0 form-label"> Meretial status </label>
                                                <p class="border p-1 m-0 bg-light text-dark font-weight-bold">
                                                   {{str_replace('_', ' ', $user->marital_status) }}
                                                </p>
                                            </div>
                                        </div>

                                        <div class="col-sm-3">
                                            <div class="form-group mb-1">
                                                <label class="mb-0 form-label"> Birthday</label>
                                                <p class="border p-1 m-0 bg-light text-dark font-weight-bold">
                                                    {{ $user->birthday }}
                                                </p>
                                            </div>
                                        </div>

                                        <div class="col-sm-3">
                                            <div class="form-group mb-1">
                                                <label class="mb-0 form-label"> Country</label>
                                                <p class="border p-1 m-0 bg-light text-dark font-weight-bold">
                                                    {{ $user->country }}
                                                </p>
                                            </div>
                                        </div>

                                        <div class="col-sm-3">
                                            <div class="form-group mb-1">
                                                <label class="mb-0 form-label"> City / District</label>
                                                <p class="border p-1 m-0 bg-light text-dark font-weight-bold">
                                                    {{ $user->district }}
                                                </p>
                                            </div>
                                        </div>

                                        <div class="col-sm-3">
                                            <div class="form-group mb-1">
                                                <label class="mb-0 form-label"> Looking For</label>
                                                <p class="border p-1 m-0 bg-light text-dark font-weight-bold">
                                                    {{ $user->looking_for }}
                                                </p>
                                            </div>
                                        </div>

                                        <div class="col-sm-3">
                                            <div class="form-group mb-1">
                                                <label class="mb-0 form-label"> Religion</label>
                                                <p class="border p-1 m-0 bg-light text-dark font-weight-bold">
                                                    {{ $user->religion }}
                                                </p>
                                            </div>
                                        </div>

                                        <div class="col-sm-3">
                                            <div class="form-group mb-1">
                                                <label class="mb-0 form-label"> Caste</label>
                                                <p class="border p-1 m-0 bg-light text-dark font-weight-bold">
                                                    {{str_replace('_', ' ', $user->social_order) }}
                                                </p>
                                            </div>
                                        </div>

                                        <div class="col-sm-3">
                                            <div class="form-group mb-1">
                                                <label class="mb-0 form-label"> Profile Create By</label>
                                                <p class="border p-1 m-0 bg-light text-dark font-weight-bold">
                                                    {{ $user->createdby }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

             <div class="card mt-2 mb-2 bg-light-green">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="p-0">
                                <div class="alert p-2 text-center alert-warning m-0">
                                    Not Set Personal Information, Images, Preference
                                </div>
                            </div>
                        </div>
                        @if(!$PersonalInfo)
                            <a href="{{ route('admin.user-info.personal-info.index', $user->id ) }}" class="btn btn-sm m-2 btn-primary">Set Personal Information</a>
                        @endif
                        @if(count($UserProfileImages) == 0) 
                            <a href="{{ route('admin.user-info.images.create', $user->id ) }}" class="btn btn-sm m-2 btn-primary">Upload Images</a>
                        @else
                            <a href="{{ route('admin.user-info.images.index', $user->id ) }}" class="btn btn-sm m-2 btn-primary">Show Images</a>
                        @endif
                        @if(!$Preference)
                            <a href="{{ route('admin.user-info.preference.index', $user->id ) }}" class="btn btn-sm m-2 btn-primary">Set Preference</a>
                        @endif
                    </div>
                </div>
            </div>

            <!-- IMAGE -->
            {{-- <div class="card mt-2 mb-2 bg-light-green">
                <div class="card-header pb-0 pt-2">
                    <a href="{{ route('admin.user-info.images.index', $user->id ) }}" class="float-right btn btn-sm btn-primary float-right"> 
                        <i class="fa fa-plus"></i>User Image
                    </a>
                    <div class="float-left">
                        <h3>Images</h3>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="p-0">
                                <div class="alert p-2 text-center alert-warning m-0">
                                    Not Upload Yet
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}

            {{-- <div class="card mt-2 bg-light-green">
                <div class="card-header pb-0 pt-2">
                    <div id="verifiedItems" class="float-right">
                    <span>Not Verified:</span>
                    <i class="fas fa-user-check text-success"></i>
                    </div>
                    <div >
                        <h3>Profile Details</h3>
                    </div>
                </div>  
       
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="p-0">
                                <div class="alert p-2 text-center alert-warning m-0">
                                    Not Set Yet
                                </div>
                            </div>
                        </div>
                    </div>
                   <!--  <ul class="timeline timeline-left">
                        <li class="timeline-inverted timeline-item">
                            <div class="timeline-badge bg_primary">
                                <img src="{{ asset('images/icons/flaticon/065-love-1.png') }}" class="w-75">
                            </div>
                            <div class="timeline-panel bg-body-green border-0">
                                <div class="timeline-heading">
                                    <h4 class="timeline-title">ABOUT HE</h4>
                                </div>
                                <div class="timeline-body text-dark">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="p-0">
                                                <div class="alert p-2 text-center alert-warning m-0">
                                                    Not Set Yet
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="timeline-inverted timeline-item">
                            <div class="timeline-badge bg_primary">
                                <img src="{{ asset('images/icons/flaticon/018-info-1.png') }}" class="w-75">
                            </div>
                            <div class="timeline-panel bg-body-green border-0">
                                <div class="timeline-heading">
                                    <h4 class="timeline-title">Basic Information</h4>
                                </div>
                                <div class="timeline-body">
                                   <div class="row">
                                        <div class="col-md-12">
                                            <div class="p-0">
                                                <div class="alert p-2 text-center alert-warning m-0">
                                                    Not Set Yet
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="timeline-inverted timeline-item">
                            <div class="timeline-badge bg_primary">
                                <img src="{{ asset('images/icons/flaticon/016-graduated.png') }}" class="w-75">
                            </div>
                            <div class="timeline-panel bg-body-green border-0">
                                <div class="timeline-heading">
                                    <h4 class="timeline-title">Education and Profession</h4>
                                </div>
                                <div class="timeline-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="p-0">
                                                <div class="alert p-2 text-center alert-warning m-0">
                                                    Not Set Yet
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>


                        <li class="timeline-inverted timeline-item">
                            <div class="timeline-badge bg_primary">
                                <img src="{{ asset('images/icons/flaticon/009-address.png') }}" class="w-75">
                            </div>
                            <div class="timeline-panel bg-body-green border-0">
                                <div class="timeline-heading">
                                    <h4 class="timeline-title">Address</h4>
                                </div>
                                <div class="timeline-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="p-0">
                                                <div class="alert p-2 text-center alert-warning m-0">
                                                    Not Set Yet
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>


                        <li class="timeline-inverted timeline-item">
                            <div class="timeline-badge bg_primary">
                                <img src="{{ asset('images/icons/flaticon/022-family-2.png') }}" class="w-75">
                            </div>
                            <div class="timeline-panel bg-body-green border-0">
                                <div class="timeline-heading">
                                    <h4 class="timeline-title">Family Information</h4>
                                </div>
                                <div class="timeline-body">
                                   <div class="row">
                                        <div class="col-md-12">
                                            <div class="p-0">
                                                <div class="alert p-2 text-center alert-warning m-0">
                                                    Not Set Yet
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="timeline-inverted timeline-item">
                            <div class="timeline-badge bg_primary">
                                <img src="{{ asset('images/icons/flaticon/065-love-1.png') }}" class="w-75">
                            </div>
                            <div class="timeline-panel bg-body-green border-0">
                                <div class="timeline-heading">
                                    <h4 class="timeline-title">Preferences</h4>
                                </div>
                                <div class="timeline-body">
                                   <div class="row">
                                        <div class="col-md-12">
                                            <div class="p-0">
                                                <div class="alert p-2 text-center alert-warning m-0">
                                                    Not Set Yet
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul> -->
                </div>
            </div> --}}

            <!-- peference -->
            {{-- <div class="card mt-2 mb-2 bg-light-green">
                <div class="card-header pb-0 pt-2">
                    <div>
                        <h3>Preference</h3>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="p-0">
                                <div class="alert p-2 text-center alert-warning m-0">
                                    Not set Yet
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}

            <div class="card">
                <div class="card-body pt-2">
                    <div class="card-footer border-top">
                        <form action="{{route('admin.user-info.update', $user->id)}}" method="post"
                          style="display: inline;"
                          onsubmit="return confirm('Are you Sure? Confirming User')">
                            @csrf
                            @method('PUT')
                            <input type="checkbox" name="user_status" value="1" {{ $user->status==1?'checked':'' }}> Verified User <br>
                            <button class="btn btn-md btn-sm btn-success" type="submit"> Verifying User </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection