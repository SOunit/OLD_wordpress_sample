<?php
// custom header image
$custom_header_defaults = array(
    'default-image' => get_bloginfo('template_url') . '/images/headers/logo.png',
    'header-text' => false,
);

// theme
add_theme_support('custom-header', $custom_header_defaults);

// custom nav
register_nav_menu('mainmenu', 'main menu');
