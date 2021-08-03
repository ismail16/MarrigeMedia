@extends('author.layouts.master')
@section('title','Image request')

@push('css')
    <link rel="stylesheet" href="{{asset('backend_assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('backend_assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
@endpush

@section('content')
<section class="content session_contect">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                @include('author.partials.sidebar')
            </div>
            <div class="col-md-9">
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
                    <div class="col-md-12">
                        <div class="card mt-2 mb-2 bg-light-green">
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped bg-light">
                                    <thead>
                                        <tr>
                                            <th class="form-label">S.N</th>
                                            <th class="form-label">Name</th>
                                            <th class="form-label">Image</th>
                                            <th class="form-label">Status</th>
                                            <th class="form-label">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach($image_access as $image_acces)
                                            <?php 
                                            $req_users = \App\user::where('id', $image_acces->user_id_req_from)->first();
                                            // $req_user_image = App\Models\UserProfileImage::where('id', $user_image_acces)->first();
                                            ?>
                                            <tr>
                                                <td>{{$loop->index+1}}</td>
                                                <td>
                                                    <a href="{{ route('single_groom_bride', $req_users->id) }}" target="_blank">
                                                        {{ $req_users->first_name}} {{ $req_users->last_name}}
                                                    </a>
                                                </td>
                                                <td>
                                                    ddd
                                                </td>
                                                <td>
                                                    <span class="btn btn-xs btn-warning">
                                                         <i class="fa fa-spinner"></i>
                                                        pending
                                                    </span>
                                                </td>
                                                <td>
                                                    ssss
                                                </td>
       
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
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
    <script src="{{asset('backend_assets/plugins/datatables/jquery.dataTables.js')}}"></script>
    <script src="{{asset('backend_assets/plugins/datatables-bs4/js/dataTables.bootstrap4.js')}}"></script>
    <script>
        $(function () {
            $('#example1').DataTable();
        })
    </script>

@endpush