<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="upload_proc.php" method="POST" enctype="multipart/form-data"> <!--이미지 삽입시 enctype 입력 필수 method는 무조건 post로 -->
        <div><label>이미지 <input type="file" name="img" accept="image/*"></label></div> <!-- 파일을 찾을때 이미지 확장자만 볼 수 있도록 할 때 accept -->
        <div><input type="submit" value="업로드"></div>
    </form>
</body>
</html>