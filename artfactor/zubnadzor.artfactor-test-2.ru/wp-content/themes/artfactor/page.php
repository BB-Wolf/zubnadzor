<?php
/*
Template Name: Page page
*/
?>

<? get_header(); ?>
<main class="main main--page">
    <div>
        <div class="breadcrumbs"></div>
        <div class="banner">
            <?php if (has_post_thumbnail($post->ID)) : ?>
                <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail'); ?>

                <? echo '<img src="' . $image[0] . '" alt="' . get_the_title() . '" />'; ?>

            <?php endif; ?>
        </div>
    </div>
    <div class="container container_grid page">
        <div>
            <div class="page__title"><?= get_the_title(); ?></div>
            <div class="page__leftimg"></div>
        </div>
        <div class=" page__content"><?= the_content(); ?></div>
    </div>
</main>
<?
get_footer();
?>