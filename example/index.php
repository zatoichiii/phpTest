<div class="container">

    <?php
    require "blocks/header.php";
    ?>

    <h1>Главная страница</h1>

    <form action="check_post.php" method="post">
        <input type="text" name="username" placeholder="Имя" class="form-control"><br>
        <input type="email" name="email" placeholder="Почта" class="form-control"><br>
        <input type="password" name="password" placeholder="Пароль" class="form-control"><br>
        <textarea name="message" placeholder="Сообщение" class="form-control"></textarea><br>
        <input type="submit" value="Отправить" class="btn btn-success">
    </form>

    <?php
//    Дата время
    echo date('m-l-F-h'), "<br>";
    echo date('m-d H:i:s', strtotime("now")), "<br>";


    $arr = [300, 13, 25];
    unset($arr[2]);
    array_values($arr);
    rsort($arr);
    //shuffle($arr);

    //echo in_array(300, $arr);

//    Функции массивов
    array_slice($arr, 0, count($arr));
    var_dump($arr);
    echo '<br>';
    print_r($arr);

    $arr1 = [1, 2, 3];
    $arr2 = [4, 5, 6];
    $arr3 = array_merge($arr1, $arr2);
    echo '<br>';
    print_r($arr3);

//    Работа с файлами
    echo '<br>';

    $file = fopen("text.txt", "w");

    fwrite($file, "Test text \n Hello");
    fclose($file);

    $filename = "text.txt";
    $file2 = fopen($filename, "r");
    $content = fread($file2, filesize($filename));

    fclose($file2);

    echo $content;
    echo '<br>';



//    Сервер
//    phpinfo();
//
//    echo '<pre>';
//    print_r($_SERVER);
//    echo '/<pre>';

//    echo $_SERVER['HTTPS'];

    echo $_SERVER['HTTP_HOST'];
    echo '<br>';

//    Отправка почты
//    $message = 'Hello';
//    $to = 'admin@mail.ru';
//    $from = 'example@mail.ru';
//    $subject = 'Theme';
//
//    $subject = "=?utf-8?B?".base64_encode($subject)."?=";
//    $headers = "From: $from\r\n Reply=to: $from\r\nContent-type:text/plain; charset=utf8\r\n";
//    mail($to, $subject, $message, $headers);
//    require "blocks/footer.php";

//    cockie
    $user_name = "Name";
//    setcookie("user_name", $user_name, time() + 500);
//    print_r($_COOKIE);

//    echo $_COOKIE['user_name'];

    ?>
</div>

