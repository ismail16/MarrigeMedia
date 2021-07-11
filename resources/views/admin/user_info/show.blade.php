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
                        @foreach($UserProfileImages as $UserProfileImage)
                            <div class="_col-md-3 p-2 m-2 border">
                                <img src="{{ asset('images/user_profile_image/'.$UserProfileImage->image) }}" class="img-fluid" style="height: 100px;">
                            </div>
                        @endforeach
                    </div>


                    <h5 class="border-bottom font-italic font-weight-bold">Education and Profession</h5>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-4">
                                    <span>Education Level </span>
                                </div> 
                                <div class="col-md-8">
                                    : <b>  {{ $PersonalInfo->education_level }}</b>
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
                                    : <b>{{str_replace('_', ' to ', $PersonalInfo->income)}} </b> Lac
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

                    <div class="card-footer border-top">
                        <form action="{{route('admin.user-info.update', $user->id)}}" method="post"
                          style="display: inline;"
                          onsubmit="return confirm('Are you Sure? Confirming User')">
                            @csrf
                            @method('PUT')
                            <input type="checkbox" name="user_status" value="1" {{ $user->status==1?'checked':'' }}> Confirm User <br>
                            <input type="checkbox" name="PersonalInfo_status" value="1" {{ $PersonalInfo->status==1?'checked':'' }}> Confirm Personal Information <br> 
                            <button class="btn btn-md btn-success" type="submit"> Confirm </button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection