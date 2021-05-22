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
        <link rel="stylesheet" href="/css/style.css" />
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
                            <a class="bordleft" href="/about.php">О нас</a>
                        </li>
                        <li>
                            <a class="bordleft" href="/news.php"
                                >Новости</a
                            >
                        </li>
                        <li>
                            <a class="bordleft" href="/places.php"
                                >Места</a
                            >
                        </li>
                        <li>
                            <a class="bordleft contacts" href="/people.php"
                                >Люди</a
                            >
                        </li>
                        <li><a class="bordleft" id="login" href="/login.php">Войти</a></li>
                        <li>
                            <a
                                href="/signup.php"
                                id="register"
                                class="bordleft"
                                >Регистрация</a
                            >
                        </li>
                    </ul>
                    <span class="toggle">☰</span>
                </label>
            </nav>
        </header>
        <main>
            <section class="stats wrapper">
                <div class="stats-text">
                    <h2>МЕСТА</h2>
                    <hr />
                    <p>
                        Здесь собраны все лучшие заведения города, которые
                        <br />
                        большая семья Kudapoidem собирала для вас на протяжении
                        <br />
                        нескольких лет
                    </p>
                    <hr />
                </div>
            </section>
            <section class="places">
                <div class="places-container">
                    <div class="place-block" id="place4">
                        <h3>Ресторан “MELT & HOPES”</h3>
                        <img src="/img/place-img1.jpg" alt="" />

                        <div class="place-info">
                            <span title="map" class="text-adress"
                                ><i class="fas fa-map-marker-alt">
                                    Адрес: г.Минск, ул. Интернациональная, 15</i
                                ></span
                            >
                            <span title="food"
                                ><i class="fas fa-utensils">
                                    Кухня: Европейская</i
                                ></span
                            >
                            <span title="price"
                                ><i class="fas fa-dollar-sign">
                                    Средняя цена за чек: 40 BYN</i
                                ></span
                            >
                        </div>
                        <div class="place-button">
                            <a href="/order-lg.php" class="btn-order">
                                Заказать
                            </a>
                        </div>
                    </div>
                    <div class="place-block" id="place5">
                        <h3>Ресторан “ASIA’S WIND”</h3>
                        <img src="/img/place-img2.jpg" alt="" />

                        <div class="place-info">
                            <span title="map" class="text-adress"
                                ><i class="fas fa-map-marker-alt">
                                    Адрес: г.Минск, ул. Франциска Скорины, 11</i
                                ></span
                            >
                            <span title="food"
                                ><i class="fas fa-utensils">
                                    Кухня: Азиатская</i
                                ></span
                            >
                            <span title="price"
                                ><i class="fas fa-dollar-sign">
                                    Средняя цена за чек: 35 BYN</i
                                ></span
                            >
                        </div>
                        <div class="place-button">
                            <a href="/order-lg.php" class="btn-order">
                                Заказать
                            </a>
                        </div>
                    </div>
                    <div class="place-block" id="place6">
                        <h3>Кофейня “EYFEL BAKERY”</h3>
                        <img src="/img/place-img3.jpg" alt="" />

                        <div class="place-info">
                            <span title="map" class="text-adress"
                                ><i class="fas fa-map-marker-alt">
                                    Адрес: г.Минск, ул. Центральная, 123</i
                                ></span
                            >
                            <span title="food"
                                ><i class="fas fa-utensils">
                                    Кухня: Европейская</i
                                ></span
                            >
                            <span title="price"
                                ><i class="fas fa-dollar-sign">
                                    Средняя цена за чек: 10 BYN</i
                                ></span
                            >
                        </div>
                        <div class="place-button">
                            <a href="/order-lg.php" class="btn-order">
                                Заказать
                            </a>
                        </div>
                    </div>
                    <div class="place-block" id="place7">
                        <h3>Кофейня “ВРЕМЯ КОФЕ”</h3>
                        <img src="/img/place-img4.jpg" alt="" />

                        <div class="place-info">
                            <span title="map" class="text-adress"
                                ><i class="fas fa-map-marker-alt">
                                    Адрес: г.Минск, ул. Коммунистическая, 27</i
                                ></span
                            >
                            <span title="food"
                                ><i class="fas fa-utensils">
                                    Кухня: Европейская</i
                                ></span
                            >
                            <span title="price"
                                ><i class="fas fa-dollar-sign">
                                    Средняя цена за чек: 15 BYN</i
                                ></span
                            >
                        </div>
                        <div class="place-button">
                            <a href="/order-lg.php" class="btn-order">
                                Заказать
                            </a>
                        </div>
                    </div>
                    <div class="place-block" id="place8">
                        <h3>Бар “RELAX & DRINK”</h3>
                        <img src="/img/place-img5.jpg" alt="" />

                        <div class="place-info">
                            <span title="map" class="text-adress"
                                ><i class="fas fa-map-marker-alt">
                                    Адрес: г.Минск, ул. Зыбицкая, 18</i
                                ></span
                            >
                            <span title="food"
                                ><i class="fas fa-utensils">
                                    Кухня: Европейская, американская</i
                                ></span
                            >
                            <span title="price"
                                ><i class="fas fa-dollar-sign">
                                    Средняя цена за чек: 35 BYN</i
                                ></span
                            >
                        </div>
                        <div class="place-button">
                            <a href="/order-lg.php" class="btn-order">
                                Заказать
                            </a>
                        </div>
                    </div>
                    <div class="place-block" id="place9">
                        <h3>Ресторан “FALCONE”</h3>
                        <img src="/img/place-img6.jpg" alt="" />

                        <div class="place-info">
                            <span title="map" class="text-adress"
                                ><i class="fas fa-map-marker-alt">
                                    Адрес: г.Минск, пр-т Победителей, 118</i
                                ></span
                            >
                            <span title="food"
                                ><i class="fas fa-utensils">
                                    Кухня: Европейская</i
                                ></span
                            >
                            <span title="price"
                                ><i class="fas fa-dollar-sign">
                                    Средняя цена за чек: 100 BYN</i
                                ></span
                            >
                        </div>
                        <div class="place-button">
                            <a href="/order-lg.php" class="btn-order">
                                Заказать
                            </a>
                        </div>
                    </div>
                    <div class="place-block" id="place10">
                        <h3>Ресторан “AMERICAN BBQ”</h3>
                        <img src="/img/place-img7.jpg" alt="" />

                        <div class="place-info">
                            <span title="map" class="text-adress"
                                ><i class="fas fa-map-marker-alt">
                                    Адрес: г.Минск, ул. Гикало, 2</i
                                ></span
                            >
                            <span title="food"
                                ><i class="fas fa-utensils">
                                    Кухня: Американская</i
                                ></span
                            >
                            <span title="price"
                                ><i class="fas fa-dollar-sign">
                                    Средняя цена за чек: 45 BYN</i
                                ></span
                            >
                        </div>
                        <div class="place-button">
                            <a href="/order-lg.php" class="btn-order">
                                Заказать
                            </a>
                        </div>
                    </div>
                    <div class="place-block" id="place11">
                        <h3>Кофейня “ПАРАГРАФ”</h3>
                        <img src="/img/place-img8.jpg" alt="" />

                        <div class="place-info">
                            <span title="map" class="text-adress"
                                ><i class="fas fa-map-marker-alt">
                                    Адрес: г.Минск, ул. К. Маркса, 45</i
                                ></span
                            >
                            <span title="food"
                                ><i class="fas fa-utensils">
                                    Кухня: Европейская</i
                                ></span
                            >
                            <span title="price"
                                ><i class="fas fa-dollar-sign">
                                    Средняя цена за чек: 17 BYN</i
                                ></span
                            >
                        </div>
                        <div class="place-button">
                            <a href="/order-lg.php" class="btn-order">
                                Заказать
                            </a>
                        </div>
                    </div>
                    <div class="place-block" id="place12">
                        <h3>Ресторан “SANCHELLO ROSSO”</h3>
                        <img src="/img/place-img9.jpg" alt="" />

                        <div class="place-info">
                            <span title="map" class="text-adress"
                                ><i class="fas fa-map-marker-alt">
                                    Адрес: г.Минск, ул. Брест-Литовская, 9</i
                                ></span
                            >
                            <span title="food"
                                ><i class="fas fa-utensils">
                                    Кухня: Французская</i
                                ></span
                            >
                            <span title="price"
                                ><i class="fas fa-dollar-sign">
                                    Средняя цена за чек: 70 BYN</i
                                ></span
                            >
                        </div>
                        <div class="place-button">
                            <a href="/order-lg.php" class="btn-order">
                                Заказать
                            </a>
                        </div>
                    </div>
                </div>
            </section>
            <div id="popup-register" class="popup">
                <a href="#" class="popup__area"></a>
                <div class="popup__body">
                    <div class="popup__content__register">
                        <div class="popup__text__register">
                            <form
                                class="form-register"
                                action="check.php"
                                method="POST"
                            >
                                <a
                                    href="#register"
                                    class="popup__close__register"
                                    ><i class="far fa-times-circle"></i
                                ></a>
                                <h2 class="reg-h2">Регистрация</h2>
                                <div class="form-field multi-input">
                                    <label for="name">Представьтесь: </label>
                                    <input
                                        class="reg-input"
                                        type="text"
                                        name="name"
                                        id="name"
                                        placeholder="Имя и Фамилия "
                                    />
                                </div>
                                <div class="form-field input-right">
                                    <label for="mail">E-mail</label>
                                    <input
                                        class="reg-input"
                                        type="text"
                                        name="mail"
                                        id="mail"
                                        placeholder="Пример: email@gmail.com"
                                    />
                                </div>

                                <div class="form-field input-right">
                                    <label for="sex">Ваш пол</label>
                                    <select
                                        name="sex"
                                        id="sex"
                                        class="reg-input reg-pass"
                                        required
                                    >
                                        <option>Мужcкой</option>
                                        <option>Женский</option>
                                    </select>
                                </div>

                                <div class="form-field input-right">
                                    <label for="age">Сколько Вам лет?</label>
                                    <select
                                        name="age"
                                        id="age"
                                        class="reg-input reg-pass"
                                        required
                                    >
                                        <option selected disabled hidden>
                                            Укажите ваш возраст
                                        </option>
                                        <option>Мне менее 18 лет</option>
                                    </select>
                                </div>
                                <script>
                                    const select =
                                        document.querySelector("#age");

                                    for (let i = 18; i <= 100; i++) {
                                        const option =
                                            document.createElement("option");
                                        option.textContent = option.value = i;
                                        select.append(option);
                                    }
                                </script>

                                <div class="form-field input-right">
                                    <label for="pass">Пароль</label>
                                    <input
                                        class="reg-input reg-pass"
                                        type="password"
                                        name="pass"
                                        id="pass"
                                        placeholder="Введите пароль"
                                    />
                                </div>
                                <div class="form-field submit-field">
                                    <input
                                        class="reg-input"
                                        type="submit"
                                        value="Зарегистрироваться"
                                    />
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
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
