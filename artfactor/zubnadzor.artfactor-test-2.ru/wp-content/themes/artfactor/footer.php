<footer>
    <div class="footer-content container">
        <div class="company">Автономная некоммерческая организация<br />
            Центр координации и поддержки стоматологических пациентов «Зубнадзор»
        </div>
        <div class="footer__info">
            <div class="footer__address">
                <ul>
                    <li class="footer__pin"><span>г. Москва,<br />
                            ул. Кржижановского, д. 21 А</span></li>
                    <li class="footer__phone"><a style="color:white" href="tel:+<?= str_replace(['+', ' ', '-'], '', esc_html(get_option('contact_phone', ''))) ?>"><?= esc_html(get_option('contact_phone', '')); ?></a></li>
                    <li class="footer__mail">
                        <div class="footer__mail_grid">
                            <div>или напишите нам <br />
                                <a href="mailto:info@zubnadzor.ru"><?= esc_html(get_option('contact_email')); ?></a>
                            </div>
                            <div>
                                <a href=""><img src="/wp-content/themes/artfactor/images/logos_telegram.png"></a>
                                <a href=""><img src="/wp-content/themes/artfactor/images/logos_whatsapp-icon.svg"></a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>

            <div class="footer__links">
                <ul>
                    <li><a href="/o-proekte/">Проект зубнадзор</a></li>
                    <li><a href="/ne-mogu-molchat/">Не могу молчать!</a></li>
                    <li><a href="">Ваша помощь</a></li>
                    <li><a href="#mission">Миссия</a></li>
                </ul>
            </div>
            <div class="footer__links">
                <ul>
                    <li><a href="">Документы</a></li>
                    <li><a href="/infoblog/">Инфоблог</a></li>
                    <li><a href="/uslugi/">Услуги</a></li>
                    <li><a href="">Обратная связь</a></li>
                </ul>
            </div>
            <div class="footer__links">
                <ul>
                    <li><a href="/kontakty/">Контакты</a></li>
                    <li><a href="/sotrudnichestvo/">Сотрудничестов</a></li>
                    <li><a href="">Политика конфиденциальности</a></li>
                    <li><a href="">Условия обработки персональных данных</a></li>
                </ul>
            </div>
        </div>
    </div>

</footer>

<script>
    AOS.init({
        once: true
    });
</script>
</body>

</html>