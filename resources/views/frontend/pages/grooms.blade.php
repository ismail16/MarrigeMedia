
@extends('frontend.layouts.master')
@section('title','All Groom Profile')
@section('content')
@include('frontend.pages.search_bar')

<section class="testimony-section bg-light">
	<div class="container">
		<div class="row justify-content-center pt-3 pb-3">
			<div class="col-md-7 heading-section ftco-animate text-center">
				<h3 class="mb-1">All Groom Profile</h3>
			</div>
		</div>
		<div class="row ftco-animate mb-2">
			@if(count($grooms)>0)
				@foreach($grooms as $user)
				<div class="col-md-4">
					<div class="row border m-1">
						<div class="col-md-5 p-1">
							@if($user->user_images->first()['status'] == 1)
								<img src="{{ asset('images/user_profile_image/'. $user->user_images->first()->image) }}" alt="Image" class="img-fluid image-size">
							@else
								@if($user->gender == 'Female')
								<img src="{{ asset('images/icons/flaticon/arab-woman.png') }}" class="img-fluid image-size">
								@else
								<img src="{{ asset('images/icons/flaticon/businessman.png') }}" class="img-fluid image-size">
								@endif
							@endif
						</div>
						<div class="col-md-7 p-1">
							<div class="border-bottom">
								Profile ID-<a href="{{ route('single_groom_bride',$user->id) }}" class="as3_name">
									{{ $user->u_id }}
								</a><br>
								{{-- Name-<a href="{{ route('single_groom_bride',$user->id) }}" class="as3_name">
									@if(Auth::check())
									{{ $user->first_name }}
									@else
									<span>Disclose later</span>
									@endif
								</a> --}}
								<p class="mb-0 mt-0 text-dark" style=" line-height: 25px; ">
									{{ $user->profession }} <br>
									{{ $user->gender }}, 
									{{ date_diff(date_create($user->birthday), date_create('now'))->y }} yrs, 
									{{ $user->user_info->height }}'', 
									{{ $user->user_info->weight }}Kg,
									{{ $user->district }}
								</p>
							</div>

							<div class="mt-1">
								<a href="{{ route('single_groom_bride',$user->id) }}" class="btn btn-sm btn-primary mr-2">Message</a>
								<a href="{{ route('single_groom_bride',$user->id) }}" class="btn btn-sm btn-primary">Details</a>
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
