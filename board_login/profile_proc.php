<?php
    define("PROFILE_PATH", "img/profile");

    session_start();
    $login_user = $_SESSION["login_user"];

    if($_FILES["img"]["name"] === "") {
        echo "이미지 없음";
        exit;
    }

    function gen_uuid_v4() { 
        return sprintf('%04x%04x-%04x-%04x-%04x-%04x%04x%04x'
        , mt_rand(0, 0xffff)
        , mt_rand(0, 0xffff)
        , mt_rand(0, 0xffff)
        , mt_rand(0, 0x0fff) | 0x4000
        , mt_rand(0, 0x3fff) | 0x8000
        , mt_rand(0, 0xffff)
        , mt_rand(0, 0xffff)
        , mt_rand(0, 0xffff) 
        ); 
    }
    echo gen_uuid_v4();

    $img_name = $_FILES["img"]["name"];
    $last_index = mb_strrpos($img_name, ".");
    $ext = mb_substr($img_name, $last_index);
    $target_full_path = PROFILE_PATH . $login_user["i_user"];

    if(!is_dir($target_full_path)) {
        mkdir($target_full_path, 0777, true);
    }
    $tmp_img = $_FILES["img"]["tmp_name"];
    $target_filenm = gen_uuid_v4() . $ext;
    $imageUpload =  move_uploaded_file($tmp_img, $target_full_path . "/" . $target_filenm);

    if($imageUpload) { //업로드 성공!
        Header("Location: profile.php");
    } else { //업로드 실패!
        echo "업로드 실패";
    }