@extends('author.layouts.master')
@section('title','Personal Information')
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
            
            <div class="card">
                @if($PersonalInfo)
                    <div class="card-body pt-2">
                        <div class="card-header p-0 border-0">
                            <a class="float-right btn btn-sm btn-primary" href="{{route('author.personal-info.edit', $PersonalInfo->id)}}">
                                <i class="nav-icon fas fa-edit"></i> Edit
                            </a>
                        </div>
                        <h5 class="border-bottom font-italic font-weight-bold">Education and Profession</h5>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-4">
                                        <span>Education Level </span>
                                    </div> 
                                    <div class="col-md-8">
                                        : <b>{{ str_replace('_', ' ', $PersonalInfo->education_level )}}</b>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-4">
                                        <span>Major Subject</span>
                                    </div>
                                    <div class="col-md-8">
                                        : <b>{{str_replace('_', ' ', $PersonalInfo->major_subject)}}</b>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-4">
                                        <span>My Profession : </span>
                                    </div>
                                    <div class="col-md-8">
                                        : <b>{{str_replace('_', ' ', $PersonalInfo->my_profession)}}</b>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-4">
                                        <span>Job Title : </span>
                                    </div>
                                    <div class="col-md-8">
                                        : <b>{{ $PersonalInfo->job_title }}</b>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-4">
                                        <span>Job Company Name </span>
                                    </div>
                                    <div class="col-md-8">
                                        : <b>{{ $PersonalInfo->job_company_name }}</b>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-4">
                                        <span>My Income</span>
                                    </div>
                                    <div class="col-md-8">
                                        : <b>{{str_replace('_', ' ', $PersonalInfo->income)}} </b>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h5 class="border-bottom font-italic font-weight-bold pt-2">Address</h5>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-4">
                                        <span>District</span>
                                    </div>
                                    <div class="col-md-8">
                                        : <b>{{str_replace('_', ' ', $PersonalInfo->district) }}</b>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-4">
                                        <span>Thana</span>
                                    </div>
                                    <div class="col-md-8">
                                        : <b>{{ $PersonalInfo->thana }}</b>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-4">
                                        <span>Zip Code</span>
                                    </div>
                                    <div class="col-md-8">
                                        : <b>{{ $PersonalInfo->zip_code }}</b>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-4">
                                        <span>Country of Residence</span>
                                    </div>
                                    <div class="col-md-8">
                                        : <b>{{str_replace('_', ' ', $PersonalInfo->country_of_residence) }}</b>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-4">
                                        <span>City of Residence</span>
                                    </div>
                                    <div class="col-md-8">
                                        : <b>{{ $PersonalInfo->state_of_residence }}</b>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-4">
                                        <span>Citizenship </span>
                                    </div>
                                    <div class="col-md-8">
                                        : <b>{{ $PersonalInfo->citizenship }}</b>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h5 class="border-bottom font-italic font-weight-bold pt-2">Family Information</h5>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-4">
                                        <span>Father's Name </span>
                                    </div>
                                    <div class="col-md-8">
                                        : <b>{{ $PersonalInfo->father_name }}</b>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-4">
                                        <span>Father's Occupation </span>
                                    </div>
                                    <div class="col-md-8">
                                        : <b>{{str_replace('_', ' ', $PersonalInfo->father_occupation) }}</b>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-4">
                                        <span>Mother's Name </span>
                                    </div>
                                    <div class="col-md-8">
                                        : <b>{{ $PersonalInfo->mother_name }}</b>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-4">
                                        <span>Mother's Occupation </span>
                                    </div>
                                    <div class="col-md-8">
                                        : <b>{{ $PersonalInfo->mother_occupation }}</b>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-4">
                                        <span>Number of Brother </span>
                                    </div>
                                    <div class="col-md-8">
                                        : <b>{{ $PersonalInfo->number_of_brother }}</b>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-4">
                                        <span>brother Married? </span>
                                    </div>
                                    <div class="col-md-8">
                                        : <b>{{ $PersonalInfo->how_many_brother_married }}</b>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-4">
                                        <span>Number of Sister </span>
                                    </div>
                                    <div class="col-md-8">
                                        : <b>{{ $PersonalInfo->number_of_sister }}</b>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-4">
                                        <span>Sister Married? </span>
                                    </div>
                                    <div class="col-md-8">
                                        : <b>{{ $PersonalInfo->how_many_sister_married }}</b>
                                    </div>
                                </div>
                            </div>

                        </div>


                        <h5 class="border-bottom font-italic font-weight-bold pt-2">Physical Information</h5>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-4">
                                        <span>My Height</span>
                                    </div>
                                    <div class="col-md-8">
                                        : <b>{{ $PersonalInfo->height }}</b>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-4"> 
                                        <span>Weight(kg)</span>
                                    </div>
                                    <div class="col-md-8">
                                        : <b>{{ $PersonalInfo->weight }}</b>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-4">
                                        <span>Blood Group</span>
                                    </div>
                                    <div class="col-md-8">
                                        : <b>{{ $PersonalInfo->blood_group }}</b>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-4">
                                        <span for="hair_color">My Hair Color</span>
                                    </div>
                                    <div class="col-md-8">
                                        : <b>{{ $PersonalInfo->hair_color }}</b>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-4">
                                        <span for="eye_color">My Eye Color </span>
                                    </div>
                                    <div class="col-md-8">
                                        : <b>{{ $PersonalInfo->eye_color }}</b>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-4">              
                                        <span for="skin_color">My Skin Color </span>
                                    </div>
                                    <div class="col-md-8">
                                        : <b>{{ $PersonalInfo->skin_color }}</b>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h5 class="border-bottom font-italic font-weight-bold pt-2">Others</h5>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-4">
                                        <span for="smoke_status">Do I smoke?</span>
                                    </div>
                                    <div class="col-md-6">
                                        : <b>{{ $PersonalInfo->smoke_status }}</b>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-4">
                                        <span for="alcohol_status">Addicted to alcohol?</span>
                                    </div>
                                    <div class="col-md-6">
                                        : <b>{{ $PersonalInfo->alcohol_status }}</b>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-4">
                                        <span for="disabilities_status">Any disabilities?</span>
                                    </div>
                                    <div class="col-md-6">
                                        : <b>{{ $PersonalInfo->disabilities_status }}</b>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-4">
                                        <span for="do_u_have_children">Have children?</span>
                                    </div>
                                    <div class="col-md-6">
                                        : <b>{{ $PersonalInfo->do_u_have_children }}</b>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-4">
                                        <span for="hear_about_us">Know about us from </span>
                                    </div>
                                    <div class="col-md-6">
                                        : <b>{{ $PersonalInfo->hear_about_us }}</b>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-4">
                                        <span for="diat_status">Diat Status</span>
                                    </div>
                                    <div class="col-md-6">
                                        : <b>{{str_replace('_', ' ', $PersonalInfo->diat_status)}}</b>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <h5 class="border-bottom font-italic font-weight-bold pt-2">language</h5>

                        <div class="row">

                            <div class="col-md-4">
                                <div class="row">
                                    <div class="col-md-6">
                                        <span for="mother_tongue">Mother Tongue</span>
                                    </div>
                                    <div class="col-md-6">
                                        : <b>{{ $PersonalInfo->mother_tongue }}</b>
                                    </div>
                                </div>
                            </div>
                            
     
                            <div class="col-md-8">
                                <span for="hear_about_us">Others Language i know : </span>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-check">
                                            <span class="form-check-label">
                                                <input  type="checkbox"  onclick="return false;"  <?php if (in_array('Bangla',json_decode($PersonalInfo->can_speak))){ echo "checked";} ?> value="Bangla"> Bangla
                                                
                                            </span>
                                        </div>
                                        <div class="form-check">
                                            <span class="form-check-label">
                                                <input type="checkbox"  onclick="return false;"  <?php if (in_array('English',json_decode($PersonalInfo->can_speak))){ echo "checked";} ?> value="English" checked=""> English
                                                
                                            </span>
                                        </div>
                                        <div class="form-check">
                                            <span class="form-check-label">
                                                <input type="checkbox"  onclick="return false;"  <?php if (in_array('Hindi',json_decode($PersonalInfo->can_speak))){ echo "checked";} ?> value="Hindi"> Hindi
                                                
                                            </span>
                                        </div>
                                        <div class="form-check">
                                            <span class="form-check-label">
                                                <input type="checkbox"  onclick="return false;"  <?php if (in_array('Arabic',json_decode($PersonalInfo->can_speak))){ echo "checked";} ?> value="Arabic"> Arabic
                                                
                                            </span>
                                        </div>     
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-check">
                                            <span class="form-check-label">
                                                <input type="checkbox"  onclick="return false;"  <?php if (in_array('Spanish',json_decode($PersonalInfo->can_speak))){ echo "checked";} ?> value="Spanish"> Spanish
                                                
                                            </span>
                                        </div>
                                        <div class="form-check">
                                            <span class="form-check-label">
                                                <input type="checkbox"  onclick="return false;"  <?php if (in_array('German',json_decode($PersonalInfo->can_speak))){ echo "checked";} ?> value="German"> German
                                                
                                            </span>
                                        </div>
                                        <div class="form-check">
                                            <span class="form-check-label">
                                                <input type="checkbox"  onclick="return false;"  <?php if (in_array('Italian',json_decode($PersonalInfo->can_speak))){ echo "checked";} ?> value="Italian"> Italian
                                                
                                            </span>
                                        </div>
                                        <div class="form-check">
                                            <span class="form-check-label">
                                                <input type="checkbox"  onclick="return false;"  <?php if (in_array('Russian',json_decode($PersonalInfo->can_speak))){ echo "checked";} ?> value="Russian"> Russian
                                                
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-check">
                                            <span class="form-check-label">
                                                <input type="checkbox"  onclick="return false;"  <?php if (in_array('Urdu',json_decode($PersonalInfo->can_speak))){ echo "checked";} ?> value="Urdu"> Urdu
                                                
                                            </span>
                                        </div>
                                        <div class="form-check">
                                            <span class="form-check-label">
                                                <input type="checkbox"  onclick="return false;"  <?php if (in_array('Dutch',json_decode($PersonalInfo->can_speak))){ echo "checked";} ?> value="Dutch"> Dutch
                                                
                                            </span>
                                        </div>
                                        <div class="form-check">
                                            <span class="form-check-label">
                                                <input type="checkbox"  onclick="return false;"  <?php if (in_array('Persian',json_decode($PersonalInfo->can_speak))){ echo "checked";} ?> value="Persian"> Persian
                                                
                                            </span>
                                        </div>
                                        <div class="form-check">
                                            <span class="form-check-label">
                                                <input type="checkbox"  onclick="return false;"  <?php if (in_array('Malay_based',json_decode($PersonalInfo->can_speak))){ echo "checked";} ?> value="Malay_based"> Malay based
                                                
                                            </span>
                                        </div> 
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-check">
                                            <span class="form-check-label">
                                                <input type="checkbox"  onclick="return false;"  <?php if (in_array('Chinese',json_decode($PersonalInfo->can_speak))){ echo "checked";} ?> value="Chinese"> Chinese
                                                
                                            </span>
                                        </div>
                                        <div class="form-check">
                                            <span class="form-check-label">
                                                <input type="checkbox"  onclick="return false;"  <?php if (in_array('French',json_decode($PersonalInfo->can_speak))){ echo "checked";} ?> value="French"> French
                                                
                                            </span>
                                        </div>
                                        <div class="form-check">
                                            <span class="form-check-label">
                                                <input type="checkbox"  onclick="return false;"  <?php if (in_array('Tamil',json_decode($PersonalInfo->can_speak))){ echo "checked";} ?> value="Tamil"> Tamil
                                                
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @else
                   <a class="btn btn-sm btn-primary" href="{{route('author.personal-info.create')}}">
                        <i class="nav-icon fas fa-plus"></i> Create
                    </a>
                @endif
            </div>
        </div>
    </div>
</section>
@endsection