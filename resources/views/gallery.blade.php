@extends('layouts.app')
@section('content')

<section class="gallery-area" id="gallery">
	<div class="title text-center">
		<h1 class="mb-10">Capture the moment with us</h1>
	</div>
	<div class="container-fluid mt-5">
		<div class="row no-padding">
			<div class="active-gallery">
				@foreach($data as $d)
				<div class="item single-gallery">
					<img src="{{url('file/'.$d->img)}}" alt="">
				</div>
				@endforeach
			</div>
		</div>
	</div>
</section>
@endsection