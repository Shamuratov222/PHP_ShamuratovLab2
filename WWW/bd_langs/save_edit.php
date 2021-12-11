<html> <body>
<?php
$link = mysqli_connect("localhost", "f0606083_username","password") or die ("Невозможно
подключиться к серверу"); // установление соединения с сервером
mysqli_query($link,'SET NAMES UTF-8');
mysqli_select_db($link,"f0606083_langs") or die("Нет такой таблицы!");

switch($_GET['typeof']){
   case 'lang':  {
$zapros="UPDATE languages SET l_name='".$_GET['name'].
"', l_type='".$_GET['type']."', l_year='"
.$_GET['year']."', l_extype='".$_GET['extype'].
"', l_author='".$_GET['author']."' WHERE l_id="
.$_GET['id']; break;}
    case 'dev': {
         $zapros="UPDATE developer SET dev_name='".$_GET['dev_name'].
"', dev_city='".$_GET['dev_city']."' WHERE dev_id=".$_GET['id'];
        break;
    }
    case 'app': {
         $zapros="UPDATE apps SET l_id='".$_GET['l_id'].
"', dev_id='".$_GET['dev_id']."', app_date='".$_GET['date']."', app_ver='".$_GET['ver']."', app_name='".$_GET['name']."' 
WHERE app_id=".$_GET['id'];
        break;
    }
}
mysqli_query($link,$zapros);
if (mysqli_affected_rows($link)>0) {
echo 'Все сохранено. <a href="index.php"> Вернуться к списку
языков </a>'; }
else { echo 'Ошибка сохранения.<a href="index.php">
Вернуться к списку языков</a> ';
echo ('ID'.$_GET['id'].mysqli_affected_rows($link)); }
?>
</body> </html>