@extends('author.layouts.master')
@section('title','Author | Basic Info')
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                @include('author.partials.sidebar')
            </div>
            <div class="col-md-9">
        <div class="row">
            <div class="col-md-12">
                <div class="card card mt-2 mb-2 bg-light-green">
                    <div class="">
                        @if ($errors->any())
                            <div class="alert">
                                @foreach ($errors->all() as $error)
                                <span class="badge badge-danger">{{ $error }}</span>
                                @endforeach
                            </div>
                        @endif
                        <div class="card-header pb-0 pt-2">
                            <div class="">
                                <a class="float-right btn btn-sm btn-primary" href="{{route('member.basic-info.edit', $user->id)}}">
                                    <i class="nav-icon fas fa-edit"></i> Edit
                                </a>
                            </div>
                            <div >
                                <h4>Sent Message</h4>
                            </div>
                        </div> 
                        <div class="card-body pt-2 bg-light-green">
                            <form action="{{route('member.basic-info.update', $user->id)}}" method="post" enctype="multipart/form-data">
                                @method('PUT')
                                @csrf
                                <div class="form-row">
                                    <div class="col-md-6 form-group mb-1">
                                        <label class="mb-0 form-label">First name *</label>   
                                        <input type="text" name="first_name" value="{{$user->first_name}}" class="form-control-sm w-100" placeholder="First Name">
                                    </div>
                                    <div class="col-md-6 form-group mb-1">
                                        <label class="mb-0 form-label">Last name *</label>
                                        <input type="text" name="last_name" value="{{$user->last_name}}" class="form-control-sm w-100" placeholder="Last Name">
                                    </div>
                                    <div class="col-md-4 form-group mb-1">
                                        <label class="mb-0 form-label">Email address *</label>   
                                        <input type="email" name="email" value="{{$user->email}}" class="form-control-sm w-100" placeholder="Email" autocomplete="off">
                                    </div>
                                    <div class="col-md-4 form-group mb-1">
                                        <label class="mb-0 form-label">Mobile *</label>
                                        <input type="text" name="mobile" value="{{$user->mobile}}" class="form-control-sm w-100" placeholder="Mobile">
                                    </div>

                                    <div class="form-group mb-1 col-md-4">
                                        <label class="mb-0 form-label">Gender *</label>
                                        <select id="gender" name="gender" class="form-control-sm w-100" >
                                            <option value="">Select Gender *</option>
                                            <option value="Male" {{ $user->gender == 'Male'?'selected':''}}>Male</option>
                                            <option value="Female" {{ $user->gender == 'Female'?'selected':''}}>Female</option>
                                        </select>
                                    </div>

                                    <div class="form-group mb-1 col-md-4">
                                        <label class="mb-0 form-label">Profession *</label>
                                        <select id="profession" name="profession" class="form-control-sm w-100">
                                            <option value="Acting_professional" {{ $user->profession == 'Acting_professional'?'selected':''}}>Acting professional</option>
                                            <option value="Accountant" {{ $user->profession == 'Accountant'?'selected':''}}>Accountant</option>
                                            <option value="Administration_professional" {{ $user->profession == 'Administration_professional'?'selected':''}}>Administration professional</option>
                                            <option value="Advertising_professional" {{ $user->profession == 'Advertising_professional'?'selected':''}}>Advertising professional</option>
                                            <option value="Air_Hostess" {{ $user->profession == 'Air_Hostess'?'selected':''}}>Air Hostess</option>
                                            <option value="Airline" {{ $user->profession == 'Airline'?'selected':''}}>Airline</option>
                                            <option value="Architect" {{ $user->profession == 'Architect'?'selected':''}}>Architect</option>
                                            <option value="Artisan" {{ $user->profession == 'Artisan'?'selected':''}}>Artisan</option>
                                            <option value="Audiologist" {{ $user->profession == 'Audiologist'?'selected':''}}>Audiologist</option>
                                            <option value="Biologist_Botanist" {{ $user->profession == 'Biologist_Botanist'?'selected':''}}>Biologist\Botanist</option>
                                            <option value="Business_Person" {{ $user->profession == 'Business_Person'?'selected':''}}>Business Person</option>
                                            <option value="Beautician" {{ $user->profession == 'Beautician'?'selected':''}}>Beautician</option>
                                            <option value="Banker" {{ $user->profession == 'Banker'?'selected':''}}>Banker</option>
                                            <option value="Business" {{ $user->profession == 'Business'?'selected':''}}>Business</option>
                                            <option value="Computer_professional" {{ $user->profession == 'Computer_professional'?'selected':''}}>Computer professional</option>
                                            <option value="Contractor" {{ $user->profession == 'Contractor'?'selected':''}}>Contractor</option>
                                            <option value="Creative_person" {{ $user->profession == 'Creative_person'?'selected':''}}>Creative person</option>
                                            <option value="Chartered_Accountant" {{ $user->profession == 'Chartered_Accountant'?'selected':''}}>Chartered Accountant</option>
                                            <option value="Customer_Support" {{ $user->profession == 'Customer_Support'?'selected':''}}>Customer Support</option>
                                            <option value="Doctor" {{ $user->profession == 'Doctor'?'selected':''}}>Doctor</option>
                                            <option value="Dentist" {{ $user->profession == 'Dentist'?'selected':''}}>Dentist</option>
                                            <option value="Defense" {{ $user->profession == 'Defense'?'selected':''}}>Defense (Officer)</option>
                                            <option value="Defense" {{ $user->profession == 'Defense'?'selected':''}}>Defense (Soldier)</option>
                                            <option value="Designer" {{ $user->profession == 'Designer'?'selected':''}}>Designer</option>
                                            <option value="Engineer_Software" {{ $user->profession == 'Engineer_Software'?'selected':''}}>Software Engineer</option>
                                            <option value="Engineer_Mechanical" {{ $user->profession == 'Engineer_Mechanical'?'selected':''}}>Engineer (Mechanical)</option>
                                            <option value="Engineer_Textail" {{ $user->profession == 'Engineer_Textail'?'selected':''}}>Engineer (Textail)</option>
                                            <option value="Engineer_Project" {{ $user->profession == 'Engineer_Project'?'selected':''}}>Engineer (Project)</option>
                                            <option value="Engineer_Civil" {{ $user->profession == 'Engineer_Civil'?'selected':''}}>Engineer (Civil)</option>
                                            <option value="Engineer_others" {{ $user->profession == 'Engineer_others'?'selected':''}}>Engineer (Others)</option>
                                            <option value="Event_Manager" {{ $user->profession == 'Event_Manager'?'selected':''}}>Event Manager</option>
                                            <option value="Executive" {{ $user->profession == 'Executive'?'selected':''}}>Executive</option>
                                            <option value="Economist" {{ $user->profession == 'Economist'?'selected':''}}>Economist</option>
                                            <option value="Fashion_Designer" {{ $user->profession == 'Fashion_Designer'?'selected':''}}>Fashion Designer</option>
                                            <option value="Finance_Professional" {{ $user->profession == 'Finance_Professional'?'selected':''}}>Finance Professional</option>
                                            <option value="Factory_Worker" {{ $user->profession == 'Factory_Worker'?'selected':''}}>Factory Worker</option>
                                            <option value="Farmer" {{ $user->profession == 'Farmer'?'selected':''}}>Farmer</option>
                                            <option value="Flight_Attendant" {{ $user->profession == 'Flight_Attendant'?'selected':''}}>Flight Attendant</option>
                                            <option value="government" {{ $user->profession == 'government'?'selected':''}}>Government service</option>
                                            <option value="Government_Employee" {{ $user->profession == 'Government_Employee'?'selected':''}}>Government Employee</option>
                                            <option value="Health_Care_Professional" {{ $user->profession == 'Health_Care_Professional'?'selected':''}}>Health Care Professional</option>
                                            <option value="Home_Maker" {{ $user->profession == 'Home_Maker'?'selected':''}}>Home Maker</option>
                                            <option value="Hotel_Restaurant_Professional" {{ $user->profession == 'Hotel_Restaurant_Professional'?'selected':''}}>Hotel & Restaurant Professional</option>
                                            <option value="HR_Professional" {{ $user->profession == 'HR_Professional'?'selected':''}}>HR Professional</option>
                                            <option value="Interior_Designer" {{ $user->profession == 'Interior_Designer'?'selected':''}}>Interior Designer</option>
                                            <option value="IT_Telecom_Profession" {{ $user->profession == 'IT_Telecom_Profession'?'selected':''}}>IT/Telecom Profession</option>
                                            <option value="Investment_Professional" {{ $user->profession == 'Investment_Professional'?'selected':''}}>Investment Professional</option>
                                            <option value="Journalist" {{ $user->profession == 'Journalist'?'selected':''}}>Journalist</option>
                                            <option value="Legal_Professional" {{ $user->profession == 'Legal_Professional'?'selected':''}}>Legal Professional</option>
                                            <option value="Lawyer" {{ $user->profession == 'Lawyer'?'selected':''}}>Lawyer</option>
                                            <option value="Lecturer" {{ $user->profession == 'Lecturer'?'selected':''}}>Lecturer</option>
                                            <option value="Manager" {{ $user->profession == 'Manager'?'selected':''}}>Manager</option>
                                            <option value="Marketing_Professional" {{ $user->profession == 'Marketing_Professional'?'selected':''}}>Marketing Professional</option>
                                            <option value="Media_Professional" {{ $user->profession == 'Media_Professional'?'selected':''}}>Media Professional</option>
                                            <option value="Medical_Professional" {{ $user->profession == 'Medical_Professional'?'selected':''}}>Medical Professional</option>
                                            <option value="Merchandiser" {{ $user->profession == 'Merchandiser'?'selected':''}}>Merchandiser</option>
                                            <option value="Merchant_Naval_Officer" {{ $user->profession == 'Merchant_Naval_Officer'?'selected':''}}>Merchant Naval Officer</option>
                                            <option value="Medical_Transcriptionist" {{ $user->profession == 'Medical_Transcriptionist'?'selected':''}}>Medical Transcriptionist</option>
                                            <option value="Nurse" {{ $user->profession == 'Nurse'?'selected':''}}>Nurse</option>
                                            <option value="Not_Working" {{ $user->profession == 'Not_Working'?'selected':''}}>Not Working</option>
                                            <option value="Non_mainstream_professional" {{ $user->profession == 'Non_mainstream_professional'?'selected':''}}>Non-mainstream professional</option>
                                            <option value="Occupational_Therapist" {{ $user->profession == 'Occupational_Therapist'?'selected':''}}>Occupational Therapist</option>
                                            <option value="Others" {{ $user->profession == 'Others'?'selected':''}}>Others</option>
                                            <option value="Pharmacist" {{ $user->profession == 'Pharmacist'?'selected':''}}>Pharmacist</option>
                                            <option value="Physician_Assistant" {{ $user->profession == 'Physician_Assistant'?'selected':''}}>Physician Assistant</option>
                                            <option value="Private_Service" {{ $user->profession == 'Private_Service'?'selected':''}}>Private Service</option>
                                            <option value="Production_Professional" {{ $user->profession == 'Production_Professional'?'selected':''}}>Production Professional</option>
                                            <option value="Professor" {{ $user->profession == 'Professor'?'selected':''}}>Professor</option>
                                            <option value="Public_Relations_Professional" {{ $user->Public_Relations_Professional == 'Public_Relations_Professional'?'selected':''}}>Public Relations Professional</option>
                                            <option value="Physiotherapist" {{ $user->profession == 'Physiotherapist'?'selected':''}}>Physiotherapist</option>
                                            <option value="Politician" {{ $user->profession == 'Politician'?'selected':''}}>Politician</option>
                                            <option value="Physicist" {{ $user->profession == 'Physicist'?'selected':''}}>Physicist</option>
                                            <option value="Pilot" {{ $user->profession == 'Pilot'?'selected':''}}>Pilot</option>
                                            <option value="Real_Estate_Professional" {{ $user->profession == 'Real_Estate_Professional'?'selected':''}}>Real Estate Professional</option>
                                            <option value="Research_Scholar" {{ $user->profession == 'Research_Scholar'?'selected':''}}>Research Scholar</option>
                                            <option value="Retail_Professional" {{ $user->profession == 'Retail_Professional'?'selected':''}}>Retail Professional</option>
                                            <option value="Retired_Person" {{ $user->profession == 'Retired_Person'?'selected':''}}>Retired Person</option>
                                            <option value="Scientist" {{ $user->profession == 'Scientist'?'selected':''}}>Scientist</option>
                                            <option value="Sales_Professional" {{ $user->profession == 'Sales_Professional'?'selected':''}}>Sales Professional</option>
                                            <option value="Software_Consuitant" {{ $user->profession == 'Software_Consuitant'?'selected':''}}>Software Consuitant</option>
                                            <option value="Sports_Man" {{ $user->profession == 'Sports_Man'?'selected':''}}>Sports Man</option>
                                            <option value="Self_employed_person" {{ $user->profession == 'Self_employed_person'?'selected':''}}>Self-employed person</option>
                                            <option value="Social_Worker" {{ $user->profession == 'Social_Worker'?'selected':''}}>Social Worker</option>
                                            <option value="Student" {{ $user->profession == 'Student'?'selected':''}}>Student</option>
                                            <option value="Technician" {{ $user->profession == 'Technician'?'selected':''}}>Technician</option>
                                            <option value="Training_Professional" {{ $user->profession == 'Training_Professional'?'selected':''}}>Training Professional</option>
                                            <option value="Teacher" {{ $user->profession == 'Teacher'?'selected':''}}>Teacher</option>
                                            <option value="Transportation" {{ $user->profession == 'Transportation'?'selected':''}}>Transportation professional</option>
                                            <option value="Voiunteer" {{ $user->profession == 'Voiunteer'?'selected':''}}>Voiunteer</option>
                                            <option value="Veterinary_Doctor" {{ $user->profession == 'Veterinary_Doctor'?'selected':''}}>Veterinary Doctor</option>
                                            <option value="Working_Abroad" {{ $user->profession == 'Working_Abroad'?'selected':''}}>Working Abroad</option>
                                            <option value="Writer" {{ $user->profession == 'Writer'?'selected':''}}>Writer</option>
                                            <option value="Zoologist" {{ $user->profession == 'Zoologist'?'selected':''}}>Zoologist</option>                                
                                        </select>
                                    </div>

                                    <div class="form-group mb-1 col-md-4">
                                        <label class="mb-0 form-label">Meretial status</label>
                                        <select id="marital_status" name="marital_status"  class="form-control-sm w-100">
                                            <option value="">Select Marital Status *</option>
                                            <option value="Never_Married" {{ $user->marital_status == 'Never_Married'?'selected':''}}>Never Married</option>
                                            <option value="Legally_Separated" {{ $user->marital_status == 'Legally_Separated'?'selected':''}}>Legally Separated</option>
                                            <option value="Divorced" {{ $user->marital_status == 'Divorced'?'selected':''}}>Divorced</option>
                                            <option value="Widowed" {{ $user->marital_status == 'Widowed'?'selected':''}}>Widowed</option>
                                            <option value="Anulled" {{ $user->marital_status == 'Anulled'?'selected':''}}>Anulled</option>
                                        </select>
                                    </div>

                                    <div class="col-md-4 form-group mb-1">
                                        <label class="mb-0 form-label">Birthday</label>
                                        <input type="text" name="birthday" value="{{ $user->birthday }}" class="form-control-sm w-100" placeholder=" ">
                                    </div>

                                    <div class="form-group mb-1 col-md-4">
                                        <label class="mb-0 form-label">Country</label>
                                        <select id="country" name="country" class="form-control-sm w-100">
                                            <option value="Bangladesh" {{ $user->country == 'Bangladesh'?'selected':''}}>Bangladesh</option>
                                            <option value="Other" {{ $user->country == 'Other'?'selected':''}}>Other</option>
                                        </select>
                                    </div>

                                    <div class="form-group mb-1 col-md-4">
                                        <label class="mb-0 form-label">City / District</label>
                                        <input type="text" name="district" value="{{ $user->district }}"  class="form-control-sm w-100" placeholder=" ">
                                    </div>

                                    <div class="form-group mb-1 col-md-4">
                                        <label class="mb-0 form-label">Looking For</label>
                                        <select class="form-control-sm w-100" id="looking_for" name="looking_for">
                                            <option value="">Looking For *</option>
                                            <option value="Bride" {{ $user->looking_for == 'Bride'?'selected':''}}>Bride (Female)</option>
                                            <option value="Groom" {{ $user->looking_for == 'Groom'?'selected':''}}>Groom (Male)</option>
                                        </select>
                                    </div>

                                    <div class="form-group mb-1 col-md-4">
                                        <label class="mb-0 form-label">Religion</label>
                                        <select class="form-control-sm w-100"  id="religion" name="religion">
                                            <option value="">Religion/Community *</option>
                                            <option value="Islam" {{ $user->religion == 'Islam'?'selected':''}}>Islam</option>
                                            <option value="Hindu" {{ $user->religion == 'Hindu'?'selected':''}}>Hindu</option>
                                            <option value="Christian" {{ $user->religion == 'Christian'?'selected':''}}>Christian</option>
                                            <option value="Buddhist" {{ $user->religion == 'Buddhist'?'selected':''}}>Buddhist</option>
                                            <option value="Sikh" {{ $user->religion == 'Sikh'?'selected':''}}>Sikh</option>
                                            <option value="Parsi" {{ $user->religion == 'Parsi'?'selected':''}}>Parsi</option>
                                            <option value="Jain" {{ $user->religion == 'Jain'?'selected':''}}>Jain</option>
                                            <option value="Jewish" {{ $user->religion == 'Jewish'?'selected':''}}>Jewish</option>
                                            <option value="Spiritual" {{ $user->religion == 'Spiritual'?'selected':''}}>Spiritual</option>
                                            <option value="No_Religion" {{ $user->religion == 'No_Religion'?'selected':''}}>No Religion</option>
                                        </select>
                                    </div>

                                    <div class="form-group mb-1 col-md-4">
                                        <label class="mb-0 form-label">Caste</label>
                                        <select class="form-control-sm w-100" id="social_order"  name="social_order">
                                            <option value="">Social Order/Caste *</option>
                                            <option value="Just_Muslim" {{ $user->social_order == 'Just_Muslim'?'selected':''}}>Just Muslim</option>
                                            <option value="Salafi" {{ $user->social_order == 'Salafi'?'selected':''}}>Salafi</option>
                                            <option value="Sunni" {{ $user->social_order == 'Sunni'?'selected':''}}>Sunni</option>
                                            <option value="Sunni_Hanafi" {{ $user->social_order == 'Sunni_Hanafi'?'selected':''}}>Sunni Hanafi</option>
                                            <option value="Sunni_Shafi" {{ $user->social_order == 'Sunni_Shafi'?'selected':''}}>Sunni Shafi</option>
                                            <option value="Sunni_Maliki" {{ $user->social_order == 'Sunni_Maliki'?'selected':''}}>Sunni Maliki</option>
                                            <option value="Sufi" {{ $user->social_order == 'Sufi'?'selected':''}}>Sufi</option>
                                            <option value="Shia" {{ $user->social_order == 'Shia'?'selected':''}}>Shia</option>
                                            <option value="Shia_Bohra" {{ $user->social_order == 'Shia_Bohra'?'selected':''}}>Shia Bohra</option>
                                            <option value="Shia_Zaidi" {{ $user->social_order == 'Shia_Zaidi'?'selected':''}}>Shia Zaidi</option>
                                            <option value="Brahmin" {{ $user->social_order == 'Brahmin'?'selected':''}}>Brahmin</option>
                                            <option value="Kshatriyas" {{ $user->social_order == 'Kshatriyas'?'selected':''}}>Kshatriyas</option>
                                            <option value="Vaisyas" {{ $user->social_order == 'Vaisyas'?'selected':''}}>Vaisyas</option>
                                            <option value="Shudras" {{ $user->social_order == 'Shudras'?'selected':''}}>Shudras</option>
                                        </select>
                                    </div>

                                    <div class="col-md-4 form-group mb-1">
                                        <label class="mb-0 form-label">Profile Create By</label>
                                        <select class="form-control-sm w-100" id="createdby" name="createdby"  autocomplete="off">
                                            <option value="">Profile Created By *</option>
                                            <option value="Self" {{ $user->createdby == 'Self'?'selected':''}}>Self</option>
                                            <option value="Parent" {{ $user->createdby == 'Parent'?'selected':''}}>Parent</option>
                                            <option value="Guardian" {{ $user->createdby == 'Guardian'?'selected':''}}>Guardian</option>
                                            <option value="Other" {{ $user->createdby == 'Other'?'selected':''}}>Other</option>
                                        </select>
                                    </div>
                                    <div class="form-group mb-1 col-md-6">
                                        <label class="mb-0 form-label">Insert New password (If you want to Update Password)</label>
                                        <input type="password" name="password" class="form-control-sm w-100" autocomplete="off">
                                    </div>

                                    <div class="form-group mb-1 col-md-6">
                                        <div class="ml-2">
                                            <div class="form-check mt-4 mb-2">
                                                <label class="form-check-label ml-2">
                                                    <input type="checkbox" value="1" name="agreement" class="form-check-input" checked disabled>
                                                    I agree to the
                                                    <a target="_blank" href="#" style="color:#D52379">terms and conditions</a>
                                                </label>
                                            </div>
                                            <button type="submit" class="btn btn-primary btn-block">
                                                <i class="nav-icon fas fa-sync"></i> Update 
                                            </button>
                                        </div>
                                    </div>
                                </div> 
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
</section>
@endsection