<?php
  include "/xampp/htdocs/hacaton2024-stars_uvals/include/connect.php";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Звездные увалы</title>
    <!-- CSS-->
    <link rel="stylesheet" href="css/style.css">
    <!-- JS-->
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script src="js/main.js" defer=""></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
    <!-- Chatra {literal}-->
    <script>
      (function(d, w, c) {
      w.ChatraID = 'HkjoreZ7TDjDoHKoE';
      var s = d.createElement('script');
      w[c] = w[c] || function() {
      (w[c].q = w[c].q || []).push(arguments);
      };
      s.async = true;
      s.src = 'https://call.chatra.io/chatra.js';
      if (d.head) d.head.appendChild(s);
      })(document, window, 'Chatra');
      // /Chatra {/literal}
      
    </script>
    <!-- FAVICON-->
    <link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon/favicon-16x16.png">
    <link rel="manifest" href="img/favicon/site.webmanifest">
  </head>
  <body>
    <div class="wraper" id="app">
      <!-- header-->
      <header>
        <!-- мини-навигация-->
        <div class="header">
          <section class="header__logo"> <a href="index.html"> <img src="img/logo.png" alt=""></a></section>
          <nav class="header__menu">
            <div class="burger-button header__menu_button"><span class="burger-top burger"></span><span class="burger-middle burger"></span><span class="burger-bottom burger"></span></div>
            <div class="burger-menu"><a class="check" href="index.html">Главная</a><a href="check_admin.php">Админу</a></div>
          </nav>
        </div>
        <!-- основной большой блок-->
        <div class="main"> 
          <h3>Звездные увалы</h3>
          <aticle class="main__title"> 
            <h2>Проголосовало <span>
                 50 </span>человек</h2>
          </aticle>
          <h2>Проголосуйте и вы</h2><a href="#map">Голосовать </a>
        </div>
      </header>
      <!-- main-->
      <main>
        <!-- информация о проекте-->
        <section class="info-project main__info">
          <div class="container">
            <div class="info-project__wraper"> 
              <article class="info-project__text">
                <h2 class="info-project__title" id="info-project">О проекте</h2>
                <p class="info-project__paragraph">
                  Всероссийский конкурс 
                  лучших проектов создания
                  комфортной городской среды 
                  включен в федеральный проект 
                  «Формирование комфортной городской
                  среды» национального 
                  проекта «Жилье и городская среда».
                </p>
                <p class="info-project__paragraph info-project__paragraph_grean-back-dark">
                   Конкурс проводится по 
                  поручению Президента России с 2018 года.
                </p>
                <p class="info-project__paragraph">
                  В нем участвуют города 
                  с численностью населения 
                  до 200 тыс. человек, 
                  а также исторические поселения 
                  федерального и регионального значения.
                </p>
              </article>
              <div class="info-project__img"> <img src="img/man.svg" alt="человек"></div>
            </div>
          </div>
        </section>
        <!-- информация о самом месте-->
        <section class="info-mesto main__info">
          <article class="info-mesto__title">
            <div class="container">
              <div class="info-mesto__title-wraper">
                <h2 id="info-mesto">Увалы</h2>
              </div>
            </div>
          </article>
          <div class="container"> 
            <div class="info-mesto__wraper">
              <div class="info-mesto__block block block1">
                <p>
                   Местная пресса 1900 года пишет 
                  о массовых лыжных прогулках на Тумановой горе
                  (неподалёку от Увал).
                </p>
              </div>
              <div class="info-mesto__block block block2">
                <p>
                   Первые городские 
                  лыжные соревнования 
                  состоялись в 1925 году.
                </p>
              </div>
              <div class="info-mesto__block block block3">
                <p>
                   В 1986 году на Увалах прошли 
                  Всероссийские соревнования 
                  на приз Т.С. Мальцева.
                  В них приняли участие 
                  спортсмены из 34 областей, 
                  в том числе и лыжники Шадринска.
                  С 1938 года на Увалах 
                  стали проводить массовые 
                  культурные мероприятия.
                </p>
              </div>
              <div class="info-mesto__block block block4">
                <p>
                   Например, большую популярность 
                  среди горожан имели маёвки - гуляния, 
                  семейные и дружеские пикники, 
                  приуроченные ко встрече весны и Дню 
                  международной солидарности трудящихся.
                </p>
              </div>
              <div class="info-mesto__block block block5">
                <p>
                   Команда проекта обратилась 
                  к жителям  города поделиться 
                  уникальными привычками и 
                  традициями,  культурными 
                  особенностями, городскими 
                  мифами и легендами, в том 
                  числе проектируемой территории, 
                  чтобы интегрировать их в проект 
                  благоустройства!
                </p>
              </div>
            </div>
          </div>
        </section>
        <!-- галерея-->
        <section class="galary main__galary">
          <div class="container"> 
            <div class="galary__wraper">
              <article class="galary__title"> 
                <h2 id="galary">Галерея</h2>
              </article>
              <swiper-container class="mySwiper galary__blocks" pagination="true" pagination-clickable="true" space-between="10" slides-per-view="2" pagination-type="fraction">
                <swiper-slide><img src="" alt="slide1"></swiper-slide>
                <swiper-slide><img src="" alt="slide2"></swiper-slide>
                <swiper-slide><img src="" alt="slide3"></swiper-slide>
                <swiper-slide><img src="" alt="slide4"></swiper-slide>
                <swiper-slide><img src="" alt="slide5"></swiper-slide>
                <swiper-slide><img src="" alt="slide6"></swiper-slide>
                <swiper-slide><img src="" alt="slide7"></swiper-slide>
                <swiper-slide><img src="" alt="slide8"></swiper-slide>
                <swiper-slide><img src="" alt="slide9"></swiper-slide>
              </swiper-container>
            </div>
          </div>
        </section>
        <!-- карта-->
        <section class="map main__galary">
          <div class="container"> 
            <div class="map__wraper"> 
              <article class="map__title"> 
                <h2 id="map">Карта местности</h2>
              </article>
              <div class="map__blocks"> <img src="img/map.jpg" alt="Карта">
                <div class="map__sum"> 
                  <h3>Сумма</h3>
                  <div class="map__sum-text sum">
                    <div> 
                      <h4>Название - <span>сумма</span></h4>
                    </div>
                    <div> 
                      <h4>Название - <span>сумма</span></h4>
                    </div>
                  </div>
                  <hr>
                  <div class="full-sum"> 
                    <h3>Общая сумма - <span>30млн</span></h3>
                  </div>
                  <button class="trigger">Голосовать</button>
                  <div class="modal">
                    <div class="modal-content"><span class="close-button">&times;</span><br><br>
                      <form action="index.php" method="post">
                        <div> 
                          <label for="fio">Введите ФИО :</label>
                          <input id="fio" type="text" name="fio">
                        </div>
                        <div> 
                          <label for="date">Дата рождения :</label>
                          <input id="date" type="date" name="date">
                        </div>
                        <div>
                          <label for="gen">Пол :</label>
                          <select id="gen" name="gen">
                            <option value="m">Муж.  </option>
                            <option value="g">Жен.</option>
                          </select>
                        </div>
                        <div> 
                          <label for="spec">Специальность :</label>
                          <input id="spec" type="text" name="spec">
                        </div>
                        <div> 
                          <button type="submit">Проголосовать</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
                <swiper-container class="mySwiper" pagination="true" pagination-clickable="true" slides-per-view="2" space-between="10" pagination-type="fraction">
                  <swiper-slide> <img src="" alt="">
                    <div class="text"> 
                      <h4>Название - <span>цена</span></h4>
                    </div>
                  </swiper-slide>
                  <swiper-slide><img src="" alt="">
                    <div class="text"> 
                      <h4>Название - <span>цена</span></h4>
                    </div>
                  </swiper-slide>
                  <swiper-slide><img src="" alt="">
                    <div class="text"> 
                      <h4>Название - <span>цена</span></h4>
                    </div>
                  </swiper-slide>
                  <swiper-slide><img src="" alt="">
                    <div class="text"> 
                      <h4>Название - <span>цена</span></h4>
                    </div>
                  </swiper-slide>
                  <swiper-slide><img src="" alt="">
                    <div class="text"> 
                      <h4>Название - <span>цена</span></h4>
                    </div>
                  </swiper-slide>
                  <swiper-slide><img src="" alt="">
                    <div class="text"> 
                      <h4>Название - <span>цена</span></h4>
                    </div>
                  </swiper-slide>
                  <swiper-slide><img src="" alt="">
                    <div class="text"> 
                      <h4>Название - <span>цена</span></h4>
                    </div>
                  </swiper-slide>
                  <swiper-slide><img src="" alt="">
                    <div class="text"> 
                      <h4>Название - <span>цена</span></h4>
                    </div>
                  </swiper-slide>
                  <swiper-slide><img src="" alt="">
                    <div class="text"> 
                      <h4>Название - <span>цена</span></h4>
                    </div>
                  </swiper-slide>
                </swiper-container>
              </div>
            </div>
          </div>
        </section>
        <!-- отсчет временим до конца голосования-->
        <section class="timer"></section>
      </main>
      <!-- footer-->
      <footer>
        <div class="container"> 
          <div class="footer__wraper"> 
            <!-- контакты-->
            <section class="footer__text"> 
              <div class="number"> 
                <h4>Телефон: 8 (35253)33215</h4>
              </div>
              <div class="email"><a href="mailto:grad@shadrinsk-city.ru">Почта: grad@shadrinsk-city.ru</a></div>
              <div class="op"> 
                <h4>&copy; 2024 This Website. All rights reserves</h4>
              </div>
            </section>
            <!-- навигация по сайту-->
            <nav class="footer__navigation"> 
              <ul> 
                <li><a href="#info-project"> О проекте</a></li>
                <li><a href="#info-mesto"> Увалы</a></li>
                <li><a href="#galary"> Галерея</a></li>
                <li><a href="#map"> Карта местности</a></li>
              </ul>
            </nav>
          </div>
        </div>
      </footer>
    </div>
  </body>
</html>