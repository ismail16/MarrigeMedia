
@extends('frontend.layouts.master')
@section('title','Search Results')
@section('content')
@include('frontend.pages.search_bar')
<section class="testimony-section bg-light">
	<div class="container">
		<div class="row justify-content-center pt-3 pb-3">
			<div class="col-md-7 heading-section ftco-animate text-center">
				<h3 class="mb-1">Search Results</h3>
			</div>
		</div>
		<div class="row ftco-animate">
			@if(count($search_results)>0)
				@foreach($search_results as $user)
				<div class="col-md-4 border">
					<div class="row">
						<div class="col-md-5 pr-0">
							<img src="{{ asset('images/user_profile_image/'. $user->user_images->first()->image) }}" alt="Image" class="img-fluid image-size">
						</div>
						<div class="col-md-7 pl-2">
							<div class="border-bottom">
								ID-<a href="{{ route('single_groom_bride',$user->id) }}" class="as3_name">
									{{ $user->u_id }}
								</a><br>
								Name-<a href="{{ route('single_groom_bride',$user->id) }}" class="as3_name">
									{{ $user->first_name }}
								</a>
								<p class="mb-0 mt-0" style=" line-height: 25px; ">
									{{ date_diff(date_create($user->birthday), date_create('now'))->y }} yrs, {{ $user->gender }}, 
									{{ $user->user_info->height }}'', 
									{{ $user->user_info->weight }}Kg, 
									{{ $user->district }}
								</p>
							</div>

							<div class="mt-1">
								<a href="{{ route('single_groom_bride',$user->id) }}" class="btn btn-sm btn-primary mr-2">Message</a>
								<a href="{{ route('single_groom_bride',$user->id) }}" class="btn btn-sm btn-primary">More</a>
							</div>
						</div>
					</div>
				</div>
				@endforeach
			@else
				<div class="col-md-12 well">
                    <div class="item" style="text-align: center;">
                       <h1 style="color: red">Opps !!</h1>
                       <h3>No data Found</h3><br>
                        <div class="abstract-div">
                            <div class="abstract-cropped" style="display:block; text-align: center;">
                                Go to <a href="/">Home</a>
                            </div>
                            <br>
                        </div>
                    </div>
                </div>
			@endif
		</div>
	</div>
</section>
@endsection
