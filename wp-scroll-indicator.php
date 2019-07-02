<?php
/**
 * Add reading scroll indicator to your site's header.
 *
 * Plugin Name: WordPress Scroll Indicator
 * Plugin URI: https://www.dorzki.co.il/building-reading-scroll-indicator/
 * Description: Add reading scroll indicator to your site's header.
 * Version: 1.0.0
 * Author: dorzki
 * Author URI: https://www.dorzki.co.il
 * License: GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 *
 * @package    dorzki
 * @subpackage Scroll_Indicator
 * @author     Dor Zuberi <webmaster@dorzki.co.il>
 * @link       https://www.dorzki.co.il
 * @version    1.0.0
 */

namespace dorzki\Scroll_Indicator;

// Block if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}


/**
 * Class Plugin
 *
 * @package dorzki\Scroll_Indicator
 */
final class Plugin {

	/**
	 * Plugin constructor.
	 */
	public function __construct() {

		add_action( 'wp_footer', [ $this, 'inject_html' ] );
		add_action( 'wp_enqueue_scripts', [ $this, 'register_assets' ] );

	}


	/* ------------------------------------------ */


	/**
	 * Inject scroll indicator html.
	 */
	public function inject_html() {

		echo "<div class='dorzki-scroll-indicator-wrapper'>"
			. "	<div class='scroll-bar'></div>"
			. "</div>";

	}


	/**
	 * Register plugin css and javascript files.
	 */
	public function register_assets() {

		// Plugin Styles.
		wp_enqueue_style( 'dorzki-scroll-indicator-css', plugin_dir_url( __FILE__ ) . '/assets/css/styles.css' );

		// Plugin Scripts.
		wp_enqueue_script( 'dorzki-scroll-indicator-js', plugin_dir_url( __FILE__ ) . '/assets/js/scripts.js', [ 'jquery' ], '1.0.0', true );

	}

}

// Init class.
new Plugin();
