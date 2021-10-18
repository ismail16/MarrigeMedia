@extends('admin.layouts.master')
@section('title','Show Profile Image')

@push('css')
    <link rel="stylesheet" href="{{asset('backend_assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('backend_assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
@endpush

@section('content')
<section class="content session_contect">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                @include('admin.partials.progress_message')
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
                    @foreach($UserProfileImages as $UserProfileImage)
                    <div class="col-md-4 d-flex justify-content-center">
                        <div class="container">
                        <div class="row">
                            <div class="col-md-12 text-center border">
                                <img height="200" src="{{asset('images/user_profile_image/'.$UserProfileImage->image)}}"
                                     alt="{{$UserProfileImage->image}}">
                            </div>
                            <div class="col-md-12 border text-center">
                                @if($UserProfileImage->status == 0 )
                                    <button class="btn btn-xs bg-red-active"><i class="fa fa-times-circle"></i> Not Show Public</button>
                                @else
                                    <button class="btn btn-xs bg-green-active"><i class="fa fa-check-circle"></i> Show Public</button>
                                @endif
                                <a href="/admin/user-info/{{$UserProfileImage->user_id}}/images/{{$UserProfileImage->id}}/edit"
                                   class="btn btn-xs btn-success"><i class="fa fa-edit"></i></a>
                                <form action="/admin/user-info/{{$UserProfileImage->user_id}}/images/{{$UserProfileImage->id}}" method="post"
                                      style="display: inline;"
                                      onsubmit="return confirm('Are you Sure? Want to delete')">
                                    @csrf
                                    @method('DELETE')
                                    <input type="hidden" name="image_id" value="{{$UserProfileImage->id}}">
                                    <button class="btn btn-xs btn-danger" type="submit"><i class="fa fa-trash"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                        </div>
                    </div>
                    @endforeach
                    <div class="col-md-4 d-flex align-items-center">
                        <div class="p-5">
                            <a href="/admin/user-info/{{$user->id}}/images/create" class="btn btn-lg btn-primary"> 
                            <i class="fa fa-plus"></i> Add New Image
                            </a>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </div>
</section>
@endsection


@push('scripts')
    <script src="{{asset('backend_assets/plugins/datatables/jquery.dataTables.js')}}"></script>
    <script src="{{asset('backend_assets/plugins/datatables-bs4/js/dataTables.bootstrap4.js')}}"></script>
    <script>
        $(function () {
            $('#example1').DataTable();
        })
    </script>

@endpush