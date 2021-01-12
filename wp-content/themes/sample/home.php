<?php
/* 
Template Name: Home page
*/
?>

<!-- header -->
<?php get_header(); ?>

<!-- menu -->
<?php get_template_part('content', 'menu'); ?>

<!-- メインコンテンツ -->
<div id="main">

    <!-- トップバナー -->
    <img src="<?php echo get_post_meta($post->ID, 'img-top', true); ?>" id="top-baner">

    <!-- ABOUT -->
    <section id="about" class="site-width">
        <h1 class="title">ABOUT</h1>
        <p>
            <?php echo get_post_meta($post->ID, 'about', true); ?>
        </p>
    </section>

    <!-- MERIT -->
    <section id="merit" class="site-width">
        <h1 class="title">MERIT</h1>
        <?php dynamic_sidebar('merit area'); ?>
    </section>

    <!-- RECRUIT -->
    <section id="recruit" class="site-width">
        <table>
            <thead>
                <tr>
                    <th class="color1">RECRUIT</th>
                    <th><?php echo get_post_meta($post->ID, 'recruit_info1', true); ?></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>業務内容</th>
                    <td><?php echo get_post_meta($post->ID, 'recruit_info2', true); ?></td>
                </tr>
                <tr>
                    <th>資格・経験</th>
                    <td><?php echo get_post_meta($post->ID, 'recruit_info3', true); ?></td>
                </tr>
                <tr>
                    <th>お給料</th>
                    <td><?php echo get_post_meta($post->ID, 'recruit_info4', true); ?></td>
                </tr>
                <tr>
                    <th>勤務地</th>
                    <td><?php echo get_post_meta($post->ID, 'recruit_info5', true); ?></td>
                </tr>
                <tr>
                    <th>選考方法</th>
                    <td><?php echo get_post_meta($post->ID, 'recruit_info6', true); ?></td>
                </tr>
                <tr>
                    <th>応募方法</th>
                    <td><?php echo get_post_meta($post->ID, 'recruit_info7', true); ?></td>
                </tr>
                <tr>
                    <th>応募先</th>
                    <td><?php echo get_post_meta($post->ID, 'recruit_info8', true); ?></td>
                </tr>
            </tbody>
        </table>
    </section>

</div>

<!-- footer -->
<?php get_footer(); ?>