<!-- header -->
<?php get_header(); ?>

<!-- menu -->
<?php get_template_part('content', 'menu'); ?>

<div id="main">

    <!-- blog_list -->
    <section id="blog" class="site-width">
        <h1 class="title">BLOG</h1>
        <div id="content" class="article">


        </div>

        <?php if (have_posts()) :
            while (have_posts()) : the_post(); ?>
                <article class="article-item">
                    <h2 class="article-title"><a href=""><?php the_title(); ?></a></h2>
                    <h3 style="font-size:80%;"><?php the_author_nickname(); ?>　<?php the_time('Y年m月j日'); ?>　<?php single_cat_title('category: '); ?></h3>
                    <img src="img/photo2.jpeg" class="article-img">
                    <p class="article-body">
                        <?php the_content(); ?>
                    </p>
                </article>

            <?php endwhile; ?>

            <div class="pagenation">
                <ul>
                    <li class="prev"><?php previous_post_link('%link', 'PREV'); ?></li>
                    <li class="next"><?php next_post_link('%link', 'NEXT'); ?></li>
                </ul>
            </div>

            <!-- comments -->
            <?php comments_template(); ?>

        <?php else :  ?>
            <h2 class="title">Not Found</h2>
            <p>Maybe in search.</p>
            <?php get_search_form(); ?>
        <?php endif; ?>

        <!-- side bar -->
        <?php get_sidebar(); ?>

    </section>


</div>

<!-- footer -->
<?php get_footer(); ?>