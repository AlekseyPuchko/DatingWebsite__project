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
            <section class="people wrapper">
                <div class="people-container">
                    <div class="people-block">
                        <div class="buttons-search">
                            <form action="">
                                <input
                                    type="text"
                                    placeholder="Поиск"
                                    id="livesearch"
                                />
                            </form>
                        </div>

                        <div class="people-info">
                            <div class="people-img">
                                <img src="/img/person1.jpg" alt="" />
                            </div>
                            <div class="people-text">
                                <h4>Татьяна Макарова</h4>
                                <p>Минск, 24 года</p>

                                <div class="people-button">
                                    <img src="/img/addfriend-icon.svg" alt="" />
                                    <button class="btn-addfriend">
                                        Добавить в друзья
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="people-info">
                            <div class="people-img">
                                <img src="/img/person2.jpg" alt="" />
                            </div>
                            <div class="people-text">
                                <h4>Коля Трачевский</h4>
                                <p>Витебск, 33 года</p>

                                <div class="people-button">
                                    <img src="/img/addfriend-icon.svg" alt="" />
                                    <button class="btn-addfriend">
                                        Добавить в друзья
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="people-info">
                            <div class="people-img">
                                <img src="/img/person3.jpg" alt="" />
                            </div>
                            <div class="people-text">
                                <h4>Игнат Василевский</h4>
                                <p>Минск, 23 года</p>

                                <div class="people-button">
                                    <img src="/img/addfriend-icon.svg" alt="" />
                                    <button class="btn-addfriend">
                                        Добавить в друзья
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="people-info">
                            <div class="people-img">
                                <img src="/img/person4.jpg" alt="" />
                            </div>
                            <div class="people-text">
                                <h4>Ульяна Хвощевская</h4>
                                <p>Минск, 32 года</p>

                                <div class="people-button">
                                    <img src="/img/addfriend-icon.svg" alt="" />
                                    <button class="btn-addfriend">
                                        Добавить в друзья
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="searchpeople-block">
                        <h2>Расширенный поиск</h2>
                        <form action="check.php" method="POST">
                            <div class="wide-search">
                                <div class="find-city">
                                    <label for="city"
                                        ><i class="fas fa-city"></i>Город
                                    </label>
                                    <select
                                        name="city"
                                        id="city"
                                        class=""
                                        required
                                    >
                                        <option>Минск</option>
                                        <option>Брест</option>
                                        <option>Витебск</option>
                                        <option>Гомель</option>
                                        <option>Гродно</option>
                                        <option>Могилев</option>
                                    </select>
                                </div>

                                <div class="find-gender">
                                    <label for="gender"
                                        ><i class="fas fa-venus-mars"></i
                                        >Пол</label
                                    >
                                    <select
                                        name="gender"
                                        id="sex"
                                        class=""
                                        required
                                    >
                                        <option>Мужcкой</option>
                                        <option>Женский</option>
                                        <option>Любой</option>
                                    </select>
                                </div>

                                <div class="find-age">
                                    <label for="age"
                                        ><i class="fas fa-user-alt"></i
                                        >Возраст</label
                                    >
                                    <span class="span-age">ОТ</span>
                                    <input
                                        class=""
                                        type="text"
                                        name="age"
                                        id="age-first"
                                        placeholder="18"
                                    />

                                    <span class="span-age">ДО</span>
                                    <input
                                        class=""
                                        type="text"
                                        name="age"
                                        id="age-last"
                                        placeholder="99"
                                    />
                                </div>
                            </div>
                        </form>
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
