<?php
/*
Template Name: Сотрудничество
*/
?>


<? get_header(); ?>
<main class="main main--page" data-barba="container">
    <div class="container">
        <div class="content breadcrumbs"><?php if (function_exists('kama_breadcrumbs')) kama_breadcrumbs(); ?></div>
    </div>
    <div class="container container_grid page" style="grid-template-columns:2fr 1fr;" data-aos="fade-in" data-aos-duration="500" data-aos-easing="ease-in-sine">
        <div class=" page__content">
            <div class="page__title" style="margin-bottom:40px;"><?= get_the_title(); ?></div>
            <div class="stuff__wrapper" style="padding-top:20px;  padding-bottom:20px;">
                <div class="page__muted">
                    <? the_category(); ?>
                </div>
                <div class="page__date page__muted">
                    <? the_date(); ?>
                </div>
                <div class="page__muted page__share">Поделиться</div>
            </div>
            <?= the_content(); ?>
        </div>
        <div style="margin-top: 120px;"> <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail'); ?>
            <? echo '<img src="' . $image[0] . '" alt="' . get_the_title() . '" />'; ?>
        </div>
    </div>
</main>
<?
get_footer();
?>