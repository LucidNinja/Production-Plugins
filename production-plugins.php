<?php if ( ! defined( 'ABSPATH' ) ) exit;
/*
Plugin Name:  Production Plugins
Plugin URI:   https://wakeupdreamer.com.au
Description:  Deactivate unhelpful plugins on non-production sites.
Version:      1.0.0
Author:       Wake Up, Dreamer
Author URI:   https://wakeupdreamer.com.au
License:      MIT License
*/


if ( WP_ENV != 'production' ) {
  
  // Pass plugin folder and root php file to this array to disable plugin for non-production environments
  $plugins = array(
    'ithemes-security-pro/ithemes-security-pro.php',
    'backupbuddy/backupbuddy.php',
  );
  
  require_once(ABSPATH . 'wp-admin/includes/plugin.php');
  deactivate_plugins($plugins);
}