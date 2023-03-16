<div class="container_grid contacts__page" data-aos="fade-in" data-aos-duration="500" data-aos-easing="ease-in-sine" style="align-items:unset;gap:8%;">
    <div class="contacts__address">
        <div class="page__h2" style="padding-left:9px;">г. Москва</div>
        <ul>
            <li class="icon__pin font_bold"><span style="padding-left:20px;">ул. Кржижановского, д. 21 А</span></li>
            <li class="icon__phone"><a href="tel:+<?= str_replace(['+', ' ', '-'], '', esc_html(get_option('contact_phone', ''))) ?>"><?= esc_html(get_option('contact_phone', '')); ?></a></li>
            <li class="icon__email"> <a href="mailto:info@zubnadzor.ru"><?= esc_html(get_option('contact_email')); ?></a></li>
        </ul>
    </div>
    <div class="yandexmap"><iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Aa4b2f313e95817cb1d7205310b21650df8eba6dab9360ecda2c3abc214f9f640&amp;source=constructor" width="593" height="250" frameborder="0"></iframe></div>
</div>
<script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU&amp;apikey=503a6e22-d17f-4e25-b055-14877ea16f44" type="text/javascript"></script>