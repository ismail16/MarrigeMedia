@extends('frontend.layouts.master')
@section('title', 'User verified')
@section('content')
    <div id="content" class="container">
        <div class="row d-flex justify-content-center">
            <div id="myJournals" class="col-lg-8 col-sm-12 mb-2">
                <div class="card mt-4">
                    <h4 class="card-header"><strong>Marriage Gate</strong></h4>
                    <div id="myAccount" class="card-body text-center">
                        <h4 class="text-warning">The link you try to verify with your account that may have been already verified or expired. <br> You may <a href="{{route('login')}}" class="btn btn-primary">Loign</a> now.</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')

@endpush
