@extends('frontend.layouts.master')
@section('title','Sign Up')

@section('content')
<section class="hero-wrap" style="background-image: url('https://www.taslimamarriagemedia.com/img/taslima-marriage-media-banner.jpg');">
    <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
           
            <div class="col-md-9 ftco-animate m-3">
                 @if ($errors->any())
                    <div class="alert alert-danger">
                            @foreach ($errors->all() as $error)
                                <span class="badge badge-danger">{{ $error }}</span>
                            @endforeach
                    </div>
                @endif
                <form action="{{route('registration.store')}}" method="post" enctype="multipart/form-data" class="bg-light-green p-3">
                    @csrf
                    <h2 class="text-center border-bottom">Register or Sign Up</h2>
                    <div class="form-row">
                        <div class="col-md-6 form-group mb-1">
                            <label class="mb-0 form-label">First name </label>   
                            <input type="text" name="first_name" class="form-control-sm w-100" placeholder="First Name">
                        </div>
                        <div class="col-md-6 form-group mb-1">
                            <label class="mb-0 form-label">Last name</label>
                            <input type="text" name="last_name" class="form-control-sm w-100" placeholder="Last Name">
                        </div>
                        <div class="col-md-4 form-group mb-1">
                            <label class="mb-0 form-label">Email address</label>   
                            <input type="email" name="email" class="form-control-sm w-100" placeholder="Email" autocomplete="off">
                        </div>
                        <div class="col-md-4 form-group mb-1">
                            <label class="mb-0 form-label">mobile</label>
                            <input type="text" name="mobile" class="form-control-sm w-100" placeholder="Mobile">
                        </div>

                        <div class="form-group mb-1 col-md-4">
                            <label class="mb-0 form-label">Gender</label>
                            <select id="gender" name="gender" class="form-control-sm w-100" >
                                <option value="">Select Gender *</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>

                        <div class="form-group mb-1 col-md-4">
                            <label class="mb-0 form-label">Profession</label>
                            <select id="profession" name="profession" class="form-control-sm w-100">
                                <option value="">Select Profession *</option>
                                <option value="Acting professional">Acting professional</option>
                                <option value="Accountant">Accountant</option>
                                <option value="Administration professional">Administration professional</option>
                                <option value="Advertising professional">Advertising professional</option>
                                <option value="Air Hostess">Air Hostess</option>
                                <option value="Airline">Airline</option>
                                <option value="Architect">Architect</option>
                                <option value="Artisan">Artisan</option>
                                <option value="Audiologist">Audiologist</option>
                                <option value="Biologist\Botanist">Biologist\Botanist</option>
                                <option value="Business Person">Business Person</option>
                                <option value="Beautician">Beautician</option>
                                <option value="Banker">Banker</option>
                                <option value="Business">Business</option>
                                <option value="Computer professional">Computer professional</option>
                                <option value="Contractor">Contractor</option>
                                <option value="Creative person">Creative person</option>
                                <option value="Chartered Accountant">Chartered Accountant</option>
                                <option value="Customer Support">Customer Support</option>
                                <option value="Doctor">Doctor</option>
                                <option value="Dentist">Dentist</option>
                                <option value="Defense">Defense (Officer)</option>
                                <option value="Defense">Defense (Soldier)</option>
                                <option value="Designer">Designer</option>
                                <option value="EngineerSoftware">Software Engineer</option>
                                <option value="EngineerMechanical">Engineer (Mechanical)</option>
                                <option value="EngineerTextail">Engineer (Textail)</option>
                                <option value="EngineerProject">Engineer (Project)</option>
                                <option value="EngineerCivil">Engineer (Civil)</option>
                                <option value="EngineerCivil">Engineer (Others)</option>
                                <option value="Event Manager">Event Manager</option>
                                <option value="Executive">Executive</option>
                                <option value="Economist">Economist</option>
                                <option value="Fashion Designer">Fashion Designer</option>
                                <option value="Finance Professional">Finance Professional</option>
                                <option value="Factory Worker">Factory Worker</option>
                                <option value="Farmer">Farmer</option>
                                <option value="Flight Attendant">Flight Attendant</option>
                                <option value="government">Government service</option>
                                <option value="Government Employee">Government Employee</option>
                                <option value="Health Care Professional">Health Care Professional</option>
                                <option value="Home Maker">Home Maker</option>
                                <option value="Hotel & Restaurant Professional">Hotel & Restaurant Professional</option>
                                <option value="HR Professional">HR Professional</option>
                                <option value="Interior Designer">Interior Designer</option>
                                <option value="IT/Telecom Profession">IT/Telecom Profession</option>
                                <option value="Investment Professional">Investment Professional</option>
                                <option value="Journalist">Journalist</option>
                                <option value="Legal Professional">Legal Professional</option>
                                <option value="Lawyer">Lawyer</option>
                                <option value="Lecturer">Lecturer</option>
                                <option value="Manager">Manager</option>
                                <option value="Marketing Professional">Marketing Professional</option>
                                <option value="Media Professional">Media Professional</option>
                                <option value="Medical Professional">Medical Professional</option>
                                <option value="Merchandiser">Merchandiser</option>
                                <option value="Merchant Naval Officer">Merchant Naval Officer</option>
                                <option value="Medical Transcriptionist">Medical Transcriptionist</option>
                                <option value="Nurse">Nurse</option>
                                <option value="Not Working">Not Working</option>
                                <option value="Non-mainstream professional">Non-mainstream professional</option>
                                <option value="Occupational Therapist">Occupational Therapist</option>
                                <option value="Others">Others</option>
                                <option value="Pharmacist">Pharmacist</option>
                                <option value="Physician Assistant">Physician Assistant</option>
                                <option value="Private Service">Private Service</option>
                                <option value="Production Professional">Production Professional</option>
                                <option value="Professor">Professor</option>
                                <option value="Public Relations Professional">Public Relations Professional</option>
                                <option value="Physiotherapist">Physiotherapist</option>
                                <option value="Politician">Politician</option>
                                <option value="Physicist">Physicist</option>
                                <option value="Pilot">Pilot</option>
                                <option value="Real Estate Professional">Real Estate Professional</option>
                                <option value="Research Scholar">Research Scholar</option>
                                <option value="Retail Professional">Retail Professional</option>
                                <option value="Retired Person">Retired Person</option>
                                <option value="Scientist">Scientist</option>
                                <option value="Sales Professional">Sales Professional</option>
                                <option value="Software Consuitant">Software Consuitant</option>
                                <option value="Sports Man">Sports Man</option>
                                <option value="Self-employed person">Self-employed person</option>
                                <option value="Social Worker">Social Worker</option>
                                <option value="Student">Student</option>
                                <option value="Technician">Technician</option>
                                <option value="Training Professional">Training Professional</option>
                                <option value="Teacher">Teacher</option>
                                <option value="Transportation">Transportation professional</option>
                                <option value="Voiunteer">Voiunteer</option>
                                <option value="Veterinary Doctor">Veterinary Doctor</option>
                                <option value="Working Abroad">Working Abroad</option>
                                <option value="Writer">Writer</option>
                                <option value="Zoologist">Zoologist</option>                                
                            </select>
                        </div>

                        <div class="form-group mb-1 col-md-4">
                            <label class="mb-0 form-label">Meretial status</label>
                            <select id="marital_status" name="marital_status"  class="form-control-sm w-100">
                                <option value="">Select Marital Status *</option>
                                <option value="Never_Married">Never Married</option>
                                <option value="Legally_Separated">Legally Separated</option>
                                <option value="Divorced">Divorced</option>
                                <option value="Widowed">Widowed</option>
                                <option value="Anulled">Anulled</option>
                            </select>
                        </div>

                        <div class="col-md-4 form-group mb-1">
                            <label class="mb-0 form-label">Birthday</label>
                            <input type="date" name="birthday" class="form-control-sm w-100" placeholder=" ">
                        </div>

                        <div class="form-group mb-1 col-md-4">
                            <label class="mb-0 form-label">Country</label>
                            <select id="country" name="country" class="form-control-sm w-100">
                                <option value="Bangladesh">Bangladesh</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>

                        <div class="form-group mb-1 col-md-4">
                            <label class="mb-0 form-label">City / District</label>
                            <input type="text" name="district"  class="form-control-sm w-100" placeholder=" ">
                        </div>

                        <div class="form-group mb-1 col-md-4">
                            <label class="mb-0 form-label">Looking For</label>
                            <select class="form-control-sm w-100" id="looking_for" name="looking_for">
                                <option value="">Looking For *</option>
                                <option value="Bride">Bride (Female)</option>
                                <option value="Groom">Groom (Male)</option>
                            </select>
                        </div>

                        <div class="form-group mb-1 col-md-4">
                            <label class="mb-0 form-label">Religion</label>
                                <select class="form-control-sm w-100"  id="religion" name="religion">
                                    <option value="">Religion/Community *</option>
                                    <option value="Islam">Islam</option>
                                    <option value="Hindu">Hindu</option>
                                    <option value="Christian">Christian</option>
                                    <option value="Buddhist">Buddhist</option>
                                    <option value="Sikh">Sikh</option>
                                    <option value="Parsi">Parsi</option>
                                    <option value="Jain">Jain</option>
                                    <option value="Jewish">Jewish</option>
                                    <option value="Spiritual">Spiritual</option>
                                    <option value="No_Religion">No Religion</option>
                                </select>
                        </div>

                        <div class="form-group mb-1 col-md-4">
                            <label class="mb-0 form-label">Caste</label>
                           <select class="form-control-sm w-100" id="social_order"  name="social_order">
                                <option value="">Social Order/Caste *</option>
                                <option value="Just_Muslim">Just Muslim</option>
                                <option value="Salafi">Salafi</option>
                                <option value="Sunni">Sunni</option>
                                <option value="Sunni_Hanafi">Sunni Hanafi</option>
                                <option value="Sunni_Shafi">Sunni Shafi</option>
                                <option value="Sunni_Maliki">Sunni Maliki</option>
                                <option value="Sufi">Sufi</option>
                                <option value="Shia">Shia</option>
                                <option value="Shia_Bohra">Shia Bohra</option>
                                <option value="Shia_Zaidi">Shia Zaidi</option>
                                <option value="Brahmin">Brahmin</option>
                                <option value="Kshatriyas">Kshatriyas</option>
                                <option value="Vaisyas">Vaisyas</option>
                                <option value="Shudras">Shudras</option>
                            </select>
                        </div>

                        <div class="col-md-4 form-group mb-1">
                            <label class="mb-0 form-label">Profile Create By</label>
                            <select class="form-control-sm w-100" id="createdby" name="createdby"  autocomplete="off">
                                <option value="">Profile Created By *</option>
                                <option value="Self">Self</option>
                                <option value="Parent">Parent</option>
                                <option value="Guardian">Guardian</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>

                        <!-- <div class="col-md-4 form-group mb-1">
                            <label class="mb-0 form-label">guardian_mobile</label>
                            <input type="text" name="guardian_mobile" class="form-control-sm w-100" placeholder="guardian_mobile">
                        </div> -->

                        <div class="form-group mb-1 col-md-6">
                            <label class="mb-0 form-label">Create password</label>
                            <input type="password" name="password" class="form-control-sm w-100">
                        </div>

                        <div class="form-group mb-1 col-md-6">
                            <label class="mb-0 form-label">Re-type password</label>
                            <input type="password" name="password_confirmation" class="form-control-sm w-100">
                        </div>

                        <div class="form-group mb-1 col-md-12">
                            <div class="float-right">
                                <div class="form-check mt-2 mb-2">
                                    <label class="form-check-label form-label">
                                        <input type="checkbox" name="agreement" class="form-check-input">
                                        I agree to the
                                        <a target="_blank" href="{{ route('terms_conditions') }}">terms and conditions</a>
                                    </label>
                                </div>
                                <button type="submit" class="btn btn-primary btn-block"> Register </button>
                            </div>
                        </div>
                    </div> 
                </form>
            </div>
        </div>
    </div>
</section>

@endsection
