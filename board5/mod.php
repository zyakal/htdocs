<?php
    include_once 'db.php';
    $i_board = $_GET['i_board'];
    $conn = get_conn();
    $sql = "SELECT * FROM t_board2 WHERE i_board = $i_board";
    $result = mysqli_query($conn, $sql);
    if($row = mysqli_fetch_assoc($result))
    {
        $i_board = $row['i_board'];
        $title = $row['title'];
        $ctnt = $row['title'];

    }
    
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
    <h1>수정</h1>
    <a href="list.php"><button>리스트</button></a>
    <form action="mod_proc.php" method="post">
        <input type="hidden" name="i_board" value="<?=$i_board?>">
        <div><input type="text" name="title" placeholder="제목" value ="<?=$title?>"></div>
        <div><textarea name="ctnt" placeholder="내용" ><?=$ctnt?></textarea></div>
        <div>
            <input type="submit" value="확인">
            <input type="reset" value="초기화">
        </div>
    </form>
</body>
</html>