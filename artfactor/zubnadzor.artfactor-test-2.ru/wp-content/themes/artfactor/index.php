<?php
/*
Template Name: Index page
*/
?>

<? get_header(); ?>
<main class="main main--page">
    <div class="container">
        <? if (function_exists('kama_breadcrumbs')) kama_breadcrumbs(''); ?>
        <h1><? the_title(); ?></h1>
    </div>
</main>
<?
get_footer();
?>