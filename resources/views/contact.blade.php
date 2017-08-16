@extends('layouts.app')
@section('title', 'Portafolio CPIC')

@section('content')
	<header class="jumbotron-pages jumbotron contact">
    <div class="container">

        <h1 class="text-center">Contáctenos</h1>

    </div>
</header>
<section class="site-contact">
    <div class="container">

        <div class="row">
            <div class="col-lg-6">
                <h1>Mensaje</h1>
                

                <div class="alert alert-success">
                    Thank you for contacting us. We will respond to you as soon as possible.
                </div>

                <p>
                    Note that if you turn on the Yii debugger, you should be able
                    to view the mail message on the mail panel of the debugger.
                    
                        Because the application is in development mode, the email is not sent but saved as
                        a file under <code>
                </p>

                

                <p>
                    Si tiene preguntas o consultas, rellene el siguiente formulario para ponerse en contácto con nosotros.
                    Gracias.
                </p>

                <form action="" id="contact-form">
                	<label for="">Nombre</label>
                	<input type="text" name="nombre" class="form-control nombre" placeholder="Nombre">

                	<label for="">Correo Electronico</label>
                	<input type="email" name="email" class="form-control email" placeholder="Correo Electronico">

                	<select id="pqrs" class="form-control">
                		<option value="">Seleccione Una Opcion</option>
                		<option value="1">Consulta</option>
                		<option value="2">Queja</option>
                		<option value="3">Sugerencia</option>
                	</select>


                	<label for="" class="form-control">Mensaje</label>
                	<textarea name="" id="" cols="30" rows="10" placeholder="Escribenos Tu Inconveniente"></textarea>

                	<button type="submit"></button> Enviar
                </form>

                    

            </div>

            <div class="col-lg-6">
                <div class="container-map">
                    <div id="googleMap" style="height: 250px;"></div>        
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <p>
                            Teléfonos Línea Ciudadano
                        </p>
                        <p>
                            Teléfonos Línea Empresarial
                        </p>
                    </div>
                    <div class="col-lg-8">
                        
                        <ul class="list-unstyled">
                            <li>
                                Línea Gratuita Nacional 01 8000 910 270                    
                            </li>
                            <li style="margin-bottom: 1rem;">
                                Línea Bogotá, D.C. (57 1) 592 55 55                    
                            </li>
                            <li>
                                Línea Gratuita Nacional 01 8000 910 682                    
                            </li>
                            <li>
                                Línea Bogotá, D.C. (57 1) 404 94 94                    
                            </li>
                        </ul>
                    </div>
                    <p style="padding-left: 1rem;  ">
                        Días hábiles de lunes a viernes de 7:00 a.m. - 7:00 p.m. y sábados de 8:00 a.m. - 1:00 p.m. en jornada continua.
                    </p>

                </div>






            </div>
        </div>
      


    </div>    
    
</section>

<script src="../../public/js/googlemaps.js"></script>
  


@endsection