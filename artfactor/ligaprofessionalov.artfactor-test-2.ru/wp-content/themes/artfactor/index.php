<?php
/*
Template Name: Страница
*/
?>

<?get_header();?>
<main class="main main--page">
    <div class="container">
        <?if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs('');?>
       <h1><? the_title(); ?></h1>
        <?if(get_field('video')):?>
        <div class="video__poster">
            <div class="video__btn">
                <svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M45 32L26 45L26 19L45 32Z" fill="white"/>
                    <rect x="2" y="2" width="60" height="60" rx="6" stroke="white" stroke-width="3"/>
                </svg>

            </div>
            <div class="video__iframe" data-src="<?=get_field('video');?>?rel=0&showinfo=0"></div>
        </div>
        <?endif;?>
        <div class="garanty__content user-content">
            <?=get_field('text');?>
            <div class="garanty__bottom price-table">
            <?the_content();?>
        </div>
        </div>
</div>
</main>
<?
get_footer();
?>
