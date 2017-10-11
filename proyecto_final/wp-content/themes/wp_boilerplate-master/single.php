<?php
/**
 * The Template for displaying all single posts.
 */

get_header(); ?>

<div id="noticiabloque" class="noticias_seccion noticias_3  parallax">

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div id="post-<?php the_ID(); ?>">


    	<div class="divnoticia"><!-- noticia -->

	        <h2><span class="fa fa-paperclip" aria-hidden="true"> </span> <?php the_title(); ?></h2>

	        <div class="row">
	        	<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 cajaimagen">
					<img src="<?php the_field('noticia_imagen'); ?>" alt="Foto del blog" class="noticiaimagen d-block w-100">
				</div>
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
			        
			         <p>  <?php the_content(); ?></p>
			         <h6><?php the_time('F jS, Y') ?> <!-- by <?php the_author() ?> --></h6>
		   		</div>

		   	
			</div>

	    </div><!-- fin noticia -->


    </div>
    <?php endwhile; endif; ?>

</div>


<?php get_footer() ?>

