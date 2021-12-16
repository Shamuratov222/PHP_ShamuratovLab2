<HEAD> <TITLE>Шамуратов Д.Д</TITLE> </HEAD>
<?
$a=$_POST["a"];
$b=$_POST["b"];
if ($_POST["a"]==$_POST["b"]) {
 echo("Числа равны");
 }
 elseif($_POST["a"]>$_POST["b"]) {
 echo("Число 1 - больше");
 }
 else 
 { echo("Число 2 - больше"); }
 echo "<br><BR> <A href='s3-1.html'> Назад </A>";
?>