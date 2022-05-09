<?php

    include "db.php";

    $title = $_POST["title"];
    $ctnt = $_POST["ctnt"];

    print "title : $title <br>";
    print "ctnt : $ctnt <br>";

    $conn = get_conn();
    $sql = 
    "
        INSERT INTO t_board
        (title, ctnt)
        VALUES
        ('${title}', '${ctnt}')       
    ";
    mysqli_query($conn, $sql);
    mysqli_close($conn);

    header("Location: list.php"); //위에 실행하고 이 주소로 바로 연결됨
    # Location 값에 / 를 붙이면 풀 주소값을 적어주어야한다.
    die();

?>
