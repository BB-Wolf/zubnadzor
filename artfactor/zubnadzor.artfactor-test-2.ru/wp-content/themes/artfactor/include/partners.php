<div id="partners" class="container container_flex page" data-aos="fade-in" data-aos-duration="500" data-aos-easing="ease-in-sine">
    <div style="width: 20%;">
        <div class="page__title">Партнеры</div>
        <div class="page__leftimg"></div>
    </div>
    <div class="page__content container_flex" style="flex-wrap:wrap;gap:40px;">
        <? foreach (get_field('partner_logo') as $img) : ?>
            <div><img src="<?= $img['full_image_url'] ?>" alt="Логотип партнера Зубнадзор"></div>
        <? endforeach; ?>

        <div class="yourlink__here">Здесь может быть размещена Ваша ссылка</div>
    </div>
</div>