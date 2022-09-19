@extends('layouts.app')

@section('content')
<!-- start banner Area -->
<section class="default-banner active-blog-slider">
	<div class="item-slider relative" style="background: url(assets/user/img/ijen.jpg);background-size: cover;">
		<div class="overlay" style="background: rgba(0,0,0,.5)"></div>
		<div class="container">
			<div class="row fullscreen justify-content-center align-items-center">
				<div class="col-md-10 col-12">
					<div class="banner-content text-center">
						<h4 class="text-white mb-20 text-uppercase">Discover</h4>
						<h1 class="text-uppercase text-white">BANYUWANGI</h1>
						<p class="text-white">The Sunrise of Java, that's the nickname for Banyuwangi.<br>
							Banyuwangi has many tourist attractions that are worth a visit.</p>
						<a href="{{url('paket')}}" class="text-uppercase header-btn">Discover Now</a>
					</div>
				</div>

			</div>
		</div>
	</div>
	<div class="item-slider relative" style="background: url(assets/user/img/np.jpg);background-size: cover;">
		<div class="overlay" style="background: rgba(0,0,0,.5)"></div>
		<div class="container">
			<div class="row fullscreen justify-content-center align-items-center">
				<div class="col-md-10 col-12">
					<div class="banner-content text-center">
						<h4 class="text-white mb-20 text-uppercase">Discover</h4>
						<h1 class="text-uppercase text-white">BALI ISLAND</h1>
						<p class="text-white">The island of a thousand gods is the name for Bali.<br>
							And of course Bali has a lot of tourist attractions that are very pleasing to the eye.</p>
						<a href="{{url('paket')}}" class="text-uppercase header-btn">Discover Now</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="item-slider relative" style="background: url(assets/user/img/np.jpg);background-size: cover;">
		<div class="overlay" style="background: rgba(0,0,0,.5)"></div>
		<div class="container">
			<div class="row fullscreen justify-content-center align-items-center">
				<div class="col-md-10 col-12">
					<div class="banner-content text-center">
						<h4 class="text-white mb-20 text-uppercase">Discover</h4>
						<h1 class="text-uppercase text-white">BALI ISLAND</h1>
						<p class="text-white">The island of a thousand gods is the name for Bali.<br>
							And of course Bali has a lot of tourist attractions that are very pleasing to the eye.</p>
						<a href="{{url('paket')}}" class="text-uppercase header-btn">Discover Now</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="item-slider relative" style="background: url(assets/user/img/bromo.jpg);background-size: cover;">
		<div class="overlay" style="background: rgba(0,0,0,.5)"></div>
		<div class="container">
			<div class="row fullscreen justify-content-center align-items-center">
				<div class="col-md-10 col-12">
					<div class="banner-content text-center">
						<h4 class="text-white mb-20 text-uppercase">Discover</h4>
						<h1 class="text-uppercase text-white">BROMO MOUNTAIN</h1>
						<p class="text-white">Beautiful mountain in east java</p>
						<a href="{{url('paket')}}" class="text-uppercase header-btn">Discover Now</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<footer>
		<div class="card">
			<div class="card-body">
				<center>
					© 2022 PT. Pilar Wisata Indonesia | All rights reserved.
				</center>
			</div>
		</div>
	</footer>
@endsection