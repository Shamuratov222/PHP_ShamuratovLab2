<html>
<head
<title> Редактирование данных о пользователе </title>
</head>
<body>
<?php
mysql_connect("localhost","root","") or die ("Невозможно
подключиться к серверу");
mysql_query('SET NAMES UTF-8');
mysql_select_db("langs") or die("Нет такой таблицы!");
$rows=mysql_query("SELECT l_name, l_type,
l_year, l_extype, l_author FROM languages WHERE
l_id=".$_GET['id']);
while ($st = mysql_fetch_assoc($rows)) {
$id=$_GET['id'];
$name=$st['l_name'];
$type = $st['l_type'];
$year = $st['l_year'];
$extype = $st['l_extype'];
$author = $st['l_author'];
}
print "<form action='save_edit.php' metod='get'>";
print "Название: <input name='name' size='50' type='text'
value='".$name."'>";
print "<br>Тип: <input name='type' size='50' type='text'
value='".$type."'>";
print "<br>Год: <input name='year' size='20' type='text'
value='".$year."'>";
print "<br>Тип исполнения: <input name='extype' size='30' type='text'
value='".$extype."'>";
print "<br>Автор: <input name='author' size='30' type='text' value='".$author."'>";

print "<input type='submit' name='' value='Сохранить'>";
print "<input type='hidden' name='id' value='".$id."'> <br>";
print "</form>";
print "<p><a href=\"index.php\"> Вернуться к списку
языков </a>";
?>
</body>
</html>