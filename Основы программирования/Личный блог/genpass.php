<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <title>Личный блог</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <script>
        var letters = ["q", "w", "e", "r", "t", "y", "u", "i", "o", "p", "a", "s", "d", "f", "g", "h", "j", "k", "l", "z", "x", "c", "v", "b", "n", "m", "Q", "W", "E", "R", "T", "Y", "U", "I", "O", "P", "A", "S", "D", "F", "G", "H", "J", "K", "L", "Z", "X", "C", "V", "B", "N", "M", "1", "2", "3", "4", "5", "6", "7", "8", "9", "0"];

        function readInt() {
            return +document.getElementById("userAnswer").value;
        }

        function write(text) {
            document.getElementById("passw").innerHTML = text;
        }

        function getRandomNumber(max) {
            return Math.round(Math.random() * max);
        }

        function generateText(letters, length) {
            var text = '';
            for (i = 0; i < length; i++) {
                var n = getRandomNumber(letters.length - 1);
                text = text + letters[n];
            }
            return text;
        }
        
        function generate(){
            var length = readInt();
            var passw = generateText(letters, length);
            write(passw);
        }
    </script>
</head>

<body>

    <div class="container">
        <?php
            include "menu.php"
        ?>
        <h1 class="header-main">Генератор паролей</h1>
        <div class="box">

            <p>Введите желаемую длину пароля</p>
            <input type="text" id="userAnswer">
            <h3 id="passw"></h3>
            <a href="#" onClick="generate();" class="btn">Генерировать</a>
        </div>
        <div class="clr"></div>
    </div>
    <div class="footer">
        <p class="copyright"> &copy; Все права защищены <?php echo date("Y");?> год</p>
    </div>

</body></html>
