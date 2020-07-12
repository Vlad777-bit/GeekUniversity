<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <title>Личный блог</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <!--
    <script>
        var t = 0;

        function checkAnswer(inputId, answers) {
            var userAnswer = document.getElementById(inputId).value;
            userAnswer = userAnswer.toLowerCase();
            for (i = 0; i < answers.length; i++) {
                if (userAnswer == answers[i]) {
                    t++;
                    break;
                }
            }
        }

        function checkAnswers() {

            checkAnswer("userAnser1", ['туча', 'тучка']);
            checkAnswer("userAnser2", ['владивосток']);
            checkAnswer("userAnser3", ['дорога']);
            checkAnswer("userAnser4", ['переселенец']);

            alert("Вы отгодали " + t + " загадок");
        }

    </script>
-->
</head>

<body>

    <div class="container">
        <?php
            include "menu.php"
        ?>
        <h1 class="header-main">Игра в загадки</h1>
        <div class="box">

            <?php
                
            if(isset($_GET['userAnswer1']) && isset($_GET['userAnswer2']) && isset($_GET['userAnswer3']) && isset($_GET['userAnswer4'])){    
                $userAnswer = $_GET["userAnswer1"];
                $t = 0;
                if($userAnswer == "туча" || $userAnswer == "тучка"){
                    $t++;
                }
        
                $userAnswer = $_GET["userAnswer2"];
                if($userAnswer == "владивосток"){
                    $t++;
                }
        
                $userAnswer = $_GET["userAnswer3"];
                if($userAnswer == "дорога"){
                    $t++;
                }
        
                $userAnswer = $_GET["userAnswer4"];
                if($userAnswer == "переселенец"){
                    $t++;
                }
        
                echo "Вы угодали " . $t . " загадок";
            }
            ?>

            <form metod="GET">
                <p id="info">Летает без крыльев, плачет без глаз</p>
                <input type="text" name="userAnser1">

                <p id="info">В каком городе спрятались мужское имя и сторона света?</p>
                <input type="text" name="userAnser2">

                <p id="info">Идет то в гору, то с горы, но остается на месте</p>
                <input type="text" name="userAnser3">

                <p id="info">В каком слове 5 "е" и никаких других гласных?</p>
                <input type="text" name="userAnser4">
                <br>
                <input type="submit" class="btn" value="Ответить" name="">
            </form>

        </div>
        <div class="clr"></div>
    </div>
    <div class="footer">
        <p class="copyright"> &copy; Все права защищены <?php echo date("Y");?> год</p>
    </div>

</body>

</html>
