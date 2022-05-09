<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>글등록</title>
    <style>
        h1, div, a{display: flex; justify-content: center;  }
        #title>input, #ctnt>textarea { width:300px;  border: 1px solid #000;}
        #ctnt>textarea {  height: 100px;  }
    </style>
</head>
<body>
    <h1>글등록</h1>
    <a href="list.php"><button>리스트</button></a>
    <form action="write_proc.php" method="post">
        <div id="title"><input type="text" name="title" placeholder="제목"></div>
        <div id="ctnt"><textarea name="ctnt" placeholder="내용"></textarea></div>
        <div>
            <input type="submit" value="등록">
            <input type="reset" value="초기화">
        </div>
    </form>
</body>
</html>