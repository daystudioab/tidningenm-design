<?php
/**
 * Plugin Name:       Tidningen M – Design
 * Description:       Sajtgemensamma designjusteringar som inte går att ställa in i teman/tillägg. Just nu: mobilmenyn (Responsive Menu Pro) – svart halvgenomskinlig bakgrund, vita menyval i Manrope versaler, ingen sökruta.
 * Version:           1.0.1
 * Requires at least: 6.0
 * Author:            Tidningen M
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

add_action( 'wp_enqueue_scripts', function () {
	// Laddas efter Responsive Menu Pro så att våra regler vinner.
	wp_enqueue_style( 'm-design-mobilmeny', plugin_dir_url( __FILE__ ) . 'assets/mobilmeny.css', array(), '1.0.1' );
}, 100 );
