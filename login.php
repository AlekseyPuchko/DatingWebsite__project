<?php 

require "db.php";

$data = $_POST;
if(isset($data['do_login'])){
    $errors = array();
    $user = R::findOne('users', 'login = ?', array($data['login']));
    
    if($user){
//логин существует
if(password_verify($data['password'], $user->password)){

//все ок, логиним пользователя
$_SESSION['logged_user'] = $user;
echo '<div style="color:green;">Поздравляем! Вы авторизовались. <br/> 
Перейти на <a href="/">ГЛАВНУЮ</a> страницу</div><hr>';

} else {
$errors[] = 'Неверно введен пароль';
}
    } else {
        $errors[] = 'Пользователь с таким логином не найден';
    }
    
    if (!empty($errors)){
        echo '<div style="color:red;">'.array_shift($errors).'</div><hr>';
    }
}

?>


 <div class="popup">
                <a href="#" class="popup__area"></a>
                <div class="popup__body">
                    <div class="popup__content__register">
                        <div class="popup__text__register">
                            <form
                                class="form-register"
                                action="login.php"
                                method="POST"
                            >
                                <a
                                    href="/index.php"
                                    class="popup__close__register"
                                    ><i class="far fa-times-circle"></i
                                >X</a>
                                <h2 class="reg-h2">Вход</h2>
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

                                <div class="form-field submit-field">
                                    <input
                                        class="reg-input"
                                        type="submit"
                                        value="Войти"
                                        name="do_login"
                                    />
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <style>
<?php echo file_get_contents("style-forms.css"); ?>
</style>