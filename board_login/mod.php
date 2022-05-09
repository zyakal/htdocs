<?php 

    include_once "db/db_board.php";

    $param = [
        "i_board" => $_GET["i_board"]
    ];

    $result = sel_board($param);
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>수정</title>
</head>
<body>
    <a href="detail.php?i_board=<?=$param['i_board']?>"><button>글로 이동</button></a>
    <form action = "mod_proc.php" method="post">
        <input type="hidden" name="i_board" value="<?=$param['i_board']?>">
        <div><input type="text" name="title" placeholder = "제목" value="<?=$result['title']?>"></div>
        <div><textarea name="ctnt" placeholder = "내용"><?=$result['ctnt']?></textarea></div>
        <div>
            <input type="submit" name="mod_at" value="글수정">
            <input type="reset" value="초기화">
        </div>
    </form>
    
</body>
</html>