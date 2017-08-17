@extends('layouts.app')
@section('title', 'Portafolio CPIC')

@section('content')
		<div class="col-md-8 col-md-offset-2">
			<div id="usersr" class="col-md-4">
				<div><button class="btn btn-default edit btn-delete-img"><i class="glyphicon glyphicon-pencil"></i> </button>

				<button class="btn btn-default elim btn-delete-img"><i class="glyphicon glyphicon-remove"></i> </button>

				<img class="img-responsive" src="{{ asset('')}}"> </div>
				<p class="text-center"><strong></strong></p>
				<p class="text-center"></p>


			</div>

		</div>	
		
  


@endsection