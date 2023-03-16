<footer>
    <div class="footer">
        <div class="footer-content container">
            <div class="company">Автономная некоммерческая организация<br />
                Центр координации и поддержки стоматологических пациентов «Зубнадзор»
            </div>
        </div>
        <div class="container container_grid footer__wrapper">
            <div class="footer-content footer__half">
                <div class=" footer__address">
                    <ul>
                        <li class="footer__pin"><span>г. Москва,<br />
                                ул. Кржижановского, д. 21 А</span></li>
                        <li class="footer__phone"><a style="color:white" href="tel:+<?= str_replace(['+', ' ', '-'], '', esc_html(get_option('contact_phone', ''))) ?>"><?= esc_html(get_option('contact_phone', '')); ?></a></li>
                        <li class="footer__mail">
                            <div class="footer__mail_grid">
                                <div>или напишите нам <br />
                                    <a href="mailto:info@zubnadzor.ru"><?= esc_html(get_option('contact_email')); ?></a>
                                </div>
                                <div style="display: flex;gap: 20px;">
                                    <a href=""><img style="width:36px;" src="/wp-content/themes/artfactor/images/tpg_png.png"></a>
                                    <a href=""><img src="/wp-content/themes/artfactor/images/logos_whatsapp-icon.svg"></a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="footer-content" style="padding-right:0;">
                <div class="footer__info footer__menu" style="">
                    <div class=" footer__links">
                        <ul>
                            <li><a href="/o-proekte/">О проекте</a></li>
                            <li><a href="/zubnadzor-razyasnyaet/">Зубнадзор разъясняет</a></li>
                            <li><a href="/ne-mogu-molchat/">Не могу молчать!</a></li>
                            <li><a href="">Ваша помощь</a></li>
                        </ul>
                    </div>
                    <div class="footer__links">
                        <ul>
                            <li><a href="/dokumenty/">Документы</a></li>
                            <li><a href="/infoblog/">Инфоблог</a></li>
                            <li><a href="/uslugi/">Услуги</a></li>
                            <li><a href="">Обратная связь</a></li>
                        </ul>
                    </div>
                    <div class="footer__links">
                        <ul>
                            <li><a href="/kontakty/">Контакты</a></li>
                            <li><a href="/sotrudnichestvo/">Сотрудничество</a></li>
                            <li><a href="">Политика конфиденциальности</a></li>
                            <li><a href="">Условия обработки персональных данных</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="container container_flex footer__madeby">
            <hr style="border:1px solid rgba(255,255,255,0.1);" class="footer-content">
            <div class=" copyright">© Любое использование либо копирование материалов или подборки материалов сайта, допускается лишь с разрешения правообладателя и только со ссылкой на источник: www.zubnadzor.org</div>
            <div class="byartfactor"> Создание сайта <a href="https://artfactor.ru">АртФактор</a></div>
        </div>
    </div>
</footer>

<div id="modal" class="modal-footer">
    <div class="modal-background">
        <div class="contact__form modal">
            <div class="button__close">x</div>
            <div class="page__h1 page__h2_blue pt_60 pb_16">Заполните форму, и мы с Вами свяжемся!</div>
            <form>
                <div class="form__group">
                    <input type="text" class="required_field" placeholder="Имя*" name="username">
                    <input type="text" class="required_field" placeholder="Фамилия*" name="secondname">
                </div>
                <div class="form__group">
                    <input type="text" class="required_field" placeholder="E-mail*" name="email">
                    <input type="text" class="required_field" placeholder="Телефон*" name="phone">
                </div>
                <div class="form__group">
                    <input type="text" class="required_field" placeholder="Тема обращения*" name="reason_topic">
                </div>
                <div class="form__group">
                    <textarea class="required_field" placeholder="Текст вашего обращения*" name="reason_text"></textarea>
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
                    <div><button class="send-button">Отправить</button></div>
                </div>
            </form>
        </div>
    </div>

</div>

<div class="scrollToTop"></div>

<script>
    AOS.init({
        once: true
    });
</script>
</body>

</html>