
@extends('frontend.layouts.master')
@section('title','Marriage Gate | Best Marriage Media in Bangladesh')
@section('content')
@include('frontend.pages.search_bar')

<div class="container-fluid">
<div class="row">
	<div class="col-md-12">
		<section class="testimony-section">
			<div class="container">
				<div class="row justify-content-center pt-3 pb-3">
					<div class="col-md-7 heading-section ftco-animate text-center">
						<h1 class="h3 mb-0 form-label">Marriage Gate</h1>
						<h3 class="h4">Latest Groom Profile</h3>
					</div>
				</div>
				<div class="row ftco-animate">
					<div class="col-md-12 block-13 p-0 nav-direction-white">
						<div class="nonloop-block-13 owl-carousel ">
							@if($grooms)
							@foreach($grooms as $user)
							<div class="media-image border">
								<div class="row">
									<div class="col-md-5 pr-0 ">
										@if($user->user_images->first()['status'] == 1)
											<img src="{{ asset('images/user_profile_image/'. $user->user_images->first()->image) }}" alt="Groom Image" class="img-fluid image-size">
										@else
											@if($user->gender == 'Female')
											<img src="{{ asset('images/icons/flaticon/arab-woman.png') }}" alt="Bride Image" class="img-fluid image-size">
											@else
											<img src="{{ asset('images/icons/flaticon/businessman.png') }}" alt="Groom Image" class="img-fluid image-size">
											@endif
										@endif
									</div>
									<div class="col-md-7 pl-2">
										<div class="border-bottom">
											Profile ID-<a href="{{ route('single_groom_bride',$user->id) }}" class="as3_name">
												{{ $user->u_id }}
											</a><br>
											Name-<a href="{{ route('single_groom_bride',$user->id) }}" class="as3_name">
													{{ $user->first_name }}
												</a>
											<p class="mb-0 mt-0 text-dark" style="line-height: 25px; ">
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
							@endif
						</div>
						<a href="{{ route('grooms') }}" class="btn btn-primary float-right">All Groom</a>
					</div>
				</div>
			</div>
		</section>
		
		<section class="testimony-section">
			<div class="container mb-2">
				<div class="row justify-content-center pt-3 pb-3 ">
					<div class="col-md-7 heading-section ftco-animate text-center">
						<h2 class="h3 mb-0 form-label">Marriage Gate</h2>
						<h3 class="mb-1">Latest Bride Profile</h3>
					</div>
				</div>
				<div class="row ftco-animate">
					<div class="col-md-12 block-13 p-0 nav-direction-white">
						<div class="nonloop-block-13 owl-carousel ">
							@if($brides)
								@foreach($brides as $user)
								<div class="media-image border">
									<div class="row">
										<div class="col-md-5 pr-0">
											@if($user->user_images->first()['status'] == 1)
												<img src="{{ asset('images/user_profile_image/'. $user->user_images->first()->image) }}" alt="Bride Image" class="img-fluid image-size">
											@else
												@if($user->gender == 'Female')
												<img src="{{ asset('images/icons/flaticon/arab-woman.png') }}" alt="Bride Image">
												@else
												<img src="{{ asset('images/icons/flaticon/businessman.png') }}" alt="Groom Image">
												@endif
											@endif
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
													{{ date_diff(date_create($user->birthday), date_create('now'))->y }} yrs, 
													{{ $user->gender }}, 
													{{ $user->user_info->height }}'', 
												    {{ $user->user_info->weight }}Kg, 
													{{ $user->user_info->thana }}, 
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
								<h3 class="mb-1">No found Bride</h3>
							@endif
						</div>
						<a href="{{ route('brides') }}" class="btn btn-primary float-right">All Bride</a>
					</div>
				</div>
			</div>
		</section>
	</div>
</div>
</div>


<section class="pt-5 bg-light-green" id="section-counter"  data-stellar-background-ratio="0.5">
	<div class="container">
		<div class="row">
			<div class="col-md-4 text-center">
				<div class="services ftco-animate">
					<div class="icon d-flex justify-content-center align-items-center bg-body-green">
						<img src="{{ 'images/icons/flaticon/065-love-1.png' }}">
					</div>
					<div class="text mt-4">
						<h3 class="">Best Matches</h3>
						<p class="form-label">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
					</div>
				</div>
			</div>
			<div class="col-md-4 text-center">
				<div class="services ftco-animate">
					<div class="icon d-flex justify-content-center align-items-center bg-body-green">
						<img src="{{ 'images/icons/flaticon/053-padlock.png' }}">
					</div>
					<div class="text mt-4">
						<h3 class="">100% Privacy</h3>
						<p class="form-label">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
					</div>
				</div>
			</div>
			<div class="col-md-4 text-center">
				<div class="services ftco-animate">
					<div class="icon d-flex justify-content-center align-items-center bg-body-green">
						<img src="{{ 'images/icons/flaticon/052-shield.png' }}">
					</div>
					<div class="text mt-4">
						<h3 class="">Verified Profiles</h3>
						<p class="form-label">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
					</div>
				</div>
			</div>

		</div>
	</div>
</section>


<section class="bg-light pt-3 pb-3">
	<div class="container">
		<div class="row justify-content-center mb-5 pb-3">
			<div class="col-md-7 heading-section ftco-animate text-center">
				<h3 class="h3 mb-0 form-label">Marriage Gate</h3>
				<h2 class="mb-1">Price List </h2>
				<h3 class="subheading form-label">Choose the Best Package from the List Below</h3>
			</div>
		</div>
		<div class="row">
			@foreach($package_prices as $package_price)
			<div class="col-md-3 ftco-animate">
				<div class="card p-2">
					<div class="text-center">
						<h4 class="h1">{{ $package_price->title }}</h4>
						<h2 class="form-label">BDT {{ $package_price->price }}</h2>
						<p class="p-0 m-0 text-dark">Enjoy All The Features</p>
						<ul class="features">
							<li class="form-label"><i class="far fa-check-circle"></i> 
								Duration {{ $package_price->duration }} Days
							</li>
							<li class="form-label">
								<i class="far fa-check-circle"></i> 
								See Contact Details
							</li>
							<li class="form-label">
								<i class="far fa-check-circle"></i>
								 Private Chating
							</li>
							<li class="form-label">
								<i class="far fa-check-circle"></i> 
								Total {{ $package_price->proposal }} Proposals
							</li>
							<li class="form-label">
								<i class="far fa-check-circle"></i> 
								Contact View Limit {{ $package_price->contact }}
							</li>
							<li class="form-label">
								<i class="far fa-check-circle"></i> 
								24/7 Customer Support
							</li>
						</ul>
						<p class="p-0 m-0 text-dark">Looking for additional discount?</p>
						
						<a href="#" class="btn btn-primary d-block px-2 py-2">Get Started</a>
					</div>
				</div>
			</div>
			@endforeach
			<!-- <div class="col-md-3 ftco-animate">
				<div class="card p-2">
					<div class="text-center">
						<h1>Standard</h1>
						<h2 class="text-success">BDT 449</h2>
						<p class="p-0 m-0">Enjoy All The Features</p>
						<ul class="features">
							<li><i class="far fa-check-circle"></i> Duration 45 Days</li>
							<li><i class="far fa-check-circle"></i> See Contact Details</li>
							<li><i class="far fa-check-circle"></i> Private Chating</li>
							<li><i class="far fa-check-circle"></i> Total 50 Proposals</li>
							<li><i class="far fa-check-circle"></i> Send Per Day 4 Proposals</li>
							<li><i class="far fa-check-circle"></i> Contact View Limit 10</li>
							<li><i class="far fa-check-circle"></i> 24/7 Customer Support</li>
						</ul>
						Looking for additional discount?
						<a href="#" class="btn btn-primary d-block px-2 py-4">Get Started</a>
					</div>
				</div>
			</div>
			<div class="col-md-3 ftco-animate">
				<div class="card p-2">
					<div class="text-center">
						<h1>Classic</h1>
						<h2 class="text-success">BDT 449</h2>
						<p class="p-0 m-0">Enjoy All The Features</p>
						<ul class="features">
							<li><i class="far fa-check-circle"></i> Duration 45 Days</li>
							<li><i class="far fa-check-circle"></i> See Contact Details</li>
							<li><i class="far fa-check-circle"></i> Private Chating</li>
							<li><i class="far fa-check-circle"></i> Total 50 Proposals</li>
							<li><i class="far fa-check-circle"></i> Send Per Day 4 Proposals</li>
							<li><i class="far fa-check-circle"></i> Contact View Limit 10</li>
							<li><i class="far fa-check-circle"></i> 24/7 Customer Support</li>
						</ul>
						Looking for additional discount?
						<a href="#" class="btn btn-primary d-block px-2 py-4">Get Started</a>
					</div>
				</div>
			</div>
			<div class="col-md-3 ftco-animate">
				<div class="card p-2">
					<div class="text-center">
						<h1>Premium</h1>
						<h2 class="text-success">BDT 449</h2>
						<p class="p-0 m-0">Enjoy All The Features</p>
						<ul class="features">
							<li><i class="far fa-check-circle"></i> Duration 45 Days</li>
							<li><i class="far fa-check-circle"></i> See Contact Details</li>
							<li><i class="far fa-check-circle"></i> Private Chating</li>
							<li><i class="far fa-check-circle"></i> Total 50 Proposals</li>
							<li><i class="far fa-check-circle"></i> Send Per Day 4 Proposals</li>
							<li><i class="far fa-check-circle"></i> Contact View Limit 10</li>
							<li><i class="far fa-check-circle"></i> 24/7 Customer Support</li>
						</ul>
						Looking for additional discount?
						<a href="#" class="btn btn-primary d-block px-2 py-4">Get Started</a>
					</div>
				</div>
			</div> -->
		</div>
	</div>
</section>

<section class="pt-5 pb-5 bg-light-green" id="section-counter">
	<div class="container _bg-body-green">
		<div class="row justify-content-center">
			<div class="col-md-10">
				<div class="row">
					<div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
						<div class="block-18 text-center">
							<div class="text">
								<strong class="number form-label" data-number="1030">0</strong>
								<p class="text-dark">Happy Customers</p>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
						<div class="block-18 text-center">
							<div class="text">
								<strong class="number form-label" data-number="4560">0</strong>
								<p class="text-dark">Membes</p>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
						<div class="block-18 text-center">
							<div class="text">
								<strong class="number form-label" data-number="5">0</strong>
								<p class="text-dark">Years of Experience</p>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
						<div class="block-18 text-center">
							<div class="text">
								<strong class="number form-label" data-number="466">0</strong>
								<p class="text-dark">Success Story</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="ftco-gallery ftco-section">
	<div class="container">
		<div class="row justify-content-center mb-5 pb-3">
			<div class="col-md-7 heading-section ftco-animate text-center">
				<h4 class="h3 mb-0 form-label">Marriage Gate</h4>
				<h2 class="mb-1">Success Story</h2>
				<h3 class="subheading form-label">See the latest Success Story</h3>
			</div>
		</div>
		<div class="row">
			@foreach($success_stories as $success_story)
			<div class="col-md-3 ftco-animate">
				<a href="{{ asset('images/success_story/'.$success_story->image) }}" class="gallery image-popup img d-flex align-items-center" style="background-image: url('{{ asset('images/success_story/'.$success_story->image) }}'">
					<div class="icon mb-4 d-flex align-items-center justify-content-center">
						<span class="icon-instagram"></span>
					</div>
				</a>
			</div>
			@endforeach
		</div>
	</div>
</section>
@endsection
