<?php
$nav = array(
  'Главная',
  'О центре',
  'Услуги',
  'Цены',
  'Новости',
  'Библиотека здоровья',
  'Контакты'
);
?>

<nav class="nav">
  <div class="container">
    <div class="nav__inner">
      <?php
      foreach ($nav as $name) {
      ?>
        <a href="#" class="nav__link"><?php echo $name ?></a>
      <?php
      }
      ?>
      <a href="#" class="nav__link-search"><i class="fas fa-search nav__search"></i></a>
    </div>
  </div>
</nav>
