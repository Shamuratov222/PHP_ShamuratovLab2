<?php
session_start();
if (!$_SESSION['user']) {
    unset($_SESSION['admin']);//закрытие сессии по логину 
session_destroy();//удаление сессии 
    header('Location: ../auth.php');
}
?>
﻿<html>
<head
<title> Редактирование данных о пользователях </title>
</head>
<body>
<?php
$link = mysqli_connect("localhost", "f0606083_username","password") or die ("Невозможно
подключиться к серверу"); // установление соединения с сервером
mysqli_query($link,'SET NAMES UTF8');
mysqli_select_db($link,"f0606083_langs") or die("Нет такой таблицы!");
$rows=mysqli_query($link,"SELECT * FROM users WHERE
id=".$_GET['id']);

while ($st = mysqli_fetch_assoc($rows)) {
$id=$_GET['id'];
$username=$_st['username'];
$password=$_st['password'];
$role=$st['type'];
}

print "<form action='save_edit.php' metod='get'>";
print "<br>Логин: <input type='text' name='username' size='50' type='text'
value='".$username."'>";
print "<br>Пароль: <input name='password' size='50' type='password'
value='".$password."'>";
print "<input type='hidden' name='id' value='".$id."'> <br>";
print "<input type='submit' name='' value='Сохранить'><input type='hidden' name='typeof' value=users>";
print "</form>";
print "<p><a href=\"index.php\"> Вернуться к списку
пользователей </a>";
?>
</body>
</html>