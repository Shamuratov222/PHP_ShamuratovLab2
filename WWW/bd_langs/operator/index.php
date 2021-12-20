<?php
session_start();
if (!$_SESSION['user']) {
        unset($_SESSION['user']);//закрытие сессии по логину 
session_destroy();//удаление сессии 
    header('Location: ../auth.php');
}
?>
﻿<html>
<head> <title> Сведения о прользователях сайта Shamuratov D.D </title> </head>
<body>
<?php
$link = mysqli_connect("localhost", "f0606083_username","password") or die ("Невозможно
подключиться к серверу"); // установление соединения с сервером
mysqli_query($link,'SET NAMES UTF-8'); // тип кодировки
// подключение к базе данных:
mysqli_select_db($link,"f0606083_langs") or die("Нет такой таблицы!");
?>
<h2>Содержащиеся в БД языки программирования:</h2>
<table border="1">
<tr> 
<th> ID </th> <th> Название </th> <th> Тип </th> <th> Год создания </th> <th> Тип выполнения </th> <th> Автор </th>
<th> Редактировать </th></tr>
<?php
$result=mysqli_query($link,"SELECT l_id, l_name, l_type, l_year, l_extype, l_author
FROM languages"); // запрос на выборку сведений о пользователях
while ($row=mysqli_fetch_array($result)){// для каждой строки из запроса
echo "<tr>";
echo "<td >" . $row['l_id'] . "</td>";
echo "<td>" . $row['l_name'] . "</td>";
echo "<td>" . $row['l_type'] . "</td>";
echo "<td>" . $row['l_year'] . "</td>";
echo "<td>" . $row['l_extype'] . "</td>";
echo "<td>" . $row['l_author'] . "</td>";
echo "<td><a href='edit.php?lang_id=" . $row['l_id']
. "'>Редактировать</a></td>"; // запуск скрипта для редактирования
echo "</tr>";
}
print "</table>";
$num_rows = mysqli_num_rows($result); // число записей в таблице БД
print("<P>Всего языков: $num_rows </p>");
?>
<p> <a href="new.php"> Добавить язык </a>

<h2>Список разработчиков:</h2>
<table border="1">
<tr> 
<th> ID </th> <th> Название </th> <th> Город </th>
<th> Редактировать </th> </tr>
<?php
$result=mysqli_query($link,"SELECT *
FROM developer"); // запрос на выборку сведений о пользователях
while ($row=mysqli_fetch_array($result)){// для каждой строки из запроса
echo "<tr>";
echo "<td>" . $row['dev_id'] . "</td>";
echo "<td>" . $row['dev_name'] . "</td>";
echo "<td>" . $row['dev_city'] . "</td>";
echo "<td><a href='edit_dev.php?dev_id=" . $row['dev_id']
. "'>Редактировать</a></td>"; // запуск скрипта для редактирования
echo "</tr>";
}
print "</table>";
$num_rows = mysqli_num_rows($result); // число записей в таблице БД
print("<P>Всего разработчиков: $num_rows </p>");
?>
<p> <a href="new_dev.php"> Добавить разработчиков </a>

<h2>Список приложений:</h2>
<table border="1">
<tr> 
<th> ID </th> <th> Язык программирования ID</th> <th> Разработчик ID</th> <th> Дата выхода </th> <th> Текущая версия </th> <th> Название приложения </th>
<th> Редактировать </th> </tr>
<?php
$result=mysqli_query($link,"SELECT *
FROM apps"); // запрос на выборку сведений о пользователях
while ($row=mysqli_fetch_array($result)){// для каждой строки из запроса
echo "<tr>";
echo "<td>" . $row['app_id'] . "</td>";
echo "<td>" . $row['l_id'] . "</td>";
echo "<td>" . $row['dev_id'] . "</td>";
echo "<td>" . $row['app_date'] . "</td>";
echo "<td>" . $row['app_ver'] . "</td>";
echo "<td>" . $row['app_name'] . "</td>";
echo "<td><a href='edit_app.php?app_id=" . $row['app_id']
. "'>Редактировать</a></td>"; // запуск скрипта для редактирования
echo "</tr>";
}
print "</table>";
$num_rows = mysqli_num_rows($result); // число записей в таблице БД
print("<P>Всего приложений: $num_rows </p>");

?>
<p> <a href="new_app.php"> Добавить приложение </a><br>
<h2>Список пользователей:</h2>
<table border="1">
<tr> 
<th> ID </th> <th> Никнейм</th> <th> Пароль</th>  <th> Роль </th>
<th> Редактировать </th>  </tr>
<?php
$result=mysqli_query($link,"SELECT *
FROM users WHERE id=".$_SESSION['logged in user id']); // запрос на выборку сведений о пользователях
while ($row=mysqli_fetch_array($result)){// для каждой строки из запроса
if ($row['type'] == '1'){
    $role = "Оператор";
}else {
    $role = "Админ";
    
};
echo "<tr>";
echo "<td>" . $row['id'] . "</td>";
echo "<td>" . $row['username'] . "</td>";
echo "<td>" . $row['password'] . "</td>";
echo "<td>" . $role . "</td>";
echo "<td><a href='edituser.php?id=" . $row['id']
. "'>Редактировать</a></td>"; // запуск скрипта для редактирования
echo "</tr>";
}
print "</table>";
$num_rows = mysqli_num_rows($result); // число записей в таблице БД
?>
<a href="gen_pdf.php"> Скачать PDF </a><br><a href="gen_xls.php"> Скачать XLS </a><br>

<p> <a href="/index.php"> На главную </a>
<p> <a href="close.php"> Выйти из аккаунта </a>
</body> </html>