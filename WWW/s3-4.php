<html>
<head>
<title>Shamuratov Damir</title>
</head>
<body>
<form>
<input type="text" name="a" value=''>
<input type="submit" name="b" value="Enter login">
</form>
<?php
$a=$_GET['a'];
if ($a=='login1') echo 'Hello User1!';
else
{
if ($a=='login2') echo 'Hello User2!';
else
{
if ($a=='login3') echo 'Hello User3!';
else
{
if ($a=='login4') echo 'Hello User4!';
else echo 'takogo pol`zovateliya ne suchestvuet';
}
}
}
?>
</body>
</html>

