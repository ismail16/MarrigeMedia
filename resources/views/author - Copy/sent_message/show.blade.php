@extends('author.layouts.master')
@section('title','Show Sent Message')
@section('content')
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card m-2">
                <ul class="timeline">
                    <li class="time-label">
                        <span class="border-bottom">
                            Sent Message
                        </span>
                    </li>
                    <li>
                        <i class="fa fa-user bg-aqua"></i>
                        <div class="timeline-item">
                            <h3 class="timeline-header no-border">Sent To : 
                                <a href="{{ route('single_groom_bride', $sent_to->id) }}" target="_blank"> 
                                    {{ $sent_to->first_name }} {{ $sent_to->last_name }} 
                                </a>
                            </h3>
                        </div>
                    </li>
                    <li>
                        <i class="fa fa-envelope bg-blue"></i>
                        <div class="timeline-item">
                            <h3 class="timeline-header">Subject : {{ $sent_message->subject }}</h3>
                        </div>
                    </li>
                    <li>
                        <i class="fa fa-comments bg-yellow"></i>
                        <div class="timeline-item">
                            <h3 class="timeline-header">Message</h3>
                            <div class="timeline-body">
                                {{ $sent_message->message }}
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