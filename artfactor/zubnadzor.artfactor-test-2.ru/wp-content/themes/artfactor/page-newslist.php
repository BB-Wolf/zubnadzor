<?php
/*
Template Name: Инфоблог Список 
*/
?>


<? get_header(); ?>
<main class="main main--page" data-barba="container">
    <div class="breadcrumbs"></div>
    <div class="banner" data-aos="fade-in" data-aos-duration="400" data-aos-easing="ease-in-sine">
        <?php if (has_post_thumbnail($post->ID)) : ?>
            <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail'); ?>

            <? echo '<img src="' . $image[0] . '" alt="' . get_the_title() . '" />'; ?>

        <?php endif; ?>
    </div>
    <div class="container container_grid" style="margin-top:100px; margin-bottom:20px;" data-aos="fade-in" data-aos-duration="500" data-aos-easing="ease-in-sine">
        <div class="page__title"><?= get_the_title(); ?></div>
    </div>
    <div class="container container_grid page" style="padding:0; margin-bottom:100px;grid-template-rows:1fr;grid-template-columns:1fr;" data-aos="fade-in" data-aos-duration="500" data-aos-easing="ease-in-sine">
        <div class=" page__content">
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
                            <div class="page__muted">
                                <? the_category(); ?>
                            </div>
                            <div class="page__date page__muted">
                                <? the_date(); ?>
                            </div>
                            <div class="page__muted page__share">Поделиться</div>
                        </div>
                        <!-- end of date stuff-->
                        <div>
                            <?= the_excerpt(); ?>
                        </div>
                    </div>
                    <div>
                        <?php the_post_thumbnail(); ?>
                    </div>
                </div>
            <? } ?>
        </div>
    </div>
    <?php wp_reset_postdata();  ?>

</main>
<?
get_footer();
?>