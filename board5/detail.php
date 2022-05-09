<?php

    include_once 'db.php';

    $conn = get_conn();
    $i_board = $_GET['i_board'];

    $sql = " SELECT * FROM t_board2 WHERE i_board = $i_board";

    $result = mysqli_query($conn, $sql);

    if($row = mysqli_fetch_assoc($result))
    {
        $title = $row['title'];
        $ctnt = $row['ctnt'];
        $created_at = $row['created_at'];
        $mod_at = $row['mod_at'];
    }

    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>상세화면</title>
</head>
<body>
    <h1>상세화면</h1>
    <a href="list.php"><button>리스트</button></a>
    
        
            
        <div>제목 : <?=$title?></div>
        <div>내용 : <?=$ctnt?></div>
        <div>작성일시 : <?=$created_at?></div>
        <div>수정일시 :<?=$mod_at?></div>
    


    
    <div>
        <a href="mod.php?i_board=<?=$i_board?>"><button>수정</button></a>
        <a href="del_proc.php?i_board=<?=$i_board?>"><button>삭제</button></a>
    </div>
</body>
</html>