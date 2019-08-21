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
        if ($_POST["password"] == 'whoisscranton') {
            echo "<center><h1>단서: what3words</h1>";
            echo "<img src='https://upload.wikimedia.org/wikipedia/ko/thumb/4/42/WilliamScranton.jpg/220px-WilliamScranton.jpg'><br>";
            echo "<p style='padding:20px; font-size:20px; text-align:left;'>";
            echo "스크랜턴 부인의 증언<br><br>
            그 해 초여름, 스크랜턴 박사가 지독한 장티푸스 열병에 걸렸습니다. 그때 아이까지 심하게 앓고 있어 남편을 돌볼 틈이 없었고 어머님이 그를 간호하였습니다. 남편이 회복된 후 우리는 자동차로 드라이브를 나갔습니다. 그때 남편은 내게 놀라지 말라고 당부하면서 자신은 중앙 아프리카를 제외한 어느 곳이든 선교사로 나가 자신을 헌신하기로 하였다고 밝히는 것이었습니다. 얼마의 시간이 흐른 뒤, 나는 '당신이 가는 곳이라면 어디든 저도 가겠습니다'라고 하였습니다. 또 한참 있을 후 '거기에 제 뼈를 묻겠어요'하였습니다. 나는 결혼하던 날 결심한 것 중의 하나가 무슨 일이 있어도 남편을 거역하지 않겠다는 것이었습니다.";
            echo "</p>";
            echo "<br><h3><a href='2.php'>다음 스테이지</a></h3>";
            echo "</center>";
        }

        else {
            echo "<center><h1>잘못된 접근입니다!</h1>";
            echo "<h3><a href='1.php'>돌아가기</a></h3></center>";
        }

    }
    else {
?>
    <center>
        <h2>아래 비밀번호를 해킹해 보시오!</h2>
        <form name="secure" method="POST" action="1.php">
            <h3>비밀번호:</h3> <input type="password" name="password" answer="whoisscranton">
            <input type="submit" name="submit">
        </form>
    </center>

<?php

    }

?>



</body>
</html>