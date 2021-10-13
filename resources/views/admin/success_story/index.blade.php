@extends('admin.layouts.master')
@section('title','Success Stories')

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
                        <a href="{{ route('admin.success-story.create') }}" class="float-right btn btn-sm btn-primary"> 
                            <i class="fa fa-plus"></i> Add New
                        </a>
                        <div class="table-responsive">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>S.N</th>
                                    <th>Image</th>
                                    <th>Bride Name</th>
                                    <th>Groom Name</th>
                                    <th>Location</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($success_stories as $success_story)
                                <tr>
                                    <td>{{$loop->index+1}}</td>
                                    <td>
                                        <img src="{{ asset('images/success_story/'.$success_story->image) }}" class="img-fluid" style="width: 50px;">
                                    </td>
                                    <td>{{$success_story->bride_name}}</td>
                                    <td>{{$success_story->groom_name}}</td>
                                    <td>{{$success_story->location}}</td>

                                    <td class="text-center">
                                        @if($success_story->status == 0 )
                                        <button class="btn btn-xs bg-red-active"><i class="fa fa-times-circle"></i> Not Show frontend</button>
                                        @else
                                        <button class="btn btn-xs bg-green-active"><i class="fa fa-check-circle"></i> Show frontend</button>
                                        @endif
                                    </td>
                                    <td class="text-center">
                                        <a href="{{route('admin.success-story.show', $success_story->id)}}"
                                            class="btn btn-xs btn-success"><i class="fa fa-eye"></i>
                                        </a>
                                        <a href="{{route('admin.success-story.edit', $success_story->id)}}"
                                                class="btn btn-xs btn-success"><i class="fa fa-edit"></i>
                                        </a>
                                        <form action="{{route('admin.success-story.destroy', $success_story->id)}}" method="post"
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