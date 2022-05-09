<?php

    include_once "db.php";


    $title = $_POST["title"];
    $ctnt = $_POST["ctnt"];

    $conn = get_conn();
    $sql = 
    " 
        INSERT INTO t_board2
        (title, ctnt)
        VALUES
        ('${title}','${ctnt}')     
    ";

    

    mysqli_query($conn, $sql);
    mysqli_close($conn);

    header("location: list.php");

?>

    