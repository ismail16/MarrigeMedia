
@extends('frontend.layouts.master')
@section('title','Contact Us')
@section('content')
<section class="bg-light pt-3 pb-3">
	<div class="container">
		<h2 class="mb-1">Contact Us </h2>
		<div class="row mb-5 pb-3">
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
			<div class="col-md-5 heading-section ftco-animate">
				<p class="text-dark text-justify">Marriage Gate is one of the leading and most successful Bengali matrimony agencies since 2019.  <br><br>

				Our online portal is equipped with the latest and most progressive technology to give our customers an enjoyable and interactive experience. Marriage Gate is designed for those individuals who are serious about marriage as well as looking for suitable grooms or brides. <br><br>

				Our mission is simple- providing our members with a highly-secured and private platform to meet potential life partners. With the opportunity to meet matches from across the globe, we bridge the distance between two individuals. We employed a skilled set of people in every department, who are further trained to become professionals in their field. Our highly dedicated team is committed to providing all matrimony related solutions to prospective Bengali brides and grooms.</p>
			</div>
			<div class="col-md-7 heading-section ftco-animate">
				<div class="card border-warning bg-light-green">
					<div class="row p-4 d-flex justify-content-center">
						<div class="col-md-6 p-1 d-flex m-0 card text-center aos-init aos-animate bg-body-green" data-aos="fade-up" data-aos-delay="100">
							<div class="pt-2 pb-2">
								<i class="bx bx-envelope contact-icon"></i>
								<h5>Email Us</h5>
								<p class="form-label">contact@marriagegate.com</p>
							</div>
						</div>
						<!-- <div class="col-md-6 p-1 d-flex m-0 card text-center aos-init aos-animate bg-body-green" data-aos="fade-up" data-aos-delay="200">
							<div class="pt-2 pb-2">
								<i class="bx bx-phone-call contact-icon"></i>
								<h5>Call Us</h5>
								<p class="form-label">+8801686-000000</p>
							</div>
						</div> -->
						<div class="col-md-6 p-1 d-flex m-0 card text-center aos-init aos-animate bg-body-green" data-aos="fade-up">
							<div class="pt-2 pb-2">
								<i class="bx bx-map contact-icon"></i>
								<h5>Our Address</h5>
								<p class="form-label">72/A, Mirpur, Dhaka-1206 </p>
							</div>
						</div>
					</div>
					<div class="row m-2">
						<div class="col-lg-12 p-4 bg-body-green aos-init" data-aos="fade-up" data-aos-delay="300">
							<form action="{{ route('contact_us_post') }}" method="post">
								@csrf
								<div class="form-row">
									<div class="col-lg-6 form-group">
										<input type="text" name="name" class="form-control p-2" placeholder="Your Name">

									</div>
									<div class="col-lg-6 form-group">
										<input type="email" class="form-control  p-2" name="email" placeholder="Your Email">
									</div>
								</div>
								<div class="form-group">
									<input type="text" class="form-control  p-2" name="subject" placeholder="Subject">
								</div>
								<div class="form-group">
									<textarea class="form-control  p-2" name="message" rows="5" placeholder="Message"></textarea>
								</div>
								<div class="text-center"><button type="submit">Send Message</button></div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>	
</section>
@endsection
