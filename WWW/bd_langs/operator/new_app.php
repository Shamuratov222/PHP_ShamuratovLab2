<html>
<head> <title> Добавление приложения Шамуратов Д.Д</title> </head>
<body>
<H2>Добавление приложения:</H2>
<form action="save_new.php" metod="get">
<?php
$link = mysqli_connect("localhost", "f0606083_username","password") or die ("Невозможно
подключиться к серверу"); // установление соединения с сервером
mysqli_query($link,'SET NAMES UTF-8');
mysqli_select_db($link,"f0606083_langs") or die("Нет такой таблицы!");
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
?>
<br>Дата выхода: <input type='date' name='date'>
<br>Текущая версия: <input name="ver" size="50" type="text">
<br>Название: <input name="name" size="50" type="text">
<p><input name="add" type="submit" value="Добавить">
<input name="b2" type="reset" value="Очистить"></p>
<input type='hidden' name='type' value=прил>
</form>
<p>
<a href="index.php"> Вернуться к списку языков </a>
</body>
</html>