<?php
mysql_connect("localhost","root","") or die ("Невозможно
подключиться к серверу");
mysql_select_db("langs") or die("Нет такой таблицы!");
$zapros="DELETE FROM languages WHERE l_id=" . $_GET['id'];
mysql_query($zapros);
header("Location:index.php");

exit;
?>