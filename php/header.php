<?php
$code = '+ 375 29';
$number = array(
    '675-75-03',
    '858-41-41',
);
?>

<header class="header">
    <div class="container">

        <div class="header__inner">
            <div class="header__logo">
                <a class="header__logo-title">мед<span class="header__logo-title--bold">си</span><span class="header__logo-title--colors">т</span><span class="header__logo-title--bold">и</span></a>
                <div class="header__logo-subtitle">медицинский центр</div>
            </div>

            <div class="burger__btn"><span></span></div>


            <a href="#" class="header__contacts-sm"><i class="fas fa-phone-alt"></i></a>


            <div class="header__contacts">

                <div class="header__location">
                    <p class="header__location-adress">г. Минск, ул. Чюрлёниса,
                        дом 8, помещение 171</p>
                    <a href="" class="header__location-link">как добраться?</a>
                </div>
                <div class="header__working">
                    <p class="header__working-time">Пн-Пт <span class="header__working-time--bold">8.00-20.00</span> Сб-Вс <span class="header__working-time--bold">9.00-14.00</span></p>
                    <p class="header__working-today">Сегодня <span class="header__working-today--bold">до 20.00</span></p>
                </div>
                <div class="header__phone">
                    <?php
                    foreach ($number as $name) {
                    ?>
                        <a href="#" class="header__phone-number"><?php echo $code ?> <span class="header__phone-number--bold"><?php echo $name ?></span></a>
                    <?php
                    }
                    ?>
                </div>
            </div>
            <div class="header__requestcall">
                <button class="header__btn btn">Заказать звонок</button>
                <div class="header__requestcall-register">
                    <a href="#" class="header__requestcall-link">online запись</a>
                </div>
            </div>

        </div>
    </div>
</header>