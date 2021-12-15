<?php

session_start();


$login = $_POST['login'];
$password = $_POST['password'];
$password = md5($password);
$error_fields = [];

if ($login === '') {
    $error_fields[] = 'login';
}

if ($password === '') {
    $error_fields[] = 'password';
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
echo'sdas';
echo ($login.''.$password);
$link = mysqli_connect("localhost", "f0606083_username","password") or die ("Невозможно
подключиться к серверу"); // установление соединения с сервером
mysqli_query($link,'SET NAMES UTF-8');
mysqli_select_db($link,"f0606083_langs") or die("Нет такой таблицы!");
$check_user = mysqli_query($link, "SELECT * FROM `users` WHERE `username` = '$login' AND `password` = '$password'");
print_r($check_user);
if (mysqli_num_rows($check_user) > 0) {

    $user = mysqli_fetch_assoc($check_user);
    if ($user['type'] == 1){
    $_SESSION['user'] = [
        "id" => $user['id'],
    ];
    $_SESSION['logged in user id'] = $user['id'];
        header("Location: operator/index.php");
    }
    else {
       $_SESSION['admin'] = [
        "id" => $user['id'],
    ]; 
    header("Location: index.php");
    }
        
    $response = [
        "status" => true
    ];

    echo json_encode($response);
   
} else {

    $response = [
        "status" => false,
        "message" => 'Не верный логин или пароль'
    ];

    echo json_encode($response);
}
?>
