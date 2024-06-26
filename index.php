<?php
  $servername = "localhost";
  $username = "root";
  $password = "kvant05";
  $dbname = "stars_uvals";
  
  // Создаем соединение
  $conn = new mysqli($servername, $username, $password, $dbname);
  
  // Проверяем соединение
  if ($conn->connect_error) {
      die("Соединение с базой данных не удалось: " . $conn->connect_error);
  }
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
    <script src="js/main.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
    <!-- FAVICON-->
    <link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon/favicon-16x16.png">
    <link rel="manifest" href="img/favicon/site.webmanifest">

    <style>
      .object {
    position: relative; /* Необходимо для позиционирования псевдоэлемента */
}

.object.selected::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5); /* Черный полупрозрачный фон */
    z-index: 1; /* Устанавливаем выше других элементов */
}
    </style>
  </head>
  <body>
    <div class="wraper" id="app">
      <!-- header-->
      <header>
        <!-- мини-навигация-->
        <div class="header">
          <section class="header__logo"> <a href="index.php"> <img src="img/logo.png" alt=""></a></section>
          <nav class="header__menu">
            <div class="burger-button header__menu_button"><span class="burger-top burger"></span><span class="burger-middle burger"></span><span class="burger-bottom burger"></span></div>
            <div class="burger-menu"><a class="check" href="index.html">Главная</a><a href="check_admin.php">Админу</a></div>
          </nav>
        </div>
        <!-- основной большой блок-->
        <div class="main"> 
          <h3>Звездные увалы</h3>
          <aticle class="main__title"> 
            <h2>
              Проголосовало 
              <span>
                <?php
                $qwery = "SELECT COUNT(*) as people FROM `voits`";
                $result = mysqli_query($conn, $qwery);
                while($row = $result->fetch_assoc()){
                  echo $row['people'];
                }; 
                ?> 
              </span>
              человек
            </h2>
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
              <swiper-container class="mySwiper galary__blocks" navigation="true" pagination="true" pagination-clickable="true" space-between="10" slides-per-view="2" pagination-type="none">
                <swiper-slide><img src="img/biathlon_stadium.png" alt="slide1"></swiper-slide>
                <swiper-slide><img src="img/Childrens_playground.png" alt="slide2"></swiper-slide>
                <swiper-slide><img src="img/downhill_track.png" alt="slide3"></swiper-slide>
                <swiper-slide><img src="img/Eco-school.png" alt="slide4"></swiper-slide>
                <swiper-slide><img src="img/Greenhouse.png" alt="slide5"></swiper-slide>
                <swiper-slide><img src="img/pond_improvement.png" alt="slide6"></swiper-slide>
                <swiper-slide><img src="img/Recreation_areas.png" alt="slide7"></swiper-slide>
                <swiper-slide><img src="img/the_spring.png" alt="slide8"></swiper-slide>
                <swiper-slide><img src="img/tubing_track.png" alt="slide9"></swiper-slide>
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
              <div class="map__blocks"> 
                <div class="map__block places">
                  <div class="item item1 place" data-place="1"> </div>
                  <div class="item item2 place" data-place="2"> </div>
                  <div class="item item3 place" data-place="3"> </div>
                  <div class="item item4 place" data-place="4"> </div>
                  <div class="item item5 place" data-place="5"> </div>
                  <div class="item item6 place" data-place="6"> </div>
                  <div class="item item7 place" data-place="7"> </div>
                  <div class="item item8 place" data-place="8"> </div>
                  <div class="item item9 place" data-place="9"> </div>
                  <div class="item item10 place" data-place="10"> </div>
                  <div class="item item11 place" data-place="11"> </div>
                </div>
                <div class="map__sum"> 
                  <h3>Сумма</h3>
                  <div class="map__sum-text sum info" style="display: none; font-size: 20px;">
                    
                  </div>
                  <hr>
                  <div class="full-sum"> 
                    <div class="message"></div>
                    
                    <h3 class="total-cost">Общая сумма - <span>0 млн</span></h3>
                  </div>
                  <button class="trigger button">Голосовать</button>
                  <div class="modal">
                    <div class="modal-content">
                      <span class="close-button">&times;</span><br>
                      <form action="check_admin.php" method="post">
                        <div> 
                          <label for="fio">Введите ФИО :</label>
                          <input id="fio" type="text" name="fio" required>
                        </div>
                        <div> 
                          <label for="date">Дата рождения :</label>
                          <input id="date" type="date" name="date" min="1900-01-01" max="2024-01-01" required>
                        </div>
                        <div>
                          <label for="gen">Пол :</label>
                          <select id="gen" name="gen">
                            <option value="m">Муж.</option>
                            <option value="g">Жен.</option>
                          </select>
                        </div>
                        <div> 
                          <label for="spec">Специальность :</label>
                          <input id="spec" type="text" name="spec" required>
                        </div>
                        <div>
                          <label for="ch1" class="checkBoxLabel">Согласны на обработку персональных данных?</label>
                          <label class="checkBox">
                            <input id="ch1" type="checkbox" required>
                            <div class="transition"></div>
                          </label>
                        </div>
                        <div> 
                          <button type="submit">Проголосовать</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
                <swiper-container class="mySwiper objects" navigation="true" pagination="true" pagination-clickable="true" slides-per-view="3" space-between="10" pagination-type="none">
                  <swiper-slide class="object" data-object='{"id": 1, "name": "Благоустройство рудника", "price": "₽4", "image": "img/the_spring.png", "value": "Mine improvement"}'>
                    <img src="img/the_spring.png" alt="">
                    <div class="text"> 
                      <h4>Благоустройство рудника - <span>4 млн</span></h4>
                    </div>
                  </swiper-slide>
                  <swiper-slide class="object"  data-object='{"id": 2, "name": "Благоустройство пруда", "price": "₽12.5", "image": "img/pond_improvement.png"}'> 
                    <img src="img/pond_improvement.png" alt="">
                    <div class="text"> 
                      <h4>Благоустройство пруда (расчистка, устройство настила, установка МАФ) - <span>12.5 млн</span></h4>
                    </div>
                  </swiper-slide>
                  <swiper-slide class="object" data-object='{"id": 3, "name": "Биатлонный стадион", "price": "₽25", "image": "img/biathlon_stadium.png"}'> 
                    <img src="img/biathlon_stadium.png" alt="">
                    <div class="text"> 
                      <h4>Биатлонный стадион - <span>25 млн</span></h4>
                    </div>
                  </swiper-slide>
                  <swiper-slide class="object" data-object='{"id": 4, "name": "Трасса для Даунхида", "price": "₽2.5", "image": "img/downhill_track.png"}'> 
                    <img src="img/downhill_track.png" alt="">
                    <div class="text"> 
                      <h4>Трасса даунхилла - <span>2.5 млн</span></h4>
                    </div>
                  </swiper-slide>
                  <swiper-slide class="object" data-object='{"id": 5, "name": "Трасса даунхилла", "price": "₽10", "image": "img/tubing_track.png"}'> 
                    <img src="img/tubing_track.png" alt="">
                    <div class="text"> 
                      <h4>Трасса для тюбингов (без подъемника) - <span>10млн</span></h4>
                    </div>
                  </swiper-slide>
                  <swiper-slide class="object" data-object='{"id": 6, "name": "Трасса для тюбингов (c подъемником)", "price": "₽18", "image": "img/Tubing_track_The_lift.png"}'> 
                    <img src="img/Tubing_track_The_lift.png" alt="">
                    <div class="text"> 
                      <h4>Трасса для тюбингов (c подъемником) - <span>18млн</span></h4>
                    </div>
                  </swiper-slide>
                  <swiper-slide class="object" data-object='{"id": 7, "name": "Детская площадка", "price": "₽20", "image": "img/Childrens_playground.png"}'> 
                    <img src="img/Childrens_playground.png" alt="">
                    <div class="text"> 
                      <h4>Детская площадка - <span>20млн</span></h4>
                    </div>
                  </swiper-slide>
                  <swiper-slide class="object" data-object='{"id": 8, "name": "Оранжерея (ботанический сад)", "price": "₽0.3", "image": "img/Greenhouse.png"}'> 
                    <img src="img/Greenhouse.png" alt="">
                    <div class="text"> 
                      <h4>Оранжерея (ботанический сад) - <span>300тыс</span></h4>
                    </div>
                  </swiper-slide>
                  <swiper-slide class="object" data-object='{"id": 9, "name": "Экошкола", "price": "₽10", "image": "img/Eco-school.png"}'> 
                    <img src="img/Eco-school.png" alt="">
                    <div class="text"> 
                      <h4>Экошкола - <span>10млн</span></h4>
                    </div>
                  </swiper-slide>
                  <swiper-slide class="object" data-object='{"id": 10, "name": "Зоны отдыха вдоль тропинок и тротуаров", "price": "₽0.065", "image": "img/Recreation-area-trop.jpg"}'> 
                    <img src="img/Recreation-area-trop.jpg" alt="">
                    <div class="text"> 
                      <h4>Зоны отдыха вдоль тропинок, тротуаров - <span>65тыс</span></h4>
                    </div>
                  </swiper-slide>
                  <swiper-slide class="object" data-object='{"id": 11, "name": "Место для пикника", "price": "₽0.15", "image": "img/Piknik.jpg"}'> 
                    <img src="img/Piknik.jpg" alt="">
                    <div class="text"> 
                      <h4>Место для пикника - <span>150тыс</span></h4>
                    </div>
                  </swiper-slide>
                  <swiper-slide class="object" data-object='{"id": 12, "name": "Беседки", "price": "₽0.3", "image": "img/Gazebos.jpg"}'> 
                    <img src="img/Gazebos.jpg" alt="">
                    <div class="text"> 
                      <h4>Беседки - <span>300тыс</span></h4>
                    </div>
                  </swiper-slide>
                  <swiper-slide class="object" data-object='{"id": 13, "name": "Беседки(с навесом)", "price": "₽0.45", "image": "img/Gazebos2.jpg"}'> 
                    <img src="img/Gazebos2.jpg" alt="">
                    <div class="text"> 
                      <h4>Беседки(с навесом) - <span>450тыс</span></h4>
                    </div>
                  </swiper-slide>

                  <swiper-slide class="object" data-object='{"id": 14, "name": "Площадка для воркаута (покрытие песок)", "price": "₽0.5", "image": "img/Vorkayt.jpg"}'> 
                    <img src="img/Vorkayt.jpg" alt="">
                    <div class="text"> 
                      <h4>Площадка для воркаута (покрытие песок) -  <span>500тыс</span></h4>
                    </div>
                  </swiper-slide>

                  <swiper-slide class="object" data-object='{"id": 15, "name": "Мини зоопарк", "price": "₽0", "image": "img/Zoo.jpg"}'> 
                    <img src="img/Zoo.jpg" alt="">
                    <div class="text"> 
                      <h4>Мини зоопарк - <span>Реализуется за счет средств инвестора</span></h4>
                    </div>
                  </swiper-slide>
                  <swiper-slide class="object" data-object='{"id": 16, "name": "Площадка для воркаута (резиновое покрытие)", "price": "₽4", "image": "img/Vorkayt2.jpg"}'> 
                    <img src="img/Vorkayt2.jpg" alt="">
                    <div class="text"> 
                      <h4>Площадка для воркаута (резиновое покрытие) - <span>4млн</span></h4>
                    </div>
                  </swiper-slide>
                  <swiper-slide class="object" data-object='{"id": 17, "name": "Глемпинг", "price": "₽0", "image": "img/Glemping.jpg"}'> 
                    <img src="img/Glemping.jpg" alt="">
                    <div class="text"> 
                      <h4>Глемпинг - <span>Реализуется за счет средств инвестора</span></h4>
                    </div>
                  </swiper-slide>
                  <swiper-slide class="object" data-object='{"id": 18, "name": "Кэмпинг", "price": "₽0", "image": "img/Kemping.jpg"}'> 
                    <img src="img/Kemping.jpg" alt="">
                    <div class="text"> 
                      <h4>Кэмпинг - <span>Реализуется за счет средств инвестора</span></h4>
                    </div>
                  </swiper-slide>
                  <swiper-slide class="object" data-object='{"id": 19, "name": "Туалет", "price": "₽0.35", "image": "img/WC.jpg"}'> 
                    <img src="img/WC.jpg" alt="">
                    <div class="text"> 
                      <h4>Туалет - <span>350тыс</span></h4>
                    </div>
                  </swiper-slide>
                  <swiper-slide class="object" data-object='{"id": 20, "name": "Амфитеатр", "price": "₽1", "image": "img/Eco-school.jpg"}'> 
                    <img src="img/Amfiteatr.jpg" alt="">
                    <div class="text"> 
                      <h4>Амфитеатр - <span>1млн</span></h4>
                    </div>
                  </swiper-slide>
                  <swiper-slide class="object" data-object='{"id": 21, "name": "Лыжероллерная трасса (3км)", "price": "₽17", "image": "img/Roller-ski-track.jpg"}'> 
                    <img src="img/Roller-ski-track.jpg" alt="">
                    <div class="text"> 
                      <h4>Лыжероллерная трасса (3км) - <span>17млн</span></h4>
                    </div>
                  </swiper-slide>
                  <swiper-slide class="object" data-object='{"id": 22, "name": "Пешеходные дорожки (1 км)", "price": "₽4", "image": "img/Footpaths.jpg"}'> 
                    <img src="img/Footpaths.jpg" alt="">
                    <div class="text"> 
                      <h4>Пешеходные дорожки (1 км)  - <span>4млн</span></h4>
                    </div>
                  </swiper-slide>
                  <swiper-slide class="object" data-object='{"id": 23, "name": "Арт объекты", "price": "₽3", "image": "img/Arts-object.jpg"}'> 
                    <img src="img/Arts-object.jpg" alt="">
                    <div class="text"> 
                      <h4>Арт объекты - <span>3млн</span></h4>
                    </div>
                  </swiper-slide>
                  <swiper-slide class="object" data-object='{"id": 24, "name": "Арт объекты (скульптуры обитателей Увалов)", "price": "₽3", "image": "img/Arts-object2.jpg"}'> 
                    <img src="img/Arts-object2.jpg" alt="">
                    <div class="text"> 
                      <h4>Арт объекты (скульптуры обитателей Увалов) - <span>3млн</span></h4>
                    </div>
                  </swiper-slide>
                  <swiper-slide class="object" data-object='{"id": 25, "name": "Детская площадка «Космос»", "price": "₽30", "image": "img/Childrens-playground2.jpg"}'> 
                    <img src="img/Childrens-playground2.jpg" alt="">
                    <div class="text"> 
                      <h4>Детская площадка «Космос» - <span>30млн</span></h4>
                    </div>
                  </swiper-slide>
                  <swiper-slide class="object" data-object='{"id": 26, "name": "Подъемник", "price": "₽11", "image": "img/Lift.jpg"}'> 
                    <img src="img/Lift.jpg" alt="">
                    <div class="text"> 
                      <h4>Подъемник - <span>11млн</span></h4>
                    </div>
                  </swiper-slide>
                  <swiper-slide class="object" data-object='{"id": 27, "name": "Смотровая площадка с которой открывается вид на города", "price": "₽20", "image": "img/Observation-deck.jpg"}'> 
                    <img src="img/Observation-deck.jpg" alt="">
                    <div class="text"> 
                      <h4>Смотровая площадка с которой открывается вид на город - <span>20млн</span></h4>
                    </div>
                  </swiper-slide>
                  <swiper-slide class="object" data-object='{"id": 28, "name": "Лыжная база", "price": "₽25", "image": "img/Ski-base.jpg"}'> 
                    <img src="img/Ski-base.jpg" alt="">
                    <div class="text"> 
                      <h4>Лыжная база  - <span>25млн</span></h4>
                    </div>
                  </swiper-slide>
                </swiper-container>
              </div>
            </div>
          </div>
        </section>
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
    <noscript>
      Включите пожалуйста JavaScript( JS ) в настройках, 
      иначе данный сайт будет некорректно работать
    </noscript>
  </body>
</html>