<?php
session_start();
if (!$_SESSION['admin']) {
    unset($_SESSION['user']);//закрытие сессии по логину 
session_destroy();//удаление сессии 
    header('Location: auth.php');
}
?>
﻿<?php
// Подключение к базе данных:
$link = mysqli_connect("localhost", "f0606083_username","password") or die ("Невозможно
подключиться к серверу"); // установление соединения с сервером
mysqli_query($link,'SET NAMES UTF-8'); // Тип кодировки
mysqli_select_db($link,"f0606083_langs") or die("Нет такой таблицы!");
// Строка запроса на добавление записи в таблицу:

 switch ($_GET['type']){
  case 'язык':{
$sql_add = "INSERT INTO languages SET l_name='" . $_GET['name']
."', l_type='".$_GET['typel']."', l_year='"
.$_GET['year']."', l_extype='".$_GET['extype'].
"', l_author='".$_GET['author']. "'"; break;
}
  case 'разраб':{
       $sql_add = "INSERT INTO developer SET dev_name='" . $_GET['name']
."', dev_city='".$_GET['city']."'"; break;
  }
  case 'прил':{
      $sql_add = "INSERT INTO apps SET l_id='" . $_GET['l_id']
."', dev_id='".$_GET['dev_id']."', app_date='"
.$_GET['date']."', app_ver='".$_GET['ver'].
"', app_name='".$_GET['name']. "'";
      break;
  }
 }
mysqli_query($link,$sql_add); // Выполнение запроса
if (mysqli_affected_rows($link,)>0) // если нет ошибок при выполнении запроса
{ print "<p>Спасибо, вы зарегистрированы в базе данных.";
print "<p><a href=\"index.php\"> Вернуться к списку
пользователей </a>"; }
else { print "Ошибка сохранения. <a href=\"index.php\">
Вернуться к списку </a>"; }
?>