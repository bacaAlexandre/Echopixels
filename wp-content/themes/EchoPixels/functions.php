<?php
  // Enlever la barre d'admin
   show_admin_bar(false);

  // C'est ici que vous ajoutez vos feuilles de styles
  function echopixels_style() {

    wp_enqueue_style( 'bootstrap-style', get_template_directory_uri().'/css/bootstrap.min.css', null, null, 'all' );

  	wp_enqueue_style( 'font-awesome', get_template_directory_uri().'/css/font-awesome.min.css', null, null, 'all' );

  	wp_enqueue_style( 'echopixels-css', get_template_directory_uri().'/css/mainstyle.css', null, null, 'all');
  }
  add_action( 'wp_enqueue_scripts', 'echopixels_style' );

  // C'est ici que vous ajoutez vos scripts
  function echopixels_scripts() {

  wp_enqueue_script( 'jquery', get_template_directory_uri().'/js/jquery-3.2.1.min.js', array(), null, true );

  wp_enqueue_script( 'jquery-ui', get_template_directory_uri().'/js/jquery-ui.min.js', array(), null, true );

  wp_enqueue_script( 'bootstrap-script', get_template_directory_uri() . '/js/bootstrap.min.js', array(), null, true );

  wp_enqueue_script( 'custom-js', get_template_directory_uri() . '/js/custom.js', array(), null, true );

  // C'est dans ce fichier "theme-ajax" que vous déclarerez votre ajax
  wp_enqueue_script( 'theme-ajax', get_stylesheet_directory_uri() . '/js/theme-ajax.js', array( 'jquery' ) );

	wp_localize_script( 'theme-ajax', 'theme_ajax', array(
		'url'        	=> admin_url( 'admin-ajax.php' ),
		'site_url'     	=> get_bloginfo('url'),
		'theme_url' 	=> get_bloginfo('template_directory')
		) );

  }
  add_action( 'wp_enqueue_scripts', 'echopixels_scripts' );

  register_nav_menus( array(
        'Top' => 'Navigation principale',
    ) );
 ?>
