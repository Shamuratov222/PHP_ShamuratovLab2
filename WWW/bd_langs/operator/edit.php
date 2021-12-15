<html>
<head
<title> Редактирование данных о языке </title>
</head>
<body>
<?php
$link = mysqli_connect("localhost", "f0606083_username","password") or die ("Невозможно
подключиться к серверу"); // установление соединения с сервером
mysqli_query($link,'SET NAMES UTF-8');
mysqli_select_db($link,"f0606083_langs") or die("Нет такой таблицы!");
$rows=mysqli_query($link,"SELECT l_name, l_type,
l_year, l_extype, l_author FROM languages WHERE
l_id=".$_GET['lang_id']);
while ($st = mysqli_fetch_assoc($rows)) {
    echo ($st['l_name']);
$id=$_GET['lang_id'];
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
print "<input type='submit' name='' value='Сохранить'><input type='hidden' name='typeof' value=lang>";
print "<input type='hidden' name='id' value='".$id."'> <br>";
print "</form>";
print "<p><a href=\"index.php\"> Вернуться к списку
языков </a>";
?>
</body>
</html>