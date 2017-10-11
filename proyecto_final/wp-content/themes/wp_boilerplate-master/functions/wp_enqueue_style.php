<?php 
	
	function dl_enqueue_style() {
		$theme_data = wp_get_theme();

		/* Register Scripts */
		wp_register_style('reset', get_parent_theme_file_uri('/assets/css/reset.css'), null, $theme_data->get( 'Version' ), 'screen');
		wp_register_style('mainStyle', get_parent_theme_file_uri('/assets/css/style.css'), array('reset'), $theme_data->get( 'Version' ), 'screen');

		wp_register_style('estilos', get_parent_theme_file_uri('/assets/css/estilos.css'), array('reset'), $theme_data->get( 'Version' ), 'screen');

		wp_register_style('fontawesome', get_parent_theme_file_uri('/assets/css/font-awesome.min.css'), array('reset'), $theme_data->get( 'Version' ), 'screen');

		wp_register_style('nivo-slider', get_parent_theme_file_uri('/assets/css/nivo-slider.css'), array('reset'), $theme_data->get( 'Version' ), 'screen');

		wp_register_style('nivotheme', get_parent_theme_file_uri('/assets/css/nivotheme.css'), array('reset'), $theme_data->get( 'Version' ), 'screen');

		wp_register_style('morphext', get_parent_theme_file_uri('/assets/css/morphext.css'), array('reset'), $theme_data->get( 'Version' ), 'screen');

		wp_register_style('animate', get_parent_theme_file_uri('/assets/css/animate.css'), array('reset'), $theme_data->get( 'Version' ), 'screen');

		wp_enqueue_style( 'bootstrap_css', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css' );
		

		/* Enqueue Scripts */
		wp_enqueue_style('mainStyle');
		wp_enqueue_style('estilos');
		wp_enqueue_style('fontawesome');
		wp_enqueue_style('nivo-slider');
		wp_enqueue_style('nivotheme');
		wp_enqueue_style('morphext');
		wp_enqueue_style('animate');
		
	}

	add_action( 'wp_enqueue_scripts', 'dl_enqueue_style' );
?>