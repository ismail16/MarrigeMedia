@extends('admin.layouts.master')

@section('title', 'Sent Email')

@push('css')
    <link rel="stylesheet" href="{{asset('backend_assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('backend_assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
@endpush

@section('content')
<section class="content session_contect">
    <div class="container-fluid">
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
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <a href="{{route('admin.sentmail')}}" class="btn btn-xs btn-danger"> <i
                                class="fa fa-send"></i> Sent Email</a>
                    @if($row > 0)
                        <button type="button" id="select-mail" class="pull-right btn btn-xs btn-info" data-toggle="modal" >
                            <i class="fa fa-upload"></i> Send Mail</button>
                        </button>
                    @endif
                    <a href="{{route('admin.email-excel.create')}}" class="pull-right btn btn-xs btn-primary" style="margin-right: 5px !important;"> <i
                                class="fa fa-upload"></i> Upload Excel File</a>
                    <br>
                    <br>
                    <div class="table-responsive">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Publisher</th>
                                    <th>Country</th>
                                    <th>Email</th>
                                    <th>Year</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($sents as $email)
                                <tr>
                                    <td>{{$loop->index+1}}</td>
                                    <td>{{$email->author_name}}</td>
                                    <td>{{$email->publisher}}</td>
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

    <script>
        $(document).on("click", ".about_us_delete", function (e) {
            var index = $(this).data('content');

            bootbox.confirm({
                message: "Do you want to remove this?",
                buttons: {
                    confirm: {
                        label: 'Yes',
                        className: 'btn-vinndo'
                    },
                    cancel: {
                        label: 'No',
                        className: 'btn-default'
                    }
                },
                callback: function (result) {
                    if (result) {
                        $("#about_us_delete" + index).submit();
                    }
                }
            });
        });
    </script>
@endpush