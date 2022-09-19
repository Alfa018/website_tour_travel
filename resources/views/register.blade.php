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
						<h1 class="fs-4 card-title fw-bold mb-4">Register</h1>
						<form method="POST" action="{{ route('register') }}" class="needs-validation" novalidate="" autocomplete="off">
							@csrf
							<div class="mb-3">
								<label class="mb-2 text-muted" for="name">Name</label>
								<input id="name" type="text" class="form-control" name="name" value="" required autofocus>
								<div class="invalid-feedback">
									Name is required
								</div>
							</div>

							<div class="mb-3">
								<label class="mb-2 text-muted" for="email">E-Mail Address</label>
								<input id="email" type="email" class="form-control" name="email" value="" required>
								<div class="invalid-feedback">
									Email is invalid
								</div>
							</div>

							<div class="mb-3">
								<label class="mb-2 text-muted" for="no_tlp">Phone Number</label>
								<input id="no_tlp" type="text" class="form-control" name="no_tlp" value="" required>
								<!-- <div class="invalid-feedback">
										Email is invalid
									</div> -->
							</div>

							<div class="mb-3">
								<label class="mb-2 text-muted" for="alamat">Address</label>
								<input id="alamat" type="text" class="form-control" name="alamat" value="" required>
								<!-- <div class="invalid-feedback">
										Number is invalid
									</div> -->
							</div>

							<!-- <div class="mb-3">
									<label class="mb-2 text-muted" for="email">Role</label>
									<input id="role" type="text" class="form-control" name="role" value="" required>
									<div class="invalid-feedback">
										Email is invalid
									</div>
								</div> -->

							<div class="mb-3">
								<label class="mb-2 text-muted" for="password">Password</label>
								<input id="password" type="password" class="form-control" name="password" required>
								<div class="invalid-feedback">
									Password is required
								</div>
							</div>
							<div class="mb-3">
								<label class="mb-2 text-muted" for="password">Password Confirmation</label>
								<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
								<div class="invalid-feedback">
									Password Confirmation is required
								</div>
							</div>
							<div class="align-items-center d-flex">
								<button type="submit" class="btn btn-primary ms-auto">
									Register
								</button>
							</div>
						</form>
					</div>
					<div class="card-footer py-3 border-0">
						<div class="text-center">
							Already have an account? <a href="{{url('login')}}" class="text-dark">Login</a>
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

@endsection