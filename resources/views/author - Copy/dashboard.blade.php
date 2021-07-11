@extends('author.layouts.master')
@section('title','Author | Dashboard')
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-6">
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>{{ $sent_messages->count() }}</h3>
                        <p>Sent Message</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-paper-plane"></i>
                    </div>
                    <a href="{{ route('author.sent-message.index') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-6 col-6">
                <div class="small-box bg-success">
                    <div class="inner">
                        <h3>{{ $recieve_messages->count() }}</h3>
                        <p>Recieved Message</p>
                    </div>
                    <div class="icon">
                        <i class="far fa-comments"></i>
                    </div>
                    <a href="{{ route('author.recieve-message.index') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- <div class="col-lg-3 col-6">
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>3</h3>
                        <p>Sent Interest</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-level-up-alt"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <div class="small-box bg-success">
                    <div class="inner">
                        <h3>4</h3>
                        <p>Recieved Interest</p>
                    </div>
                    <div class="icon">
                        <i class="  fas fa-level-down-alt"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div> -->
        </div>
    </div>
</section>
@endsection