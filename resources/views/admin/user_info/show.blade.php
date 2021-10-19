@extends('admin.layouts.master')
@section('title','Personal Information')
@section('content')
    <section class="content">
        <div class="container-fluid">
            @include('admin.partials.progress_message')
            <div class="row">
                @if(session()->has('message'))
                    <div class="col-lg-12 col-xl-12 d-flex justify-content-center">
                        <div class="alert alert-success text-center pr-3 pl-3 p-1 mb-1">
                            {{session('message')}}
                            <button type="button" class="close ml-4" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>
                @endif
            </div>

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

            <!-- IMAGE -->
            <div class="card mt-2 mb-2 bg-light-green">
                <div class="card-header pb-0 pt-2">
                    @if(count($UserProfileImages) == 0) 
                        <a href="{{ route('admin.user-info.images.create', $user->id ) }}" class="btn btn-sm m-2 btn-primary float-right">Upload Images</a>
                    @else
                        <a href="{{ route('admin.user-info.images.index', $user->id ) }}" class="btn btn-sm m-2 btn-primary float-right">Show Images</a>
                    @endif
                    <div>
                        <h3>Images</h3>
                    </div>
                </div>
                    <div class="card-body">
                    <div class="row">
                    @if(count($UserProfileImages) != 0) 
                    @foreach($UserProfileImages as $UserProfileImage)
                        <div class="col-md-3 border">
                            <div class="row">
                                <div class="col-6">
                                    <img src="{{ asset('images/user_profile_image/'.$UserProfileImage->image) }}" class="img-fluid" style="height: 100px;">
                                </div>
                                <div class="col-6 row d-flex align-items-center">
                                    <div class="col-12 text-center">
                                        @if($UserProfileImage->status == 0 )
                                        <button class="btn btn-xs bg-red-active"><i class="fa fa-times-circle"></i> Not Show Public</button>
                                        @else
                                            <button class="btn btn-xs bg-green-active"><i class="fa fa-check-circle"></i> Show Public</button>
                                        @endif
                                    </div>
                                    <div class="p-1 col-12 text-center">
                                        <a href="{{ route('single_groom_bride_gallary', $UserProfileImage->user_id)}}"
                                            class="btn btn-xs btn-success" target="_blank"><i class="fa fa-eye"></i></a>
                                        <a href="/admin/user-info/{{$UserProfileImage->user_id}}/images/{{$UserProfileImage->id}}/edit"
                                        class="btn btn-xs btn-success"><i class="fa fa-edit"></i></a>
                                        <form action="/admin/user-info/{{$UserProfileImage->user_id}}/images/{{$UserProfileImage->id}}" method="post"
                                            style="display: inline;"
                                            onsubmit="return confirm('Are you Sure? Want to delete')">
                                            @csrf
                                            @method('DELETE')
                                            <input type="hidden" name="image_id" value="{{$UserProfileImage->id}}">
                                            <button class="btn btn-xs btn-danger" type="submit"><i class="fa fa-trash"></i>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                           
                        </div>
                        
                    @endforeach
                    @else 
                        <div class="col-md-12">
                            <div class="card-body pt-2 bg-light-green">
                                <div class="alert alert-warning" role="alert">
                                    Not Upload Yet
                                </div>
                            </div>
                        </div>
                    @endif
                    </div>
                </div>
            </div>

            <div class="card mt-2 bg-light-green">
                <div class="card-header pb-0 pt-2">
                    <div class="float-right">
                        @if(!$PersonalInfo) 
                            <a href="{{ route('admin.user-info.personal-info.create', $user->id ) }}" class="btn btn-sm m-2 btn-primary">Set Preference</a>
                        @else
                            <a href="/admin/user-info/{{$PersonalInfo->user_id}}/personal-info/{{$PersonalInfo->id}}/edit" class="btn btn-sm m-2 btn-primary">Edit Personal-info</a>
                        @endif
                    </div>
                    <div >
                        <h3>Profile Details</h3>
                    </div>
                </div>  
                <div class="card-body p-2">
                    <ul class="timeline timeline-left">
                        <li class="timeline-inverted timeline-item">
                            <div class="timeline-badge bg_primary">
                                <img src="{{ asset('images/icons/flaticon/065-love-1.png') }}" class="w-75">
                            </div>
                            <div class="timeline-panel bg-body-green border-0">
                                <div class="timeline-heading">
                                    <h4 class="timeline-title">ABOUT HE</h4>
                                </div>
                                <div class="timeline-body text-dark">
                                    <p class="border p-1 m-0 bg-light text-dark font-weight-bold">
                                        {!! $user->user_info->about_me_family !!}
                                    </p>
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
                                        <div class="col-sm-3">
                                            <div class="form-group mb-1">
                                                <label class="mb-0 form-label"> Age </label>
                                                <p class="border p-1 m-0 bg-light text-dark font-weight-bold">
                                                    {{ date_diff(date_create($user->birthday), date_create('now'))->y }}
                                                </p>
                                            </div>
                                        </div>

                                        <div class="col-sm-3">
                                            <div class="form-group mb-1">
                                                <label class="mb-0 form-label"> Marital Status </label>
                                                <p class="border p-1 m-0 bg-light text-dark font-weight-bold">
                                                    {{ str_replace('_', ' ', $user->marital_status) }}
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-group mb-1">
                                                <label class="mb-0 form-label"> Height </label>
                                                <p class="border p-1 m-0 bg-light text-dark font-weight-bold">
                                                    {{ $user->user_info->height }}''
                                                </p>
                                            </div>
                                        </div>

                                        <div class="col-sm-3">
                                            <div class="form-group mb-1">
                                                <label class="mb-0 form-label"> Weight </label>
                                                <p class="border p-1 m-0 bg-light text-dark font-weight-bold">
                                                    {{ $user->user_info->weight }} Kg
                                                </p>
                                            </div>
                                        </div>

                                        <div class="col-sm-3">
                                            <div class="form-group mb-1">
                                                <label class="mb-0 form-label"> Weight </label>
                                                <p class="border p-1 m-0 bg-light text-dark font-weight-bold">
                                                    {{ $user->user_info->weight }} Kg
                                                </p>
                                            </div>
                                        </div>

                                        <div class="col-sm-3">
                                            <div class="form-group mb-1">
                                                <label class="mb-0 form-label"> Religion </label>
                                                <p class="border p-1 m-0 bg-light text-dark font-weight-bold">
                                                    {{ $user->religion }}
                                                </p>
                                            </div>
                                        </div>

                                        <div class="col-sm-3">
                                            <div class="form-group mb-1">
                                                <label class="mb-0 form-label"> Blood Group </label>
                                                <p class="border p-1 m-0 bg-light text-dark font-weight-bold">
                                                    {{ $user->user_info->blood_group }}
                                                </p>
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
                                        <div class="col-sm-4">
                                            <div class="form-group mb-1">
                                                <label class="mb-0 form-label">Education Level </label>
                                                <p class="border p-1 m-0 bg-light text-dark font-weight-bold">
                                                    {{ str_replace('_', ' ', $user->user_info->education_level) }}
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group mb-1">
                                                <label class="mb-0 form-label">Major Subject </label>
                                                <p class="border p-1 m-0 bg-light text-dark font-weight-bold">
                                                    {{ str_replace('_', ' ', $user->user_info->major_subject) }}
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group mb-1">
                                                <label class="mb-0 form-label">My Profession </label>
                                                <p class="border p-1 m-0 bg-light text-dark font-weight-bold">
                                                    {{ str_replace('_', ' ', $user->user_info->my_profession) }}
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group mb-1">
                                                <label class="mb-0 form-label">Job Title </label>
                                                <p class="border p-1 m-0 bg-light text-dark font-weight-bold">
                                                    {{ $user->user_info->job_title }}
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group mb-1">
                                                <label class="mb-0 form-label">Company Name </label>
                                                <p class="border p-1 m-0 bg-light text-dark font-weight-bold">
                                                    {{ $user->user_info->job_company_name }}
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group mb-1">
                                                <label class="mb-0 form-label">My Income </label>
                                                <p class="border p-1 m-0 bg-light text-dark font-weight-bold">
                                                    {{ str_replace('_', ' ', $user->user_info->income) }}
                                                </p>
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
                                        <div class="col-sm-4">
                                            <div class="form-group mb-1">
                                                <label class="mb-0 form-label">District </label>
                                                <p class="border p-1 m-0 bg-light text-dark font-weight-bold">
                                                    {{ $user->user_info->district }}
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group mb-1">
                                                <label class="mb-0 form-label">Thana </label>
                                                <p class="border p-1 m-0 bg-light text-dark font-weight-bold">
                                                    {{ $user->user_info->thana }}
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group mb-1">
                                                <label class="mb-0 form-label">Zip Code </label>
                                                <p class="border p-1 m-0 bg-light text-dark font-weight-bold">
                                                    {{ $user->user_info->zip_code }}
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group mb-1">
                                                <label class="mb-0 form-label">Residence(Country) </label>
                                                <p class="border p-1 m-0 bg-light text-dark font-weight-bold">
                                                    {{ $user->user_info->country_of_residence }}
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group mb-1">
                                                <label class="mb-0 form-label">Residence(City) </label>
                                                <p class="border p-1 m-0 bg-light text-dark font-weight-bold">
                                                    {{ $user->user_info->state_of_residence }}
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group mb-1">
                                                <label class="mb-0 form-label">Citizenship </label>
                                                <p class="border p-1 m-0 bg-light text-dark font-weight-bold">
                                                    {{ $user->user_info->citizenship }}
                                                </p>
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
                                        <div class="col-sm-3">
                                            <div class="form-group mb-1">
                                                <label class="mb-0 form-label">Father's Name </label>
                                                <p class="border p-1 m-0 bg-light text-dark font-weight-bold">
                                                    {{ $user->user_info->father_name }}
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-group mb-1">
                                                <label class="mb-0 form-label">Father's Occupation </label>
                                                <p class="border p-1 m-0 bg-light text-dark font-weight-bold">
                                                    {{ str_replace('_', ' ', $user->user_info->father_occupation) }}
                                                </p>
                                            </div>
                                        </div>

                                        <div class="col-sm-3">
                                            <div class="form-group mb-1">
                                                <label class="mb-0 form-label">Mother's Name </label>
                                                <p class="border p-1 m-0 bg-light text-dark font-weight-bold">
                                                    {{ $user->user_info->mother_name }}
                                                </p>
                                            </div>
                                        </div>

                                        <div class="col-sm-3">
                                            <div class="form-group mb-1">
                                                <label class="mb-0 form-label">Mother's Occupation </label>
                                                <p class="border p-1 m-0 bg-light text-dark font-weight-bold">
                                                    {{ $user->user_info->mother_occupation }}
                                                </p>
                                            </div>
                                        </div>

                                        <div class="col-sm-3">
                                            <div class="form-group mb-1">
                                                <label class="mb-0 form-label">Number of Brother </label>
                                                <p class="border p-1 m-0 bg-light text-dark font-weight-bold">
                                                    {{ $user->user_info->number_of_brother }}
                                                </p>
                                            </div>
                                        </div>

                                        <div class="col-sm-3">
                                            <div class="form-group mb-1">
                                                <label class="mb-0 form-label">brother Married? </label>
                                                <p class="border p-1 m-0 bg-light text-dark font-weight-bold">
                                                    {{ $user->user_info->how_many_brother_married }}
                                                </p>
                                            </div>
                                        </div>

                                        <div class="col-sm-3">
                                            <div class="form-group mb-1">
                                                <label class="mb-0 form-label">Number of Sister </label>
                                                <p class="border p-1 m-0 bg-light text-dark font-weight-bold">
                                                    {{ $user->user_info->number_of_sister }}
                                                </p>
                                            </div>
                                        </div>

                                        <div class="col-sm-3">
                                            <div class="form-group mb-1">
                                                <label class="mb-0 form-label">Sister Married? </label>
                                                <p class="border p-1 m-0 bg-light text-dark font-weight-bold">
                                                    {{ $user->user_info->how_many_sister_married }}
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

            <div class="card mt-2 bg-light-green">
                <div class="card-header pb-0 pt-2">
                    <div class="float-right">
                        @if(!$Preference) 
                            <a href="{{ route('admin.user-info.preference.create', $user->id ) }}" class="btn btn-sm m-2 btn-primary">Set Preference</a>
                        @else
                            <a href="/admin/user-info/{{$Preference->user_id}}/preference/{{$Preference->id}}/edit" class="btn btn-sm m-2 btn-primary">Edit Sreference</a>
                        @endif
                    </div>
                    <div >
                        <h3>Preferences</h3>
                    </div>
                </div>  
                <div class="card-body p-2">
                    <ul class="timeline timeline-left">

                        <li class="timeline-inverted timeline-item">
                            <div class="timeline-badge bg_primary">
                                <img src="{{ asset('images/icons/flaticon/065-love-1.png') }}" class="w-75">
                            </div>
                            <div class="timeline-panel bg-body-green border-0">
                                <div class="timeline-heading">
                                    <h4 class="timeline-title">Preferences</h4>
                                </div>
                                @if($Preference)
                                <div class="timeline-body">
                                    <div class="row bg-off-pink">
                                        <div class="col-sm-12">
                                            <div class="form-group mb-1">
                                                <label class="mb-0 form-label">Details you preferance</label>
                                                <p class="border p-1 m-0 bg-light text-dark font-weight-bold">
                                                    {{ $Preference->details_you_prefer}}
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group mb-1">
                                                <label class="mb-0 form-label"> Age </label>
                                                <p class="border p-1 m-0 bg-light text-dark font-weight-bold">
                                                    {{ $Preference->minAge}} - {{ $Preference->maxAge}} years
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group mb-1">
                                                <label class="mb-0 form-label"> Height </label>
                                                <p class="border p-1 m-0 bg-light text-dark font-weight-bold">
                                                    {{ $Preference->minHeight}}" - {{ $Preference->maxHeight}}" 
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group mb-1">
                                                <label class="mb-0 form-label"> Weight </label>
                                                <p class="border p-1 m-0 bg-light text-dark font-weight-bold">
                                                    {{ $Preference->minWeight}} - {{ $Preference->maxWeight}} Kg 
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <label class="mb-0 form-label">Religion </label>
                                            <p class="border p-1 m-0 bg-light text-dark font-weight-bold">
                                                {{ $Preference->religion}}
                                            </p>
                                        </div>
                                        <div class="col-sm-4"> 
                                            <div class="form-group mb-1">
                                                <label class="mb-0 form-label">Family status </label>
                                                <?php 
                                                $family_statuss = json_decode($Preference->family_status) ;
                                                ?>
                                                <p class="border p-1 m-0 bg-light text-dark font-weight-bold">
                                                    @foreach($family_statuss as $family_status)
                                                        {{str_replace('_', ' ', $family_status) }},
                                                    @endforeach
                                                </p>
                                            </div>
                                        </div>


                                        <div class="col-md-4">
                                            <label class="mb-0 form-label">Meretial status </label> <br>
                                            <?php 
                                            $marital_statuss = json_decode($Preference->marital_status) ;
                                            ?>
                                            <p class="border p-1 m-0 bg-light text-dark font-weight-bold">
                                                @foreach($marital_statuss as $marital_status)
                                                    {{str_replace('_', ' ', $marital_status) }},
                                                @endforeach
                                            </p>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group mb-1">
                                                <label class="mb-0 form-label">
                                                Allow Children?</label>
                                                <p class="border p-1 m-0 bg-light text-dark font-weight-bold">
                                                    {{ $Preference->allow_children}}
                                                </p>
                                            </div>
                                        </div>

                                        <div class="col-sm-4">         
                                            <div class="form-group mb-1">
                                                <label class="mb-0 form-label">Skin Color </label>
                                                <?php 
                                                $skin_colors = json_decode($Preference->skin_color) ;
                                                ?>
                                                <p class="border p-1 m-0 bg-light text-dark font-weight-bold">
                                                    @foreach($skin_colors as $skin_color)
                                                        {{str_replace('_', ' ', $skin_color) }},
                                                    @endforeach
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group mb-1">
                                                <label class="mb-0 form-label">Blood Group </label>
                                                <?php 
                                                $blood_groups = json_decode($Preference->blood_group) ;
                                                ?>
                                                <p class="border p-1 m-0 bg-light text-dark font-weight-bold">
                                                    @foreach($blood_groups as $blood_group)
                                                        {{str_replace('_', ' ', $blood_group) }},
                                                    @endforeach
                                                </p>
                                            </div>   
                                        </div>
                                        
                                        <div class="col-sm-4">
                                            <div class="other-area">
                                                <div class="form-group mb-1">
                                                    <label class="mb-0 form-label">Hair Color </label>
                                                    <p class="border p-1 m-0 bg-light text-dark font-weight-bold">
                                                        {{ $Preference->hair_color}}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="other-area">
                                                <div class="form-group mb-1">
                                                    <label class="mb-0 form-label">Eye Color </label>
                                                    <p class="border p-1 m-0 bg-light text-dark font-weight-bold">
                                                        {{ $Preference->eye_color}}
                                                    </p>
                                                </div>
                                            </div>    
                                        </div>
                                        
                                        <div class="col-sm-4">
                                            <div class="other-area">
                                                <div class="form-group mb-1">
                                                    <label class="mb-0 form-label">Allow Disabilities? </label>
                                                    <p class="border p-1 m-0 bg-light text-dark font-weight-bold">
                                                        {{ $Preference->disabilities_status}}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="other-area">
                                                <div class="form-group mb-1">
                                                    <label class="mb-0 form-label">Education Level </label>
                                                    <?php 
                                                    $education_levels = json_decode($Preference->education_level) ;
                                                    ?>
                                                    <p class="border p-1 m-0 bg-light text-dark font-weight-bold">
                                                        @foreach($education_levels as $education_level)
                                                            {{str_replace('_', ' ', $education_level) }},
                                                        @endforeach
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group mb-1">
                                                <label class="mb-0 form-label">Major Subject </label>
                                                <?php 
                                                $subjects = json_decode($Preference->subject) ;
                                                ?>
                                                <p class="border p-1 m-0 bg-light text-dark font-weight-bold">
                                                    @foreach($subjects as $subject)
                                                        {{str_replace('_', ' ', $subject) }},
                                                    @endforeach
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group mb-1">
                                                <label class="mb-0 form-label">My Profession </label>
                                                <?php 
                                                $professions = json_decode($Preference->profession) ;
                                                ?>
                                                <p class="border p-1 m-0 bg-light text-dark font-weight-bold">
                                                    @foreach($professions as $profession)
                                                        {{str_replace('_', ' ', $profession) }},
                                                    @endforeach
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row bg-off-pink">
                                        <div class="col-md-4">
                                            <div class="form-group mb-1">
                                                <label class="mb-0 form-label">Country of Residence </label>
                                                <?php 
                                                $countrys = json_decode($Preference->country) ;
                                                ?>
                                                <p class="border p-1 m-0 bg-light text-dark font-weight-bold">
                                                    @foreach($countrys as $country)
                                                        {{str_replace('_', ' ', $country) }},
                                                    @endforeach
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group mb-1">
                                                <label class="mb-0 form-label">District </label>
                                                <?php 
                                                $districts = json_decode($Preference->district) ;
                                                ?>
                                                <p class="border p-1 m-0 bg-light text-dark font-weight-bold">
                                                    @foreach($districts as $district)
                                                        {{str_replace('_', ' ', $district) }},
                                                    @endforeach
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group mb-1">
                                                <label class="mb-0 form-label">Citizenship </label>
                                                <?php 
                                                $citizenships = json_decode($Preference->citizenship) ;
                                                ?>
                                                <p class="border p-1 m-0 bg-light text-dark font-weight-bold">
                                                    @foreach($citizenships as $citizenship)
                                                        {{str_replace('_', ' ', $citizenship) }},
                                                    @endforeach
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row bg-off-pink">
                                        <div class="col-sm-4">
                                            <div class="form-group mb-1">
                                                <label class="mb-0 form-label">
                                                Allow Smoke?</label>
                                                <p class="border p-1 m-0 bg-light text-dark font-weight-bold">
                                                    {{ $Preference->smoke_status}}
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group mb-1">
                                                <label class="mb-0 form-label">Allow Alcohol?</label>
                                                <p class="border p-1 m-0 bg-light text-dark font-weight-bold">
                                                    {{ $Preference->alcohol_status}}
                                                </p>
                                            </div>
                                        </div>
                                        
                                        <div class="col-sm-4">
                                            <div class="form-group mb-1">
                                                <label class="mb-0 form-label">Diat Status</label>
                                                <p class="border p-1 m-0 bg-light text-dark font-weight-bold">
                                                    {{str_replace('_', ' ', $Preference->diat_status) }}
                                                </p>
                                            </div>
                                        </div>

                                        <div class="col-sm-4">
                                            <div class="form-group mb-1">
                                                <label class="mb-0 form-label">Language </label>
                                                <?php 
                                                $languages = json_decode($Preference->language) ;
                                                ?>
                                                <p class="border p-1 m-0 bg-light text-dark font-weight-bold">
                                                    @foreach($languages as $language)
                                                        {{str_replace('_', ' ', $language) }},
                                                    @endforeach
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @else
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="card-body pt-2 bg-light-green">
                                                <div class="alert alert-warning" role="alert">
                                                    Not Set Yet
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </li>
                    </ul>
                </div>
            </div>


            <div class="card-footer border-top">
                <form action="{{route('admin.user-info.update', $user->id)}}" method="post"
                  style="display: inline;"
                  onsubmit="return confirm('Are you Sure? Confirming User')">
                    @csrf
                    @method('PUT')
                    <input type="checkbox" name="user_status" value="1" {{ $user->status==1?'checked':'' }}> Verified User <br>
                    <!-- <input type="checkbox" name="PersonalInfo_status" value="1" {{ $PersonalInfo->status==1?'checked':'' }}> Confirm Personal Information <br>  -->
                    <input type="checkbox" name="activation" value="1" {{ $user->activation==1?'checked':'' }}> Activation User <span class="text-danger">(Be Sure All information is correct)</span> <br> 
                    <button class="btn btn-md btn-success" type="submit"> Confirm </button>
                </form>
            </div>
        </div>
    </section>
@endsection