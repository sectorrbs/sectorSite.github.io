<?php
$social = array(
    'vk',
    'instagram',
    'odnoklassniki',
    'facebook-f',
);
?>

<footer class="footer">
<img class="footer__grid" src="images/footer_grid.png" alt="footer-grid">
    <div class="container">
        <div class="footer__inner">
            <div class="footer__content footer__content--logo">
                <div class="footer__logo">
                    <p class="footer__logo-text-start">мед<span class="footer__logo-text-bold">си</span></p>
                    <span class="footer__logo-cross"></span>
                    <p class="footer__logo-text-start footer__logo-text-bold">и</p>
                </div>
                <div class="footer__text">Медицинский центр МедСити ООО «Белмеддиафарм» открылся по новому адресу после
                    2-годичной реконструкции.
                </div>
                <div class="footer__social">
                    <?php
                    foreach ($social as $name) {
                    ?>
                        <a href="#" class="footer__social-link"><i class="fab fa-<?php echo $name ?>"></i></a>
                    <?php
                    }
                    ?>
                </div>
                <div class="footer__text footer__text--copy">
                    <div class="footer__text">Copyright ©"МедСити" <br>
                        Все права защищены,2021.
                    </div>
                </div>
            </div>
            <div class="footer__content footer__content--services">
                <p class="footer__content-title">
                    Наши услуги
                </p>
                <ul class="footer__content-items">
                    <li class="footer__content-list"><a href="" class="footer__content-link">УЗИ</a></li>
                    <li class="footer__content-list"><a href="" class="footer__content-link">Наркология</a></li>
                    <li class="footer__content-list"><a href="" class="footer__content-link">Гинекология</a></li>
                    <li class="footer__content-list"><a href="" class="footer__content-link">Хирургия</a></li>
                    <li class="footer__content-list"><a href="" class="footer__content-link">Неврология</a></li>
                    <li class="footer__content-list"><a href="" class="footer__content-link">Психотерапия</a></li>
                    <li class="footer__content-list"><a href="" class="footer__content-link">Физиотерапия</a></li>
                </ul>
            </div>
            <div class="footer__content footer__content--useful">
                <p class="footer__content-title">
                    Полезное
                </p>
                <ul class="footer__content-items">
                    <li class="footer__content-list"><a href="" class="footer__content-link">О центре</a></li>
                    <li class="footer__content-list"><a href="" class="footer__content-link">Цены</a></li>
                    <li class="footer__content-list"><a href="" class="footer__content-link">Новости
                        </a></li>
                    <li class="footer__content-list"><a href="" class="footer__content-link">Библиотека здоровья</a></li>
                    <li class="footer__content-list"><a href="" class="footer__content-link">Отзывы</a></li>
                    <li class="footer__content-list"><a href="" class="footer__content-link">Контакты</a></li>
                </ul>
            </div>
            <div class="footer__content">
                <p class="footer__content-title">
                    контакты
                </p>
                <p class="footer__adress">г. Минск, ул. Чюрлёниса,
                    дом 8, помещение 171</p>
                <a href="#" class="footer__adress-link">как добраться?</a>
                <p class="footer__working">Пн-Пт <span class="footer__working-bold">8.00-20.00,</span>
                    Сб-Вс <span class="footer__working-bold">9.00-14.00</span></p>
                <div class="footer__phone">
                    <a href="#" class="footer__phone-number"><?php echo $code ?> <?php echo $number[0] ?>,</a>
                    <a href="#" class="footer__phone-number"><?php echo $code ?> <?php echo $number[1] ?></a>
                </div>
                <a href="" class="footer__requestcall-link">online запись</a>
            </div>
        </div>
    </div>
    <div class="footer__box-developers">
        <p class="footer__box-text">Разработка сайта <a href="#" class="footer__box-link">Narisuemvse.by</a></p>
    </div>
    <p class="scroll__top"><i class="fas fa-chevron-up scroll__top-arrow"></i></p>
    <div class="block__shadow"></div>
</footer>