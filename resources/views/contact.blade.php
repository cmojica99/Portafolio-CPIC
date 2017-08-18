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
                    Si tiene preguntas o consultas, rellene el siguiente formulario para ponerse en contácto con nosotros.
                    Gracias.
                </p>

                <form action="" id="contact-form">
                <div class="form-group">
                    <input id="contactfrm_name" type="text" name="nombre" class="form-control label-effect" >
                    <label for="contactfrm_name" class="control-label"> Nombre </label>
                    <span class="focus-border"></span>
                	
                </div>
               <div class="form-group">
                    <input id="contactfrm_correo" type="email" name="email" class="form-control label-effect" >
                    <label for="contactfrm_correo" class="control-label"> Correo Electronico </label>
                    <span class="focus-border"></span>
                    
                </div>
                <div class="form-group">
                    <label  class="" for="">Asunto</label>
                    <select id="pqrs" class="form-control label-effect">
                        <option value="">Seleccione Una Opcion</option>
                        <option value="1">Consulta</option>
                        <option value="2">Queja</option>
                        <option value="3">Sugerencia</option>
                    </select>
                    <span class="focus-border"></span>
                	
                </div>
                <div class="form-group">
                	<textarea name="" class="form-control label-effect" id="conct_text" cols="30" rows="3" ></textarea>
                    <label class="control-label" for="conct_text">Mensaje</label>
                    <span class="focus-border"></span>
                	
                </div>

					



                	<button id="enviar_cont" class="btn btn-success" type="submit">Enviar</button> 
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

<script>

</script>




  


@endsection