<html>
<head> <title> Добавление нового ghbkj;tybz </title> </head>
<body>
<?php
session_start();
if (!$_SESSION['admin']) {
    unset($_SESSION['user']);//закрытие сессии по логину 
session_destroy();//удаление сессии 
    header('Location: auth.php');
}
$link = mysqli_connect("localhost", "f0606083_username","password") or die ("Невозможно
подключиться к серверу"); // установление соединения с сервером
 mysqli_query($link,'SET NAMES UTF8'); // тип кодировки
 // подключение к базе данных:
 mysqli_select_db($link,"f0606083_langs") or die("Нет такой таблицы!");
?>
<H2>Добавление на сайт:</H2>
<form action="save_new.php" metod="get">	
<br>Язык программирования:
<?php 
$sql = "SELECT l_name FROM languages";
$result_select = mysqli_query($link,$sql);
echo "<select name = 'l_id'>";
while($object = mysqli_fetch_array($result_select,MYSQLI_ASSOC)){
echo "<option value = '".$object['l_name']."' >". $object['l_name'] ."</option>";
}
echo "</select>";
?>
<br>Название разработчика:
<?php 
$sql = "SELECT dev_id,dev_name FROM developer";
$result_select = mysqli_query($link,$sql);
echo "<select name = 'dev_id'>";
while($object = mysqli_fetch_array($result_select,MYSQLI_ASSOC)){
echo "<option value = '".$object['dev_name']."' >". $object['dev_name'] ."</option>";
}
echo "</select>";
?>
<br>Дата выхода: <input type='date' name='date'>
<br>Текущая версия: <input name="ver" size="50" type="text">
<br>Название: <input name="name" size="50" type="text">
<p><input name="add" type="submit" value="Добавить">
<input name="b2" type="reset" value="Очистить"></p>
<input type='hidden' name='type' value=прил>
</form>
<p>
<a href="index.php"> Вернуться к списку языков </a>
</body>
</html>