<?php
// Подключение к базе данных:
mysql_connect("localhost","root","") or die ("Невозможно
подключиться к серверу");
mysql_query('SET NAMES UTF-8'); // Тип кодировки
mysql_select_db("langs") or die("Нет такой таблицы!");
// Строка запроса на добавление записи в таблицу:
$sql_add = "INSERT INTO languages SET l_name='" . $_GET['name']
."', l_type='".$_GET['type']."', l_year='"
.$_GET['year']."', l_extype='".$_GET['extype'].
"', l_author='".$_GET['author']. "'";
mysql_query($sql_add); // Выполнение запроса
if (mysql_affected_rows()>0) // если нет ошибок при выполнении запроса
{ print "<p>Спасибо, вы зарегистрированы в базе данных.";
print "<p><a href=\"index.php\"> Вернуться к списку
пользователей </a>"; }
else { print "Ошибка сохранения. <a href=\"index.php\">
Вернуться к списку книг </a>"; }
?>