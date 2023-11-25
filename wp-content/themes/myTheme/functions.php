<?php
/**
 * Proper way to enqueue scripts and styles
 */
function wpdocs_zicro_scripts() {
	wp_enqueue_style( 'bootstrap-css', get_template_directory_uri().'/assets/css/bootstrap.min.css' );
	wp_enqueue_style( 'templatemo-css', get_template_directory_uri().'/assets/css/templatemo.min.css' );
	wp_enqueue_style( 'custom-css', get_template_directory_uri().'/assets/css/custom.css' );
	wp_enqueue_style( 'fontawesome', get_template_directory_uri().'/assets/css/fontawesome.min.css' );
	wp_enqueue_style( 'gfont', "https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap");

	wp_enqueue_script( 'jquery', get_template_directory_uri() . '/assets/js/jquery-1.11.0.min.js', array(), '1.0.0', true );
	wp_enqueue_script( 'jquery-migrate', get_template_directory_uri() . '/assets/js/jquery-migrate-1.2.1.min.js', array('jquery'), '1.0.0', true );
	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array('jquery'), '1.0.0', true );
	wp_enqueue_script( 'templatemo-js', get_template_directory_uri() . '/assets/js/templatemo.min.js', array('jquery'), '1.0.0', true );
	wp_enqueue_script( 'custom-js', get_template_directory_uri() . '/assets/js/custom.js', array('jquery'), '1.0.0', true );
	wp_enqueue_script( 'slick', get_template_directory_uri() . '/assets/js/slick.min.js', array('jquery'), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'wpdocs_zicro_scripts' );

/*
 <script src="assets/js/jquery-1.11.0.min.js"></script>
    <script src="assets/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/templatemo.js"></script>
    <script src="assets/js/custom.js"></script>
*/