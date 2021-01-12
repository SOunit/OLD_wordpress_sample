<?php
/* 
Template Name: Contact
*/
?>

<!-- header -->
<?php get_header(); ?>

<!-- menu -->
<?php get_template_part('content', 'menu'); ?>

<div id="main">

    <!-- Contact -->
    <section id="contact" class="site-width">
        <h1 class="title">CONTACT</h1>
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