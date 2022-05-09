<?php

    include_once 'db.php';


    $conn = get_conn();


    $title = $_POST["title"];
    $ctnt = $_POST["ctnt"];
    $mod_at = $_POST["mod_at"];
    $i_board = $_POST["i_board"];


    $sql = " UPDATE t_board2 
    SET title = '$title', ctnt = '$ctnt'
    WHERE i_board = $i_board ";

    

    mysqli_query($conn, $sql);
    mysqli_close($conn);
    header("Location: detail.php?i_board=${i_board}");


?>