<?php
/**
 * Plugin Name: Hide WP Engine Legacy Staging
 * Plugin URI: https://wordpress.org/plugins/hide-wp-engine-legacy-staging
 * Description: Hide WP Engine's Legacy Staging links, to avoid confusion with the newer production, staging and development environments.
 * Version: 1.1.0
 * Author: Matt Radford
 * Author URI: https://mattrad.uk
 * License: GPL2
 */

/*
 * Remove Legacy Staging submenu page
 */
function mattrad_remove_wpe_legacy_staging_submenu()
{
    remove_submenu_page('wpengine-common', 'wpengine-staging');
}
add_action('admin_menu', 'mattrad_remove_wpe_legacy_staging_submenu', 999);

/*
 * Hide Legacy Staging submenu tab
 */
function mattrad_hide_wpe_legacy_staging_tab()
{
    echo '<style>body.toplevel_page_wpengine-common #wpbody-content .wrap > .nav-tab-wrapper .nav-tab:nth-child(2) {display:none;} </style>';
}
add_action('admin_head', 'mattrad_hide_wpe_legacy_staging_tab');
