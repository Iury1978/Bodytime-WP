<?php get_header(); ?>
<?php
/* Template Name: contacts */ 
?>
 <main>
    <div class="container breadcrumb">
      <ul class="breadcrumb__items">
        <li class="breadcrumb__item"><a href="home" class="breadcrumb__link">Главная</a></li>
        <li class="breadcrumb__item"><a href="" class="breadcrumb__link">Контакты</a></li>
      </ul>
    </div>
    <section class="contacts">
      <div class="container contacts__container">
        <h1 class="contacts__title">Контакты</h1>
        <div class="contacts__columns column">
          <div class="column__wrapper">
            <h2 class="column__title">Режим работы</h2>
            <p class="column__text">пн-пт: 9.00-21.00 <br>
              сб: 10.00-20.00 <br>
              вс: выходной</p>
          </div>
          <div class="column__wrapper">
            <h2 class="column__title">Связаться</h2>
            <p class="column__text">8 (913) 798-93-63й</p>
            <p class="column__text">Sonik.nsk@yandex.ru</p>
          </div>
          <div class="column__wrapper">
            <h2 class="column__title">Наш адрес</h2>
            <p class="column__text">г.Новосибирск, ул.Вокзальная магистраль,16, оф. 205, 2 эт.</p>
          </div>
        </div>
      </div>
    </section>
    <section class="map">
      <div class="map__image" id="map"></div>
    </section>
  </main>
<?php get_footer(); ?>