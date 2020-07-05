<?php

include '../vendor/autoload.php';

use App\Config;
use TexLab\MyDB\DB;
use TexLab\MyDB\DbEntity;

$sql = (new DbEntity(
    Config::MYSQL_TABLE,
    DB::Link([
        'host' => Config::MYSQL_HOST,
        'username' => Config::MYSQL_USER_NAME,
        'password' => Config::MYSQL_PASSWORD,
        'dbname' => Config::MYSQL_DATABASE
    ])
))->get();



?>

<!doctype html>
<html lang="ru">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Авторизация</title>
    <style>
        .login {
            width: 100%;
            text-align: center;
        }

        .container {
            width: 100vw;
            height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .main {
            width: 300px;
            height: 300px;
            display: flex;
            flex-direction: column;
            border: 1px solid black;
            border-radius: 10px;
            align-items: center;
            justify-content: center;
        }

    </style>
</head>

<body>

    <?php

    if (!empty($_POST)) {
        foreach ($sql as $user) {
            if (($user['login'] == $_POST['login']) && ($user['password'] == $_POST['password'])) {
                echo "<div class='container'><h2 class='mess'>Добро пожаловать!</h2></div>";
                exit;
            } else {
                echo "<div class='container'><h2 class='mess'>Такого пользователя не существует!</h2>
                <a href='http://login/public/'>Вернуться на страницу регистрации</a></div>";
                exit;
            }
        }
    }

    ?>

    <div class="container">

        <div class="main">
            <h2 class="login">Авторизация</h2>

            <div class="form">
                <form action="?" method="POST">
                    <div class="form-group">
                        <label for="exampleInputEmail1">login</label>
                        <input type="text" name="login" placeholder="введите ваш email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input placeholder="введите ваш пароль" type="password" name="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <button type="submit" class="btn btn-outline-dark">Отправить</button>
                </form>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>

</html>