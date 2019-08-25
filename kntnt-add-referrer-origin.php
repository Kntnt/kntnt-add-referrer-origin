<?php

/**
 * @wordpress-plugin
 * Plugin Name:       Kntnt Add Referrer Origin
 * Plugin URI:        https://www.kntnt.com/
 * Description:       Adds "referrer origin" as meta tag so other sites can track visits coming from this site.
 * Version:           1.0.0
 * Author:            Thomas Barregren
 * Author URI:        https://www.kntnt.com/
 * License:           GPL-3.0+
 * License URI:       http://www.gnu.org/licenses/gpl-3.0.txt
 */


add_action( 'wp_head', function () {
	echo '<meta name="referrer" content="origin">';
} );