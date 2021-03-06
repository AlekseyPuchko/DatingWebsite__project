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
                    <h2>Журнал Kudapoidem</h2>
                    <hr />
                    <p>
                        Онлайн-издание с новостями развлекательной <br />жизни
                        города, заведений и не только
                    </p>
                </div>
            </section>
            <section class="hot-news">
                <div class="wrapper news">
                    <div class="cards cards-adapt">
                        <div class="card" id="card1">
                            <img src="/img/card-image.jpg" alt="" />
                            <div class="card-container">
                                <h3>
                                    В ночь с 19 на 20 мая пройдет <br />“Ночь
                                    кино Тарантино”
                                </h3>
                                <p>
                                    В ночь с 19 по 20 мая в кинотеатре Golden
                                    Eye пройдет пятая по счету ночь кино. В этот
                                    раз темой киномарафона стала фильмография
                                    Квентина Тарантино.<br /><br /><br />
                                </p>

                                <div class="card-info">
                                    <div class="money">
                                        <a href="#popup1" class="read-more">
                                            Читать
                                        </a>
                                    </div>
                                    <div class="info">
                                        <span title="hot"
                                            ><i class="fab fa-hotjar"></i
                                        ></span>
                                        <span title="cinema"
                                            ><i class="fas fa-film"></i
                                        ></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card" id="card2">
                            <img src="/img/card-imagecafe.jpg" alt="" />
                            <div class="card-container">
                                <h3>
                                    На Энгельса, 5 открылось новое eco-friendly
                                    кафе
                                </h3>
                                <p>
                                    В городе Минск открылось новое кафе
                                    концепции eco-friendly. Мы поговорили с
                                    основателями и узнали, почему сейчас
                                    популярна идея сохранения экологии.
                                    <br /><br /><br /><br />
                                </p>
                                <div class="card-info">
                                    <div class="money">
                                        <a href="#popup2" class="read-more">
                                            Читать
                                        </a>
                                    </div>
                                    <div class="info">
                                        <span title="hot"
                                            ><i class="fab fa-hotjar"></i
                                        ></span>
                                        <span title="food"
                                            ><i class="fas fa-utensils"></i
                                        ></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card" id="card3">
                            <img src="/img/card-imagedrink.jpg" alt="" />
                            <div class="card-container">
                                <h3>
                                    Куда пойти на выходных <br />
                                    22-23 мая?
                                </h3>
                                <p>
                                    Редакция сайта Kudapoidem собрала для вас
                                    самые интересные мероприятия предстоящего
                                    уикенда. В том числе и бесплатные!<br /><br /><br />
                                    <br />
                                </p>
                                <div class="card-info">
                                    <div class="money">
                                        <a href="#popup3" class="read-more">
                                            Читать
                                        </a>
                                    </div>
                                    <div class="info">
                                        <span title="hot"
                                            ><i class="fab fa-hotjar"></i
                                        ></span>
                                        <span title="food"
                                            ><i class="fas fa-utensils"></i
                                        ></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card" id="card4">
                            <img src="/img/card-imageeaster.jpg" alt="" />
                            <div class="card-container">
                                <h3>
                                    Куличи, пряники и панеттоне. <br />4 лучших
                                    места, где можно купить пасхальную выпечку
                                </h3>
                                <p>
                                    В журнале Kudapoidem — самая полная подборка
                                    мест, где можно заказать пасхальную выпечку,
                                    начиная от пряников и заканчивая модными
                                    панеттоне.
                                    <br /><br />
                                </p>
                                <div class="card-info">
                                    <div class="money">
                                        <a href="#popup4" class="read-more">
                                            Читать
                                        </a>
                                    </div>
                                    <div class="info">
                                        <span title="hot"
                                            ><i class="fab fa-hotjar"></i
                                        ></span>
                                        <span title="easter"
                                            ><i class="fas fa-egg"></i
                                        ></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card" id="card5">
                            <img src="/img/card-imagebarah.jpg" alt="" />
                            <div class="card-container">
                                <h3>
                                    «Большая городская барахолка» пройдет в
                                    Минске 24 и 25 апреля
                                </h3>
                                <p>
                                    В этот уикенд с 11:00 до 18:00 в помещении
                                    музея «Б/Уржуазные ценности» на
                                    Кальварийской, 18 будет работать «Большая
                                    городская барахолка». Вход — 1 рубль.
                                    <br /><br />
                                </p>
                                <div class="card-info">
                                    <div class="money">
                                        <a href="#popup5" class="read-more">
                                            Читать
                                        </a>
                                    </div>
                                    <div class="info">
                                        <span title="hot"
                                            ><i class="fab fa-hotjar"></i
                                        ></span>
                                        <span title="baraholka"
                                            ><i class="fas fa-bullhorn"></i
                                        ></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <div id="popup1" class="popup">
                <a href="#card1" class="popup__area"></a>
                <div class="popup__body">
                    <div class="popup__content">
                        <a href="#card1" class="popup__close"
                            ><i class="far fa-window-close"></i
                        ></a>
                        <div class="popup__title">
                            В ночь с 22 на 23 мая пройдет <br />“Ночь кино
                            Тарантино”
                        </div>

                        <div class="popup__text">
                            <img src="/img/kventin-news.jpg" alt="" />
                            <p>
                                В ночь с 22 по 23 мая в кинотеатре Golden Eye
                                пройдет пятая по счету ночь кино. В этот раз
                                темой киномарафона стала фильмография Квентина
                                Тарантино. <br /><br />
                                Начнется показ, как многие могли догадаться, с
                                фильма "Криминальное чтиво". Этот фильм стал
                                визитной карточкой режиссера и именно в нем стал
                                заметен его "фирменный стиль": сцены без
                                хронологического порядка, главы, длинные диалоги
                                и эффектные «разборки». <br /><br />Кроме того,
                                невероятный вечер продолжит, пожалуй, самый
                                эксцентричный фильм "Бесславные ублюдки",
                                который был выпущен в 2009 году. А закончит
                                вечер "Джанго освобожденный". Приятного
                                просмотра!
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div id="popup2" class="popup">
                <a href="#card2" class="popup__area"></a>
                <div class="popup__body">
                    <div class="popup__content">
                        <a href="#card2" class="popup__close"
                            ><i class="far fa-window-close"></i
                        ></a>
                        <div class="popup__title">ECO-FRIENDLY CAFE</div>

                        <div class="popup__text">
                            <img src="/img/popup2-img.jpg" alt="" />
                            <p>
                                В городе Минск открылось новое кафе с названием
                                "BOOM" концепции eco-friendly. Мы поговорили с
                                основателями и узнали, почему сейчас популярна
                                идея сохранения экологии. И вот, что мы узнали.
                                <br /><br />
                                Ингредиенты для блюд кафе заказывает уже в
                                обработанном виде – так, морковь и картофель
                                поступают на кухню уже очищенными, а мясо и рыба
                                в виде филе. Поставщик перерабатывает отходы и
                                делает из них суповые наборы и корм для
                                животных. В минском кафе признаются, что за
                                такие поставки приходится переплачивать, но зато
                                в заведении точно уверены, что отходы пойдут на
                                переработку. Также они продают вторичный жир из
                                фритюра организации, которая возит его в Европу,
                                где из него делают топливо для
                                сельскохозяйственных тракторов. Также в
                                заведении продают специальные клюквенные чипсы,
                                которые приготовлены из жмыха, оставшегося от
                                морса.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div id="popup3" class="popup">
                <a href="#card3" class="popup__area"></a>
                <div class="popup__body">
                    <div class="popup__content">
                        <a href="#card3" class="popup__close"
                            ><i class="far fa-window-close"></i
                        ></a>
                        <div class="popup__title">
                            Куда пойти на выходных 22-23 мая?
                            <p>
                                Редакция сайта Kudapoidem собрала для вас самые
                                интересные мероприятия предстоящего уикенда. В
                                том числе и бесплатные!
                            </p>
                        </div>

                        <div class="popup__text">
                            <img src="/img/popup3-img.jpg" alt="" />

                            <p>
                                <b
                                    >1. Stand-up концерт Нурлана Сабурова в
                                    Минске.</b
                                ><br />
                                Совершенно новый сольный standup концерт от
                                резидента Standup Шоу на ТНТ. Юмор Нурлана
                                Сабурова абсолютно без рамок, его выступления —
                                это сложное сочетание больного воображения
                                молодого казаха и насыщенных будней московского
                                семьянина. <br />
                                <b>2. Экофестиваль "Пастернак" (бесплатно) </b
                                ><br />Проект экологического образа жизни берет
                                свое начало в 2015 году, уделяется особое
                                внимание темам веганства и экологии.
                                Представление научных проектов по заданным темам
                                и обсуждение, после чего ожидается музыкальное
                                шоу в стиле рок.
                                <b>
                                    <br />
                                    3. Самый большой музей Лего в мире!</b
                                ><br />
                                Выставка – музей моделей из кубиков Lego
                                Las-Legas будет открыта 22-23 мая 2021 года в
                                Минске по адресу: проспект Пушкина, 61а/2.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div id="popup4" class="popup">
                <a href="#card4" class="popup__area"></a>
                <div class="popup__body">
                    <div class="popup__content">
                        <a href="#card4" class="popup__close"
                            ><i class="far fa-window-close"></i
                        ></a>
                        <div class="popup__title">
                            Куличи, пряники и панеттоне. 4 лучших места, где
                            можно купить восхитительную пасхальную выпечку
                        </div>

                        <div class="popup__text">
                            <img src="/img/popup4-img.jpg" alt="" />

                            <p>
                                <b>1. Пасхальная ярмарка возле Дворца Спорта</b
                                ><br />
                                В Минске откроется пасхальная ярмарка, которая
                                будет работать 29, 30 апреля, а также 1 мая
                                возле Дворца спорта. На выбор покупателей —
                                всевозможные виды ароматных куличей и не только:
                                пирог с маком, каравай с изюмом, рулет с маковой
                                начинкой и др.
                                <br />
                                <b
                                    >2. Ежегодная выставка-ярмарка "Волшебный
                                    кулич" </b
                                ><br />В районе Комаровского рынка в г. Минск
                                будет представлено более 200 лучших пасхальных
                                работ.
                                <b>
                                    <br />
                                    3. "Кулич-представление" от ресторана
                                    "Родня"</b
                                ><br />
                                В этом году многим известный ресторан "Родня"
                                проведет благотворительную акцию в поддержку
                                детей-сирот дома-интерната №5 г.Минска. Всем
                                желающим будет предложена возможность купить
                                пасхальную выпечку, тем самым пожертвовав всю
                                стоимость продукции детям-сиротам.
                                <br />
                                <b>4. Интернет-магазин "Буличка.by"</b><br />
                                Недавно открывшийся интернет-магазин порадует
                                нас хлебобулочными изделиями по классическим
                                рецептам наших бабушек.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div id="popup5" class="popup">
                <a href="#card5" class="popup__area"></a>
                <div class="popup__body">
                    <div class="popup__content">
                        <a href="#card5" class="popup__close"
                            ><i class="far fa-window-close"></i
                        ></a>
                        <div class="popup__title">
                            «Большая городская барахолка» <br />пройдет в Минске
                            24 и 25 апреля
                        </div>

                        <div class="popup__text">
                            <img src="/img/popup5-img.jpg" alt="" />

                            <p>
                                В уикенд 24-25 апреля с 11:00 до 18:00 в
                                помещении музея «Б/Уржуазные ценности» на
                                Кальварийской, 18 будет работать «Большая
                                городская барахолка», где вы сможете приобрести
                                оригинальные и редкие вещи. Вход — 1 рубль. Что
                                будет продаваться на Городской Барахолке?
                                <br /><br />- винтажные и антикварные вещи
                                <br />- мебель, предметы интерьера, картины
                                <br />- много одежды и обуви <br />- украшения,
                                аксессуары и парфюмерия <br />- посуда и
                                хозяйственные мелочи - книги и грампластинки
                                <br />- детские игрушки, одежда и обувь.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
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
