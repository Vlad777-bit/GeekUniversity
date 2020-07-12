<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <title>Личный блог</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <script>
        var answer = parseInt(Math.random() * 100);
        var playerNumber = 1;

        function readInt() {
            var number = document.getElementById("userAnswer").value;
            return parseInt(number);
            // return +document.getElementById("userAnswer").value;
        }

        function write(text) {
            document.getElementById("info").innerHTML = text;
        }

        function hide(id) {
            document.getElementById(id).style.display = "none";
        }

        function guess() {

            var userAnswer = readInt();
            if (userAnswer == answer) {
                write("<b>Поздравляю, выйграл игрок</b> " + playerNumber);
                hide("button");
                hide("userAnswer");
            } else if (userAnswer > answer) {
                changePlayer();
                write("Вы ввели слишком большое число<br>Ходит игрок " + playerNumber + ".<br>Введите число от 0 до 100");
            } else if (userAnswer < answer) {
                changePlayer();
                write("Вы ввели слишком маленькое число<br>Ходит игрок " + playerNumber + ".<br>Введите число от 0 до 100");
            }

            function changePlayer() {

                if (playerNumber == 1)
                    playerNumber = 2;
                else
                    playerNumber = 1;
            }
        }

    </script>
</head>

<body>

    <div class="container">
        <?php
            include "menu.php"
        ?>
        <h1 class="header-main">Угадайка мультиплеер</h1>
        <div class="box">

            <p id="info">Введите число от 0 до 100<br>
            Ходит игрок под номером 1
            </p>
            <input type="text" id="userAnswer">
            <br>
            <a href="#" class="btn" onClick="guess()" id="button">Начать</a>
        </div>
        <div class="clr"></div>
    </div>
    <div class="footer">
        <p class="copyright"> &copy; Все права защищены <?php echo date("Y");?> год</p>
    </div>

</body>

</html>
