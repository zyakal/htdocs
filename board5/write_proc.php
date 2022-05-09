<?php
    include_once 'db.php';
    $conn = get_conn();
    $title = $_POST['title'];
    $ctnt = $_POST['ctnt'];
    $sql = " INSERT INTO t_board2 (title, ctnt) VALUE ('$title', '$ctnt') ";

    mysqli_query($conn, $sql);
    mysqli_close($conn);

    header("location: list.php");


?>