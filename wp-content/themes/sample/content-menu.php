<!-- naming rule: slag-template.php -->
<!-- メニュー -->
<header class="site-width">
    <h1>
        <a href="<?php echo home_url(); ?>">
            <img src="<?php header_image(); ?>" class="img-responsive" alt="<?php bloginfo('name'); ?>">
        </a>
    </h1>
    <nav id="top-nav">
        <?php
        wp_nav_menu(array(
            'theme_location' => 'mainmenu',
            'container' => '',
            'menu_class' => '',
            'items_wrap' => '<ul>%3$s</ul>',
        ));
        ?>
    </nav>
</header>