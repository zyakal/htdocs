<?php
    //login.php에서 넘어오는 값을 적절한 변수에 담는다
    // 변수의 값을 출력

    include_once "db/db_user.php";

    $uid = $_POST["uid"];
    $upw = $_POST["upw"];

    //echo $uid;
    //echo $upw;

    $param = [
        "uid" => $uid
    ];

    $result = sel_user($param);
    if(empty($result)) {
        echo "해당하는 아이디가 없음";
        die;
    }

    // echo "i_user : " , $result["i_user"], "<br>";
    // echo "pw : ", $result["upw"], "<br>";
    
    // 비밀번호가 맞으면 "list.php로 주소이동"
    // 다르면 "login.php로 주소이동"
    
    if($result["upw"] === $upw)
    {   
        session_start();
        $_SESSION["login_user"] = $result;
        header("location: list.php");
    }
    else
    {
        header("location: login.php");        
    }
   