<?php
$a=time(11);
 if($a > 12) echo "##599FFF ; else echo "#599DFF"?>
<!--не работает код. Логика была такая: задается переменная 11 часов,
если переменная больше 12 то цвет черный. Не нашел как привязать цвет фона
 со страничкой...-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="resume_style.css">
    <title>resume</title>

</head>
<body>

    <header class="header">
        <img class="shaka" src="shaka.jpg" alt="no">
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
    Из минусов, для новичков очень высокий темп и вся
        информация не успевает уложиться в голове.
        Особенно швах с практикой)))
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