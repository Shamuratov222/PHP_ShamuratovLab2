<?php 
session_start();//открытие сессии 
unset($_SESSION['admin']);//закрытие сессии по логину 
session_destroy();//удаление сессии 
header("Location: auth.php");//Перенаправление на эту страницу после нажатия кнопки ВЫЙТИ 
?>