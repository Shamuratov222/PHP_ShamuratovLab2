<?php
session_start();
if (!$_SESSION['admin']) {
    unset($_SESSION['user']);//закрытие сессии по логину 
session_destroy();//удаление сессии 
    header('Location: auth.php');
}
?>
﻿<html>
<head
<title> Редактирование данных о разработчиков </title>
</head>
<body>
<?php
$link = mysqli_connect("localhost", "f0606083_username","password") or die ("Невозможно
подключиться к серверу"); // установление соединения с сервером
mysqli_query($link,'SET NAMES UTF-8');
mysqli_select_db($link,"f0606083_langs") or die("Нет такой таблицы!");
$rows=mysqli_query($link,"SELECT dev_name, dev_city
FROM developer WHERE
dev_id=".$_GET['dev_id']);
while ($st = mysqli_fetch_assoc($rows)) {
$id=$_GET['dev_id'];
$name=$st['dev_name'];
$city = $st['dev_city'];
}
print "<form action='save_edit.php' metod='get'>";
print "Название: <input name='dev_name' size='50' type='text'
value='".$name."'>";
print "<br>Город: <input name='dev_city' size='50' type='text'
value='".$city."'>";
print "<input type='hidden' name='id' value='".$id."'> <br>";
print "<input type='submit' name='' value='Сохранить'><input type='hidden' name='typeof' value=dev>";
print "</form>";
print "<p><a href=\"index.php\"> Вернуться к списку
разработчиков </a>";
?>
</body>
</html>