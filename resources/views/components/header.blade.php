	<!-- header -->
	<header>
		<nav class="navbar navbar-expand-lg navbar-light py-4">
			<div class="container">
				<h1>
					<a class="navbar-brand" href="/">
						<i class="fab fa-500px"></i>Near By
					</a>
				</h1>
				<button class="navbar-toggler ml-md-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
				    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">

					<ul class="navbar-nav mx-auto text-center">
						<li class="nav-item active">
							<a class="nav-link" href="/">Home
								<span class="sr-only">(current)</span>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link scroll" href="#about">About</a>
						</li>
						{{-- <li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
							    aria-haspopup="true" aria-expanded="false">
								Pages
							</a>
							<div class="dropdown-menu text-lg-left text-center" aria-labelledby="navbarDropdown">
								<a class="dropdown-item scroll" href="#services">Services</a>
								<a class="dropdown-item scroll" href="#specials">Specials</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item scroll" href="#gallery">Gallery</a>
							</div>
						</li> --}}

						<li class="nav-item">
							<a class="nav-link scroll" href="#contact">Contact Us</a>
						</li>
					</ul>
					<div class="forms-w3ls-agilesm text-center mt-lg-0 mt-4">
						<ul>
							<li class="login-list-w3ls d-inline border-right pr-3 mr-3">
								<a href="#" class="text-white" data-toggle="modal" data-target="#exampleModalCenter1">Plan Stay</a>
							</li>
							<li class="login-list-w3ls d-inline">
								<a href="#" class="text-white" data-toggle="modal" data-target="#exampleModalCenter2">Plan Celebration</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</nav>
	</header>
	<!-- login -->
	<div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header text-center">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="login px-sm-4 mx-auto mw-100">
						<h5 class="text-center mb-4">Login Now</h5>
						<form action="#" method="post">
							<div class="form-group">
								<label>Your Name</label>
								<input type="text" class="form-control" name="name" placeholder="" required="">
							</div>
							<div class="form-group">
								<label class="mb-2">Password</label>
								<input type="password" class="form-control" name="password" placeholder="" required="">
							</div>
							<button type="submit" class="btn btn-primary submit mb-4">Login</button>
							<p class="text-center pb-4">
								<a href="#">Forgot your password?</a>
							</p>
							<p class="text-center pb-4 create-w3ls">
								Don't have an account?
								<a href="#" data-toggle="modal" data-target="#exampleModalCenter2">Create one now</a>
							</p>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //login -->
	<!-- register -->
	<div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header text-center">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="login px-sm-4 mx-auto mw-100">
						<h5 class="text-center mb-4">Register Now</h5>
						<form action="#" method="post">
							<div class="form-group">
								<label>Your Name</label>
								<input type="text" class="form-control" name="name" placeholder="" required="">
							</div>
							<div class="form-group">
								<label>Email</label>
								<input type="email" class="form-control" name="email" placeholder="" required="">
							</div>
							<div class="form-group">
								<label class="mb-2">Password</label>
								<input type="password" class="form-control" name="password" id="password1" placeholder="" required="">
							</div>
							<div class="form-group">
								<label>Confirm Password</label>
								<input type="password" class="form-control" name="password" id="password2" placeholder="" required="">
							</div>
							<button type="submit" class="btn btn-primary submit mb-4">Register</button>
							<p class="text-center pb-4">
								<a href="#">By clicking Register, I agree to your terms</a>
							</p>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //register -->
	<!-- //header -->
