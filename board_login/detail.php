<?php
    include_once "db/db_board.php";
    session_start();
    if(isset($_SESSION["login_user"])) {
        $login_user = $_SESSION["login_user"];
    }

    $i_board = $_GET["i_board"];
    
    
    $param = [
        "i_board" => $i_board // $_GET["i_board"]을 바로 적어줘도 된다
    ];
    
    $item = sel_board($param);  
    $next_board = sel_next($param);
    $prev_board = sel_prev($param);
    
    

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>제목</title>
</head>
<body>
    <div><a href="list.php">리스트</a></div>

    <div>
        <?php 
        if(isset($_SESSION["login_user"]) && $login_user["i_user"] === $item["i_user"])
        {
        echo "<a href='mod.php?i_board=$i_board'><button>수정</button></a>";
        echo "<button onclick='isDel();'>삭제</button>";
        }
        ?>
    </div>
    <div>제목 : <?= $item["title"]?></div>
    <div>글쓴이 : <?= $item["nm"]?></div>
    <div>등록일시 : <?= $item["created_at"]?></div>
    <div>내용 : <?= $item["ctnt"]?></div>
    <div>
    <?php if($prev_board !==0) { ?> 
        <a href="detail.php?i_board=<?=$prev_board?>"><button>이전글</button></a>
    <?php } ?>
    <?php if($next_board !==0) { ?> 
        <a href="detail.php?i_board=<?=$next_board?>"><button>다음글</button></a>
    <?php } ?>
    </div>
    <script>
        function isDel() {
            console.log('isDel 실행 됨!!');
            const result = confirm('삭제하시겠습니까?');
            if(result) {
                location.href = "del_proc.php?i_board=<?=$param['i_board']?>";
            } 
        }
    </script>   
</body>
</html>