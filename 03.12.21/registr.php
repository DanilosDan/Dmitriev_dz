<?php
    $id= $_GET['id'];
    print_r($_POST);
    ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <p> <input type="text" name="username" placeholder="Имя"></p>
        <p> <input type="password" name="password" placeholder="Пароль" > </p>
        <button type="submit" class="btn btn-success">Зарегистрироваться</button>


    </form>
</body>
</html>