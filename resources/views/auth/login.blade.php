@extends('frontend.layouts.master')
@section('title','Login')

@section('content')
<section class="hero-wrap" style="background-image: url('https://www.taslimamarriagemedia.com/img/taslima-marriage-media-banner.jpg');">
    <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
            <div class="col-md-4 ftco-animate m-3 bg-light-green p-3">

                <h2 class="text-center border-bottom form-label">Login</h2>

                <div class=" p-2">
                    <!-- <div class="icon d-flex justify-content-center align-items-center">
                        <i class="h1 fas fa-heart form-label"></i>
                    </div> -->
                    <div class="">
                        <div class="ftco-animate">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <div class="form-group">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" name="email" class="form-control-sm w-100" placeholder="Enter email" id="email">
                                </div>
                                <div class="form-group">
                                    <label for="pwd" class="form-label">Password:</label>
                                    <input type="password" name="password" class="form-control-sm w-100" placeholder="Enter password" id="pwd">
                                </div>

                                <div class="form-group form-check">
                                    <label class="form-check-label form-label">
                                        <input class="form-check-input" type="checkbox"> Remember me
                                    </label>

                                    <button type="submit" class="btn btn-sm btn-primary mr-2 float-right">Login</button>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-7">
                                        <a href="{{ route('password.request') }}" class="">Forgot Password</a>
                                    </div>
                                    <div class="col-md-5 text-right">
                                        <a href="{{ route('register') }}">Sign UP</a>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection