<?php
// custom header image
$custom_header_defaults = array(
    'default-image' => get_bloginfo('template_url') . '/images/headers/logo.png',
    'header-text' => false,
);

add_theme_support('custom-header', $custom_header_defaults);
