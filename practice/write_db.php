<?php
    include 'config.cfg';
    include 'functions.inc';

    $name = trim($name);
    $email = trim($email);
    $homepage = trim($homepage);
    $subject = trim($subject);
    $writedate = date("y-m-d");
    $article = trim($article);

    if( !$name || !$subject || !$passwd || !$article)
    {
        error("입력값이 부족합니다");
        exit;
    }

    if($email && !is_email_valid($email))
    {
        error("이메일을 잘못 입력하셨습니다");
        exit;
    }


    if($homepage && !is_url_valid($homepage))
    {
        error("홈페이지를 잘못 입력하셨습니다");
        exit;
    }

    $passwd= substr( md5( trim($passwd)), 0, 10);

    $con = mysql_connect("localhost", "user", "password");
    mysql_select_db("PHP", $con);