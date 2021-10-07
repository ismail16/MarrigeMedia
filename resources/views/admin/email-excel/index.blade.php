@extends('admin.layouts.master')
@section('title','Messages')

@push('css')
 <link rel="stylesheet" href="{{asset('backend_assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{asset('backend_assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
<style type="text/css">
    .note-editable{
        height: 200px !important;
    }
</style>
@endpush

@section('content')
<section class="content session_contect">
    <div class="container-fluid">
            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        {{$error}}
                    </div>
                @endforeach
            @endif
            <div class="row">
                @if(session()->has('message'))
                    <div class="col-lg-12 col-xl-12">
                        <div class="card-box">
                            <div class="alert alert-danger">
                                {{session('message')}}
                            </div>
                        </div>
                    </div>
                @endif
                @if(session()->has('failure'))
                    <div class="col-lg-12 col-xl-12">
                        <div class="card-box">
                            <div class="alert alert-danger">
                                {{session('failure')}}
                            </div>
                        </div>
                    </div>
                @endif
                @if(session()->has('success'))
                    <div class="col-lg-12 col-xl-12">
                        <div class="card-box">
                            <div class="alert alert-success">
                                {{session('success')}}
                            </div>
                        </div>
                    </div>
                @endif
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <a href="{{route('admin.sentmail')}}" class="btn btn-xs btn-danger"> 
                                <i class="fa fa-send"></i> Sent Email
                            </a>
                            @if($row > 0)
                            <button type="button" id="select-mail" class="float-right btn btn-xs btn-info ml-1" data-toggle="modal" >
                                <i class="fa fa-upload"></i> Send Mail
                            </button>
                            @endif
                            <a href="{{route('admin.email-excel.create')}}" class="float-right btn btn-xs btn-primary"> 
                                <i class="fa fa-upload"></i> Upload Excel File
                            </a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                            <table id="example" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Country</th>
                                    <th>Email</th>
                                    <th>Year</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($email_excel as $email)
                                        <tr>
                                            <td>{{$loop->index+1}}</td>
                                            <td>{{$email->full_name}}</td>
                                            <td>{{$email->country}}</td>
                                            <td>{{$email->email}}</td>
                                            <td>{{$email->year}}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        <!-- ============= Modal ===================== -->
        <div class="modal fade" id="modal-mail">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="box-header">
                            <button type="button" class="close text-danger" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <h3 class="box-title">
                                <i class="fa fa-envelope text-warning"></i> Compose Email
                            </h3>

                        </div>
                        <div class="box-body">
                            <form action="{{route('admin.send')}}" id="email-multiselect" method="post">
                                @csrf

                                <div class="form-group">
                                    <input type="text" class="form-control" name="subject" placeholder="Subject">
                                </div>

                                <div>
                                  <textarea class="textarea" rows="5" placeholder="Message" name="message">
                                  </textarea>
                                </div>
                                <br>
                                <button type="button" class="btn btn-danger pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
                                <button type="submit" class="btn btn-success pull-right" id="sendEmail">Send
                                    <i class="fa fa-arrow-circle-right"></i>
                                </button>
                            </form>
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
<script src="{{asset('backend_assets/plugins/dataTables.checkboxes.min.js')}}"></script>
<script>
    $(function () {
        var table = $('#example').DataTable({
            'columnDefs':[
                {
                    'targets' :0,
                    'checkboxes': {
                        'selectRaw':true
                    }
                }
            ],
            'select':{
                'style' : 'multi'
            }
        });
        $('#select-mail').on('click', function (e) {
            var form = this;
            var selected_raws = table.column(0).checkboxes.selected();
            if (selected_raws.length > 0){
                $("#select-mail").attr('data-target', '#modal-mail');
            }else {
                Swal.fire('<span class="text-danger">Please select at least 1 row</span>');
                $("#select-mail"). removeAttr("data-target", "#modal-mail");
            }
            $.each(selected_raws, function(index, rowId){
                $('form').append(
                    $('<input>')
                        .attr('type', 'hidden')
                        .attr('name', 'emailID[]')
                        .val(rowId)
                );
                console.log(rowId)
            });
        })
    })
</script>
@endpush