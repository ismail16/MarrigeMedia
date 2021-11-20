@extends('admin.layouts.master')
@section('title','Brides/Grooms')

@push('css')
    <link rel="stylesheet" href="{{asset('backend_assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('backend_assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
@endpush

@section('content')
    <section class="content session_contect">
        <div class="container-fluid">
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
                    <div class="card">
                        <div class="card-body">
                            <a href="#" class="float-right btn btn-sm btn-primary"> <i
                                class="fa fa-plus"></i> Add New</a>
                            <div class="table-responsive">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>S.N</th>
                                            <th>Name</th>
                                            <th>Image</th>
                                            <th>Mobile</th>
                                            <th>Email</th>
                                            <th>Activation</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($users as $user)
                                            <tr>
                                                <td>{{$loop->index+1}}</td>
                                                <td>{{$user->first_name}}</td>
                                                <td class="text-center">
                                                @if($user->user_images->first())
                                                   <img src="{{ asset('images/user_profile_image/'.$user->user_images->first()['image']) }}" class="img-fluid" style="width: 50px;">
                                                @else
                                                    @if($user->gender == 'Female')
                                                    <img src="{{ asset('images/icons/flaticon/arab-woman.png') }}" alt="Bride Image" class="img-fluid w-25">
                                                    @else
                                                    <img src="{{ asset('images/icons/flaticon/businessman.png') }}" alt="Groom Image" class="img-fluid w-25">
                                                    @endif
                                                @endif
                                                </td>
                                                <td>{{$user->mobile}}</td>
                                                <td>{{$user->email}}</td>
                                                <td class="text-center">
                                                    @if($user->activation == 0 )
                                                        <button class="btn btn-xs bg-danger"><i class="fa fa-times-circle"></i> Not Activated</button>
                                                    @else
                                                        <button class="btn btn-xs bg-success"><i class="fa fa-check-circle"></i> Activated</button>
                                                    @endif
                                                </td>
                                                <td class="text-center">
                                                    @if($user->status == 0 )
                                                        <button class="btn btn-xs bg-danger"><i class="fa fa-times-circle"></i> Not Verify</button>
                                                    @else
                                                        <button class="btn btn-xs bg-success"><i class="fa fa-check-circle"></i> Verified</button>
                                                    @endif
                                                </td>
                                                <td class="text-center">
                                                    <a href="{{route('admin.user-info.show', $user->id)}}"
                                                       class="btn btn-xs btn-success"><i class="fa fa-eye"></i></a>
                                                    <form action="{{route('admin.user-info.destroy', $user->id)}}" method="post"
                                                          style="display: inline;"
                                                          onsubmit="return confirm('Are you Sure? Want to delete')">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="btn btn-xs btn-danger" type="submit"><i class="fa fa-trash"></i>
                                                        </button>
                                                    </form>
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