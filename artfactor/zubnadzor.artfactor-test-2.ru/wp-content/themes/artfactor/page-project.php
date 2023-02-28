<?php
/*
Template Name: About project
*/
?>


<? get_header(); ?>
<main class="main main--page" data-barba="container">
    <div>
        <div class="breadcrumbs"></div>
        <div class="banner">
            <?php if (has_post_thumbnail($post->ID)) : ?>
                <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail'); ?>

                <? echo '<img src="' . $image[0] . '" alt="' . get_the_title() . '" />'; ?>

            <?php endif; ?>
        </div>
    </div>
    <div class="container container_grid page" style="margin-bottom:100px;">
        <div>
            <div class="page__title"><?= get_the_title(); ?></div>
            <? if (get_field('banner_left_image')) : ?>
                <? $banner  = get_field('banner_left_image');
                ?>
                <div class="page__leftimg" style="margin-top:60px;background:url('<?= $banner['sizes']['medium_large'] ?>');
                 width:<?= $banner['sizes']['medium_large-width']; ?>px;
                 height:<?= $banner['sizes']['medium_large-height']; ?>px;
                 max-width:400px;
                 max-height:1100px;
                 background-size:contain;
                 background-repeat:no-repeat;
                 "></div>
            <? endif; ?>
        </div>
        <div class=" page__content"><?= the_content(); ?></div>

    </div>
    <hr class="container">
    <? require_once(get_template_directory() . '/include/donations.php'); ?>
</main>
<?
get_footer();
?>