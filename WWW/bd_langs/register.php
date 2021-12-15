<?php
    session_start();
    if ($_SESSION['user']) {
        header('Location: index.php');
    }
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Авторизация и регистрация</title>
</head>
<body>

    <!-- Форма регистрации -->

    <form method="post" action="registration.php">
        <label>Логин</label>
        <input type="text" name="login" placeholder="Введите свой логин">
        <label>Пароль</label>
        <input type="password" name="password" placeholder="Введите пароль">
        <label>Тип пользователя</label>
        <select name="type" size="2" multiple>
  <option атрибуты>1</option>
  <option атрибуты>2</option> 
</select>
<button type="submit" class="register-btn">Зарегистрироваться</button>
    </form>

</body>
</html>