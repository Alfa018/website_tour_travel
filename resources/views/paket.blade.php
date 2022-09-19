@extends('layouts.app')
@section('content')

<section class="project-area section-gap" id="project">
	<div class="container">
		<div class="row d-flex justify-content-center">
			<div class="menu-content pb-30 col-lg-8">
				<div class="title text-center">
					<h1 class="mb-10">Many Choices of Tour Packages</h1>
					<p>We provide various tour packages in Bali, Banyuwangi and Bromo</p>
				</div>
			</div>
		</div>
		<div class="row justify-content-center d-flex">
			<div class="active-works-carousel mt-40 col-lg-8">
				@foreach($data as $d)	
				<div class="item">
					<img class="img-fluid" src="{{url('file/'.$d->img)}}" alt="">
					<div class="caption text-center mt-20">
						<h6 class="text-uppercase">{{$d->title}}</h6>
						<p>{{$d->excerpt}} <br> <a href="{{route('paket.show', $d->id)}}"><i> Read More.. </i></a></p>
					</div>
				</div>
				@endforeach
			</div>
		</div>
	</div>
</section>

@endsection