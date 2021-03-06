<?php 
require "db.php";
?>

<?php if (isset($_SESSION['logged_user'])):  ?>

<center>
    Вы авторизовались на сайте. <br />
    Здравствуйте,
    <?php echo $_SESSION['logged_user'] ->login; ?>!
    <a href="/logout.php">Выйти</a>
</center>
<hr />
<style>
    #register,
    #login {
        display: none;
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
                        <li>
                            <a class="bordleft" id="login" href="/login.php"
                                >Войти</a
                            >
                        </li>
                        <li>
                            <a href="/signup.php" id="register" class="bordleft"
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
                    <h2>О НАС</h2>
                    <hr />
                    <p>
                        Знакомься с новыми классными людьми, заводи друзей
                        <br />
                        и ищи свою половинку здесь, открывая для себя крутые,
                        интересные <br />и необычные места вместе!
                    </p>
                    <hr />
                </div>
            </section>

            <section class="steps">
                <div class="wrapper">
                    <h2>Как это работает?</h2>
                    <p class="steps-text">
                        Мы вам поможем отлично провести время, наслаждаясь
                        атмосферой уютного кафе или изысканного ресторана. А,
                        может, вы любите активный отдых и экстрим? Что бы вы не
                        пожелали, у нас вы найдете для себя место, которое вы
                        будете счастливы посетить с близким по духу человеком.
                    </p>

                    <div class="steps-container">
                        <div class="stepblock" id="stepbl1">
                            <p class="step-num">01</p>
                            <h4><span>01</span>Регистрация</h4>
                            <p class="step-info">
                                Регистрируйтесь на сайте, расскажите немного о
                                себе, включая ваши увлечения и интересы
                            </p>
                            <a class="steps-links" href="/signup.php">
                                <p class="stepinfolast">Зарегистрироваться</p>
                            </a>
                        </div>
                        <div class="stepblock">
                            <p class="step-num">02</p>
                            <h4><span>02</span>Поиск человека</h4>
                            <p class="step-info">
                                Среди множества анкет реальных людей найдите
                                близкого по духу человека, с которым хотели бы
                                встретиться
                            </p>
                            <a class="steps-links" href="/people.php">
                                <p class="stepinfolast" id="stepbrdr2">
                                    Перейти к поиску
                                </p>
                            </a>
                        </div>
                        <div class="stepblock">
                            <p class="step-num">03</p>
                            <h4><span>03</span>Выбор и бронирование места</h4>
                            <p class="step-info">
                                Благодаря нашему удобному сервису вы можете с
                                легкостью забронировать любое понравившееся вам
                                заведение
                            </p>
                            <a class="steps-links" href="/places.php"
                                ><p class="stepinfolast" id="stepbrdr3">
                                    Перейти к выбору
                                </p>
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
