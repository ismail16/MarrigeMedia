@extends('author.layouts.master')
@section('title','Author | Basic Info')
@section('content')
@php include(app_path().'/data/temp_data.php'); @endphp
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
                            <div >
                                <h4>Sent Message</h4>
                            </div>
                        </div> 
                        <div class="card-body pt-2 bg-light-green">
                            <form action="{{route('admin.marriage_info_update', $user->id)}}" method="post" enctype="multipart/form-data">
                                @method('PUT')
                                @csrf
                                <div class="row d-flex justify-content-center">
                                
                                 <div class="col-md-6">
                                        <div class="div">
                                            <input type="checkbox" name="user_status" value="5">
                                            <label for="status"> Marriage Completed</label><br>
                                        </div>
                                        <div class="ml-2">
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