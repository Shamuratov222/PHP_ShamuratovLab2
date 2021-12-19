<?php
session_start();
if (!$_SESSION['user']) {
        unset($_SESSION['user']);//закрытие сессии по логину 
session_destroy();//удаление сессии 
    header('Location: ../auth.php');
}
?>
﻿<html>
<head
<title> Редактирование данных о приложениях </title>
</head>
<body>
<?php
$link = mysqli_connect("localhost", "f0606083_username","password") or die ("Невозможно
подключиться к серверу"); // установление соединения с сервером
mysqli_query($link,'SET NAMES UTF8');
mysqli_select_db($link,"f0606083_langs") or die("Нет такой таблицы!");
$rows=mysqli_query($link,"SELECT l_id, dev_id, app_date, app_ver, app_name
FROM apps WHERE
app_id=".$_GET['app_id']);
while ($st = mysqli_fetch_assoc($rows)) {
$id=$_GET['app_id'];
$lid=$_st['l_id'];
$did=$_st['dev_id'];
$date=$st['app_date'];
$ver = $st['app_ver'];
$name = $st['app_name'];
}
print "<form action='save_edit.php' metod='get'>";
$sql = "SELECT l_id FROM languages";
$result_select = mysqli_query($link,$sql);
echo "<br>ID языка программирования:<select name = 'l_id'>";
while($object = mysqli_fetch_array($result_select,MYSQLI_ASSOC)){
echo "<option value = '".$object['l_id']."' >"."</option>";
}
echo "</select>";
$sql = "SELECT dev_id FROM developer";
$result_select = mysqli_query($link,$sql);
echo "<br>ID разработчика:<select name = 'dev_id'>";
while($object = mysqli_fetch_array($result_select,MYSQLI_ASSOC)){
echo "<option value = '".$object['dev_id']."' >"."</option>";
}
echo "</select>";
print "<br>Дата выхода: <input type='date' name='date' size='50' type='text'
value='".$date."'>";
print "<br>Текущая версия: <input name='ver' size='50' type='text'
value='".$ver."'>";
print "<br>Название: <input name='name' size='50' type='text'
value='".$name."'>";
print "<input type='hidden' name='id' value='".$id."'> <br>";
print "<input type='submit' name='' value='Сохранить'><input type='hidden' name='typeof' value=app>";
print "</form>";
print "<p><a href=\"index.php\"> Вернуться к списку
приложений </a>";
?>
</body>
</html>