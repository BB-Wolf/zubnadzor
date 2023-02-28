<!DOCTYPE html>

<html>

<head>

    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?= get_template_directory_uri() ?>/images/favicon.svg" rel="shortcut icon" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,300;0,400;0,500;0,700;1,500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,300;0,400;0,500;0,700;1,500&family=Oswald:wght@400;500;600&display=swap" rel="stylesheet">
    <title><?= get_the_title(); ?></title>
    <?php wp_head(); ?>

</head>

<body data-barba="wrapper">
    <header class="header">
        <div class="header__top">
            <div class="header__container container">
                <div class="header__logo">
                    <a href="/"><img src="<?= get_template_directory_uri() ?>/images/zubnadzorlogo.svg" alt="Логотип АНО Зубнадзор" title="Логотип компании"></a>
                </div>
                <div class="header__companyname">
                    <span class="header__text header__text_muted">Автономная некоммерческая организация</span>
                    <span class="header__text">Центр координации и поддержки
                        стоматологических пациентов</span>
                </div>
                <div class="header__address">
                    <div class="header__phone">
                        <a href="tel:+<?= str_replace(['+', ' ', '-'], '', esc_html(get_option('contact_phone', ''))) ?>"><?= esc_html(get_option('contact_phone', '')); ?></a>
                    </div>
                    <div class="header__mail"><a href="mailto:<?= esc_html(get_option('contact_email', '')) ?>"><img src="<?= get_template_directory_uri() ?>/images/ri_mail-line.svg" alt="Отправить письмо" title="Напишите нам на почту"> </a></div>
                    <div class="search">
                        <img src="" alt="" class="search__icon">
                        <input type="text" class="search__field hidden">
                    </div>
                </div>
            </div>
        </div>
        <div class="header__bottom">
            <button type="button" class="header__close">
                <svg width="25" height="25" viewBox="0 0 25 25" fill="none">
                    <path d="M18.6521 5.64099L19.3591 6.34799L6.34811 19.358L5.64111 18.6515L18.6521 5.64099Z" fill="#ffffff"></path>
                    <path d="M6.34811 5.64099L19.3591 18.651L18.6521 19.3585L5.64111 6.34849L6.34811 5.64099Z" fill="#ffffff"></path>
                </svg>
            </button>
            <div class="container">
                <nav role="navigation" class="nav-menu w-nav-menu">
                    <?
                    wp_nav_menu(array(
                        'theme_location'  => 'top',
                        'menu'            => '',
                        'container'       => '',
                        'menu_class'      => 'menu list-reset',
                        'menu_id'         => '',
                        'after'           => '<span class="menu-arrow"><svg width="11" height="7" viewBox="0 0 11 7" fill="none">
          <path d="M1.63477 1L5.63477 5L9.63477 1" stroke="white" stroke-width="2"/>
          </svg></span>',
                        'echo'            => true,
                        'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                        'depth'           => 0,
                        'walker'          => '',
                    )); ?>
                </nav>
            </div>
        </div>
    </header>