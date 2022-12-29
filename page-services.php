<?php get_header(); ?>
<?php
/* Template Name: services */ 
?>
  <main>
    <div class="container breadcrumb">
      <ul class="breadcrumb__items">
        <li class="breadcrumb__item"><a href="home" class="breadcrumb__link">Главная</a></li>
        <li class="breadcrumb__item"><a href="" class="breadcrumb__link">Наши услуги</a></li>
      </ul>
    </div>
    <section class="services">
      <div class="container services__container">
        <h1 class="services__title"><?php the_title(); ?></h1>
        <!-- непонятна задумка дизайнера-  селект- форма это, или радио-форма с картинками,
           или просто графический элемент.
          Пока делаю как форму без кнопки в  десктопной и как ссылки по странице в мобильном -->
        <div class="services__forms">
          <!-- кнопка для всплывающего меню в мобильной версии -->
          <button class="services__filter" type="menu">
            <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M18.6 23.4458L14.2 26.1958V17.887C14.2 17.4695 14.0549 17.065 13.7895 16.7427L4.11898 5H28.681L19.0105 16.7427C18.7451 17.065 18.6 17.4695 18.6 17.887V23.4458Z"
                stroke="#828282" stroke-width="2" stroke-linejoin="round" />
            </svg>

          </button>
          <!-- всплывающее меню в мобильной версии -->
          <ul class="services__mobile">
            <li class="services__item-mobile"><a href="#!" class="services__item-link">Уход за лицом</a></li>
            <li class="services__item-mobile"><a href="#!" class="services__item-link">Уход за телом</a></li>
            <li class="services__item-mobile"><a href="#!" class="services__item-link">Ресницы</a></li>
            <li class="services__item-mobile"><a href="#!" class="services__item-link">Эпиляция</a></li>
          </ul>
          <!-- форма выбора в десктопной версии -->
          <form class="services__choice" id="select_choice" aria-label="выбор категории услуг">
            <select class="services__select" name="face" id="face">
              <option value="face1" selected>Уход за лицом</option>
              <option value="face2">Уход за лицом2</option>
              <option value="face3">Уход за лицом3</option>
            </select>
            <select class="services__select" name="body" id="body">
              <option value="body1" selected>Уход за телом</option>
              <option value="body2">Уход за телом2</option>
              <option value="body3">Уход за телом3</option>
            </select>
            <select class="services__select" name="eyelashes" id="eyelashes">
              <option value="eyelashes1" selected>Ресницы</option>
              <option value="eyelashes2">Ресницы2</option>
              <option value="eyelashes3">Ресницы3</option>
            </select>
            <select class="services__select" name="epilation" id="epilation">
              <option value="epilation1" selected>Эпиляция</option>
              <option value="epilation2">Эпиляция2</option>
              <option value="epilation3">Эпиляция3</option>
            </select>
          </form>
          <!-- форма поиска -->
          <form class="services__search search" id="search">
            <label class="search__label" aria-label="поиск по сайту">
              <input class="search__input" type="search" name="search" placeholder="Поиск">
            </label>
            <button class="search__button" type="button" aria-label="найти услугу на сайте">
              <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M38 38L31.3891 31.3773L38 38ZM35.0526 22.5263C35.0526 25.8485 33.7329 29.0346 31.3838 31.3838C29.0346 33.7329 25.8485 35.0526 22.5263 35.0526C19.2041 35.0526 16.018 33.7329 13.6689 31.3838C11.3197 29.0346 10 25.8485 10 22.5263C10 19.2041 11.3197 16.018 13.6689 13.6689C16.018 11.3197 19.2041 10 22.5263 10C25.8485 10 29.0346 11.3197 31.3838 13.6689C33.7329 16.018 35.0526 19.2041 35.0526 22.5263V22.5263Z"
                  stroke="#828282" stroke-width="2" stroke-linecap="round" />
              </svg>
            </button>
          </form>
        </div>
        <!-- опять непонятна мысль дизайнера.
        пока сделал  везде целые блокиссылкой, кроме где ссылка на прайс -->
        <div class="services__flex-wrapper card">
   <?php 
   
        // параметры по умолчанию
      $my_posts = get_posts( array(
        'numberposts' => -1,
        'category'    => 0,
        'orderby'     => 'date',
        'order'       => 'ASC',
        'include'     => array(),
        'exclude'     => array(),
        'meta_key'    => '',
        'meta_value'  =>'',
        'post_type'   => 'card',
        'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
      ) );

      global $post;

      foreach( $my_posts as $post ){
        setup_postdata( $post );
          ?> 
              <article id="RF-face-lifting" class="card__article">
                 <a href="<?php the_permalink(); ?>" class="card__link">
              <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="девушка на процедурах" class="card__img">
                <div class="card__info">
                  <h2 class="card__title"><?php the_title(); ?></h2>
                  <p class="card__text"><?php echo get_post_meta(get_the_ID(), '___card-text1', true); ?><span class="card__old-price"><?php echo get_post_meta(get_the_ID(), 'old-price1', true); ?></span></p>
                  <p class="card__text"><?php echo get_post_meta(get_the_ID(), '___card-text2', true); ?><span class="card__old-price"><?php echo get_post_meta(get_the_ID(), 'old-price2', true); ?></span></p>
                  <p class="card__text"><?php echo get_post_meta(get_the_ID(), '___card-text3', true); ?><span class="card__old-price"><?php echo get_post_meta(get_the_ID(), 'old-price3', true); ?></span></p>
                </div>
                 </a>
               </article>
          <?php
      }
      wp_reset_postdata(); // сброс
          ?>
         
        </div>
      </div>

    </section>
  </main>
<?php get_footer(); ?>