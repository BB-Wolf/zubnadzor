<?php
/*
Template Name: Сотрудничество
*/
?>


<? get_header(); ?>
<main class="main main--page" data-barba="container">
    <div>
        <div class="breadcrumbs"></div>
    </div>
    <div class="container container_grid page" data-aos="fade-in" data-aos-duration="500" data-aos-easing="ease-in-sine">
        <div>
            <div class="page__title"><?= get_the_title(); ?></div>
        </div>
        <div class=" page__content"><?= the_content(); ?>
            <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail'); ?>
            <? echo '<img src="' . $image[0] . '" alt="' . get_the_title() . '" />'; ?>
        </div>

    </div>
</main>
<?
get_footer();
?>