<?php 
require "db.php";




$data = $_POST;
if(isset($data['do_order'])){
    //здесь регистрируем
    $errors = array();

   
    if(trim($data['place']) == '')
    {
        $errors[] = 'Выберите заведение';
    }

    if(trim($data['name']) == '')
    {
        $errors[] = 'Введите Имя';
    }

    if(trim($data['tel']) == '')
    {
        $errors[] = 'Введите контактный номер в формате 29 563-43-29';
    }

    if(trim($data['person']) == '')
    {
        $errors[] = 'Введите Фамилию';
    }
    
    if(trim($data['date']) == '')
    {
        $errors[] = 'Укажите дату и время бронирования';
    }
    

    if(mb_strlen($data['name']) < 2 || mb_strlen($data['name']) > 25)
    {
        $errors[] = 'Введите имя длиной от 2 до 25 символов';
    }
   
    if(mb_strlen($data['tel']) < 7 || mb_strlen($data['tel']) > 20)
    {
        $errors[] = 'Введите номер корректно номер телефона';
    }

    if(empty($errors)){
// все хорошо, регистрируем
$order = R:: dispense('orders');
$order->place = $data['place'];
$order->name = $data['name'];
$order->tel = $data['tel'];
$order->person = $data['person'];
$order->date = $data['date'];
$order->comment = $data['comment'];
R::store($order);

echo '<div style="color:green;">Заказ создан успешно. <br/>
Можете теперь <a href="/index.php">Вернуться</a> на главную</div><hr><br/>';
    } else {
        echo '<div style="color:red;">'.array_shift($errors).'</div><hr>';
    }
}

?>

<div id="popup-order" class="popup">
                <a href="#slide1" class="popup__area"></a>
                <div class="popup__body">
                    <div class="popup__content__register">
                        <div class="popup__text__register">
                            <form
                                class="form-register"
                                action="order.php"
                                method="POST"
                            >
                            <a
                                    href="places.php"
                                    class="popup__close__register"
                                    ><i class="far fa-times-circle"></i
                                >X</a>
                                <h2 class="reg-h2">Заказ</h2>
                                <div class="form-field input-right">
                                    <select
                                        name="place"
                                        class="reg-input reg-pass"
                                        value="<?php echo @$data['place']; ?>"
                                        required
                                    >
                                        <option selected disabled hidden>
                                            Выберите заведение
                                        </option>
                                        <option value="Ресторан «MELT & HOPES»">
                                            Ресторан “MELT & HOPES”
                                        </option>
                                        <option value="Ресторан «ASIA’S WIND»">
                                            Ресторан “ASIA’S WIND”
                                        </option>
                                        <option value="Кофейня «EYFEL BAKERY»">
                                            Кофейня “EYFEL BAKERY”
                                        </option>
                                        <option value="Кофейня «Время кофе»">
                                            Кофейня “Время кофе”
                                        </option>
                                        <option value="Бар «Relax and drink»">
                                            Бар “Relax and drink”
                                        </option>
                                        <option value="Ресторан «Falcone»">
                                            Ресторан «Falcone»
                                        </option>
                                        <option value="Ресторан «AMERICAN BBQ»">
                                            Ресторан “AMERICAN BBQ”
                                        </option>
                                        <option value="Кофейня «ПАРАГРАФ»">
                                            Кофейня “ПАРАГРАФ”
                                        </option>
                                        <option value="Ресторан «SANCHELLO ROSSO»">
                                            Ресторан “SANCHELLO ROSSO”
                                        </option>
                                    </select>
                                </div>
                                <div class="form-field multi-input">
                                    <input
                                        class="reg-input"
                                        type="text"
                                        name="name"
                                        id="name"
                                        placeholder="Ваше имя"
                                        value="<?php echo @$data['name']; ?>"
                                    />
                                </div>
                                <div class="form-field input-right">
                                    <input
                                        class="reg-input"
                                        type="text"
                                        name="tel"
                                        id="tel"
                                        placeholder="Контактный номер в формате 29 563-43-29"
                                        value="<?php echo @$data['tel']; ?>"
                                    />
                                </div>
                                <div class="form-field input-right">
                                    <select
                                        name="person"
                                        id="person"
                                        class="reg-input reg-pass"
                                        value="<?php echo @$data['person']; ?>"
                                        required
                                    >
                                        <option selected disabled hidden>
                                            Выберите количество человек
                                        </option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                        <option>Более 5 человек</option>
                                    </select>
                                </div>
                                <div class="form-field input-right">
                                    <input
                                        class="reg-input"
                                        type="text"
                                        name="date"
                                        id="date"
                                        placeholder="На какую дату и время бронируем?"
                                        value="<?php echo @$data['date']; ?>"
                                    />
                                </div>
                                <div class="form-field input-right">
                                    <textarea
                                        class="reg-input"
                                        name="comment"
                                        cols="40"
                                        rows="5"
                                        id="comment"
                                        placeholder="Комментарии"
                                        value="<?php echo @$data['comment']; ?>"
                                    ></textarea>
                                </div>

                                <div class="form-field submit-field">
                                    <input
                                        class="reg-input"
                                        type="submit"
                                        value="Забронировать"
                                        name="do_order"
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
