@extends('admin.layouts.master')

@section('title', 'Add New')

@push('css')
<link rel="stylesheet" href="{{asset('bower_components/select2/dist/css/select2.min.css')}}">
<link rel="stylesheet" href="{{asset('plugins/iCheck/all.css')}}">
@endpush

@section('content')
<section class="content">
    <div class="row">
        @if(session()->has('message'))
            <div class="col-lg-12 col-xl-12 d-flex justify-content-center">
                <div class="alert alert-success text-center pr-3 pl-3 p-1 mb-1">
                    {{session('message')}}
                    <button type="button" class="close ml-4 text-danger" data-dismiss="alert">&times;</button>
                </div>
            </div>
        @endif
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <a href="{{route('admin.division.index')}}" class="btn btn-sm btn-primary"> <i class="fa fa-list"></i> All Division</a>
                    <form action="{{route('admin.division.update', $division->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Name</label>
                                    <input type="text" name="name" value="{{ $division->name }}" class="form-control form-control-sm" required/>
                                </div>
                                <div class="col-md-6">
                                    <label>Name Bangla</label>
                                    <input type="text" name="name_bn" value="{{ $division->name_bn }}" class="form-control form-control-sm" required/>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6" style="margin-top: 28px;">
                                    <div class="form-group">
                                        <input type="radio" {{ $division->status == 1 ? 'checked':'' }} name="status" value="1" id="1"/>
                                        <label class="mr-3">Active</label>
                                        <input type="radio" name="status" {{ $division->status == 0 ? 'checked':'' }} value="0" id="2"/>
                                        <label for="2">Deactive</label>
                                    </div>
                                </div>
                            </div>
                            <!-- /.row -->
                        </div>
                        <div class="box-footer">
                            <button type="submit" class="btn btn-sm btn-primary pull-right"><i class="fa fa-check-circle"></i> Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@push('scripts')
<script src="{{asset('bower_components/select2/dist/js/select2.full.min.js')}}"></script>
<script>
    $(function(){
        $('.select2').select2();
        // $('.select2').change(function(){
        //     alert($(this).val());
        // });
    });
</script>
@endpush
