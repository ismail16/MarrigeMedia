@extends('frontend.layouts.master')
@section('title','Sign Up')

@section('content')
<style type="text/css">
    .invalid-feedback {
        margin-top: -.25rem !important;
    }
</style>
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
                <div class="bg-light-green p-3">
                    <h2 class="text-center border-bottom">Register or Sign Up</h2>
                    <div class="form-row">
                        <div class="col-md-6 form-group mb-1">
                            <label class="mb-0 form-label">
                                First name<span class="text-danger">* </span>
                            </label>   
                            <input type="text" name="first_name" id="first_name" class="form-control-sm w-100" placeholder="First Name">
                            <span class="invalid-feedback d-block" id="first_name_err"></span>
                        </div>
                        <div class="col-md-6 form-group mb-1">
                            <label class="mb-0 form-label">
                                Last name<span class="text-danger">* </span>
                            </label>
                            <input type="text" name="last_name" id="last_name" class="form-control-sm w-100" placeholder="Last Name">
                            <span class="invalid-feedback d-block" id="last_name_err"></span>
                        </div>
                        <div class="col-md-4 form-group mb-1">
                            <label class="mb-0 form-label">
                                Email<span class="text-danger">* </span>
                            </label>   
                            <input type="email" name="email" id="email" class="form-control-sm w-100" placeholder="Email" autocomplete="off">
                            <span class="invalid-feedback d-block" id="email_err"></span>
                        </div>
                        <div class="col-md-4 form-group mb-1">
                            <label class="mb-0 form-label">
                                Mobile<span class="text-danger">* </span>
                            </label>
                            <input type="number" name="mobile" id="mobile" class="form-control-sm w-100" placeholder="Mobile">
                            <span class="invalid-feedback d-block" id="mobile_err"></span>
                        </div>

                        <div class="form-group mb-1 col-md-4">
                            <label class="mb-0 form-label">
                                Gender<span class="text-danger">* </span>
                            </label>
                            <select id="gender" name="gender" class="form-control-sm w-100" >
                                <option value="">Select Gender</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                            <span class="invalid-feedback d-block" id="gender_err"></span>
                        </div>

                        <div class="form-group mb-1 col-md-4">
                            <label class="mb-0 form-label">
                                Profession<span class="text-danger">* </span>
                            </label>
                            <select id="profession" name="profession" class="form-control-sm w-100">
                                <option value="">Select Profession</option>
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
                            <span class="invalid-feedback d-block" id="profession_err"></span>
                        </div>

                        <div class="form-group mb-1 col-md-4">
                            <label class="mb-0 form-label">
                                Meretial status<span class="text-danger">* </span>
                            </label>
                            <select id="marital_status" name="marital_status"  class="form-control-sm w-100">
                                <option value="">Select Marital Status</option>
                                <option value="Never_Married">Never Married</option>
                                <option value="Legally_Separated">Legally Separated</option>
                                <option value="Divorced">Divorced</option>
                                <option value="Widowed">Widowed</option>
                                <option value="Anulled">Anulled</option>
                            </select>
                            <span class="invalid-feedback d-block" id="marital_status_err"></span>
                        </div>

                        <div class="col-md-4 form-group mb-1">
                            <label class="mb-0 form-label">
                                Birthday<span class="text-danger">* </span>
                            </label>
                            <input type="date" name="birthday" id="birthday" onchange="date_of_birth_change(event)" class="form-control-sm w-100" placeholder=" ">
                            <span class="invalid-feedback d-block" id="birthday_err"></span>
                        </div>

                        <div class="form-group mb-1 col-md-4">
                            <label class="mb-0 form-label">
                                Country<span class="text-danger">* </span>
                            </label>
                            <select id="country" name="country" class="form-control-sm w-100">
                                <option value="Bangladesh">Bangladesh</option>
                                <option value="Other">Other</option>
                            </select>
                            <span class="invalid-feedback d-block" id="country_err"></span>
                        </div>

                        <div class="form-group mb-1 col-md-4">
                            <label class="mb-0 form-label">
                                City / District<span class="text-danger">* </span>
                            </label>
                            <input type="text" name="district" id="district"  class="form-control-sm w-100" placeholder=" ">
                            <span class="invalid-feedback d-block" id="district_err"></span>
                        </div>

                        <div class="form-group mb-1 col-md-4">
                            <label class="mb-0 form-label">
                                Looking For<span class="text-danger">* </span>
                            </label>
                            <select class="form-control-sm w-100" id="looking_for" name="looking_for">
                                <option value="">Looking For</option>
                                <option value="Bride">Bride (Female)</option>
                                <option value="Groom">Groom (Male)</option>
                            </select>
                            <span class="invalid-feedback d-block" id="looking_for_err"></span>
                        </div>

                        <div class="form-group mb-1 col-md-4">
                            <label class="mb-0 form-label">
                                Religion<span class="text-danger">* </span>
                            </label>
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
                            <span class="invalid-feedback d-block" id="religion_err"></span>
                        </div>

                        <div class="form-group mb-1 col-md-4">
                            <label class="mb-0 form-label">Caste</label>
                           <select class="form-control-sm w-100" id="social_order"  name="social_order">
                                <option value="">Social Order/Caste</option>
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
                            <span class="invalid-feedback d-block" id="social_order_err"></span>
                        </div>

                        <div class="col-md-4 form-group mb-1">
                            <label class="mb-0 form-label">
                                Profile Create By<span class="text-danger">* </span>
                            </label>
                            <select class="form-control-sm w-100" id="createdby" name="createdby"  autocomplete="off">
                                <option value="">Profile Created By</option>
                                <option value="Self">Self</option>
                                <option value="Parent">Parent</option>
                                <option value="Guardian">Guardian</option>
                                <option value="Other">Other</option>
                            </select>
                            <span class="invalid-feedback d-block" id="createdby_err"></span>
                        </div>

                        <!-- <div class="col-md-4 form-group mb-1">
                            <label class="mb-0 form-label">guardian_mobile</label>
                            <input type="text" name="guardian_mobile" class="form-control-sm w-100" placeholder="guardian_mobile">
                        </div> -->

                        <div class="form-group mb-1 col-md-6">
                            <label class="mb-0 form-label">
                                Create password<span class="text-danger">* </span>
                            </label>
                            <input type="password" name="password" id="password" class="form-control-sm w-100">
                            <span class="invalid-feedback d-block" id="password_err"></span>
                        </div>

                        <div class="form-group mb-1 col-md-6">
                            <label class="mb-0 form-label">
                                Re-type password<span class="text-danger">* </span>
                            </label>
                            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control-sm w-100">
                            <span class="invalid-feedback d-block" id="password_confirmation_err"></span>
                        </div>

                        <div class="form-group mb-1 col-md-12">
                            <div class="float-right">
                                <div class="form-check mt-2 mb-2">
                                    <label class="form-check-label form-label">
                                        <input type="checkbox" name="agreement" id="agreement" class="form-check-input">
                                        I agree to the
                                        <a target="_blank" href="{{ route('terms_conditions') }}">terms and conditions</a> <span class="text-danger">* </span>
                                    </label>
                                    <span class="invalid-feedback d-block" id="agreement_err"></span>
                                </div>
                                <button onclick="submit_form()" class="btn btn-primary btn-block"> Register </button>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.js"></script>

<script type="text/javascript">
    function submit_form(){

        var first_name = $("#first_name").val();
        var last_name = $("#last_name").val();
        var email = $("#email").val();
        var mobile = $("#mobile").val();
        var gender = $("#gender").val();
        var gender = $("#gender").val();
        var profession = $("#profession").val();
        var marital_status = $("#marital_status").val();
        var birthday = $("#birthday").val();
        var country = $("#country").val();
        var district = $("#district").val();
        var looking_for = $("#looking_for").val();
        var religion = $("#religion").val();
        var social_order = $("#social_order").val();
        var createdby = $("#createdby").val();
        var password = $("#password").val();
        var password_confirmation = $("#password_confirmation").val();
        if ($('#agreement').is(":checked")) {
            var agreement = 1;
        }else{
            var agreement = '';
        }


        console.log(agreement);

        $.ajax({
            url: "{{route('registration.store')}}",
            method: "POST",
            dataType: "JSON",
            data: {first_name:first_name, last_name:last_name, email:email, mobile:mobile, gender:gender, profession:profession, marital_status:marital_status, birthday:birthday, country:country, district:district, looking_for:looking_for, religion:religion, social_order:social_order, createdby:createdby, password:password, password_confirmation:password_confirmation, agreement:agreement,  _token: '{{csrf_token()}}'},
            success: function (data) {
               window.location.href = "{{ route('verifying_user') }}"
            },

            error: function(response) {
                console.log(response.responseJSON.errors)
                $('#first_name_err').text(response.responseJSON.errors.first_name);
                $('#last_name_err').text(response.responseJSON.errors.last_name);
                $('#email_err').text(response.responseJSON.errors.email);
                $('#mobile_err').text(response.responseJSON.errors.mobile);
                $('#gender_err').text(response.responseJSON.errors.gender);
                $('#profession_err').text(response.responseJSON.errors.profession);
                $('#marital_status_err').text(response.responseJSON.errors.marital_status);
                $('#birthday_err').text(response.responseJSON.errors.birthday);
                $('#country_err').text(response.responseJSON.errors.country);
                $('#district_err').text(response.responseJSON.errors.district);
                $('#looking_for_err').text(response.responseJSON.errors.looking_for);
                $('#religion_err').text(response.responseJSON.errors.religion);
                $('#social_order_err').text(response.responseJSON.errors.social_order);
                $('#createdby_err').text(response.responseJSON.errors.createdby);
                $('#password_err').text(response.responseJSON.errors.password);
                $('#password_confirmation_err').text(response.responseJSON.errors.password_confirmation);
                $('#agreement_err').text(response.responseJSON.errors.agreement);
            }
        });
    }
// first_name last_name email mobile gender profession marital_status birthday country district looking_for religion social_order createdby password password_confirmation agreement

    // *****************Validation******************
    function date_of_birth_change(e){
        if (e.target.value) {
            $('#birthday_err').text('');
        }else{
            $('#birthday_err').text("The Birthday field is required.");
        }
    }
    $("#first_name").keyup(function () {
        if ($(this).val()) {
            $('#first_name_err').text('');
        }else{
            $('#first_name_err').text("The First Name is required.");
        }
    });
    $("#last_name").keyup(function () {
        if ($(this).val()) {
            $('#last_name_err').text('');
        }else{
            $('#last_name_err').text("The Last Name is required.");
        }
    });
    $("#email").keyup(function () {
        if ($(this).val()) {
            $('#email_err').text('');
        }else{
            $('#email_err').text("The Email is required.");
        }
    });
    $("#mobile").keyup(function () {
        if ($(this).val()) {
            $('#mobile_err').text('');
        }else{
            $('#mobile_err').text("The Mobile is required.");
        }
    });
    $("#gender").change(function () {
        if ($(this).val()) {
            $('#gender_err').text('');
        }else{
            $('#gender_err').text("The Gender is required.");
        }
    });
    $("#profession").change(function () {
        if ($(this).val()) {
            $('#profession_err').text('');
        }else{
            $('#profession_err').text("The Profession is required.");
        }
    });
    $("#marital_status").change(function () {
        if ($(this).val()) {
            $('#marital_status_err').text('');
        }else{
            $('#marital_status_err').text("The Marital Status is required.");
        }
    });
    $("#country").keyup(function () {
        if ($(this).val()) {
            $('#country_err').text('');
        }else{
            $('#country_err').text("The Country is required.");
        }
    });
    $("#district").keyup(function () {
        if ($(this).val()) {
            $('#district_err').text('');
        }else{
            $('#district_err').text("The District is required.");
        }
    });
    $("#looking_for").change(function () {
        if ($(this).val()) {
            $('#looking_for_err').text('');
        }else{
            $('#looking_for_err').text("The Looking for is required.");
        }
    });
    $("#religion").change(function () {
        if ($(this).val()) {
            $('#religion_err').text('');
        }else{
            $('#religion_err').text("The Religion is required.");
        }
    });
    $("#social_order").change(function () {
        if ($(this).val()) {
            $('#social_order_err').text('');
        }else{
            $('#social_order_err').text("The Social Order is required.");
        }
    });
    $("#createdby").change(function () {
        if ($(this).val()) {
            $('#createdby_err').text('');
        }else{
            $('#createdby_err').text("The Createdby is required.");
        }
    });
    $("#password").keyup(function () {
        if ($(this).val()) {
            $('#password_err').text('');
        }else{
            $('#password_err').text("The Password is required.");
        }
    });
    $("#password_confirmation").keyup(function () {
        if ($(this).val()) {
            $('#password_confirmation_err').text('');
        }else{
            $('#password_confirmation_err').text("The Password Confirmation is required.");
        }
    });
    $("#agreement").click(function () {
        if ($('#agreement').is(":checked")) {
            $('#agreement_err').text('');
        }else{
            $('#agreement_err').text("The Agreement is required.");
        }
    });

</script>
@endpush