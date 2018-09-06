<?php
/**
 * Dark Mode main plugin file
 *
 * @package      danieltj27/Dark-Mode
 * @author       Daniel James
 * @copyright    2018 Daniel James
 * @license      GPL-2.0-or-later
 *
 * @wordpress-plugin
 * Plugin Name: Dark Mode
 * Plugin URI: https://wordpress.org/plugins/dark-mode/
 * Description: Lets your users make the WordPress admin dashboard darker.
 * Author: Daniel James
 * Author URI: https://www.danieltj.co.uk/
 * Text Domain: dark-mode
 * Version: 3.1
 */

if ( ! defined( 'ABSPATH' ) ) {
	die();
}

require __DIR__ . '/class-dark-mode.php';

$dark_mode = new Dark_Mode();
