<?php

session_start();
$link = mysqli_connect("localhost", "f0606083_username","password") or die ("Невозможно
подключиться к серверу"); // установление соединения с сервером
mysqli_query($link,'SET NAMES UTF-8');
mysqli_select_db($link,"f0606083_langs") or die("Нет такой таблицы!");

$login = $_POST['login'];
$password = $_POST['password'];
$type = $_POST['type'];

$check_login = mysqli_query($link, "SELECT * FROM `users` WHERE `username` = '$login'");
if (mysqli_num_rows($check_login) > 0) {
    $response = [
        "status" => false,
        "type" => 1,
        "message" => "Такой логин уже существует",
        "fields" => ['login suchestv']
    ];

    echo json_encode($response);
    die();
}
$error_fields = [];
if ($login === '') {
    $error_fields[] = 'login';
}

if ($password === '') {
    $error_fields[] = 'password';
}

if ($type === '') {
    $error_fields[] = 'type';
}
if (!empty($error_fields)) {
    $response = [
        "status" => false,
        "type" => 1,
        "message" => "Проверьте правильность полей",
        "fields" => $error_fields
    ];

    echo json_encode($response);

    die();
}

if (!$password == 0) {
    $password = md5($password);
    mysqli_query($link, "INSERT INTO `users` SET id = NULL, username = '".$_POST['login']."', password = '".$password."',
    type = '".$_POST['type']."'");
    $response = [
        "status" => true,
        "message" => "Registered successfuly!",
    ];
    echo json_encode($response);
    header("Location: index.php");

} 

?>
