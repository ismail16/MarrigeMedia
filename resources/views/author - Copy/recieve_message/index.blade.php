@extends('author.layouts.master')
@section('title','Message Sent')

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
                        <div class="card-body p-2">
                            <a href="#" class="float-right btn btn-sm btn-primary"> <i
                                class="fa fa-plus"></i> Add New</a>
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>S.N</th>
                                        <th>Message From</th>
                                        <th>Image</th>
                                        <th>Subject</th>
                                        <th>Message</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($recieve_messages as $recieve_message)
                                        @php  
                                            $sent_from = \App\User::find($recieve_message->from_id);
                                            $sent_from_image = \App\Models\UserProfileImage::Where('user_id', $sent_from->id)->first();
                                        @endphp
                                        <tr>
                                            <td>{{$loop->index+1}}</td>
                                            <td>
                                                <a href="{{ route('single_groom_bride', $sent_from->id) }}" target="_blank">
                                                    {{ $sent_from->first_name}} {{ $sent_from->last_name}}
                                                </a>
                                            </td>
                                            <td>
                                                <img src="{{ asset('images/user_profile_image/'.$sent_from_image->image) }}" class="img-fluid" style="width: 50px;">
                                            </td>
                                            <td>{{$recieve_message->subject}}</td>
                                            <td class="w-25">{{$recieve_message->message}}</td>
                                            
                                            <td class="text-center">
                                                @if($recieve_message->opened == 0 )
                                                    <button class="btn btn-xs btn-danger"><i class="fa fa-times-circle"></i> Not Seen</button>
                                                @else
                                                    <button class="btn btn-xs btn-success"><i class="fa fa-check-circle"></i> Seen</button>
                                                @endif
                                            </td>
                                            <td class="text-center">
                                                <a href="{{route('author.recieve-message.show', $recieve_message->id)}}"
                                                   class="btn btn-xs btn-success"><i class="fa fa-eye"></i></a>

                                                <form action="{{route('author.recieve-message.destroy', $recieve_message->id)}}" method="post"
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
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
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