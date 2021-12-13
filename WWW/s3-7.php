<?
$s1 = $_POST["vr9"];
vr9($s1);
function vr9($s){
	$kol = substr_count($s,"?");
	$kol+= substr_count($s,"!");
	$kol+= substr_count($s,"...");
	$s = str_replace("...","",$s);
	$kol+= substr_count($s,".");
	echo ("<br>Число предложений: ".$kol."<br><br>");
}
?>