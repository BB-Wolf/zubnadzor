<div class="container container_grid page">
    <div>
        <div class="page__title">Партнеры</div>
        <div class="page__leftimg"></div>
    </div>
    <div class="page__content container_flex" style="flex-wrap:wrap;gap:40px;">
        <? foreach (get_field('partner_logo') as $img) : ?>
            <div><img src="<?= $img['full_image_url'] ?>" alt="Логотип партнера Зубнадзор"></div>
        <? endforeach; ?>

    </div>
    <div class="page__content container_flex"></div>
    <div class="page__content container_flex">
        <div>Здесь может быть размещена Ваша ссылка</div>
    </div>
</div>