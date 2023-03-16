<?php
/*
Template Name: Youtube page
*/

?>

<? get_header(); ?>
<main id="cantstop" class="main main--page" data-barba="container">
    <div style="position:relative;">
        <div class="banner" data-aos="fade-in" data-aos-duration="400" data-aos-easing="ease-in-sine">
            <?php if (has_post_thumbnail($post->ID)) : ?>
                <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail'); ?>

                <? echo '<img src="' . $image[0] . '" alt="' . get_the_title() . '" />'; ?>

            <?php endif; ?>
        </div>
        <div class="container">
            <div class="content breadcrumbs"><?php if (function_exists('kama_breadcrumbs')) kama_breadcrumbs(); ?></div>
        </div>
    </div>
    <div class="container container_grid page" data-aos="fade-in" data-aos-duration="500" data-aos-easing="ease-in-sine">
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
        <div class=" page__content">
            <?= the_content(); ?>
            <div class="youtube_video" style="margin-top:100px; border:1px solid red;  <? if (get_field('youtube_video')) : ?>background-image:unset; border:unset;<? endif; ?>">
                <? if (get_field('youtube_video')) {
                    echo '<iframe src="' . get_field('youtube_video') . '" frameborder="0" 
                     allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen> </iframe>';
                }
                ?>
            </div>
            <div style="margin-top:20px;">
                <input type="checkbox" id="modal">
                <label for="modal" class="modal-label">Откликнуться</label>
            </div>
        </div>


    </div>
</main>
<?
get_footer();
?>