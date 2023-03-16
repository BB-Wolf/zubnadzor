<?php
/*
Template Name: Документы
*/
?>

<? get_header(); ?>
<main class="main main--page" data-barba="container">
    <div style="position:relative;">
        <div class="content banner" data-aos="fade-in" data-aos-duration="500" data-aos-easing="ease-in-sine" <?php if (has_post_thumbnail($post->ID)) : ?> <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail'); ?> <? // echo '<img src="' . $image[0] . '" alt="' . get_the_title() . '" />';        
                                                                                                                                                                                                                                                                        ?> style="background-image:url(<?= $image[0] ?>);" <? ?> <?php endif; ?>>
        </div>
        <div class="container">
            <div class="content breadcrumbs"><?php if (function_exists('kama_breadcrumbs')) kama_breadcrumbs(); ?></div>
        </div>
    </div>
    <div class="container container_grid page" data-aos="fade-in" data-aos-duration="500" data-aos-easing="ease-in-sine">
        <div>
            <div class="page__title"><?= get_the_title(); ?></div>
        </div>
        <div class=" page__content"><?= the_content(); ?></div>
    </div>
</main>
<?
get_footer();
?>