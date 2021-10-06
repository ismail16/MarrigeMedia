@extends('admin.layouts.master')
@section('title','Messages')

@push('css')
<link rel="stylesheet" href="{{asset('backend_assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{asset('backend_assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
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
            <!-- @if(session()->has('message'))
                <div class="col-lg-12 col-xl-12 d-flex justify-content-center session_message">
                    <div class="alert alert-success text-center pr-3 pl-3 p-1 mb-1">
                        {{session('message')}}
                        <button type="button" class="close ml-4" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
            @endif -->
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
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <a href="{{route('admin.sentmail')}}" class="btn btn-xs btn-danger"> 
                            <i class="fa fa-send"></i> Sent Email
                        </a>
                        @if($row > 0)
                            <button type="button" id="select-mail" class="pull-right btn btn-xs btn-info" data-toggle="modal" >
                                <i class="fa fa-upload"></i> Send Mail</button>
                            </button>
                        @endif
                        <a href="{{route('admin.email-excel.create')}}" class="pull-right btn btn-xs btn-primary" style="margin-right: 5px !important;">
                            <i class="fa fa-upload"></i> Upload Excel File
                        </a>
                    <br>
                    <br>
                    <div class="table-responsive">
                        <table id="example" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th><input name="select_all" value="1" id="example-select-all" type="checkbox" /></th>
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
                                    <th></th>
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
    </div>
</section>

<div class="modal fade" id="modal-mail">
    <div class="modal-dialog">
        <div class="modal-content" style="border-radius: 5px;">
            <div class="modal-body">
                    <div class="box-header">
                        <i class="fa fa-envelope" style="color: orangered;"></i>

                        <h3 class="box-title">Compose Email</h3>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>

                    </div>
                    <div class="box-body">
                        <form action="{{route('admin.send')}}" id="email-multiselect" method="post">
                            @csrf
                            <div class="form-group">
                                <input type="text" class="form-control" name="subject" placeholder="Subject">
                            </div>

                            <div>
                              <textarea class="textarea" placeholder="Message" name="message"
                                        style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
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
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>


@endsection

@push('scripts')
<script src="{{asset('backend_assets/plugins/datatables/jquery.dataTables.js')}}"></script>
<script src="{{asset('backend_assets/plugins/datatables-bs4/js/dataTables.bootstrap4.js')}}"></script>


 <script>
        $(function () {
            var table = $('#example').DataTable({
                'columnDefs': [{
                  'targets': 0,
                  'searchable': false,
                  'orderable': false,
                  'className': 'dt-body-center',
                  'render': function(data, type, full, meta) {
                    return '<input type="checkbox" name="id[]" value="' +
                      $('<div/>').text(data).html() + '">';
                  }
                }],
                'order': [1, 'asc']
            });

            // Handle click on "Select all" control
              $('#example-select-all').on('click', function() {
                // Check/uncheck all checkboxes in the table
                var rows = table.rows({
                  'search': 'applied'
                }).nodes();
                $('input[type="checkbox"]', rows).prop('checked', this.checked);
              });


               // Handle click on checkbox to set state of "Select all" control
                  $('#example tbody').on('change', 'input[type="checkbox"]', function() {
                    // If checkbox is not checked
                    if (!this.checked) {
                      var el = $('#example-select-all').get(0);
                      // If "Select all" control is checked and has 'indeterminate' property
                      if (el && el.checked && ('indeterminate' in el)) {
                        // Set visual state of "Select all" control 
                        // as 'indeterminate'
                        el.indeterminate = true;
                      }
                    }
                  });

                  $('#select-mail').on('click', function(e) {
                    var form = this;

                    // Iterate over all checkboxes in the table

                    // let selected_raws = table.$('input[type="checkbox"]').each(function() {
                      // If checkbox doesn't exist in DOM
                      // if (!$.contains(document, this)) {
                      //   // If checkbox is checked
                      //   if (this.checked) {
                      //     // Create a hidden element 
                      //     $(form).append(
                      //       $('<input>')
                      //       .attr('type', 'hidden')
                      //       .attr('name', this.name)
                      //       .val(this.value)
                      //     );
                      //   }
                      // }
                    // });


                    var selected_raws = table.$('input[type="checkbox"]')

                    const selected = []

                    for (var i = 0;  i < selected_raws.length; i++) {
                        if (selected_raws[i].checked) {
                            // alert('Please select at least 1 row')
                            // $("#select-mail").removeAttr("data-target", "#modal-mail");
                            // return
                            selected.push(selected_raws[i]);
                        }else{
                            // $("#select-mail").attr('data-target', '#modal-mail');
                        }
                    }

                    if (selected.length > 0) {
                        // $("#select-mail").attr('data-target', '#modal-mail')
                    }else{
                        // alert('Please select at least 1 row')
                        // $("#select-mail").removeAttr("data-target", "#modal-mail");
                    }

                    $.each(selected, function(index, rowId){
                        // $('form').append(
                        //     $('<input>')
                        //         .attr('type', 'hidden')
                        //         .attr('name', 'emailID[]')
                        //         .val(rowId)
                        // );
                        console.log(index)
                    });




                    // FOR TESTING ONLY
                    // Output form data to a console
                    // $('#example-console').text($(form).serialize());
                    // console.log("Form submission", $(form).serialize());
                    // Prevent actual form submission
                    // e.preventDefault();
                  });





            // $('#select-mail').on('click', function (e) {
            //     var form = this;
            //     var selected_raws = table.column(0).checkboxes.selected();

            //     console.log(selected_raws)

            //     if (selected_raws.length > 0){
            //         $("#select-mail").attr('data-target', '#modal-mail');
            //     }else {
            //         Swal.fire('<span class="text-danger">Please select at least 1 row</span>');
            //         $("#select-mail"). removeAttr("data-target", "#modal-mail");
            //     }

            //     $.each(selected_raws, function(index, rowId){
            //         $('form').append(
            //             $('<input>')
            //                 .attr('type', 'hidden')
            //                 .attr('name', 'emailID[]')
            //                 .val(rowId)
            //         );
            //     });
            // })
        })
    </script>


@endpush