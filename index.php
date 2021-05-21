<?php 
require "db.php";
?>

<?php if (isset($_SESSION['logged_user'])):  ?>
    
<center>
    Вы авторизовались на сайте. <br/>
Здравствуйте, <?php echo $_SESSION['logged_user'] ->login; ?>!
<a href="/logout.php">Выйти</a>
</center>
<hr>
<style>
            #register, #login {
                display:none;
            }
</style>
<?php else : ?>
<?php endif; ?>

<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=," />
        <title>Куда пойдем?</title>
        <link rel="stylesheet" href="/css/normalize.css" />
        <link rel="stylesheet" href="/css/style.css?<?echo time();?>" />
        <link rel="icon" href="/img/favicon.png" type="image/x-icon" />
        <script
            src="https://kit.fontawesome.com/6ff2b18920.js"
            crossorigin="anonymous"
        ></script>
    </head>
    <body>
        <header>
            <nav>
                <input type="checkbox" id="checkbox-menu" />
                <label for="checkbox-menu">
                    <ul class="menu touch">
                        <li><a class="logo" href="/index.php"></a></li>
                        <li>
                            <a class="bordleft search-mini" href="/index.php"
                                >Главная</a
                            >
                        </li>
                        <li>
                            <a class="bordleft" href="/css/about.html">О нас</a>
                        </li>
                        <li>
                            <a class="bordleft" href="/css/news.html"
                                >Новости</a
                            >
                        </li>
                        <li>
                            <a class="bordleft" href="/css/places.html"
                                >Места</a
                            >
                        </li>
                        <li>
                            <a class="bordleft contacts" href="/css/people.html"
                                >Люди</a
                            >
                        </li>
                        <li><a class="bordleft" id="login" href="/login.php">Войти</a></li>
                        <li>
                            <a

                                id="register"
                                class="bordleft"
                                href="/signup.php"
                                >Регистрация</a
                            >
                        </li>
                    </ul>
                    <span class="toggle">☰</span>
                </label>
            </nav>
        </header>
        <main>
            <section class="intro">
                <div class="intro-img">
                    <div class="bg-black">
                        <h1>"Куда пойдем?"</h1>
                        <hr />
                        <p class="first-p">
                            это социальная сеть, где ты всегда можешь
                            <br />найти себе приятную компанию для <br />
                            похода в кино, кафе или просто приятной прогулки.
                        </p>
                        <p class="second-p">
                            А также большая и дружная команда, которая <br />
                            поделится с тобой любимыми местами и расскажет<br />
                            последние новости города.
                        </p>
                    </div>
                </div>
                <div class="intro-contacts">
                    <p><i class="fas fa-mug-hot"></i>Более 50 крутых мест</p>
                    <p><i class="fas fa-map-marker-alt"></i>Минск, Беларусь</p>
                </div>
            </section>
            <section class="stats wrapper">
                <div class="stats-text">
                    <h2>ЛУЧШИЕ ЗАВЕДЕНИЯ<br />по версии сайта Kudapoidem.by</h2>
                    <hr />
                    <p>
                        Ниже представлены заведения, которые пользуются
                        популярностью <br />не только у пользователей, но и у
                        администрации твоего любимого <br />
                        интернет-ресурса
                    </p>
                </div>
            </section>

            <section class="slider">
                <div class="slide1" id="place1">
                    <div class="slide-text">
                        <h3>Кофейня “Время кофе”</h3>
                        <p class="slide-adress">
                            г. Минск, ул. Коммунистическая, 27
                        </p>
                        <p class="slide-info">
                            Давно мечтаете о том, чтобы найти «то самое место»,
                            в котором можно было бы как вкусно позавтракать, так
                            и душевно провести время вечером в приятной
                            компании? Думаете над тем, какое кафе выбрать, где
                            уютная атмосфера идеально сочетается с качественно
                            приготовленными блюдами? Тогда предлагаем Вам
                            остановиться, ведь кафе-пекарня «Время кофе» именно
                            то, что Вам нужно.
                        </p>
                        <a href="/order.php" class="btn-order"> Заказать </a>
                    </div>
                </div>
                <div class="slide2" id="place2">
                    <div class="slide-text">
                        <h3>Бар “Relax and drink”</h3>
                        <p class="slide-adress">г. Минск, ул. Зыбицкая, 18</p>
                        <p class="slide-info">
                            “Relax and drink” — это концептуальный коктейль-бар,
                            который соединяет в себе историю музыки, коктейлей и
                            уникальной атмосферы в единый организм,
                            подталкивающий гостей заведения возвращаться сюда
                            снова и снова, каждый раз открывая для себя что-то
                            новое. Здесь можно уютно посидеть в компании друзей,
                            а также подвигаться в такт музыкальных композиций
                            выступающих исполнителей.
                        </p>
                        <a href="/order.php" class="btn-order"> Заказать </a>
                    </div>
                </div>
                <div class="slide3" id="place3">
                    <div class="slide-text">
                        <h3>Ресторан «Falcone»</h3>
                        <p class="slide-adress">
                            г. Минск, пр-т Победителей, 118
                        </p>
                        <p class="slide-info">
                            Ресторан «Falcone» поистине можно считать достоянием
                            города Минска. Более десяти лет назад ресторан
                            итальянской кухни «Falcone», распахнул свои двери
                            для тех, кто ценит гармонию вкуса и красоту блюд,
                            одним из первых создал культ итальянской кухни в
                            Минске, и сегодня продолжает традиции итальянской
                            гастрономии в современной подаче.
                        </p>
                        <a href="/order.php" class="btn-order"> Заказать </a>
                    </div>
                </div>
            </section>
        </main>
        <footer>
            <div class="footer-block">
                <div class="footer-left"></div>
                <div class="footer-text">
                    <h3>2021 © Kudapoidem</h3>
                    <p>Все права защищены.</p>
                </div>
                <div class="footer-icons">
                    <img src="/img/icon-insta.svg" alt="Instagram" />
                    <img src="/img/icon-twitter.svg" alt="Twitter" />
                    <img src="/img/icon-facebook.svg" alt="Facebook" />
                </div>
            </div>
        </footer>
        <script src="/js/jquery-3.6.0.min.js"></script>
        <script src="/js/slick.min.js"></script>
        <script src="/js/script.js"></script>
    </body>
</html>
