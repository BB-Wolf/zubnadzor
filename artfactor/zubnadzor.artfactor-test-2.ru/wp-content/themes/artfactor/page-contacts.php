<?php
/*
Template Name: Контакты
*/

?>

<? get_header(); ?>
<main class="main main--page" data-barba="container">
    <div>
        <div class="content banner" data-aos="fade-in" data-aos-duration="500" data-aos-easing="ease-in-sine">
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
        <div class="container page__content">
            <? require_once(get_template_directory() . '/include/contacts.php'); ?>
            <div class="container page__content">
                <?= the_content(); ?>

                <div class="contact__form">
                    <div class="page__h2 page__h2_blue pt_60 pb_16">Заполните форму, и мы с Вами свяжемся!</div>
                    <form>
                        <div class="form__group">
                            <input type="text" placeholder="Имя" name="username">
                            <input type="text" placeholder="Фамилия" name="secondname">
                        </div>
                        <div class="form__group">
                            <input type="text" placeholder="E-mail" name="email">
                            <input type="text" placeholder="Телефон" name="phone">
                        </div>
                        <div class="form__group">
                            <input type="text" placeholder="Тема обращения" name="reason_topic">
                        </div>
                        <div class="form__group">
                            <textarea placeholder="Текст вашего обращения" name="reason_text"></textarea>
                        </div>
                        <div class="form__group form__group_mobile">
                            <div class="form__customer">
                                <div class="form__checkbox">
                                    <input type="radio" name="customer">
                                    <label>Физическое лицо</label>
                                </div>
                                <div class="form__checkbox">
                                    <input type="radio" name="customer">
                                    <label>Юридическое лицо</label>
                                </div>
                            </div>
                            <div class="license__agree"><input type="checkbox" name="license_agreement"><label>Я согласен на обработку персональных данных
                                    и с политикой конфиденциальности.</label></div>
                            <div><button class="modal-label">Отправить</button></div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</main>
<?
get_footer();
?>