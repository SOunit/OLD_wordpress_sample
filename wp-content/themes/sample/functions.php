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

// custom field
// define custom field to show in post page
// add_action(place, function);
add_action('admin_menu', 'add_custom_inputbox');
// action fook of item shown for insert and update
add_action('save_post', 'save_custom_postdata');

// decide which post type of page for custom box to show
function add_custom_inputbox()
{
    /**
     * add_meta_box(
     *  1. id name for admin html page
     *  2. custom field name in admin page
     *  3. function name for meta box
     *  4. custom field place in admin
     *  5. order
     * )
     */
    add_meta_box('about_id', 'About Input', 'custom_area', 'page', 'normal');
    add_meta_box('recruit_id', 'Recruit Input', 'custom_area2', 'page', 'normal');
    add_meta_box('map_id', 'Map Input', 'custom_area3', 'page', 'normal');
    add_meta_box('top_img_id', 'Top Image URL Input', 'custom_area4', 'page', 'normal');
}

// show custom area in admin page
function custom_area()
{
    global $post;

    echo 'comment: <textarea col="50" row="5" name="about_msg">' . get_post_meta($post->ID, 'about', true) . '</textarea>';
}

function custom_area2()
{
    global $post;

    echo '<table>';
    for ($i = 1; $i <= 8; $i++) {
        echo '<tr>';
        echo '<td>info' . $i . '</td>';
        echo '<td>';
        echo '<input name="recruit_info' . $i . '" value="' . get_post_meta($post->ID, 'recruit_info' . $i, true) .  '" ></input>';
        echo '</td>';
        echo '</tr>';
    }
    echo '</table>';
}

function custom_area3()
{
    global $post;

    echo 'Map: <textarea col="50" row="5" name="map">' . get_post_meta($post->ID, 'map', true) . '</textarea>';
}

function custom_area4()
{
    global $post;

    echo 'Top Image URL: <input name="img-top" value="' . get_post_meta($post->ID, 'img-top', true) . '">';
}

// save and update when post button is clicked
function save_custom_postdata($post_id)
{
    $about_msg = '';
    $recruit_data = '';
    $map = '';
    $img_top = '';

    // get data from custom field
    if (isset($_POST['about_msg'])) {
        $about_msg = $_POST['about_msg'];
    }
    // update if content changed
    if ($about_msg != get_post_meta($post_id, 'about', true)) {
        update_post_meta($post_id, 'about', $about_msg);
    } elseif ($about_msg == '') {
        delete_post_meta($post_id, 'about', get_post_meta($post_id, 'about', true));
    }

    // RECRUIT
    for ($i = 1; $i <= 8; $i++) {
        if (isset($_POST['recruit_info' . $i])) {
            $recruit_data = $_POST['recruit_info' . $i];
        }

        if ($recruit_data != get_post_meta($post_id, 'recruit_info' . $i, true)) {
            update_post_meta($post_id, 'recruit_info' . $i, $recruit_data);
        } elseif ($recruit_data == '') {
            delete_post_meta($post_id, 'recruit_info' . $i, get_post_meta($post_id, 'recruit_info' . $i, true));
        }
    }

    // MAP
    if (isset($_POST['map'])) {
        $map = $_POST['map'];
    }
    if ($map != get_post_meta($post_id, 'map', true)) {
        update_post_meta($post_id, 'map', $map);
    } elseif ($map == '') {
        delete_post_meta($post_id, 'map', get_post_meta($post_id, 'map', true));
    }

    // IMG TOP
    if (isset($_POST['img-top'])) {
        $img_top = $_POST['img-top'];
    }
    if ($img_top != get_post_meta($post_id, 'img-top', true)) {
        update_post_meta($post_id, 'img-top', $img_top);
    } elseif ($img_top == '') {
        delete_post_meta($post_id, 'img-top', get_post_meta($post_id, 'img-top', true));
    }
}
