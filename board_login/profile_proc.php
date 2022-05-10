<?php
    include_once "db/db_user.php";
    session_start();
    
    define("PROFILE_PATH", "img/profile/");
    
    $login_user = &$_SESSION["login_user"];
    

    var_dump($_FILES);
    if($_FILES["img"]["name"] === "") {
        echo "이미지 없음";
        exit;
    }

    function gen_uuid_v4() { 
        return sprintf('%04x%04x-%04x-%04x-%04x-%04x%04x%04x' // printf - % 자리에 변수들을 넣어준다.
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
    $img_name = $_FILES["img"]["name"]; // $_FILES["포스트된 이미지의 이름"]["name=파일이름?"]
    $last_index = mb_strrpos($img_name, ".");
    $ext = mb_substr($img_name, $last_index); // substr(자르고 싶은 문자열, 시작위치, 입력하지 않으면 나머지 전부-입력하면 그자리부터 입력한 자릿수까지)

    $target_filenm = gen_uuid_v4() . $ext;
    $target_full_path = PROFILE_PATH . $login_user["i_user"];
    // is_dir, file_exists 폴더 및 파일 있는지 확인할때, 폴더확인은 is_dir이 파일 확인은 file_exists가 낫다
    if(!is_dir($target_full_path)) {
        mkdir($target_full_path, 0777, true);
    }
    // mkdir 폴더 만들기, (위치, 권한, true일 경우 만들 폴더가 여러개라도 만들어짐)
    $tmp_img = $_FILES['img']['tmp_name'];
    $imageUpload = move_uploaded_file($tmp_img, $target_full_path . "/" .$target_filenm); //파일이동 성공시 true, 실패시 false
    if($imageUpload) { //업로드 성공!
        
        //이전에 등록된 프사가 있으면 삭제!      
        if($login_user["profile_img"]) {
            $saved_img = $target_full_path . "/" . $login_user["profile_img"];
            if(file_exists($saved_img)) {
                unlink($saved_img);
            }
        }

        //DB에 저장!
        $param = [
            "profile_img" => $target_filenm,
            "i_user" => $login_user["i_user"]
        ];

        $result = upd_profile_img($param);
        $login_user["profile_img"] = $target_filenm;
        
        Header("Location: profile.php");
    } else { //업로드 실패!
        echo "업로드 실패";
    }
    


    