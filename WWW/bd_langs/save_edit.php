<html> <body>
<?php
mysql_connect("localhost","root","") or die ("Невозможно
подключиться к серверу");
mysql_query('SET NAMES UTF-8');
mysql_select_db("langs") or die("Нет такой таблицы!");
$zapros="UPDATE languages SET l_name='".$_GET['name'].
"', l_type='".$_GET['type']."', l_year='"
.$_GET['year']."', l_extype='".$_GET['extype'].
"', l_author='".$_GET['author']."' WHERE l_id="
.$_GET['id'];
mysql_query($zapros);
if (mysql_affected_rows()>0) {
echo 'Все сохранено. <a href="index.php"> Вернуться к списку
языков </a>'; }
else { echo 'Ошибка сохранения.<a href="index.php">
Вернуться к списку языков</a> ';
echo ('ID'.$_GET['id']); }
?>
</body> </html>