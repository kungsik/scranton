<?php

include "header.php";

    if ($_POST["submit"]) {
        if ($_POST["password"] == 'whoisscranton') {
?>
            
            <div class="container" >
                <center>
                    <div class="alert alert-success" role="alert">
                        <h1>단서: what3words</h1>
                    </div>
                    <img src='https://upload.wikimedia.org/wikipedia/ko/thumb/4/42/WilliamScranton.jpg/220px-WilliamScranton.jpg'><br><br>
                    <p style='padding:20px; font-size:20px; text-align:left; background-image: url( "letter_back.jpg" );'>
                        스크랜턴 부인의 증언<br><br>
                        그 해 초여름, 스크랜턴 박사가 지독한 장티푸스 열병에 걸렸습니다. 그때 아이까지 심하게 앓고 있어 남편을 돌볼 틈이 없었고 어머님이 그를 간호하였습니다. 남편이 회복된 후 우리는 자동차로 드라이브를 나갔습니다. 그때 남편은 내게 놀라지 말라고 당부하면서 자신은 중앙 아프리카를 제외한 어느 곳이든 선교사로 나가 자신을 헌신하기로 하였다고 밝히는 것이었습니다. 얼마의 시간이 흐른 뒤, 나는 '당신이 가는 곳이라면 어디든 저도 가겠습니다'라고 하였습니다. 또 한참 있을 후 '거기에 제 뼈를 묻겠어요'하였습니다. 나는 결혼하던 날 결심한 것 중의 하나가 무슨 일이 있어도 남편을 거역하지 않겠다는 것이었습니다.
                    </p>
                    <br>
                    <h3><a href='2.php' class="btn btn-primary">다음 라운드</a></h3>
                </center>
            </div>
<?php
        }
        else {
?>
            <center>
                <div class="alert alert-danger" role="alert">
                    <h1>잘못된 접근입니다!</h1>
                    <h3><a href='1.php'>돌아가기</a></h3>
                </div>
            </center>
<?php
        }
    }
    else {
?>

    <div class="container">
        <div class="jumbotron">
            <h1 class="display-4">라운드1-1</h1>
            <p class="lead">아래 비밀번호를 해킹해서 알아내시오.</p>
            <hr class="my-4">
            <p>힌트: 눈에 보이는 것이 전부는 아니다. 핸드폰으로는 알 수 없는 정보...</p>
            <form name="secure" method="POST" action="1.php" class="form-group">
                <label for="password">비밀번호</label>
                <input type="password" class="form-control" id="passowrd" name="password" 정답="whoisscranton"><br>
                <input type="submit" class="btn btn-primary" name="submit">
            </form>
        </div>
    </div>

<?php

    }

include "footer.php";

?>
