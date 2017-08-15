@extends('layout-app/welcome')
@section('title', 'Portafolio CPIC')

@section('content')
	<!-- Slider -->
	<section class="slider">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<div class="owl-carousel owl-theme">
						<div class="item"><a href="#"><img src="{{ asset('imgs/sl3.png')}}" alt=""></a></div>
						<div class="item"><a href="#"><img src="{{ asset('imgs/sl1.png')}}" alt=""></a></div>
						<div class="item"><a href="#"><img src="{{ asset('imgs/sl2.png')}}" alt=""></a></div>
					</div> 
				</div>				
			</div>
		</div>
	</section>
<section class="galeria">
	<div class="container-gallery">
		<img src="{{ asset('imgs/bienestar/14962773_583713631813941_9008235928232615140_n.jpg')}}" alt="">
		<img src="{{ asset('imgs/bienestar/17457777_1487054597993953_7278943542758865879_n.jpg')}}" alt="">
		<img src="{{ asset('imgs/bienestar/18486209_1557457784286967_1672427826755756098_n.jpg')}}" alt="">
		<img src="{{ asset('imgs/bienestar/20139672_1449624228463314_1747501999493690269_n.jpg')}}" alt="">
		<img src="{{ asset('imgs/bienestar/14962773_583713631813941_9008235928232615140_n.jpg')}}" alt="">
		<img src="{{ asset('imgs/bienestar/18486209_1557457784286967_1672427826755756098_n.jpg')}}" alt="">
		
	</div>
</section>
@endsection
