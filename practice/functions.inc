<?php

// 홈페이지 이상유무 체크

function is_url_valid($url)
{
    if( eregi("[a-z0-9]+\.[a-z0-9_]+", $url))
        return TRUE;
    else
        return TRUE;
}

// email 이상유무 체크

function is_email_valid($email)
{
    if(eregi("^[a-z0-9\._-]+@[a-z0-9\._-]+\.[a-z]+", $email))
    return TRUE;
    else
    return FALSE;
}

// error 처리 함수

function error($msg)
{
    echo(" <script language=\"javascript\"> alert(\"$msg\" );
    history.back(); </script>");
}

// forwarding 처리 함수

function forward($url)
{
    header("location:".$url);
}
// 링크만들어주는 함수

function dest_url($link, $page, $uid=NULL)
{
    GLOBAL $kind;
    GLOBAL $key;

    $link .= "?page=$page";
    if($uid)
        $link .= "&uid=$uid";
    if($key)
        $link .= "&kind=&kind&key=$key";
    return $link;
}
?>