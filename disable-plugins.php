<?php
/**
 *  * Plugin Name: Disable All Plugins
 *   * Description: Short-circuits the function in WordPress that determines which plugins are activated, and tells WordPress that no plugins are activated
 *    * Version: 1.0
 *testing git    */

add_filter( 'pre_option_active_plugins', '__return_empty_array' );
add_filter( 'pre_site_option_active_sitewide_plugins', '__return_empty_array' );
