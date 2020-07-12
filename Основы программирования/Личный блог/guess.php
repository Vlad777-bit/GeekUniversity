<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <title>Личный блог</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <script>
        var answer = parseInt(Math.random() * 100);
        var tryCount = 0;
        var maxTryCount = 3;

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
            tryCount++;

            var userAnswer = readInt();
            if (userAnswer == answer) {
                write("<b>Поздравляю, вы угадали!</b>");
                hide("button");
                hide("userAnswer");
            } else if (tryCount >= maxTryCount) {
                write("Вы проиграли<br>Правильный ответ: " + answer);
                hide("button");
                hide("userAnswer");
            } else if (userAnswer > answer) {
                write("Вы ввели слишком большое число<br>Попробуйте еще раз. Введите число от 1 до 100");
            } else if (userAnswer < answer) {
                write("Вы ввели слишком маленькое число<br>Попробуйте еще раз. Введите число от 1 до 100");
            }
        }
    </script>
</head>

<body>

    <div class="container">
        <?php
            include "menu.php"
        ?>
        <h1 class="header-main">Игра угадайка</h1>
        <div class="box">

            <p id="info">Введите число от 0 до 100</p>
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