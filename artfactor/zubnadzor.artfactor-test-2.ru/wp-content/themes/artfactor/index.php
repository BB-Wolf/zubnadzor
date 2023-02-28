<?php
/*
Template Name: Index page
*/
?>

<? get_header(); ?>
<main class="main main--page" data-barba="container">
    <section class="main-banner fullwidth-container fullwidth-container_blue">
        <div class="container container_grid main-banner-container__center" style="height:510px;  grid-template-columns: unset;">
            <div class="main-banner_wrapper container_flex">
                <div class="main-banner__text">
                    Практическая помощь
                    пострадавшим от некачественного
                    стоматологического лечения
                </div>
                <div class="main-banner__img">
                    <img src="<?= get_template_directory_uri() . '/images/main_banner.png' ?>">
                </div>
            </div>
        </div>
        <div class="main-banner__flowtext-container fullwidth-container">
            <div class="main-banner__flowtext">
                Приглашаем к сотрудничеству независимых медицинских экспертов и квалифицированных юристов.Мониторим качество. Формируем мнение. Находим решения.
            </div>
        </div>
    </section>
    <section class="container about-us" data-aos="fade-in" data-aos-duration="600" data-aos-easing="ease-in-sine">
        <div class="about-us__title">
            <span class=" about-us__h1">О нас</span>
            <span class="about-us__text">Центр координации и поддержки
                стоматологических пациентов </span>
        </div>
        <div class="about-us__content">
            <div class="about-us__text">
                АНО «Зубнадзор» действует на основании утвержденного Устава и оказывает информационные и консультационные услуги в сфере стоматологии, консультации по вопросам порядка получения стоматологических услуг, консультации правового характера, консультации пациентам стоматологических клиник/учреждений по вопросам возможного порядка их действий в случае некачественного оказания им стоматологических услуг.
                <p></p> Целью создания организации является оказание помощи пациентам и в случае, если они пострадали от незаконных действий медицинских стоматологических организаций (клиник, учреждений, отдельных специалистов), содействие в защите их прав; оказание помощи при разрешении конфликтных ситуаций пациентов с медицинскими клиниками.
                <p></p> АНО «Зубнадзор» собирает, изучает, обобщает, анализирует и распространяет полученную информацию в рамках уставных целей, путём изучения общественного мнения в сфере уставной деятельности, а также рынка медицинских стоматологических услуг в целях оказания качественной поддержки и помощи пациентам стоматологических клиник, учреждений и индивидуальных специалистов.
            </div>
        </div>
    </section>
    <section class="container directions" data-aos="fade-in" data-aos-duration="500" data-aos-easing="ease-in-sine">
        <div class="directions__title">Направления деятельности</div>
        <div class="directions__panes">
            <a href="#" class="directions__pane" data-aos="zoom-in-up" data-aos-duration="500" data-aos-easing="ease-in-sine">
                <div class="directions__icon">
                    <img src="<?= get_template_directory_uri() . '/images/file.svg' ?>" alt="Регистрация и мониторинг жалоб и обращений" title="Регистрация и мониторинг жалоб и обращений">
                </div>
                <div class="directions__text">Регистрация и мониторинг жалоб и обращений</div>
            </a>
            <a class="directions__pane" data-aos="zoom-in-up" data-aos-duration="600" data-aos-easing="ease-in-sine">
                <div class="directions__icon">
                    <img src="<?= get_template_directory_uri() . '/images/edit.svg' ?>" alt="Подготовка и составление документов" title="Подготовка и составление документов">
                </div>
                <div class="directions__text">Подготовка и составление документов</div>
            </a>
            <a class="directions__pane" data-aos="zoom-in-down" data-aos-duration="700" data-aos-easing="ease-in-sine">
                <div class="directions__icon">
                    <img src="<?= get_template_directory_uri() . '/images/cross.svg' ?>" alt="Подготовка и составление документов" title="Помощь в выборе стоматологических клиник">

                </div>
                <div class="directions__text">Помощь в выборе стоматологических клиник</div>
            </a>
            <a class="directions__pane" data-aos="zoom-in-down" data-aos-duration="800" data-aos-easing="ease-in-sine">
                <div class="directions__icon">
                    <img src="<?= get_template_directory_uri() . '/images/Shield.svg' ?>" alt="Подготовка и составление документов" title="Взаимодействие с организациями в интересах пациентов">
                </div>
                <div class="directions__text">Взаимодействие с организациями в интересах пациентов</div>
            </a>
        </div>
    </section>
    <section id="mission" class="container mission" style="border-bottom:unset;" data-aos="fade-in" data-aos-duration="700" data-aos-easing="ease-in-sine">
        <div class="mission__title">
            <div class="mission__h1">Миссия</div>
            <div class="mission__text">Центр координации и поддержки
                стоматологических пациентов </div>
        </div>
        <div class="mission__content">
            <div class="mission__text">
                <p>Для достижения уставных целей по предоставлению услуг в сфере координации и поддержки стоматологических пациентов АНО «Зубнадзор» определяет свою миссию в участии в информационной деятельности в электронных изданиях и средствах массовой информации, в печатных изданиях и средствах массовой информации, в информационных сетях в установленном законодательством Российской Федерации порядке.</p>

                <span class="page__h2">Собственный информационный ресурс</span>
                <p>АНО «Зубнадзор» создала собственный информационный ресурс, сайт в сети Интернет для информирования граждан по уставной тематике, в целях освещения деятельности АНО, распространения фото и видео продукции в соответствии с целями деятельности.</p>

                <span class="page__h2">Конструктивное взаимодействие</span>
                <p>АНО «Зубнадзор» открыта к конструктивному взаимодействию с организациями, предоставляющими услуги в разработке программ и проектов в сфере повышения качества оказываемых пациентам стоматологических услуг; к взаимодействию со стоматологическими медицинскими клиниками (учреждениями) и отдельными специалистами в рамках помощи пациентам; к содействию в получении пациентами стоматологических организаций информационной, правовой, юридической, психологической, моральной, медиативной помощи в рамках уставных целей;</p>

                <span class="page__h2">Оказание помощи</span>
                <p>
                    АНО «Зубнадзор» ориентирована на оказание помощи в осуществлении взаимодействия между пациентами стоматологических организаций, медицинскими учреждениями (клиниками), государственными органами; а также на анализ и распространение успешных методов реализации и защиты прав пациентов стоматологических клиник; на ведение мониторинга качества, оказываемых стоматологических услуг.
                </p>
            </div>
        </div>
    </section>
</main>
<?
get_footer();
?>