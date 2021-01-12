<?php
/* 
Template Name: INFO
*/
?>

<!-- header -->
<?php get_header(); ?>

<!-- menu -->
<?php get_template_part('content', 'menu'); ?>

<div id="main">
    <!-- blog_list -->
    <section id="map">
        <h1 class="title"><?php echo get_the_title(); ?></h1>
        <div id="content">
            <?php echo get_post_meta($post->ID, 'map', true); ?>
        </div>
    </section>
    <section id="shop_info" class="site-width">
        <?php if (have_posts()) :
            while (have_posts()) : the_post(); ?>
                <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <?php the_content(); ?>
                </div>
            <?php endwhile; ?>
        <?php else :  ?>
            <div class="post">
                <h2>No Post</h2>
                <p>No page is found.</p>
            </div>
        <?php endif; ?>
    </section>
</div>
<!-- footer -->
<?php get_footer(); ?>