<?php get_header() ?>

<section class="noticias_seccion noticias_2 parallax" id="noticias_seccion">
	<h2>Noticias y Actividades</h2>
	

			<?php 
			$arg = array(
				'post_type' => 'post',
				'posts_per_page'=> 10
			);
			$get_arg = new WP_Query( $arg );

			while ( $get_arg->have_posts() ) {
				$get_arg->the_post(); 
				?> 

				<!--noticia div-->
				<div class="noti row">
					<div class="notiimg2 col-xl-3 col-lg-3 col-md-12 col-sm-12">
						<img src="<?php the_field('noticia_imagen'); ?>" alt="Imagen noticia">
					</div>
					<div class="notitext col-xl-9 col-lg-9 col-md-12 col-sm-12">
						<h2><span class="fa fa-paperclip" aria-hidden="true"> </span> <a href="<?php the_permalink();?>"> <?php the_title()?> </a></h2> 
						<p><?php the_excerpt()?> </p>
						<a href="<?php the_permalink();?>">
							<h4 class="leernoti">Leer más</h4>
						</a>
					</div>
				</div>
				<!--fin noticia div-->
				<?php } wp_reset_postdata(); ?> 
						
</section>

<?php get_footer() ?>



