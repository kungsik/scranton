<?php
include "header.php";
    if ($_POST["submit"]) {
        if ($_POST["answer"] == '내용') {
?>
            <div class="container" >
                <center>
                    <div class="alert alert-success" role="alert">
                        <h1>단서: 약간.내용.양가</h1>
                    </div>
                    <img src='http://cfile203.uf.daum.net/image/2177CE3856B30EDE04A7CF'><br><br>
                    <p style='padding:20px; font-size:20px; text-align:left; background-image: url( "letter_back.jpg" );'>
                    1888년 10월 메리 스크랜턴<br><br>
                    이 학생들이 우리에게 왔을 때 글자를 아는 사람은 한 명도 없었습니다. 중국어나 영어, 심지어 한글조차도 전혀 읽을 수 없는 아이들이었고 반 이상이 기초 문자도 쓸 수 없었습니다. 우리는 세속적인 교육만 시키고 있지는 않습니다. '매주 첫째 날' 어린 학생들이 모여 성경 공부를 합니다. 학생들은 이미 복음서의 상당 부분을 배워서 알고 있으며 예수님께서 세상에 계셨을 때 하신 일에 대해 이야기를 할 수 있을 정도가 되었습니다. 우리 학생들은 기도하는 법도 배웠고 규모가 작지만 주일학교 모임을 갖고 있으며 주간 중에도 첫 시간은 기도회를 가질 뿐 아니라 교실에서도 자기네 언어로, 자기네 방식으로 하나님에 대해 궁금한 것을 묻곤 합니다. 우리는 학생들을 전적으로 신뢰하고 있으며 이들이 나중에 이 나라에 큰 축복이 될 것으로 기대하고 있습니다. 
                    </p>
                    <br>
                    <h3><a href='6.php' class="btn btn-primary">다음 라운드</a></h3>
                </center>
            </div>

<?php
        }

        else {
?>
            
            <center>
                <div class="alert alert-danger" role="alert">
                    <h1>잘못된 접근입니다!</h1>
                    <h3><a href='5.php'>돌아가기</a></h3>
                </div>
            </center>
<?php
        }

    }

    else {
?>  

    <div class="container">
        <div class="jumbotron">
            <h1 class="display-4">라운드3</h1>
            <p class="lead">다음 장소의 주소는 약간.XX.양가 입니다. XX는 아래에 단서가...</p>
            <p>
                아<br>
                부<br>
                있<br>
                것<br>
                XX<br>
                찍<br>
                귀<br>
                성
            </p>
            <hr class="my-4">
            <p>힌트는 아래 이미지..</p>
            <form name="secure" method="POST" action="5.php" class="form-group">
                <input type="text" class="form-control" id="answer" name="answer"><br>
                <input type="submit" class="btn btn-primary" name="submit">
            </form>
            <img src="./4-2.png" width="100%"><br><br>
        </div>
    </div>
    

<?php

    }

include "footer.php";
?>