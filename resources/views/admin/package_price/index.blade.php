@extends('admin.layouts.master')
@section('title','Package Price')

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
                        <a href="{{ route('admin.package-price.create') }}" class="float-right btn btn-sm btn-primary"> 
                            <i class="fa fa-plus"></i> Add New
                        </a>
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>S.N</th>
                                    <th>Icon</th>
                                    <th>Title</th>
                                    <th>Price</th>
                                    <th>Duration</th>
                                    <th>proposal</th>
                                    <th>Contact</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($package_prices as $package_price)
                                <tr>
                                    <td>{{$loop->index+1}}</td>
                                    <td>
                                        <img src="{{ asset('images/package_price/'.$package_price->image) }}" class="img-fluid" style="width: 50px;">
                                    </td>
                                    <td>{{$package_price->title}}</td>
                                    <td>{{$package_price->price}}</td>
                                    <td>{{$package_price->duration}}</td>
                                    <td>{{$package_price->proposal}}</td>
                                    <td>{{$package_price->contact}}</td>

                                    <td class="text-center">
                                        @if($package_price->status == 0 )
                                        <button class="btn btn-xs bg-danger"><i class="fa fa-times-circle"></i> Not Show frontend</button>
                                        @else
                                        <button class="btn btn-xs bg-success"><i class="fa fa-check-circle"></i> Show frontend</button>
                                        @endif
                                    </td>
                                    <td class="text-center">
                                        <a href="{{route('admin.package-price.show', $package_price->id)}}"
                                            class="btn btn-xs btn-success"><i class="fa fa-eye"></i>
                                        </a>
                                        <a href="{{route('admin.package-price.edit', $package_price->id)}}"
                                                class="btn btn-xs btn-success"><i class="fa fa-edit"></i>
                                        </a>
                                        <form action="{{route('admin.package-price.destroy', $package_price->id)}}" method="post"
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