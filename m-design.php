<?php
/**
 * Plugin Name:       Tidningen M – Design
 * Description:       Sajtgemensamma designjusteringar som inte går att ställa in i teman/tillägg: mobilmenyn (Responsive Menu Pro) – svart halvgenomskinlig bakgrund, vita menyval i Manrope versaler, ingen sökruta – och den ljusgula knappen Prenumerera kostnadsfritt i menyn (CSS-klassen menu-cta).
 * Version:           1.1.2
 * Update URI:        https://github.com/daystudioab/tidningenm-design
 * Requires at least: 6.0
 * Author:            Tidningen M
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'MDS_VERSION', '1.1.2' );

/**
 * Uppdateringar från GitHub (daystudioab/tidningenm-design).
 * Nya versioner publiceras som GitHub-releaser och visas under Tillägg som vanliga uppdateringar.
 * Privat repo: lägg in en läsnyckel i wp-config.php:
 *   define( 'STUDIODAY_GITHUB_TOKEN', 'github_pat_…' );
 */
require_once __DIR__ . '/lib/plugin-update-checker/plugin-update-checker.php';

$mds_uppdaterare = \YahnisElsts\PluginUpdateChecker\v5\PucFactory::buildUpdateChecker(
	'https://github.com/daystudioab/tidningenm-design/',
	__FILE__,
	'm-design'
);
$mds_uppdaterare->getVcsApi()->enableReleaseAssets( '/m-design\\.zip$/' );
if ( defined( 'STUDIODAY_GITHUB_TOKEN' ) && STUDIODAY_GITHUB_TOKEN ) {
	$mds_uppdaterare->setAuthentication( STUDIODAY_GITHUB_TOKEN );
}

add_action( 'wp_enqueue_scripts', function () {
	// Laddas efter Responsive Menu Pro så att våra regler vinner.
	wp_enqueue_style( 'm-design-mobilmeny', plugin_dir_url( __FILE__ ) . 'assets/mobilmeny.css', array(), MDS_VERSION );
	wp_enqueue_style( 'm-design-sidhuvud', plugin_dir_url( __FILE__ ) . 'assets/sidhuvud.css', array(), MDS_VERSION );
}, 100 );
