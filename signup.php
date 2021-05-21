<?php 
require "db.php";




$data = $_POST;
if(isset($data['do_signup'])){
    //здесь регистрируем
    $errors = array();

   

    if(trim($data['login']) == '')
    {
        $errors[] = 'Введите логин';
    }

    if(trim($data['name1']) == '')
    {
        $errors[] = 'Введите имя';
    }

    if(trim($data['name2']) == '')
    {
        $errors[] = 'Введите Фамилию';
    }
    
    if(trim($data['age']) == '')
    {
        $errors[] = 'Укажите Ваш возраст';
    }
    
    if(trim($data['password']) == '')
    {
        $errors[] = 'Введите пароль';
    }
    
    if($data['password_2'] != $data['password'])
    {
        $errors[] = 'Повторный пароль введен неверно';
    }
    
    if($_FILES['photo'] ['size'] == 0)
    {
        $errors[] = 'Загрузите фото';
    }

    if(R::count('users', "login = ?", array($data['login'])) > 0)
    {
        $errors[] = 'Пользователь с таким логином уже существует';
    }
    
    if(mb_strlen($data['login']) < 3 || mb_strlen($data['login']) > 25)
    {
        $errors[] = 'Длина логина должна быть от 3 до 25 символов';
    }
    if(mb_strlen($data['name1']) > 25)
    {
        $errors[] = 'Введите сокращенный вариант вашего имени (до 25 символов)';
    }
    if(mb_strlen($data['name2']) > 25)
    {
        $errors[] = 'Слишком длинная запись фамилии. Проверьте правильность ее заполнения';
    }

    if(empty($errors)){
// все хорошо, регистрируем
$user = R:: dispense('users');
$user->login = $data['login'];
$user->name1 = $data['name1'];
$user->name2 = $data['name2'];
$user->sex = $data['sex'];
$user->age = $data['age'];
$user->photo= ($_FILES['photo']['name']);

if(move_uploaded_file($_FILES['photo'] ['tmp_name'], '/Applications/XAMPP/xamppfiles/htdocs/temp/'. $_FILES['photo'] ['name'])){
    echo 'Фото успешно загружено. ';
} else{
    echo 'Ошибка загрузки фото';
}
echo 'Имя файла: ' . $_FILES['photo'] ['name'];
echo ', размер файла в байтах - ' . $_FILES['photo'] ['size'];
echo ', тип файла - ' . $_FILES['photo'] ['type'] . '<br/>';
//echo 'Временный файл, в котором сохранен загруженный файл - ' . $_FILES['photo'] ['tmp_name'] . '<br/>';


$user->password = password_hash($data['password'], PASSWORD_DEFAULT) ;
R::store($user);

echo '<div style="color:green;">Вы успешно зарегистрировались! <br/>
Можете теперь <a href="/login.php">Войти</a> на сайт</div><hr><br/>';
    } else {
        echo '<div style="color:red;">'.array_shift($errors).'</div><hr>';
    }
}

?>


<div id="popup-register" class="popup">
                <a href="#" class="popup__area"></a>
                <div class="popup__body">
                    <div class="popup__content__register">
                        <div class="popup__text__register">
                            <form
                                class="form-register"
                                action="signup.php"
                                method="POST"
                                enctype="multipart/form-data"
                            >
                                <a
                                    href="/index.php"
                                    class="popup__close__register"
                                    ><i class="far fa-times-circle"></i
                                >X</a>
                                <h2 class="reg-h2">Регистрация</h2>
                                <div class="form-field multi-input">
                                    <label for="login">Ваш логин: </label>
                                    <input
                                        class="reg-input"
                                        type="text"
                                        name="login"
                                        id="login"
                                        placeholder="Логин"
                                        value="<?php echo @$data['login']; ?>"
                                    />
                                </div>

                                <div class="form-field  no-grow">
                                    <label for="name">Ваше имя </label>
                                    <input
                                        class="reg-input"
                                        type="text"
                                        name="name1"
                                        id="name1"
                                        placeholder="Имя"
                                        value="<?php echo @$data['name1']; ?>"
                                    />
                                    <input
                                        class="reg-input no-grow"
                                        type="text"
                                        name="name2"
                                        id="name2"
                                        placeholder="Фамилия"
                                        value="<?php echo @$data['name2']; ?>"
                                    />
                                </div>

                                <div class="form-field input-right">
                                    <label for="sex">Ваш пол</label>
                                    <select
                                        name="sex"
                                        id="sex"
                                        class="reg-input reg-pass"
                                        value="<?php echo @$data['sex']; ?>"
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
                                        value="<?php echo @$data['age']; ?>"
                                    >
                                        <option
                                            selected
                                            disabled
                                            hidden
                                        ></option>
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
                                    <label for="password">Пароль</label>
                                    <input
                                        class="reg-input reg-pass"
                                        type="password"
                                        name="password"
                                        id="password"
                                        placeholder="Введите пароль"
                                        value="<?php echo @$data['password']; ?>"
                                    />
                                </div>

                                <div class="form-field input-right">
                                    <label for="password_2">Введите пароль еще раз</label>
                                    <input
                                        class="reg-input reg-pass"
                                        type="password"
                                        name="password_2"
                                        id="password"
                                        placeholder="Введите пароль"
                                        value="<?php echo @$data['password_2']; ?>"
                                    />
                                </div>

                                <div class="form-field input-right">
                                    <label for="photo">Фото профиля</label>
                                    <input
                                        class="reg-input reg-pass"
                                        type="file"
                                        name="photo"
                                        id="photo"
                                        accept="image/*"
                                        value="<?php echo @$data['photo']; ?>"
                                    />
                                </div>


                                <div class="form-field submit-field">
                                    <input
                                        class="reg-input"
                                        type="submit"
                                        value="Зарегистрироваться"
                                        name="do_signup"
                                    />
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <script>
            var uploadField = document.getElementById("photo");
            uploadField.onchange = function() {
                if((this.files[0].size > 3097152) || (this.files[0].size < 3) ){
                alert("File is too big!");
                this.value = "";
    };
};
                </script>
            <style>
<?php echo file_get_contents("style-forms.css"); ?>
</style>
