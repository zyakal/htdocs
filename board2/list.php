<?php

include_once('db.php');

$conn = get_conn();

$sql = "SELECT i_talbe, title, created_at, mod_at FROM t_board2 ORDER BY i_board DESC";

$result =  mysqli_query($conn, $sql)
mysqli_close($conn);

mysqli_fetch_assoc($result)
{
    while
}