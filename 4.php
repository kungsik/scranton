<?php
include "header.php";
    if ($_POST["submit"]) {
        if ($_POST["answer"] == '을사늑약') {
?>

            <div class="container" >
                <center>
                    <div class="alert alert-success" role="alert">
                        <h3>을사늑약과 관계되어 있는 근처의 장소에 가서 동대문교회와 관계된 분을 찾아보세요.</h3>
                    </div>
                    <h3><a href='5.php' class="btn btn-primary">다음 라운드</a></h3>
                </center>
            </div>

<?php
        }

        else {
?>
            
            <center>
                <div class="alert alert-danger" role="alert">
                    <h1>잘못된 접근입니다!</h1>
                    <h3><a href='4.php'>돌아가기</a></h3>
                </div>
            </center>
<?php
        }

    }

    else {
?>  

    <div class="container">
        <div class="jumbotron">
            <h1 class="display-4">라운드2</h1>
            <p class="lead">아래의 암호를 풀어보세요</p>
            <hr class="my-4">
            <p>힌트: 모양과 점...</p>
            <form name="secure" method="POST" action="4.php" class="form-group">
                <input type="text" class="form-control" id="answer" name="answer"><br>
                <input type="submit" class="btn btn-primary" name="submit">
            </form>
            <img src="./4-1.png" width="100%"><br><br>
        </div>
    </div>
    

<?php

    }

include "footer.php";
?>