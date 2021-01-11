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

// pagination
function pagination($pages = '', $range = 2)
{
    // page num (showing 5 pages)
    $showitems = ($range * 2) + 1;

    // carrent page
    global $paged;

    // set default if empty
    if (empty($paged)) $paged = 1;

    if ($pages == '') {
        global $wp_query;

        // get all pages
        $pages = $wp_query->max_num_pages;

        // set 1 page as default, if empty
        if (!$pages) {
            $pages = 1;
        }
    }

    // show pagination if more than 1 page
    if ($pages != 1) {
        echo '<div class="pagination">';
        echo '<ul>';

        // prev
        if ($paged > 1) echo '<li class="prev"><a href="' . get_pagenum_link($paged - 1) . '">Prev</a></li>';

        // middle pages
        for ($i = 1; $i <= $pages; $i++) {
            if (
                1 != $pages
                && (!($i >= $paged + $range + 1
                    || $i <= $paged - $range - 1)
                    || $pages <= $showitems)
            ) {
                echo ($paged == $i)
                    ? '<li class="active">' . $i . '</li>'
                    : '<li><a href="' . get_pagenum_link($i) . '">' . $i . '</a></li>';
            }
        }

        // next
        if ($paged < $pages) echo '<li class="next"><a href="' . get_pagenum_link($paged + 1) . '">Next</a></li>';

        echo '</ul>';
        echo '</div>';
    }
}
