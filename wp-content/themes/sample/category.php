<!-- header -->
<?php get_header(); ?>

<!-- menu -->
<?php get_template_part('content', 'menu'); ?>

<div id="main">

    <!-- blog_list -->
    <section id="blog_list" class="site-width">
        <h1 class="title">BLOG</h1>
        <div id="content" class="article">

            <!-- loop article -->
            <?php get_template_part('loop'); ?>

            <?php if (function_exists("pagination")) {
                pagination($wp_query->max_num_pages);
            } ?>

        </div>

        <!-- side bar -->
        <?php get_sidebar(); ?>

    </section>

</div>

<!-- footer -->
<?php get_footer(); ?>