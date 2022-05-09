<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>글등록</title>
</head>
<body>
    <h1>게시글 등록</h1>
    <a href="list.php"><button>LIST</button></a>
    <form action="write_proc.php" method="post">
        <div><input type="text" name="title" placeholder="제목"></div>
        <div><textarea name="ctnt" placeholder="내용"></textarea></div>
        <div>
            <input type="submit" name="created_at" value="등록">
            <input type="reset" value="초기화">
        </div>

    </form>
</body>
</html>