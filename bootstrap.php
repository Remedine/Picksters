<?php
/**
 * Picksters Plugin
 *
 * @package     Digitalseeds\Picksters
 * @author      hellofromTonya
 * @license     GPL-2.0+
 *
 * @wordpress-plugin
 * Plugin Name: Picksters
 * Plugin URI:  https://digitalseeds.marketing/picksters
 * Description: An NFL weekly picks app.
 * Version:     1.0.0
 * Author:      Timothy Hill
 * Author URI:  https://digitalseeds.marketing
 * Text Domain: Picksters
 * License:
 * License URI:
 */

namespace Digitalseeds\Picksters;

if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Cheatin&#8217; uh?' );
}

define( 'PICKSTERS_WORKSPACE_URL', plugin_dir_url( __FILE__ ) );

require_once( __DIR__. '/src/support/load-assets.php' );