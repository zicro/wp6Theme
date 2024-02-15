<?php

/**
 * Proper way to enqueue scripts and styles
 */
function wpdocs_zicro_scripts() {
	wp_enqueue_style( 'bootstrap-css', CSS.'bootstrap.min.css' );
	wp_enqueue_style( 'templatemo-css', CSS.'templatemo.min.css' );
	wp_enqueue_style( 'custom-css', CSS.'custom.css' );
	wp_enqueue_style( 'fontawesome', CSS.'fontawesome.min.css' );
	wp_enqueue_style( 'gfont', "https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap");

	wp_enqueue_script( 'jquery', JS. 'jquery-1.11.0.min.js', array(), '1.0.0', true );
	wp_enqueue_script( 'jquery-migrate', JS. 'jquery-migrate-1.2.1.min.js', array('jquery'), '1.0.0', true );
	wp_enqueue_script( 'bootstrap-js', JS. 'bootstrap.bundle.min.js', array('jquery'), '1.0.0', true );
	wp_enqueue_script( 'templatemo-js', JS. 'templatemo.min.js', array('jquery'), '1.0.0', true );
	wp_enqueue_script( 'custom-js', JS. 'custom.js', array('jquery'), '1.0.0', true );
	wp_enqueue_script( 'slick', JS. 'slick.min.js', array('jquery'), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'wpdocs_zicro_scripts' );

/*
 <script src="assets/js/jquery-1.11.0.min.js"></script>
    <script src="assets/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/templatemo.js"></script>
    <script src="assets/js/custom.js"></script>
*/

?>