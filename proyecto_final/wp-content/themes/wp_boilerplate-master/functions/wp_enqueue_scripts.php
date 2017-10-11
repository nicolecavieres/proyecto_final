<?php 
	
	function dl_enqueue_scripts() {
		$theme_data = wp_get_theme();

		/* Deregister Scripts */
		wp_deregister_script( 'jquery' );
		wp_deregister_script( 'jquery-migrate' );

		/* Register Scripts */
		//wp_register_script('jQuery1', get_parent_theme_file_uri() . '/assets/js/lib/jquery-1.12.4.min.js', null, null, true);
		wp_register_script('jQuery3', get_parent_theme_file_uri('/assets/js/lib/jquery-3.2.1.min.js'), null, '3.2.1', true);
		//wp_register_script('jQuery_migrate', get_parent_theme_file_uri('/assets/js/lib/jquery-migrate.min.js'), array('jQuery3'), '3.0.0', true);
		wp_register_script('mainJS', get_parent_theme_file_uri('/assets/js/functions.js'), array('jQuery3'), $theme_data->get( 'Version' ), true);
		
		wp_register_script('JQyVanilla', get_parent_theme_file_uri('/assets/js/JQyVanilla.js'), array('jQuery3'), $theme_data->get( 'Version' ), true);

		wp_register_script('scrolls', get_parent_theme_file_uri('/assets/js/scrolls.js'), array('jQuery3'), $theme_data->get( 'Version' ), true);

		wp_register_script('simpleparallax', get_parent_theme_file_uri('/assets/js/jquery.simpleparallax.js'), array('jQuery3'), $theme_data->get( 'Version' ), true);

		wp_register_script('morphext', get_parent_theme_file_uri('/assets/js/morphext.js'), array('jQuery3'), $theme_data->get( 'Version' ), true);

		wp_register_script('nivo', get_parent_theme_file_uri('/assets/js/jquery.nivo.slider.pack.js'), array('jQuery3'), $theme_data->get( 'Version' ), true);

		wp_enqueue_script( 'popper_js', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js', array('jQuery3'));
		wp_enqueue_script( 'bootstrap_js', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js', array('jQuery3'));




				/* Enqueue Scripts */
		wp_enqueue_script('mainJS');
		wp_enqueue_script('JQyVanilla');
		wp_enqueue_script('scrolls');
		wp_enqueue_script('morphext');
		wp_enqueue_script('simpleparallax');
		wp_enqueue_script('nivo');


	}

	add_action( 'wp_enqueue_scripts', 'dl_enqueue_scripts' );
?>