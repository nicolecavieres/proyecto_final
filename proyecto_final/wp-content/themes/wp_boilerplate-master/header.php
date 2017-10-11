<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset') ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php get_template_part('_includes/iOS', 'icons') ?>
	<title>Jardín Infantil Semillita</title>

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Dosis:300,600" rel="stylesheet">
	<?php wp_head() ?>

	<!-- Global Site Tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-102962656-3"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-102962656-3');
		
	</script>

</head>
<body>

<header class="parallax">
<!--MENU-->
	<nav>
	<div class="contenedor">
		<div class="row">
			<!--d-lg-none equivale a hidden-xl-up (clase utilitaria) en Boostrap 4 -->
			<div class="menu-responsivo d-xl-none" > 
				<button type="button" class="botonmenu" id="menu1">Menú</button>
			</div>
		</div>
		<div class="row">
			<div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 cajalogo">
				 <a href="<?php bloginfo('url') ?>">
	            <img src="<?php echo get_parent_theme_file_uri('assets/images/logo.png') ?>" alt="Logo Jardin Infantil Semillita" class="img-responsive logo">
	            </a>
				
			</div>
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 cajamenu" id="cajamenu">
			<!--menú de navegacion-->
			<?php wp_nav_menu(
			      array(
			          'theme_location' => 'menu',
			          'container_class' => 'menu_principal'
			      )); ?>   
			<!--fin menú de navegacion-->
			</div>
		</div>
	</div>
	</nav>

<!--FIN MENU-->
<!--BANNER-->
	<div class="titulobanner">
		<div class="contenedor">
			<h1>Jardin Infantil Semillita</h1>
			<h2>Sembrando con</h2>
			<h2 class="subtitulo"><span id="js-rotating">Valores, Educación, Principios Cristianos, Amor</span></h2>
			<h3>Matrículas abiertas</h3>
			<h4><a href="#contacto_seccion">Contáctenos Aquí</a></h4>
		</div>
	</div>
<!--FIN BANNER-->
</header>	

