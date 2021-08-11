@extends('frontend.layouts.master')
@section('title','Request for Reset Password')

@section('content')
<section class="hero-wrap" style="background-image: url('https://www.taslimamarriagemedia.com/img/taslima-marriage-media-banner.jpg');">
    <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
            <div class="col-md-6 ftco-animate m-3 bg-dark p-3">


                <h2 class="text-center text-white border-bottom">Request for Reset Password</h2>

                <div class=" p-2">
                    <div class="">
                        <div class="ftco-animate">

                            <form method="POST" action="{{ route('password.email') }}">
                        @csrf



                        <div class="form-group ">
                            <label class="">E-Mail Address</label>

                            <div class="">
                                <input id="email" type="email" class="form-control-sm @error('email') is-invalid @enderror w-100" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                         <button type="submit" class="btn btn-primary">
                                    {{ __('Send Password Reset Link') }}
                                </button>

                    </form>


                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection