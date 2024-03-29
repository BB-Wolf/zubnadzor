<?php
/*
Template Name: Инфоблог Список 
*/
?>


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
    <div class="container container_grid blog" data-aos="fade-in" data-aos-duration="500" data-aos-easing="ease-in-sine">
        <div class="page__title"><?= get_the_title(); ?></div>
    </div>
    <div class="container container_grid page infoblog" style="grid-template-rows:1fr;grid-template-columns:1fr;margin-top:20px;" data-aos="fade-in" data-aos-duration="500" data-aos-easing="ease-in-sine">
        <div class="page__content">
            <?php
            global $post;
            $postslist = get_posts(array('posts_per_page' => 6));
            foreach ($postslist as $post) {
                setup_postdata($post);
            ?>
                <div class="page__news">
                    <div class="page__stuff">
                        <div class="page__h2"><a class="page__h2" style="color:inherit;" href="<? the_permalink(); ?>"><?= the_title(); ?></a></div>
                        <!--datr stuff-->
                        <div class="stuff__wrapper">
                            <div class="page__muted page__cat">
                                <? the_category(); ?>
                            </div>
                            <div class="page__date page__muted">
                                <? the_date(); ?> г
                            </div>
                            <div class="page__muted page__share">Поделиться</div>
                        </div>
                        <!-- end of date stuff-->
                        <div class="m-detail__img">
                            <?php the_post_thumbnail(); ?>
                        </div>
                        <div>
                            <?= the_excerpt(); ?>
                        </div>
                    </div>
                    <div class="detail__img">
                        <?php the_post_thumbnail(); ?>
                    </div>
                    <a class="page_more" style="color:inherit;" href="<? the_permalink(); ?>">Подробнее</a>
                </div>
            <? } ?>
        </div>
    </div>
    <?php wp_reset_postdata();  ?>


</main>
<?
get_footer();
?>