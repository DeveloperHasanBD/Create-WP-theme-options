<?php
// Link to others file 
include_once("inc/theme-options.php");

/* Theme setting admin Menu */
if (function_exists('acf_add_options_page')) {
    acf_add_options_page(array(
        'page_title'  => 'Theme General Settings',
        'menu_title'  => 'Theme Settings',
        'menu_slug'   => 'theme-general-settings',
        'capability'  => 'edit_posts',
        'redirect'    => false
    ));
    acf_add_options_sub_page(array(
        'page_title'  => 'Showroom Footer Settings',
        'menu_title'  => 'Showroom Footer',
        'parent_slug' => 'theme-general-settings',
    ));
    acf_add_options_sub_page(array(
        'page_title'  => 'La boutique Footer Settings',
        'menu_title'  => 'La boutique Footer',
        'parent_slug' => 'theme-general-settings',
    ));
}


// display value 
 $cmn_col4_sr_url = get_field('cmn_col4_sr_url', 'option');
