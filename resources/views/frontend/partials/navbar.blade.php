<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar ftco-navbar-light" id="ftco-navbar"  style="background: #e1f6ce !important;">
		<div class="container">
			<a class="navbar-brand" href="/">
				<img class="img-responsive" src="{{ asset('images/logo.png') }}" alt="Marriage Gate" style="width: 115px;border-radius: 4px;margin-top: -12px;">
			</a>
			<button class="navbar-toggler mr-2" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="oi oi-menu form-label font-weight-bold"></span> 
			</button>

			<div class="collapse navbar-collapse" id="ftco-nav">
		    <ul class="navbar-nav mr-auto">
		      <li class="nav-item">
		        <a class="nav-link form-label" href="/">Home</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link form-label" href="{{ route('about_us') }}">About Us</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link form-label" href="{{ route('contact_us') }}">Contact Us</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link form-label" href="{{ route('brides') }}">Brides</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link form-label" href="{{ route('grooms') }}">Grooms</a>
		      </li>
		    </ul>

		    <ul class="navbar-nav">
		      @if (Route::has('login'))
                    @auth
                    <li class="nav-item">
						<a href="{{ route('admin.dashboard') }}" title="Home" class="nav-link form-label">Dashboard</a>
					</li>
                    <li class="nav-item">
						<a href="{{ route('logout') }}" title="Logout" class="nav-link form-label"  onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
	                        Logout
	                    </a>
	                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
	                        @csrf
	                    </form>
					</li>
                    
                @else
                   <!-- <li class="nav-item">
						<a data-toggle="modal" data-target="#signupModal" data-wow-duration="1s" data-wow-delay=".7s" class="nav-link form-label">Sign UP</a>
					</li>
                    <li class="nav-item">
						<a  data-toggle="modal" data-target="#loginModal" data-wow-duration="1s" data-wow-delay=".7s" class="nav-link form-label">Login</a>
					</li> -->

					<li class="nav-item">
						<a class="nav-link form-label" href="{{ route('register') }}">Sign UP</a>
					</li>
                    <li class="nav-item">
						<a class="nav-link form-label" href="{{ route('login') }}">Login</a>
					</li>

					<!-- <form method="POST" action="{{ route('login') }}">
                        @csrf
					<li class="nav-item mr-2 mt-2">
						<input type="" name="email" placeholder="Email or phone" class="form-control-sm w-100">
					</li>

					<li class="nav-item mr-1 mt-2">
						<input type="" name="password"  placeholder="Password" class="form-control-sm w-100">
					</li>
					<li class="nav-item mt-2">
						<button class="btn">Login</button> <br>
					</li>
					<a href="" class="text-dark ">Forgot</a>
						<a class="float-right text-dark" style="cursor: pointer;" data-toggle="modal" data-target="#signupModal" data-wow-duration="1s" data-wow-delay=".7s">Sign UP</a> -->
				</form>
						
                    @endauth
				@endif
		    </ul>
		  </div>

		</div>
	</nav>