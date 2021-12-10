<html>
<head> <title> Сведения о прользователях сайта Shamuratov D.D </title> </head>
<body>
<?php
mysql_connect("localhost", "root") or die ("Невозможно
подключиться к серверу"); // установление соединения с сервером
mysql_query('SET NAMES UTF-8'); // тип кодировки
// подключение к базе данных:
mysql_select_db("langs") or die("Нет такой таблицы!");
?>
<h2>Содержащиеся в БД языки программирования:</h2>
<table border="1">
<tr> 
<th> Название </th> <th> Тип </th> <th> Год создания </th> <th> Тип выполнения </th> <th> Автор </th>
<th> Редактировать </th> <th> Уничтожить </th> </tr>
<?php
$result=mysql_query("SELECT l_id, l_name, l_type, l_year, l_extype, l_author
FROM languages"); // запрос на выборку сведений о пользователях
while ($row=mysql_fetch_array($result)){// для каждой строки из запроса
echo "<tr>";
echo "<td>" . $row['l_name'] . "</td>";
echo "<td>" . $row['l_type'] . "</td>";
echo "<td>" . $row['l_year'] . "</td>";
echo "<td>" . $row['l_extype'] . "</td>";
echo "<td>" . $row['l_author'] . "</td>";
echo "<td><a href='edit.php?id=" . $row['l_id']
. "'>Редактировать</a></td>"; // запуск скрипта для редактирования
echo "<td><a href='delete.php?id=" . $row['l_id']
. "'>Удалить</a></td>"; // запуск скрипта для удаления записи
echo "</tr>";
}
print "</table>";
$num_rows = mysql_num_rows($result); // число записей в таблице БД
print("<P>Всего языков: $num_rows </p>");
?>
<p> <a href="new.php"> Добавить язык </a>
<p> <a href="/denwer/PHP_ShamuratovLab2/WWW/index.php"> На главную </a>
</body> </html>