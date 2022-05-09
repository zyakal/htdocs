<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {text-align: center; border: solid 1px #000; width: 500px; margin:auto;}
        .contents , .log_title , .log_sub_title { display:flex;  justify-content:center; align-items:center;}
        .log_title, .log_sub_title { padding-bottom: 20px;}
        .log_sub_title {font-size: 0.8rem;}
        #log_id { font-size: 0.5rem;}
        input { padding: 5px; margin:5px; width: 150px;}
        span { display:inline-block; width: 30px;}
        .button { width: 70px; height: 30px;}
    </style>
</head>
<body>
    
    <div class="log_title" ><h1 >LOGIN</h1></div>
    <div class="log_sub_title" > 로그인을 하시면 더욱 많은 컨텐츠를 즐기실 수 있습니다!</div>
    
    <div class="contents">
        <form action="log_proc.php" method="post">
            
                <div><span>ID</span><input type="text" name="user_id" placeholder="아이디를 입력하세요"> 
                <div><span>PW</span><input type="password" name="user_id" placeholder="비밀번호를 입력하세요"> </div>
                <input class="button" type="submit" value="로그인">           
        </form>
        <a href="create_id.php"><button class="button">회원가입</button></a>
    </div>

</body>
</html>