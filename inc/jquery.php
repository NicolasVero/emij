<?php function custom_enqueue_script() {
		wp_deregister_script('jquery');
		wp_register_script('jquery','https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js', false, '');
		wp_enqueue_script( 'google-map', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyAZLojBGDFbHBIPFV-yZkQ7ZDeuNigO5fk', array(), '3', true );
		wp_register_script('jquery-ui','https://code.jquery.com/jquery-3.6.0.min.js', false, '');
		//wp_register_script( 'slick', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js', false , '1.8.1');
		//wp_register_script( 'popup', 'https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js', false , '1.1');
		
		$js_directory = get_bloginfo( 'stylesheet_directory' ) . '/assets/scripts/';
		wp_register_script( 'app', $js_directory . 'app.js', 'jquery', '1.0');
		//wp_register_script( 'map', $js_directory . 'google-map.js', 'jquery', '1.0');
		//wp_register_script( 'cookies', $js_directory . 'Tag_google_analytics.js', 'jquery', '1.0');
		wp_register_script( 'easing', $js_directory . 'jquery.easing.1.3.js', 'jquery', '1.0');
		wp_register_script( 'contact', $js_directory . 'contact-form.js', 'jquery', '1.0');
		
		wp_enqueue_script( 'jquery' );
		wp_enqueue_script( 'jquery-ui' );
		//wp_enqueue_script( 'map' );
		wp_enqueue_script( 'contact');
		wp_enqueue_script( 'app');
		//wp_enqueue_script( 'slick');
		//wp_enqueue_script( 'popup');
		//wp_enqueue_script( 'cookies');
		wp_enqueue_script( 'easing' );
		

	}
	add_action( 'wp_enqueue_scripts', 'custom_enqueue_script', 20 );

	function remove_head_scripts() {
		remove_action('wp_head', 'wp_print_scripts');
		remove_action('wp_head', 'wp_print_head_scripts', 9);
		remove_action('wp_head', 'wp_enqueue_scripts', 1);
		add_action('wp_footer', 'wp_print_scripts', 5);
		add_action('wp_footer', 'wp_enqueue_scripts', 5);
		add_action('wp_footer', 'wp_print_head_scripts', 5);
	}
	add_action( 'wp_enqueue_scripts', 'remove_head_scripts' );
