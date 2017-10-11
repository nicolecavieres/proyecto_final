<?php get_header() ?>


<!--NOSOTROS-->

<section class="nosotros_seccion" id="nosotros_seccion">
	<div class="row">
		<div class="col-xl-5 col-lg-12 col-md-12 col-sm-12 nosotros">
			<div ps2id id='nosotros' target=''/></div>
			<h2>Nosotros</h2>
			<p>Somos un jardín infantil con orientación cristiana, teniendo la convicción de que la vinculación con Dios es esencial al hombre. Lo anterior , sin perjuicio de las creencias particulares de cada una de las familias que integrarán nuestro jardín.
			Nuestro objetivo es formar niños y niñas felices que posean claros principios morales cristianos, que aprendan a enfrentar la vida con optimismo y autoconfianza y a relacionarse en una actitud de respeto y seguridad.</p>
			<div class="leermas">
				<a href="nosotros#nosotros2_seccion"><button type="button" class="botonmenu botonchico">Leer más</button></a>
			</div>
			<div class="otrasopciones">
				<ul>
					<li><a href="nosotros#historia_seccion">Historia</a></li>
					<li><a href="nosotros#reglamento_seccion">Reglamento</a></li>
				</ul>
			</div>
		</div>

		<!--Galería-->
		<div class="col-xl-7 col-lg-12 col-md-12 col-sm-12 galeria">


			<div id="slider" class="theme-default">
				<div class="inner">
					<div class="nivo-slider nivoSlider">
						<?php 
						$arg = array(
							'post_type' => 'slider',
							'posts_per_page'=> 10
						);
						$get_arg = new WP_Query( $arg );

						while ( $get_arg->have_posts() ) {
							$get_arg->the_post(); 
							?> 

							<a href=""><img src="<?php the_field('imagen_slider'); ?>" alt="#" /></a>

							<?php } wp_reset_postdata(); ?> 

					</div>        
				</div>
			</div>
		</div>
		<!--Fin Galería-->
	</div>
</section>
<!--FIN NOSOTROS-->
<!--INFORMACION-->
<section class="informacion_seccion" id="informacion_seccion">
	<h2>Información para padres</h2>
	<div class="row info">
		<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 info1">
			<div class="iconinfo">
				<img src="<?php echo get_parent_theme_file_uri('assets/images/info-01.png') ?>" alt="Imagen Colación Saludable">
			</div >
			<div>
				<a href="informacion#colacion_seccion"><button type="button" class="botonmenu botoninfo">Colación Saludable</button></a>
			</div>
		</div>
		<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 info2">
			<div class="iconinfo">
				<img src="<?php echo get_parent_theme_file_uri('assets/images/info-03.png') ?>" alt="Imagen Útiles escolares 2017">
			</div>
			<div>
				<a href="informacion#utiles"><button type="button" class="botonmenu botoninfo">Útiles escolares 2017</button></a>
			</div>
		</div>
		<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 info3">
			<div class="iconinfo">
				<img src="<?php echo get_parent_theme_file_uri('assets/images/info-02.png') ?>" alt="Imagen Prevención maltrato infantil">
			</div>
			<div>
				<a href="informacion#manual"><button type="button" class="botonmenu botoninfo">Prevención maltrato infantil </button></a>
			</div>
		</div>	

	</div>
</section>
<!--FIN INFORMACION-->
<!--NOTICIAS-->
<section class="noticias_seccion parallax" id="noticias_seccion">
	<h2>Noticias y Actividades</h2>
	<div class="row">
		<div class="col-xl-8 col-lg-12 col-md-12 col-sm-12">

			<?php 
			$arg = array(
				'post_type' => 'post',
				'posts_per_page'=> 3
			);
			$get_arg = new WP_Query( $arg );

			while ( $get_arg->have_posts() ) {
				$get_arg->the_post(); 
				?> 

				<!--noticia div-->
				<div class="noti row">
					<div class="notiimg col-xl-2 col-lg-2 col-md-3 col-sm-12">
						<img src="<?php the_field('noticia_imagen'); ?>" alt="Imagen noticia">
					</div>
					<div class="notitext col-xl-10 col-lg-10 col-md-9 col-sm-12">
						<p><span class="fa fa-paperclip" aria-hidden="true"> </span><span><a href="<?php the_permalink();?>"> <?php the_title()?>  </a></span> <?php the_excerpt()?> </p>
						<a href="<?php the_permalink();?>">
							<h4 class="leernoti">Leer más</h4>
						</a>
					</div>
				</div>
				<!--fin noticia div-->
				<?php } wp_reset_postdata(); ?> 
				<div class="linknoticias"><a href="noticias"><h3>Ver más noticias</h3></a></div>
		</div>
		<div class="col-xl-4 col-lg-12 col-md-12 col-sm-12">
				<div class="calendario">
					<iframe src="https://calendar.google.com/calendar/embed?showTitle=0&amp;showDate=0&amp;showPrint=0&amp;showTabs=0&amp;showCalendars=0&amp;showTz=0&amp;wkst=2&amp;src=es.cl%23holiday%40group.v.calendar.google.com&amp;color=%232952A3&amp;src=nqvqub2dkbjvk4tfb9h9alfopk%40group.calendar.google.com&amp;color=%231B887A&amp;ctz=America%2FSantiago" style="border-width:0" frameborder="0" scrolling="no"></iframe>
				</div>
				<a href="feriados"><div class="enlaceapi"><h3>Ver feriados importantes</h3></div></a>
		</div>
	</div>
</section>
<!--FIN NOTICIAS-->

<?php get_footer() ?>

