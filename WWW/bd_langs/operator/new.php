<?php
session_start();

if (!$_SESSION['user']) {
        unset($_SESSION['user']);//закрытие сессии по логину 
session_destroy();//удаление сессии 
    header('Location: ../auth.php');
}
?>
﻿<html>
<head> <title> Добавление нового языка программирования Шамуратов Д.Д</title> </head>
<body>
<H2>Добавление языка:</H2>
<form action="save_new.php" metod="get">
Название: <input name="name" size="50" type="text">
<br>Тип: <input name="typel" size="50" type="text">
<br>Год создания: <input name="year" size="40" type="text">
<br>Тип выполнения: <input name="extype" size="50" type="text">
<br>Автор: <input name="author" size="50" type="text">
<p><input name="add" type="submit" value="Добавить">
<input name="b2" type="reset" value="Очистить"></p>
<input type='hidden' name='type' value=язык>
</form>
<p>
<a href="index.php"> Вернуться к списку языков </a>
</body>
</html>