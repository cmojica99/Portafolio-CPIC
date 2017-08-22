
@extends('layouts.app')
@section('title', 'Portafolio CPIC')
@include('layouts.navbar')
@section('content')
<!-- Slider -->
<section class="slider">
	<div class="container background_png">

		
	</div>
</section>
<!--Acordion-->
<section class="acordeon">
	<div class="container">

		<h1 class="text-center ali">Nuestros Aliados</h1>
		
		<div class="row">
			<div role="presentation" class="tarjeta1 col-md-3"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">
				<div class="tarjeta2 col-md-12">
					<img src="{{ asset('imgs/sennova.png')}}" alt="" width="100%"></a>
					<p>	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus soluta possimus, tenetur similique quidem iste sunt! Dolores voluptatem a, impedit, in consequuntur temporibus soluta illo libero nostrum enim dolore at sit ea, natus suscipit dolorum minima quos iste labore ducimus quam. Delectus quae architecto assumenda eius animi modi illo voluptate.</p>
				</div>
			</div>
			<div role="presentation" class="tarjeta1 col-md-3"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">
				<div class="tarjeta2 col-md-12">
					<img src="{{ asset('imgs/ape.png')}}" width="100%" alt=""></a>
					<p>	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus soluta possimus, tenetur similique quidem iste sunt! Dolores voluptatem a, impedit, in consequuntur temporibus soluta illo libero nostrum enim dolore at sit ea, natus suscipit dolorum minima quos iste labore ducimus quam. Delectus quae architecto assumenda eius animi modi illo voluptate.</p>
				</div>
			</div>	
			<div role="presentation" class="tarjeta1 col-md-3"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">
				<div class="tarjeta2 col-md-12">
					<img src="{{ asset('imgs/tecnoparque.png')}}" width="100%" alt=""></a>
					<p>	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus soluta possimus, tenetur similique quidem iste sunt! Dolores voluptatem a, impedit, in consequuntur temporibus soluta illo libero nostrum enim dolore at sit ea, natus suscipit dolorum minima quos iste labore ducimus quam. Delectus quae architecto assumenda eius animi modi illo voluptate.</p>
				</div>
			</div>
			<div role="presentation" class="tarjeta1 col-md-3"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">
				<div class="tarjeta2 col-md-12">
					<img src="{{ asset('imgs/world skills.png')}}" width="100%" alt=""></a>
					<p>	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus soluta possimus, tenetur similique quidem iste sunt! Dolores voluptatem a, impedit, in consequuntur temporibus soluta illo libero nostrum enim dolore at sit ea, natus suscipit dolorum minima quos iste labore ducimus quam. Delectus quae architecto assumenda eius animi modi illo voluptate.</p>
				</div>
			</div>

		</div>
	</div>

</section>
<!-- Bienestar-->
<section class="bienestar">
	<div class="container">
		<div class="row animated bounceIn">
			<div class= "col-md-5">
				<div class="card-info text-right">
				<span class="icono-salud fa fa-heartbeat fa-3x"></span>
					<h5><strong>SALUD</strong></h5>
					<p>
						Fomenta espacios de promoción de la salud física y mental para el fortalecimiento de hábitos de vida saludables.
					</p>
				</div>
			</div>
		</div>
		<div class="row animated bounceIn">
			<div class="col-md-5 col-md-offset-3">
				<div class="card-info">
				<span class="icono-igualdad fa fa-thumbs-o-up fa-3x" ></span>
					<h5><strong>EQUIDAD E IGUALDAD DE OPORTUNIDADES</strong></h5>
					<p>
						Promueve estrategias que garanticen la equidad, la no discriminación y el acceso en igualdad de oportunidades.
					</p>
				</div>
			</div>
		</div>
		<div class="row animated bounceIn">
			<div class="col-md-5">
				<div class="card-info text-right">
				<span class="icono-competencia fa fa-book fa-3x"></span>
					<h5><strong>COMPETENCIAS BÁSICAS</strong></h5>
					<p>
						Procura la construcción de estrategias de autogestión del aprendizaje para el incremento del logro educativo.​
					</p>
				</div>				
			</div>
			<div class= "col-md-5 col-md-offset-2">
				<div class="card-info">
				<span class="icono-feliz fa fa-smile-o fa-3x"></span>
					<h5><strong>HABILIDADES SOCIOEMOCIONALES</strong><br></h5>
					<p>
						Fortalece competencias ciudadanas y habilidades sociales de trabajo en equipo con base en valores de solidaridad, servicio, respeto y autonomía, entre otros.​
					</p>
				</div>
			</div>
		</div>
		<div class="row animated bounceIn">
			<div class="col-md-5 col-md-offset-3">
				<div class="card-info">

					<h5><strong>CULTURA</strong><br></h5>
					<p>
						Procura la construcción de estrategias de autogestión del aprendizaje para el incremento del logro educativo.
					</p>
				</div>
			</div>
		</div>
		<div class="row animated bounceIn">
			<div class="col-md-5">
				<div class="card-info text-right">
				<span class="icono-depor fa fa-futbol-o fa-3x"></span>
					<h5><strong>DEPORTE</strong><br></h5>
					<p>
						Fomenta la práctica del deporte y la actividad física para el desarrollo de hábitos de vida saludables, el adecuado uso del tiempo libre y el desarrollo de habilidades socioemocionales, apoyando al proceso de formación integral. ​.
					</p>
				</div>	
			</div>
			<div class= "tex col-md-5 col-md-offset-2">
				<div class="card-info">
					<h5><strong>LIDERAZGO</strong><br></h5>
					<p>
						Fomenta la formación de líderes integrales con sentido de pertenencia hacia la institución que fortalezcan los espacios de representación y participación, como elementos para la construcción de ciudadanos socialmente responsables
					</p>
				</div>
			</div>
		</div>
		<div class=" row animated bounceIn">
			
			<div class="col-md-5 col-md-offset-3">
				<div class="card-info">
				<span class="icono-respon fa fa-users fa-3x"></span>
					<h5><strong>RESPONSABILIDAD SOCIAL</strong><br></h5>
					<p>
						Fomenta habilidades de liderazgo social que permitan desarrollar el crecimiento personal, la apropiación institucional de la entidad y la solidaridad con las comunidades.
					</p>
				</div>
			</div>
		</div>
		<div class="row animated bounceIn">
			<div class="col-md-5 col-md-offset-6">
				<div class="card-info">
				<span class="icono-convive fa fa-sign-language fa-3x"></span>
					<h5><strong>CONVIVENCIA</strong><br></h5>
					<p>
						Fomenta ambientes de convivencia y participación social a través de espacios de reflexión como actores activos en la construcción de una paz duradera y estable, enfocada en la formación profesional integral.
					</p>
				</div>
			</div>
		</div>

	</div>
</section>
<!-- Galeria -->



@endsection

@section('footer')
<footer class="footer">
	<div class="container">
		<div class="row">

			<div class="col-md-7">
				<h4 > INFORMACIÓN </h4>
				<ul class="list-unstyled">
					<li class="awesome_icon"><i class="fa fa-fw fa-home icon_fot"></i>Centro de Procesos Industriales -  Regional Caldas</li>
					<li class="awesome_icon"><i class="fa fa-fw fa-flag icon_fot" ></i>Servicio Nacional de Aprendizaje SENA</li>
					<li class="awesome_icon"><i class="fa fa-fw fa-flag icon_fot" ></i>Ministerio de la Protección Social</li>

					<li class="awesome_icon">
						<li><i class="fa fa-fw fa-map-marker icon_fot" aria-hidden="true"></i>Dirección: Kilómetro 10 vía al Magdalena </li>
					</li>
					<li class="awesome_icon">
						<li><i class="fa fa-fw fa-map-marker icon_fot" aria-hidden="true"></i>Ubicacion: Vista Panorámica Bloques principales  </li>
					</li>
					<li class="awesome_icon">
						<i class="fa fa-fw fa-envelope icon_fot" aria-hidden="true"></i><a href="mailto:crmorales@misena.edu.co">Correo Electrónico: crmorales@misena.edu.co</a>
					</li>
					<li class="awesome_icon">
						<li><i class="fa fa-fw fa-phone icon_fot" aria-hidden="true"></i>Telefono : 8748664</li>
					</li>
					<li class="awesome_icon">
						<li><i class="fa fa-fw fa-slack icon_fot" aria-hidden="true"></i>Horario De Atencion: Lunes a viernes de 8:00 a 5:00 pm ( Jornada Continua )</li>
					</li>

	</ul>    
				<div class="container">
					<nav class="footer-social-networks">
						<a href="" data-toggle="tooltip" title="Facebook" class=" social_web"><i class="fa fa-facebook fa-3x social_networks"></i></a>
						<a  social_networkshref="" data-toggle="tooltip" title="Twitter" class=" social_web "><i class="fa fa-twitter-square fa-3x social_networks" aria-hidden="true"></i></a>
						<a href="" data-toggle="tooltip" title="Instagram" class=" social_web "><i class="fa fa-instagram fa-3x social_networks"></i></a>
						<a href="" data-toggle="tooltip" title="Google +" class="social_web "><i class="fa fa-google-plus fa-3x social_networks"></i></a>
					</nav>  
				</div>
				

				<p class="">&copy; Todos los derechos reservados {{date('Y')}}  </p>        
			</div>

			<div class="col-md-5 etica_sena">
				<img src="{{asset('imgs/icontecA.png')}}">
				<img src="{{asset('imgs/icontecB.png')}}">
				<img src="{{asset('imgs/icontecC.png')}}">
				<img src="{{asset('imgs/icontecD.png')}}">
				<ul class="fecha_ini">
					<li  class="fecha_mod">Última modificación: 
						16/08/2017 11:18 a. m.</li>
					</div>


				</div>
			</div>
		</footer>
@endsection


