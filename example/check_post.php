<?php
$name = $_POST['username'];
$email = $_POST['email'];
$pass = $_POST['password'];

if (trim($name) == "")
    echo "Вы не ввели имя пользователя!";
else if (strlen(trim($name)) <= 1 || strlen(trim($email)) <= 1 || strlen(trim($pass)) <= 1)
    echo "Вы ввели не все данные";
else {
//        $_POST['password'] = md5($pass);
//        echo "<h1> Ваши данные</h1>";
//        foreach ($_POST as $key => $value) {
//            echo "$value <br>";
//        }

    header('Location: index.php');
    exit;
}
