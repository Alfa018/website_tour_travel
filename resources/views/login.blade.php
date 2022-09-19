@extends('layouts.app')
@section('content')
<section class="h-100">
	<div class="container h-100">
		<div class="row justify-content-sm-center h-100">
			<div class="col-xxl-4 col-xl-5 col-lg-5 col-md-7 col-sm-9">
				<div class="text-center my-5">
					<img src="assets/user/img/logo1.png" alt="logo" width="100">
				</div>
				<div class="card shadow-lg">
					<div class="card-body p-5">
						<h1 class="fs-4 card-title fw-bold mb-4">LOGIN</h1>
						<form method="POST" class="needs-validation" novalidate="" action="{{ route('login') }}" autocomplete="on">
							@csrf
							<div class="mb-3">
								<label class="mb-2 text-muted" for="email">E-Mail</label>
								<input id="email" type="email" class="form-control" name="email" value="" required autofocus>
								@error('email')
								<div class="invalid-feedback" role="alert">
									'Invalid Email'
								</div>
								@enderror
							</div>

							<div class="mb-3">
								<div class="mb-2 w-100">
									<label class="text-muted" for="password">Password</label>
									<a href="forgot.html" class="float-end">
										Forgot Password
									</a>
								</div>
								<input id="password" type="password" class="form-control" name="password" required>
								@error('password')
								<div class="invalid-feedback" role="alert">
									{{$message}}
								</div>
								@enderror
							</div>

							<div class="d-flex align-items-center">
								<div class="form-check mb-5">
									<input type="checkbox" name="remember" id="remember" class="form-check-input">
									<label for="remember" class="form-check-label">Remember Me</label>
								</div>
								<button type="submit" class="btn btn-primary ms-auto mt-5">
									Login
									<!-- <script type='text/javascript'>
										alert('email & Password Anda Salah!');
									</script> -->
								</button>
							</div>
						</form>
					</div>
					<div class="card-footer py-3 border-0">
						<div class="text-center">
							don't have an account? <a href="{{url('register')}}" class="text-dark">Register Now</a>
						</div>
					</div>
				</div>
				<div class="text-center mt-5 text-muted">
					Copyright &copy; 2022 &mdash; PT. PILAR WISATA INDONESIA
				</div>
			</div>
		</div>
	</div>
</section>

<script src="assets/js/login.js"></script>
@endsection