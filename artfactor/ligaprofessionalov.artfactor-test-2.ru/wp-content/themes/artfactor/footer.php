<?php
$GLOBALS['data'] = get_option('data_company');
global $data;
$phone_1 = get_bloginfo('blogname');
$phone_2 = get_bloginfo('description');
?>
<? if (!is_front_page()) : ?>
    </div>
<? endif; ?>
</main>
<?/*php if (stripos(@$_SERVER['HTTP_USER_AGENT'], 'Lighthouse') === false): ?>
<style>.grecaptcha-badge {visibility: hidden;}</style>
    <script src="https://www.google.com/recaptcha/api.js?render=6LdQo5cjAAAAAMGkMKM6ThP6Kan5At9s3kCjPIfJ"></script>
    <script>
        grecaptcha.ready(function () {
            grecaptcha.execute('6LdQo5cjAAAAAMGkMKM6ThP6Kan5At9s3kCjPIfJ', { action: 'contact' }).then(function (token) {
                var recaptchaResponse = document.getElementById('recaptchaResponse');
                recaptchaResponse.value = token;
            });
        });
    </script>
<?endif;*/ ?>
<footer class="footer <? if (is_404()) : ?>footer-error__container<? endif; ?>">
    <div class="footer__wrap">
        <div class="footer__container container">
            <? if (is_404()) : ?>
                <div class="footer-error">
                    <div class="footer-error__title">Упс, что-то пошло не так</div>
                    <div class="footer-error__text">
                        Запрашиваемая страница была удалена или перемещена.<br>
                        Попробуйте вернуться <a href="<?= $_SERVER['HTTP_REFERER']; ?>">назад</a> или перейти на <a href="/">главную</a>
                    </div>
                </div>
            <? else : ?>
                <div class="footer__desc" data-aos="fade-right" data-aos-duration="1500" data-aos-delay="400">
                    <div class="footer__title">
                        Записаться на прием
                    </div>
                    <div class="footer__text">
                        Вы можете записаться на прием к специалисту через эту форму, мы свяжемся с вами и подтвердим вашу запись
                    </div>
                </div>
                <div class="footer__form" data-aos="fade-left" data-aos-duration="1500" data-aos-delay="400">
                    <?/*=do_shortcode('[contact-form-7 id="159" title="Обратный звонок"  html_class="popup-form--style"]')*/ ?>
                    <form action="/ajax/sendZapis.php" method="POST" class="form-send">
                        <div class="form-item">
                            <label for="select1">
                                Выберите клинику*
                                <select name="user_clinic" class="chosen-select" placeholder="Клиника не выбрана" id="select1" required="">
                                    <option value="">Клиника не выбрана</option>
                                    <option value="ул. Сажинская, 6">ул. Сажинская, 6</option>
                                    <option value=" ул. Атмосферная, 11">ул. Атмосферная, 11</option>
                                    <option value="пр-кт. Космонавтов, 108а">пр-кт. Космонавтов, 108а</option>
                                </select>
                            </label>
                            <label for="select2">
                                Выберите услугу
                                <select name="user_serv" class="chosen-select" id="select2">
                                    <option value="Клиника не выбрана">Услуга не выбрана</option>
                                    <?

                                    $args = array('post_type' => 'services', 'orderby' => 'meta_value_num', 'order' => 'ASC');
                                    $query = new WP_Query($args);
                                    ?>
                                    <? if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post();

                                    ?>
                                            <option value="<? the_title(); ?>"><? the_title(); ?></option>
                                    <? endwhile;
                                    endif;
                                    wp_reset_postdata(); ?>
                                </select>
                            </label>
                        </div>
                        <div class="form-item">
                            <label for="name">
                                Ваше имя*
                                <input type="text" name="user_name" id="name" placeholder="Введите имя" required="">
                            </label>
                            <label for="phone">
                                Ваш номер телефона*
                                <input type="tel" name="user_phone" id="phone" placeholder="+7 (000) 000-00-00" class="phone" required="">
                            </label>
                        </div>
                        <div class="form-item">
                            <label for="time">
                                Выберите удобное время
                                <select name="user_time" class="chosen-select" id="time">
                                    <option value="Утро">Утро</option>
                                    <option value="День">День</option>
                                    <option value="Вечер">Вечер</option>
                                </select>
                            </label>
                            <label for="date">
                                Удобная дата
                                <input type="date" name="user_date" id="date" placeholder="Нажмите, чтобы выбрать дату">
                            </label>
                        </div>
                        <textarea name="user_text" id="" cols="30" rows="10" placeholder="Причина обращения"></textarea>
                        <div class="form-bottom">
                            <label class="input-checkbox">
                                <input type="checkbox" name="privacy-policy" checked="" required="">
                                <span>Я согласен на обработку персональных данных</span>
                            </label>
                            <button type="submit" class="button button--grey">отправить</button>
                        </div>
                    </form>
                </div>
            <? endif; ?>
        </div>
    </div>
    <div class="footer__bottom">
        <div class="container">
            <div class="footer__head">
                <a href="/" class="footer__logo" data-aos="fade-right" data-aos-duration="1500" data-aos-delay="400">
                    <img src="<?= get_template_directory_uri() ?>/images/logo-footer.svg" alt="Лига профессионалов">
                </a>
                <div class="footer__address" data-aos="fade-left" data-aos-duration="1500" data-aos-delay="400">
                    <div class="footer__subtitle">
                        г. Екатеринбург
                    </div>
                    <div class="footer__contact">
                        <a href="https://wa.clck.bar/<?= $phone_1 ?>">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <g clip-path="url(#clip0_202_173)">
                                    <path d="M20.25 0H3.75C1.67893 0 0 1.67893 0 3.75V20.25C0 22.3211 1.67893 24 3.75 24H20.25C22.3211 24 24 22.3211 24 20.25V3.75C24 1.67893 22.3211 0 20.25 0Z" fill="#25D366" />
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M16.9 7.0125C15.5875 5.7 13.8375 5 12 5C8.15 5 5 8.15 5 12C5 13.225 5.35001 14.45 5.96251 15.5L5 19L8.67501 18.0375C9.72501 18.5625 10.8625 18.9125 12 18.9125C15.85 18.9125 19 15.7625 19 11.9125C19 10.075 18.2125 8.325 16.9 7.0125ZM12 17.775C10.95 17.775 9.90001 17.5125 9.02501 16.9875L8.84999 16.9L6.66249 17.5125L7.27501 15.4125L7.09999 15.15C6.48749 14.1875 6.22499 13.1375 6.22499 12.0875C6.22499 8.9375 8.85 6.3125 12 6.3125C13.575 6.3125 14.975 6.925 16.1125 7.975C17.25 9.1125 17.775 10.5125 17.775 12.0875C17.775 15.15 15.2375 17.775 12 17.775ZM15.15 13.4C14.975 13.3125 14.1 12.875 13.925 12.875C13.75 12.7875 13.6625 12.7875 13.575 12.9625C13.4875 13.1375 13.1375 13.4875 13.05 13.6625C12.9625 13.75 12.875 13.75 12.7 13.75C12.525 13.6625 12 13.4875 11.3 12.875C10.775 12.4375 10.425 11.825 10.3375 11.65C10.25 11.475 10.3375 11.3875 10.425 11.3C10.5125 11.2125 10.6 11.125 10.6875 11.0375C10.775 10.95 10.775 10.8625 10.8625 10.775C10.95 10.6875 10.8625 10.6 10.8625 10.5125C10.8625 10.425 10.5125 9.55 10.3375 9.2C10.25 8.9375 10.075 8.9375 9.98751 8.9375C9.90001 8.9375 9.81249 8.9375 9.63749 8.9375C9.54999 8.9375 9.37499 8.9375 9.19999 9.1125C9.02499 9.2875 8.58751 9.725 8.58751 10.6C8.58751 11.475 9.19999 12.2625 9.28749 12.4375C9.37499 12.525 10.5125 14.3625 12.2625 15.0625C13.75 15.675 14.0125 15.5 14.3625 15.5C14.7125 15.5 15.4125 15.0625 15.5 14.7125C15.675 14.275 15.675 13.925 15.5875 13.925C15.5 13.4875 15.325 13.4875 15.15 13.4Z" fill="white" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_202_173">
                                        <rect width="24" height="24" rx="12" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </a>
                        <span><?= $data['ur_name'] ?></span>
                    </div>
                    <div class="footer__contact">
                        <a href="https://wa.clck.bar/<?= $data['description'] ?>">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <g clip-path="url(#clip0_202_173)">
                                    <path d="M20.25 0H3.75C1.67893 0 0 1.67893 0 3.75V20.25C0 22.3211 1.67893 24 3.75 24H20.25C22.3211 24 24 22.3211 24 20.25V3.75C24 1.67893 22.3211 0 20.25 0Z" fill="#25D366" />
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M16.9 7.0125C15.5875 5.7 13.8375 5 12 5C8.15 5 5 8.15 5 12C5 13.225 5.35001 14.45 5.96251 15.5L5 19L8.67501 18.0375C9.72501 18.5625 10.8625 18.9125 12 18.9125C15.85 18.9125 19 15.7625 19 11.9125C19 10.075 18.2125 8.325 16.9 7.0125ZM12 17.775C10.95 17.775 9.90001 17.5125 9.02501 16.9875L8.84999 16.9L6.66249 17.5125L7.27501 15.4125L7.09999 15.15C6.48749 14.1875 6.22499 13.1375 6.22499 12.0875C6.22499 8.9375 8.85 6.3125 12 6.3125C13.575 6.3125 14.975 6.925 16.1125 7.975C17.25 9.1125 17.775 10.5125 17.775 12.0875C17.775 15.15 15.2375 17.775 12 17.775ZM15.15 13.4C14.975 13.3125 14.1 12.875 13.925 12.875C13.75 12.7875 13.6625 12.7875 13.575 12.9625C13.4875 13.1375 13.1375 13.4875 13.05 13.6625C12.9625 13.75 12.875 13.75 12.7 13.75C12.525 13.6625 12 13.4875 11.3 12.875C10.775 12.4375 10.425 11.825 10.3375 11.65C10.25 11.475 10.3375 11.3875 10.425 11.3C10.5125 11.2125 10.6 11.125 10.6875 11.0375C10.775 10.95 10.775 10.8625 10.8625 10.775C10.95 10.6875 10.8625 10.6 10.8625 10.5125C10.8625 10.425 10.5125 9.55 10.3375 9.2C10.25 8.9375 10.075 8.9375 9.98751 8.9375C9.90001 8.9375 9.81249 8.9375 9.63749 8.9375C9.54999 8.9375 9.37499 8.9375 9.19999 9.1125C9.02499 9.2875 8.58751 9.725 8.58751 10.6C8.58751 11.475 9.19999 12.2625 9.28749 12.4375C9.37499 12.525 10.5125 14.3625 12.2625 15.0625C13.75 15.675 14.0125 15.5 14.3625 15.5C14.7125 15.5 15.4125 15.0625 15.5 14.7125C15.675 14.275 15.675 13.925 15.5875 13.925C15.5 13.4875 15.325 13.4875 15.15 13.4Z" fill="white" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_202_173">
                                        <rect width="24" height="24" rx="12" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </a>
                        <span><?= $data['ur_inn'] ?></span>
                    </div>
                    <div class="footer__contact">
                        <a href="https://wa.clck.bar/<?= $phone_2 ?>">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <g clip-path="url(#clip0_202_173)">
                                    <path d="M20.25 0H3.75C1.67893 0 0 1.67893 0 3.75V20.25C0 22.3211 1.67893 24 3.75 24H20.25C22.3211 24 24 22.3211 24 20.25V3.75C24 1.67893 22.3211 0 20.25 0Z" fill="#25D366" />
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M16.9 7.0125C15.5875 5.7 13.8375 5 12 5C8.15 5 5 8.15 5 12C5 13.225 5.35001 14.45 5.96251 15.5L5 19L8.67501 18.0375C9.72501 18.5625 10.8625 18.9125 12 18.9125C15.85 18.9125 19 15.7625 19 11.9125C19 10.075 18.2125 8.325 16.9 7.0125ZM12 17.775C10.95 17.775 9.90001 17.5125 9.02501 16.9875L8.84999 16.9L6.66249 17.5125L7.27501 15.4125L7.09999 15.15C6.48749 14.1875 6.22499 13.1375 6.22499 12.0875C6.22499 8.9375 8.85 6.3125 12 6.3125C13.575 6.3125 14.975 6.925 16.1125 7.975C17.25 9.1125 17.775 10.5125 17.775 12.0875C17.775 15.15 15.2375 17.775 12 17.775ZM15.15 13.4C14.975 13.3125 14.1 12.875 13.925 12.875C13.75 12.7875 13.6625 12.7875 13.575 12.9625C13.4875 13.1375 13.1375 13.4875 13.05 13.6625C12.9625 13.75 12.875 13.75 12.7 13.75C12.525 13.6625 12 13.4875 11.3 12.875C10.775 12.4375 10.425 11.825 10.3375 11.65C10.25 11.475 10.3375 11.3875 10.425 11.3C10.5125 11.2125 10.6 11.125 10.6875 11.0375C10.775 10.95 10.775 10.8625 10.8625 10.775C10.95 10.6875 10.8625 10.6 10.8625 10.5125C10.8625 10.425 10.5125 9.55 10.3375 9.2C10.25 8.9375 10.075 8.9375 9.98751 8.9375C9.90001 8.9375 9.81249 8.9375 9.63749 8.9375C9.54999 8.9375 9.37499 8.9375 9.19999 9.1125C9.02499 9.2875 8.58751 9.725 8.58751 10.6C8.58751 11.475 9.19999 12.2625 9.28749 12.4375C9.37499 12.525 10.5125 14.3625 12.2625 15.0625C13.75 15.675 14.0125 15.5 14.3625 15.5C14.7125 15.5 15.4125 15.0625 15.5 14.7125C15.675 14.275 15.675 13.925 15.5875 13.925C15.5 13.4875 15.325 13.4875 15.15 13.4Z" fill="white" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_202_173">
                                        <rect width="24" height="24" rx="12" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </a>
                        <span><?= $data['ur_ogrn'] ?></span>
                    </div>
                </div>
                <div class="footer__phone" data-aos="fade-left" data-aos-duration="1500" data-aos-delay="400">
                    <a href="+7<?= $data['phone_code'] ?><?= $data['phone'] ?>">+7(<?= $data['phone_code'] ?>)<?= $data['phone'] ?></a>
                    <a href="+7<?= $data['phone_code'] ?><?= $data['phone2'] ?>">+7(<?= $data['phone_code'] ?>)<?= $data['phone2'] ?></a>
                    <a href="+7<?= $data['phone_code'] ?><?= $data['phone3'] ?>">+7(<?= $data['phone_code'] ?>)<?= $data['phone3'] ?></a>
                </div>
                <a href="<?= $data['ur_okved'] ?>" target="_blank" class="footer__social">
                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none">
                        <g clip-path="url(#clip0_202_186)">
                            <path d="M0 5C0 2.23858 2.23858 0 5 0H27C29.7614 0 32 2.23858 32 5V27C32 29.7614 29.7614 32 27 32H5C2.23858 32 0 29.7614 0 27V5Z" fill="#0077FF" />
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M15.2747 21.9302H16.5299C16.5299 21.9302 16.9089 21.8884 17.1028 21.6798C17.2809 21.4882 17.2752 21.1285 17.2752 21.1285C17.2752 21.1285 17.2507 19.4442 18.0322 19.1962C18.803 18.9518 19.7925 20.824 20.8412 21.5439C21.6343 22.0885 22.237 21.9693 22.237 21.9693L25.0414 21.9302C25.0414 21.9302 26.5084 21.8396 25.8128 20.6862C25.7559 20.592 25.4076 19.833 23.7275 18.2736C21.9689 16.6414 22.2047 16.9055 24.3229 14.0822C25.6129 12.3628 26.1286 11.3132 25.9674 10.8637C25.8139 10.4354 24.865 10.5485 24.865 10.5485L21.7074 10.5681C21.7074 10.5681 21.4732 10.5362 21.2997 10.64C21.13 10.7415 21.021 10.9788 21.021 10.9788C21.021 10.9788 20.5211 12.3092 19.8548 13.4408C18.4488 15.8283 17.8865 15.9546 17.6566 15.8062C17.1219 15.4606 17.2555 14.4182 17.2555 13.6775C17.2555 11.3637 17.6065 10.3989 16.5721 10.1492C16.2289 10.0664 15.9761 10.0116 15.0983 10.0027C13.9715 9.99119 13.0181 10.0061 12.4781 10.2706C12.1189 10.4466 11.8417 10.8385 12.0106 10.861C12.2194 10.8888 12.6919 10.9886 12.9425 11.3295C13.2661 11.7699 13.2548 12.7584 13.2548 12.7584C13.2548 12.7584 13.4408 15.4821 12.8206 15.8204C12.395 16.0524 11.8111 15.5787 10.5576 13.4126C9.9154 12.3031 9.43037 11.0765 9.43037 11.0765C9.43037 11.0765 9.33698 10.8474 9.17015 10.7247C8.96783 10.576 8.68513 10.5289 8.68513 10.5289L5.68447 10.5485C5.68447 10.5485 5.23412 10.5611 5.06863 10.757C4.9214 10.9314 5.05687 11.2916 5.05687 11.2916C5.05687 11.2916 7.4059 16.7875 10.066 19.5572C12.5053 22.0968 15.2747 21.9302 15.2747 21.9302Z" fill="white" />
                        </g>
                        <defs>
                            <clipPath id="clip0_202_186">
                                <rect width="32" height="32" fill="white" />
                            </clipPath>
                        </defs>
                    </svg>
                </a>
            </div>
            <div class="footer__foot" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="400">
                <div class="footer__service">
                    <div class="footer__subtitle">
                        Услуги
                    </div>
                    <?
                    wp_nav_menu(array(
                        'theme_location'  => 'service',
                        'menu'            => '',
                        'container'       => false,
                        'menu_class'      => 'footer-menu list-reset',
                        'menu_id'         => '',
                        'echo'            => true,
                        'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                        'depth'           => 0,
                        'walker'          => '',
                    )); ?>
                </div>
                <div class="footer__company">
                    <div class="footer__subtitle">
                        О компании
                    </div>
                    <?
                    wp_nav_menu(array(
                        'theme_location'  => 'bottom',
                        'menu'            => '',
                        'container'       => false,
                        'menu_class'      => 'footer-menu list-reset',
                        'menu_id'         => '',
                        'echo'            => true,
                        'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                        'depth'           => 0,
                        'walker'          => '',
                    )); ?>
                </div>
            </div>
            <div class="footer__copy">© 2019 «ЛигаПрофессионалов» Все права защищены и принадлежат их авторам.</div>
        </div>
    </div>
</footer>
<div class="popup-bg"></div>
<div class="popup popup-zapis-js">
    <button type="button" class="popup__close">
        <svg width="18" height="18" viewBox="0 0 18 18" fill="none">
            <path d="M18 1.575L16.425 0L9 7.425L1.575 0L0 1.575L7.425 9L0 16.425L1.575 18L9 10.575L16.425 18L18 16.425L10.575 9L18 1.575Z" fill="#18969E" />
        </svg>
    </button>
    <div class="popup__wrap">
        <div class="popup__title">
            Запишитесь на приём
        </div>
        <div class="popup__form">
            <form action="/ajax/sendZapis.php" method="POST" class="form-send">
                <div class="form-item">
                    <label for="select1">
                        Выберите клинику*
                        <select name="user_clinic" class="chosen-select" placeholder="Клиника не выбрана" id="select1" required="">
                            <option value="">Клиника не выбрана</option>
                            <option value="ул. Сажинская, 6">ул. Сажинская, 6</option>
                            <option value=" ул. Атмосферная, 11">ул. Атмосферная, 11</option>
                            <option value="пр-кт. Космонавтов, 108а">пр-кт. Космонавтов, 108а</option>
                        </select>
                    </label>
                    <label for="select2">
                        Выберите услугу
                        <select name="user_serv" class="chosen-select" id="select2">
                            <option value="Клиника не выбрана">Услуга не выбрана</option>
                            <?

                            $args = array('post_type' => 'services', 'orderby' => 'meta_value_num', 'order' => 'ASC');
                            $query = new WP_Query($args);
                            ?>
                            <? if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post();

                            ?>
                                    <option value="<? the_title(); ?>"><? the_title(); ?></option>
                            <? endwhile;
                            endif;
                            wp_reset_postdata(); ?>
                        </select>
                    </label>
                </div>
                <div class="form-item">
                    <label for="name">
                        Ваше имя*
                        <input type="text" name="user_name" id="name" placeholder="Введите имя" required="">
                    </label>
                    <label for="phone">
                        Ваш номер телефона*
                        <input type="tel" name="user_phone" id="phone" placeholder="+7 (000) 000-00-00" class="phone" required="">
                    </label>
                </div>
                <div class="form-item">
                    <label for="time">
                        Выберите удобное время
                        <select name="user_time" class="chosen-select" id="time">
                            <option value="Утро">Утро</option>
                            <option value="День">День</option>
                            <option value="Вечер">Вечер</option>
                        </select>
                    </label>
                    <label for="date">
                        Удобная дата
                        <input type="date" name="user_date" id="date" placeholder="Нажмите, чтобы выбрать дату">
                    </label>
                </div>
                <textarea name="user_text" id="" cols="30" rows="10">Причина обращения</textarea>
                <div class="form-bottom">
                    <label class="input-checkbox">
                        <input type="checkbox" name="privacy-policy" checked="" required="">
                        <span>Я согласен на обработку персональных данных</span>
                    </label>
                    <button type="submit" class="button button--grey">отправить</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="popup popup-otziv-js">
    <button type="button" class="popup__close">
        <svg width="18" height="18" viewBox="0 0 18 18" fill="none">
            <path d="M18 1.575L16.425 0L9 7.425L1.575 0L0 1.575L7.425 9L0 16.425L1.575 18L9 10.575L16.425 18L18 16.425L10.575 9L18 1.575Z" fill="#18969E" />
        </svg>
    </button>
    <div class="popup__wrap">
        <div class="popup__title popup__title--otziv">
            Пожалуйста, оцените<br> наши услуги
        </div>
        <div class="popup__subtitle">Благодаря вашим отзывам мы становимся лучше</div>
        <div class="popup__form">
            <form action="/ajax/sendRev.php" method="POST" class="form-send">
                <input type="hidden" class="type-rev" value="" name="user_type">
                <div class="form-item">
                    <label for="name1">
                        <input type="text" name="user_name" id="name1" placeholder="Введите имя" required="">
                    </label>
                    <label for="phone1">
                        <input type="tel" name="user_phone" id="phone1" placeholder="+7 (000) 000-00-00" class="phone" required="">
                    </label>
                </div>
                <label for="mail1">
                    <input type="email" name="user_mail" id="mail1" placeholder="Введите имя" required="" class="form-input">
                </label>
                <textarea name="user_text" id="" cols="30" rows="10">Причина обращения</textarea>
                <div class="form-bottom">
                    <label class="input-checkbox">
                        <input type="checkbox" name="privacy-policy" checked="" required="">
                        <span>Я согласен на обработку персональных данных</span>
                    </label>
                    <button type="submit" class="button button--grey">отправить</button>
            </form>
        </div>
    </div>
</div>
</div>
<div class="popup success">
    <button type="button" class="popup__close">
        <svg width="18" height="18" viewBox="0 0 18 18" fill="none">
            <path d="M18 1.575L16.425 0L9 7.425L1.575 0L0 1.575L7.425 9L0 16.425L1.575 18L9 10.575L16.425 18L18 16.425L10.575 9L18 1.575Z" fill="#18969E" />
        </svg>
    </button>
    <div class="popup__wrap">
        <div class="success__wrap">
            Спасибо, мы получили Ваше сообщение!
        </div>
    </div>
</div>
<? wp_footer(); ?>

</body>

</html>