@extends('admin.layouts.master')
@section('title','Show Success Story')
@section('content')
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card m-2">
                <ul class="timeline">
                    <li class="time-label">
                        <span class="border-bottom">
                            Success Story
                        </span>
                    </li>
                    <li>
                        <i class="fa fa-user bg-aqua"></i>
                        <div class="timeline-item">
                            <div class="row">
                                <div class="col-md-5">
                                    <h5 class="timeline-header no-border text-center">Bride Name : 
                                        <a href="#" target="_blank"> 
                                            {{ $success_story->bride_name }}
                                        </a>
                                    </h5>
                                </div>
                                <div class="col-md-2">
                                    <h5 class="timeline-header no-border text-center">
                                        <a href="#" target="_blank"> 
                                            <i class="fa fa-heart text-danger"></i>
                                        </a>
                                    </h5>
                                </div>
                                <div class="col-md-5">
                                    <h5 class="timeline-header no-border text-center">Groom Name : 
                                        <a href="#" target="_blank"> 
                                            {{ $success_story->groom_name }}
                                        </a>
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <i class="fa fa-map-marker bg-aqua"></i>
                        <div class="timeline-item">
                            <h3 class="timeline-header no-border">Location : 
                                <a href="#" target="_blank"> 
                                    {{ $success_story->location }}
                                </a>
                            </h3>
                        </div>
                    </li>
                    <li>
                        <i class="fa fa-calendar bg-aqua"></i>
                        <div class="timeline-item">
                            <h3 class="timeline-header no-border">Marriage Date : 
                                <a href="#" target="_blank"> 
                                    {{ $success_story->marriage_date }}
                                </a>
                            </h3>
                        </div>
                    </li>
                    <li>
                        <i class="fa fa-comments bg-yellow"></i>
                        <div class="timeline-item">
                            <h3 class="timeline-header">Comment</h3>
                            <div class="timeline-body">
                                {{ $success_story->comment }}
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