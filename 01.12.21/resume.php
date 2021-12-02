<?php
    function day_night() {
        $a=date( "H:i", strtotime("+2 Hour") );
        $day=("8:00");
        $night=("20:00");
         if ($a<$day or $a>$night) {
        echo  '<body style="background-color:darkslateblue">';
    }}
    day_night()
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="resume_style.css">
    <title>resume</title>

</head>
<body>

    <header class="header">
        <?php
         function date_b(){
            $my_date=strtotime ("06.07.1989");
            echo $my_date. '<br>';
            $now=date("d:m:o");
            echo $now;
 /*           $c=$now-$my_date;
            echo $c;*/
         }
        date_b()
        ?>
<!--        <img class="shaka" src="shaka.jpg" alt="no">-->
    </header>

    <div><img class="picture" src="foto.jpg" alt=""></div>

        <h1 class="family">Дмитриев Данил</h1>

    <p class="inf">Инженер-строитель, окончил МГТУ,
        работаю в строительной компании УСГ.
        Занимаюсь смешанными единоборствами, увлекаюсь
        музыкой, в связи с чем коллекционирую виниловые
        пластинки, люблю путешествовать. <br>
        Программированием никогда не занимался, хочу
        освоить верстку, очень нравится этот раздел.
    </p>

    <p class="review">Школе факт хочу выразить большую благодарность
    за возможность любому желающему получать новые
    знания и осваивать профессию разработчика.
    Из минусов, для новичков очень высокий темп.
    </p>

    <section class="img">
        <h2>города</h2>
            <div id="block1">
                <figure>
                    <img src="city/paris.jpg" alt="упс">
                    <figcaption>Paris</figcaption>
                </figure>

                 <figure>
                     <img src="city/new%20york.jpg" alt="упс">
                     <figcaption>New york</figcaption>
                  </figure>

                <figure>
                    <img src="city/berlin.jpg" alt="упс">
                    <figcaption>Berlin</figcaption>
                </figure>

                <figure>
                    <img src="city/madrid.jpg" alt="упс">
                    <figcaption>Madrid</figcaption>
                </figure>
            </div>
    </section>

    <section class="img">
        <h2>Waves</h2>
        <div id="block2">
            <figure>
                <img src="nazare/Nazare.jpg" alt="упс">
                <figcaption>Nazare</figcaption>
            </figure>

            <figure>
                <img src="nazare/nazare%202.jpg" alt="упс">
                <figcaption>Nazare 2</figcaption>
            </figure>

            <figure>
                <img src="nazare/nazare3.jpg" alt="упс">
                <figcaption>Nazare 3</figcaption>
            </figure>

            <figure>
                <img src="nazare/nazare%204.jpg" alt="упс">
                <figcaption>Nazare 4</figcaption>
            </figure>
        </div>
    </section>
 <footer>
     <a href="https://www.instagram.com/?hl=ru">инста</a>
 </footer>

</body>
</html>