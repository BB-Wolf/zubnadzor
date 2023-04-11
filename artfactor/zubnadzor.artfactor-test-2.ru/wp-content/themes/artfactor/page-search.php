<?php
/*
Template Name: Search page
*/

$query = trim(esc_html($_REQUEST['q']));
?>

<style>
    .search_result {
        list-style: disc;
    }

    .search_result li {
        padding: 10px 0px;
    }

    .search_result li a {
        color: #434A4A;
        text-decoration: underline;
    }
</style>

<? get_header(); ?>
<main class="main main--page" data-barba="container">
    <div style="position:relative;">
        <div class="content banner" data-aos="fade-in" data-aos-duration="500" data-aos-easing="ease-in-sine" <?php if (has_post_thumbnail($post->ID)) : ?> <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail'); ?> <? // echo '<img src="' . $image[0] . '" alt="' . get_the_title() . '" />';        
      ?> style="background-image:url(<?= $image[0] ?>);" <? ?> <?php endif; ?>>
        </div>
        <div class="container content">
            <div class=" breadcrumbs"><?php if (function_exists('kama_breadcrumbs')) kama_breadcrumbs(); ?></div>
        </div>
    </div>
    <div id="<? if (strpos($_SERVER['REQUEST_URI'], 'rukovodstvo') !== FALSE) : ?>rukovodstvo<? endif; ?>" class="container container_flex page" data-aos="fade-in" data-aos-duration="500" data-aos-easing="ease-in-sine">
        <div class="left__column">
            <div class="page__title">Результаты по запросу: <?= $query; ?></div>
            <? if (get_field('banner_left_image')) : ?>
                <? $banner  = get_field('banner_left_image');
                ?>
                <div class="page__leftimg <? if (strpos($_SERVER['REQUEST_URI'], 'rukovodstvo') !== FALSE) : ?> rukovodstvo pb_16 <? endif; ?>" style="margin-top:60px;background:url('<?= $banner['sizes']['medium_large'] ?>');
                 width:<?= $banner['sizes']['medium_large-width']; ?>px;
                 height:<?= $banner['sizes']['medium_large-height']; ?>px;
                 max-width:400px;
                 max-height:1100px;
                 background-size:contain;
                 background-repeat:no-repeat;
                 "></div>
                <? echo get_field('left_banner_text'); ?>
            <? endif; ?>
        </div>
        <div class="page__content"><?
                if (!empty($query)) :
$args = array(
 'posts_per_page' => -1,
 'post_type' => ['page', 'post'],
 'orderby' => 'date menu_order',
 'order' => 'DESC',
 's' => $query,
 'sentence' => 1,
);

// perform the search
$posts = new WP_Query($args);
if (($posts->have_posts())) :
                ?>
<ul class="search_result">
    <?
 while ($posts->have_posts()) : $posts->the_post();
    ?>
        <li>
            <div><a href="<?php echo get_permalink(); ?>"><?php echo apply_highlight(get_the_title(), $query) ?></a>
                <div><?php echo formatPreview(strip_tags(get_the_content())); ?></div>
            </div>
        </li>
    <?php
 endwhile;
    ?>
</ul>
<?php
 wp_reset_postdata();

?>
                <?php

else :

                ?>

<h1 class="page-title"><?php printf(__('По запросу "' . $query . '" ничего не найдено')); ?></h1>
<h4>Возможные причины:</h4>
<ul>
    <li>Проверьте правильность написания запроса</li>
    <li>Попробуйте другие ключевые слова</li>
</ul>
            <?php

endif; // !(empty ( $posts ))

                endif; // !(empty ( $query ))

            ?>
        </div>

    </div>
</main>
<?
get_footer();
?>