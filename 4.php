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
        if ($_POST["answer"] == '을사늑약') {
            echo "<center><h1>을사늑약과 관계되어 있는 근처의 장소에 가서 동대문교회와 관계된 분을 찾아보세요.(힌트: 아래의 이미지)</h1>";
            echo "<img src='./img/4-2.png' width='100%'>";
            echo "<br><h3><a href='5.php'>다음 스테이지</a></h3>";
            echo "</center>";
        }

        else {
            
            echo "<center><h2>다시 시도해 보세요!</h2>";

            echo "<h3><a href='4.php'>돌아가기</a></h3></center>";
        }

    }

    else {
?>
    <center>
        <form name="secure" method="POST" action="4.php">
            <h3>아래의 암호를 풀어보세요</h3>
            <img src="./img/4-1.png" width="80%"><br><br>
            <input type="text" name="answer">
            <input type="submit" name="submit">
        </form>
    </center>

<?php

    }

?>



</body>
</html>