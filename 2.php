<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php
    if ($_POST["submit"]) {
        if ($_POST["answer"] == '185') {
            echo "<center><h1>단서: 돌솥.난다.성능</h1>";
            echo "<img src='https://t1.daumcdn.net/cfile/tistory/0205D04D51CC5AC117'>";
            echo "<p style='padding:20px; font-size:20px; text-align:left;'>";
            echo "1885년 4월 6일 아펜젤러<br><br>
            기뻐해 주십시오. 우리는 안전하게 도착했습니다. 배는 부활주일 오후 3시에 닻을 내렸습니다. 우리는 곧바로 삼판(작은 배)에 옮겨 타 한시간 노를 저어 해안에 상륙하였습니다. 우리는 곧바로 서울로 들어가지 않는 것이 좋다는 충고를 받았습니다. 우리 목적이 여기 머무는 것은 아니었습니다만 우리나라 군함이 여기 있어 우리 안전을 지켜주고 있습니다. 현재 우리 계획은 이곳에 계속 머물 생각은 아닙니다. 우선 거처를 마련하고 어학 공부를 하면서 길이 열리면 주님께서 인도하시는 대로 움직여 나갈 것입니다.";
            echo "</p>";
            echo "<br><h3><a href='3.php'>다음 스테이지</a></h3>";
            echo "</center>";
        }

        else {
            $answer = $_POST["answer"];
            $strike = 0;
            $ball = 0;

            if ($answer[0] == '1') {
                $strike = $strike + 1;
            }
            if ($answer[1] == '1' || $answer[2] == '1') {
                $ball = $ball + 1;
            }

            if ($answer[1] == '8') {
                $strike = $strike + 1;
            }
            if ($answer[0] == '8' || $answer[2] == '8') {
                $ball = $ball + 1;
            }

            if ($answer[2] == '5') {
                $strike = $strike + 1;
            }
            if ($answer[0] == '5' || $answer[1] == '5') {
                $ball = $ball + 1;
            }

            echo "<center><h2>S".$strike."B".$ball."</h2>";

            echo "<h3><a href='2.php'>돌아가기</a></h3></center>";
        }

    }

    else {
?>
    <center>
        <form name="secure" method="POST" action="2.php">
            <h3>서로 다른 3자리 수를 입력해 보세요:</h3> 
            <h2>여기서부터는 휴대폰으로 진행할 수 있습니다.</h2> 
            <input type="text" name="answer">
            <input type="submit" name="submit">
        </form>
    </center>

<?php

    }

?>



</body>
</html>