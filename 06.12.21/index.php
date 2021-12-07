<?php
  /*  setcookie('color', $_GET['color']);
    if (isset($_GET ['submit'])){
        if($_COOKIE ['color']=='red'){
            $a=$_COOKIE ['<body style="background-color:red">'];
        echo $_COOKIE ['color'] . $_COOKIE ['red'];
        setcookie('disp', $a, time()+3600);

        }
    }*/

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

<form method="get">
    <p> <select name="color" id="color">
            <option value="red">красный</option>
            <option value="green">зеленый</option>
            <option value="orange">оранжевый</option>

        </select>
    </p>

    <p><button type="submit" class="btn btn-success">Выбери цвет</button></p>

    <?php

            if ($_GET ['color'] == "red") {
                echo  '<body style="background-color:red">';
        }
            if ($_GET ['color'] == "green") {
                echo  '<body style="background-color:limegreen">';
        }
            if ($_GET ['color'] == "orange") {
                 echo  '<body style="background-color:orange">';
    }


    ?>

</form>

</body>
</html>


