<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <title>Личный сайт</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

    <div class="container">
        <?php
            include "menu.php"
        ?>
        <h1 class="header-main">Личный сайт студента GeekBrains</h1>
        <div class="main">
            <img src="assets/img/photo.jpg" class="photo" alt="photo">
            <p class="text"><b>Добрый времени суток.</b> Меня зовут Владислав. Я - начинающий программист. Совсем недавно я
                встал на
                этот путь, но уже успел написать свой первый сайт. В этом мне помог IT-портал <a href="https://geekbrains.ru/" target="_blank">GeekBrains</a>. Программирование является моим
                хобби и
                в дальнейшем надеюсь станет моей профессией. На этом сайте Вы сможете сыграть в игры написанные
                мной.
                <br>
                <a href="puzzle.php"><img src="assets/img/logo1.jpg" class="logotip" alt="logo1"></a>
                <a href="guess.php"><img src="assets/img/logo2.jpg" class="logotip" alt="logo2"></a>
                <a href="guess-multi.php"><img src="assets/img/logo3.jpg" class="logotip" alt="logo3"></a>
            </p>
        </div>
        <div class="clr"></div>
    </div>
    <div class="footer">
        <p class="copyright"> &copy; Все права защищены <?php echo date("Y");?> год</p>
    </div>

</body>

</html>
