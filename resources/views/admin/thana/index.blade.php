@extends('admin.layouts.master')

@section('title', 'All thana')

@push('css')
    <link rel="stylesheet" href="{{asset('backend_assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('backend_assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
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
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <div class="table-responsive">
            
            <a href="{{route('admin.thana.create')}}" class="pull-right btn btn-sm btn-primary float-right ml-2"> <i
              class="fa fa-plus"></i> Add New</a>
              <table id="dataTable" class="table table-bordered table-striped">
                <thead>
                  <tr>
                      <th>S.N</th>
                      <th>Division</th>
                      <th>Districr</th>
                      <th>Thana</th>
                      <!-- <th>Thana Bangla</th> -->
                      <th>Status</th>
                      <th class="text-center">Action</th>
                  </tr>
                </thead>
                <tbody>
                 @foreach($thanas as $thana)
                 <tr>
                   <td>{{ $loop->index+1 }}</td>
                   <td>{{ $thana->division->name }}</td>
                   <td>{{$thana->district->name}}</td>
                   <td>{{$thana->name}}</td>
                   <!-- <td>{{$thana->name_bn}}</td> -->
                   <td class="text-center">
                     @if($thana->status == 0)
                      <span class="badge bg-red">Deactive</span>
                     @else
                      <span class="badge bg-green">Active</span>
                     @endif
                   </td>

                    <td class="text-center">
                     <a href="{{route('admin.thana.edit',$thana->id)}}" class="btn btn-sm btn-info"> <i class="fa fa-edit"></i> </a>
                     <form action="{{route('admin.thana.destroy', $thana->id)}}" method="post"
                    style="display: inline;"
                    onsubmit="return confirm('Are you Sure? Want to delete')">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-sm btn-danger" type="submit"><i class="fa fa-trash"></i>
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
        $('#dataTable').DataTable();
    })
</script>
@endpush
