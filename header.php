<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Body Time</title>

<?php wp_head(); ?>


  <!-- <script src="./js/index.js" type="module"></script> -->
</head>

<body>
  <header class="header">
    <div class="container header__container">
      <div class="header__row mobile">
        <button class="mobile__burger">
          <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M32 14.5H8V13H32V14.5ZM32 26.5H8V25H32V26.5ZM32 20.488H8V19H32V20.488Z" fill="black" />
          </svg>
        </button>

        <img src="./img/logo.svg" alt="логотип компании Body Time" class="header__logo">
        <a href="./price.html" class="mobile__price">Прайс</a>
      </div>

      <div class="header__wrapper burger">
        <button class="burger__close">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path d="M20 20L4 4M20 4L4 20" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
          </svg>
        </button>

        <nav class="header__navigation navigation">
          <ul class="navigation__list">
            <li class="navigation__item"><a href="./services.html" class="navigation__link">Наши услуги</a>
            </li>
            <li class="navigation__item"><a href="./stocks.html" class="navigation__link">Акции</a></li>
            <li class="navigation__item"><a href="./price.html" class="navigation__link">Прайс</a></li>
            <li class="navigation__item"><a href="./contacts.html" class="navigation__link">Контакты</a></li>
          </ul>
        </nav>
        <div class="header__inner">

          <div class="header__comminication communication">
            <a href="tel:89139449363" class="communication__phone">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M15.249 16.1115L16.929 14.4315C17.1539 14.2066 17.4398 14.0526 17.7514 13.9886C18.063 13.9246 18.3865 13.9534 18.6818 14.0715L20.7278 14.8905C21.0293 15.0112 21.2878 15.2194 21.4699 15.4884C21.652 15.7573 21.7493 16.0747 21.7493 16.3995V20.1203C21.7498 20.3414 21.7052 20.5603 21.6182 20.7636C21.5312 20.9669 21.4036 21.1504 21.2432 21.3026C21.0829 21.4549 20.8931 21.5729 20.6856 21.6493C20.478 21.7257 20.2571 21.7589 20.0363 21.747C5.69478 20.8545 2.79828 8.70751 2.26053 4.05601C2.23449 3.8286 2.25688 3.59826 2.32624 3.38013C2.3956 3.16201 2.51036 2.96104 2.66296 2.79044C2.81556 2.61984 3.00255 2.48349 3.21163 2.39034C3.42071 2.29719 3.64714 2.24937 3.87603 2.25001H7.53078C7.85558 2.25 8.17294 2.3473 8.44191 2.52938C8.71088 2.71146 8.91912 2.96995 9.03978 3.27151L9.85803 5.31751C9.97612 5.61284 10.0049 5.93633 9.94096 6.24788C9.87697 6.55944 9.72296 6.84538 9.49803 7.07026L7.81803 8.75026C7.81803 8.75026 8.74953 15.2993 15.249 16.1115Z" />
              </svg>
            </a>
            <a href="https://wa.me/89139449363" class="communication__whatsapp">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M6.34341 20.555L6.73575 20.749C8.37075 21.7185 10.2018 22.171 12.0329 22.171C17.7878 22.171 22.4963 17.517 22.4963 11.8288C22.4963 9.11406 21.3845 6.46387 19.4227 4.52469C17.4608 2.5855 14.8448 1.48669 12.0329 1.48669C6.27806 1.48669 1.56947 6.14065 1.63491 11.8935C1.63491 13.8326 2.22347 15.7072 3.20437 17.3231L3.46594 17.711L2.41969 21.5247L6.34341 20.555Z" />
                <path
                  d="M19.7477 3.35675C17.6094 1.18112 14.6535 0 11.6348 0C5.21999 0 0.0629306 5.15944 0.125771 11.4378C0.125771 13.427 0.691786 15.3541 1.6352 17.0946L0 23L6.10039 21.4459C7.79843 22.3784 9.68509 22.8136 11.5719 22.8136C17.9239 22.8136 23.0809 17.654 23.0809 11.3758C23.0809 8.32976 21.886 5.47027 19.7478 3.35675H19.7477ZM11.6348 20.8866C9.93672 20.8866 8.23868 20.4515 6.79217 19.5812L6.41486 19.3947L2.76723 20.3271L3.71056 16.7839L3.45902 16.4109C0.691786 11.9974 2.01252 6.15404 6.54063 3.41886C11.0687 0.683773 16.9176 1.98921 19.6848 6.46487C22.452 10.9405 21.1312 16.7216 16.6032 19.4568C15.1566 20.3892 13.3957 20.8865 11.6348 20.8865V20.8866ZM17.1691 13.9866L16.4774 13.6758C16.4774 13.6758 15.4712 13.2407 14.8422 12.9298C14.7793 12.9298 14.7165 12.8676 14.6535 12.8676C14.4648 12.8676 14.3391 12.9298 14.2133 12.992C14.2133 12.992 14.1505 13.0541 13.27 14.0488C13.207 14.1731 13.0813 14.2353 12.9555 14.2353H12.8926C12.8297 14.2353 12.704 14.1731 12.641 14.111L12.3265 13.9866C11.6348 13.6758 11.0059 13.3028 10.5027 12.8055C10.377 12.6812 10.1883 12.5569 10.0625 12.4326C9.62225 11.9974 9.182 11.5001 8.86762 10.9406L8.80469 10.8163C8.74185 10.7541 8.74185 10.692 8.67892 10.5677C8.67892 10.4434 8.67892 10.3191 8.74185 10.2569C8.74185 10.2569 8.99339 9.94603 9.182 9.7596C9.30787 9.6352 9.37071 9.44877 9.49648 9.32446C9.62225 9.13794 9.68518 8.88931 9.62225 8.7028C9.55941 8.39197 8.80469 6.71359 8.61608 6.34065C8.49022 6.15413 8.36454 6.09202 8.17584 6.02982H7.48405C7.35819 6.02982 7.23251 6.09202 7.10665 6.09202L7.04372 6.15413C6.91795 6.21633 6.79218 6.34065 6.6664 6.40276C6.54063 6.52716 6.4777 6.65139 6.35193 6.77579C5.91169 7.33525 5.66015 8.01902 5.66015 8.7028C5.66015 9.20005 5.78592 9.6974 5.97462 10.1325L6.03755 10.3191C6.60356 11.5001 7.35819 12.5569 8.36454 13.4893L8.61608 13.7379C8.80469 13.9244 8.99339 14.0488 9.11916 14.2352C10.4399 15.3542 11.9492 16.1623 13.6473 16.5974C13.836 16.6595 14.0875 16.6595 14.2762 16.7217H14.9051C15.2196 16.7217 15.5969 16.5974 15.8485 16.4731C16.0371 16.3488 16.1629 16.3488 16.2887 16.2245L16.4145 16.1001C16.5403 15.9758 16.6661 15.9136 16.7918 15.7893C16.9176 15.665 17.0434 15.5407 17.1063 15.4163C17.2321 15.1677 17.2949 14.8568 17.3578 14.5461V14.111C17.3578 14.111 17.2949 14.0488 17.1691 13.9866Z"
                  fill="white" />
                <defs>
                  <filter id="filter0_d_126_730" x="-2" y="-2" width="27.0809" height="27" filterUnits="userSpaceOnUse"
                    color-interpolation-filters="sRGB">
                    <feFlood flood-opacity="0" result="BackgroundImageFix" />
                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                      result="hardAlpha" />
                    <feOffset />
                    <feGaussianBlur stdDeviation="1" />
                    <feComposite in2="hardAlpha" operator="out" />
                    <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.15 0" />
                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_126_730" />
                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_126_730" result="shape" />
                  </filter>
                  <clipPath id="clip0_126_730">
                    <rect width="24" height="24" fill="white" />
                  </clipPath>
                </defs>
              </svg>

            </a>
            <p class="communication__text">8 (913) 944-93-63</p>
          </div>
          <div class="header__address address">
            <img src="./img/icons_ location.svg" alt="иконка" class="address__img">
            <p class="address__text">
              г. Новосибирск, ул. Вокзальная магистраль,&nbsp;16, оф. 205, 2 эт.
            </p>
          </div>
        </div>
      </div>
    </div>
  </header>