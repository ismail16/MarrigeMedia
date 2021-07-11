@extends('admin.layouts.master')
@section('title','Admin | Dashboard')
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-6">
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3> {{ \App\User::orderBy('id', 'desc')->where('role_id', '!=', '1')->count() }}</h3>
                        <p>Members</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <a href="{{ route('admin.user-info.index') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <div class="small-box bg-success">
                    <div class="inner">
                        <h3>{{ \App\Models\SuccessStory::count() }}</h3>
                        <p>Success Stories</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-hands-helping"></i>
                    </div>
                    <a href="{{ route('admin.success-story.index') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>{{ \App\Models\PackagePrice::count() }}</h3>
                        <p>Packages</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-level-up-alt"></i>
                    </div>
                    <a href="{{ route('admin.package-price.index') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <div class="small-box bg-success">
                    <div class="inner">
                        <h3>{{ \App\Models\Contact::count() }}</h3>
                        <p>Recieved Messages</p>
                    </div>
                    <div class="icon">
                        <i class="far fa-comments"></i>
                    </div>
                    <a href="{{ route('admin.message.index') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection