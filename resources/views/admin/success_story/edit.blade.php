@extends('admin.layouts.master')
@section('title','Create Success Story')
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="p-3">
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            @foreach ($errors->all() as $error)
                            <span class="badge badge-danger">{{ $error }}</span>
                            @endforeach
                        </div>
                        @endif
                        <form action="{{route('admin.success-story.update', $success_story->id )}}" method="post" enctype="multipart/form-data" class="">
                            @csrf
                            @method('put')
                            <div class="form-row">
                                <div class="col-md-6 form-group mb-1">
                                    <label class="mb-0">Bride Name </label>   
                                    <input type="text" name="bride_name" value="{{ $success_story->bride_name }}" class="form-control-sm w-100 border">
                                </div>
                                <div class="col-md-6 form-group mb-1">
                                    <label class="mb-0">Groom Name </label>   
                                    <input type="text" name="groom_name" value="{{ $success_story->groom_name }}" class="form-control-sm w-100 border">
                                </div>
                                <div class="col-md-6 form-group mb-1">
                                    <label class="mb-0">Location Name </label>   
                                    <input type="text" name="location" value="{{ $success_story->location }}" class="form-control-sm w-100 border">
                                </div>
                                <div class="col-md-6 form-group mb-1">
                                    <label class="mb-0">Date Of Marrige </label>   
                                    <input type="text" name="marriage_date" value="{{ $success_story->marriage_date }}" class="form-control-sm w-100 border">
                                </div>
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-md-12 form-group mb-1">
                                            <label class="mb-0">Comment </label>   
                                            <textarea name="comment" class="form-control">{{ $success_story->comment }}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-md-6 form-group mb-1">
                                            <label class="mb-0">Image </label>   
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <input type="file" name="image" class="form-control-sm w-100 border">
                                                </div>
                                                <div class="col-md-6">
                                                    <img src="{{ asset('images/success_story/'.$success_story->image) }}" class="img-fluid" style="width: 50px;">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group mb-1 col-md-6">
                                            <label class="mb-0">Show Frontend</label>
                                            <select id="gender" name="status" class="form-control-sm w-100" >
                                                <option value="1" {{ $success_story->status=='1'?'selected':'' }}>Yes</option>
                                                <option value="0" {{ $success_story->status=='0'?'selected':'' }}>No</option>
                                            </select>
                                        </div>
                                        <div class="col-md-12 d-flex justify-content-end">
                                            <button type="submit" name="upload" value="upload" id="upload" class="btn btn-primary mt-1"><i class="fa fa-fw fa-sync"></i> Update</button>
                                        </div>
                                    </div>
                                </div>
                            </div>                                    
                        </div> 
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
@endsection