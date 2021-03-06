@extends('layoutindex')
@section('contents')

	<section class="hero">
		<div class="container">
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<div class="hero-content text-center">
						<h1>Tramita Tu Visa de Manera Totalmente Segura</h1>
						<p class="intro">Realiza el trámite de tu cita para visa en menos de 20 minutos y totalmente en español</p>
						<a href="{{ URL::to('iniciarTramite') }}" class="btn btn-fill btn-large btn-margin-right">Tramitar mi Visa</a>
					</div>
				</div>
			</div>
		</div>
		<div class="down-arrow floating-arrow"><i class="fa fa-angle-down"></i></div>
	</section>

	<section class="blog text-center pasos">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-2">
					<article class="blog-post">
						<figure>
								<div class="blog-img-wrap">
									<div class="overlay">
										<i class="fa fa-search"></i>
									</div>
									<img src="assets/img/VISATE_1.jpg" alt="Sedna blog image"/>
								</div>
							<figcaption>
							<h2><a href="#" class="blog-category" data-toggle="tooltip" data-placement="top" data-original-title="See more posts">Paso 1</a></h2>
							<p><a href="#" class="blog-post-title pasos2">Tener tu pasaporte Vigente <br> No tengo pasaporte Vigente<i class="fa fa-angle-right"></i></a></p>
							</figcaption>
						</figure>
					</article>
				</div>
				<div class="col-md-2">
					<article class="blog-post">
						<figure>

								<div class="blog-img-wrap">
									<div class="overlay">
										<i class="fa fa-search"></i>
									</div>
									<img src="assets/img/VISATE_2.jpg" alt="Sedna blog image"/>
								</div>

							<figcaption>
							<h2><a href="#" class="blog-category" data-toggle="tooltip" data-placement="top" data-original-title="See more posts">Paso 2</a></h2>
							<p><a href="#" class="blog-post-title">Llenar el formulario de solicitud<i class="fa fa-angle-right"></i></a></p>
							</figcaption>
						</figure>
					</article>
				</div>
				<div class="col-md-2">
					<article class="blog-post">
						<figure>

								<div class="blog-img-wrap">
									<div class="overlay">
										<i class="fa fa-search"></i>
									</div>
									<img src="assets/img/VISATE_3.jpg" alt="Sedna blog image"/>
								</div>

							<figcaption>
							<h2><a href="#" class="blog-category" data-toggle="tooltip" data-placement="top" data-original-title="See more posts">Paso 3</a></h2>
							<p><a href="#" class="blog-post-title">Realizar tu pago de derecho a Visa<i class="fa fa-angle-right"></i></a></p>
							</figcaption>
						</figure>
					</article>
				</div>
				<div class="col-md-2">
					<article class="blog-post">
						<figure>
								<div class="blog-img-wrap">
									<div class="overlay">
										<i class="fa fa-search"></i>
									</div>
									<img src="assets/img/VISATE_4.jpg" class="single_image" alt="Sedna blog image"/>
								</div>
							<figcaption>
							<h2><a href="#" class="blog-category" data-toggle="tooltip" data-placement="top" data-original-title="See more posts">Paso 4</a></h2>
							<a href="#" class="blog-post-title">Enviar la Referencia de tu pago para agendar la fecha de tu cita<i class="fa fa-angle-right"></i></a></p>
							</figcaption>
						</figure>
					</article>
				</div>
				<div class="col-md-2">
					<article class="blog-post">
						<figure>
								<div class="blog-img-wrap">
									<div class="overlay">
										<i class="fa fa-search"></i>
									</div>
									<img src="assets/img/VISATE_5.jpg" class="single_image" alt="Sedna blog image"/>
								</div>
							<figcaption>
							<h2><a href="#" class="blog-category" data-toggle="tooltip" data-placement="top" data-original-title="See more posts">Paso 5</a></h2>
							<a href="#" class="blog-post-title">Asistir a tu cita al consulado de tu eleccion<i class="fa fa-angle-right"></i></a></p>
							</figcaption>
						</figure>
					</article>
				</div>
				<a href="#download" class="btn btn-ghost btn-accent btn-small">Contacto</a>
			</div>
		</div>
	</section>
	<section class="sign-up section-padding text-center" id="download">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3">
					<h3>¿Tienes alguna duda?</h3>
					<p>Compártenos cualquier inquietud que tengas</p>
					{{ Form::open(array('url' => 'preguntas','class' => 'signup-form')) }}
						<div class="form-input-group">
							<i class="fa fa-envelope"></i>{{ Form::text('email', null, array('placeholder'=>'Ingresa tu E-mail','required' => 'required')) }}
						</div>
						<div class="form-input-group textarea-form">
							<i class="fa fa-pencil-square-o"></i>{{ Form::textarea('texto', null, array('placeholder'=>'¿Qué dudas tienes?','required' => 'required')) }}
						</div>
						<button type="submit" class="btn-fill sign-up-btn">Enviar</button>		
					{{ Form::close() }}
				</div>
			</div>
		</div>
	</section>
	<section class="to-top">
		<div class="container">
			<div class="row">
				<div class="to-top-wrap">
					<a href="#top" class="top"><i class="fa fa-angle-up"></i></a>
				</div>
			</div>
		</div>
	</section>

	{{ HTML::script('assets/js/jquery-2.1.3.min.js') }}
	<script type="text/javascript">
	$(document).ready(function() {
		/***************** Smooth Scrolling ******************/
		$(function() {

			$('a[href*=#]:not([href=#])').click(function() {
				if (location.pathname.replace(/^\//, '') === this.pathname.replace(/^\//, '') && location.hostname === this.hostname) {

					var target = $(this.hash);
					target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
					if (target.length) {
						$('html,body').animate({
							scrollTop: target.offset().top
						}, 2000);
						return false;
					}
				}
			});

		});
	});
	</script>
@stop