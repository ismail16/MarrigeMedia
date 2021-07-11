@extends('admin.layouts.master')
@section('title','Show Package Price')
@section('content')
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card m-2">
                <ul class="timeline">
                    <li class="time-label">
                        <span class="border-bottom">
                            Message
                        </span>
                    </li>
                    <li>
                        <i class="fa fa-user bg-aqua"></i>
                        <div class="timeline-item">
                            <h5 class="timeline-header no-border">Name : 
                                <a href="#" target="_blank"> 
                                    {{ $message->name }}
                                </a>
                            </h5>
                        </div>
                    </li>
                    <li>
                        <i class="fa fa-envelope bg-aqua"></i>
                        <div class="timeline-item">
                            <h3 class="timeline-header no-border">Email : 
                                <a href="#" target="_blank"> 
                                    {{ $message->email }}
                                </a>
                            </h3>
                        </div>
                    </li>
                    <li>
                        <i class="fa fa-info bg-aqua"></i>
                        <div class="timeline-item">
                            <h3 class="timeline-header no-border">Subject : 
                                <a href="#" target="_blank"> 
                                    {{ $message->subject }}
                                </a>
                            </h3>
                        </div>
                    </li>
                    <li>
                        <i class="fa fa-comments bg-yellow"></i>
                        <div class="timeline-item">
                            <h3 class="timeline-header">Message</h3>
                            <div class="timeline-body">
                                {{ $message->message }}
                            </div>
                            <div class="timeline-footer">
                                <a class="btn btn-default btn-xs">Back</a>
                                <a class="btn btn-default btn-xs text-danger">Delete</a>
                            </div>
                        </div>
                    </li>           
                </ul>
            </div>
        </div>
    </div>
</section>
@endsection