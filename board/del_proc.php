<?php
    include_once 'db.php';    
    

    $i_board = $_GET['i_board'];
        

    $conn = get_conn();
    $sql = 
    "
        DELETE FROM t_board        
        WHERE
        i_board = $i_board  
    ";
    mysqli_query($conn, $sql);
    mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>삭제화면</title>
</head>
<body>
    <h1>삭제가 완료되었습니다</h1>
    <a href="write.php"><button>홈:글쓰기</button></a>
<a href="list.php"><button>리스트</button></a>
</body>
</html>