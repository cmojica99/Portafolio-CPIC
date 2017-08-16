@extends('layouts.app')
@section('title', 'Portafolio CPIC')

@section('content')
		<div class="col-md-8 col-md-offset-2">
			<div id="usersr" class="col-md-4"><div><button class="btn btn-default edit btn-delete-img"><i class="glyphicon glyphicon-pencil"></i> </button>
			<button class="btn btn-default elim btn-delete-img"><i class="fa fa-times"></i> </button>

				<img class="img-responsive" src="{{ asset('imgs/14052529_1749779515295896_1626367573_n.jpg')}}"> </div>
				<p class="text-center"><strong>Jhon Cortes</strong></p>
				<p class="text-center">Administrador</p>


								
			</div>
			<div id="usersr" class="col-md-4">
			<div><button class="btn btn-default edit btn-delete-img"><i class="glyphicon glyphicon-pencil"></i> </button>
			<button class="btn btn-default elim btn-delete-img"><i class="glyphicon glyphicon-remove"></i> </button>

				<img class="img-responsive" src="{{ asset('imgs/14712345_1333158223362480_7372244190295490560_n.jpg')}}"> 	
				<p class="text-center"><strong>Paola Sanchez</strong></p>
				<p class="text-center">Administrador</p>


	
				</div>				
			</div>
			<div id="usersr" class="col-md-4">
				<div><button class="btn btn-default edit btn-delete-img"><i class="glyphicon glyphicon-pencil"></i> </button>

				<button class="btn btn-default elim btn-delete-img"><i class="glyphicon glyphicon-remove"></i> </button>

				<img class="img-responsive" src="{{ asset('imgs/14596704_1811272409128822_3899613666617589760_n.jpg')}}"> </div>
				<p class="text-center"><strong>Camilo Mojica</strong></p>
				<p class="text-center">Administrador</p>


			</div>

		</div>	
		
  


@endsection