<?php
    include_once "db/db_board.php";
    
    session_start();
    $nm = "";
    $page = 1; 
    
    if(isset($_GET["page"])) { 
        $page = intval($_GET["page"]);        
    } 
    $search_txt = "";
    if(isset($_GET["search_txt"])){
        $search_txt = $_GET["search_txt"];

    }
    

    if(isset($_SESSION["login_user"])) {
        $login_user = $_SESSION["login_user"];
        $nm = $login_user["nm"];        
    }
    
    $row_count = 2;
    $param = [
        "row_count" => $row_count,
        "start_idx" => ($page - 1) * $row_count,  
        "search_txt" => $search_txt
    ];
    $paging_count = sel_paging_count($param);
    $list = sel_board_list($param);
    
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="common.css">
    <title>리스트</title>
    
</head>
<body>
    <div id="container">
        <header>
        <?=isset($_SESSION["login_user"]) ? "<div>". $nm . "님 환영합니다.</div>" : "" ?>
        <div>
            <a href="list.php">리스트</a>
            <?php if(isset($_SESSION["login_user"])) { ?>
                <a href="write.php">글쓰기</a>
                <a href="logout.php">로그아웃</a>
                <a href="profile.php">
                    프로필
                    <?php  
                        $session_img = $_SESSION["login_user"]["profile_img"];
                        $profile_img = $session_img == null ? "basic.jpg" : $_SESSION["login_user"]["i_user"] . "/" . $session_img;
                    ?>
                    <div class="circular__img circular__size40">
                        <img src="/board_login/img/profile/<?=$profile_img?>">
                    </div>
                </a>
            <?php } else { ?> 
                <a href="login.php">로그인</a>            
            <?php } ?>           
            
        </div>
        </header>
        <main>
            <h1>리스트</h1>
            <div>
                <form action="list.php" method="get">
                    <div>
                        <input type="search" name="search_txt">
                        <input type="submit" value="검색">
                    </div>
                </form>
            </div>
            <table>
                <tr>
                    <th>글번호</th>
                    <th>제목</th>
                    <th>작성자명</th>
                    <th>등록일시</th>
                </tr>
                <?php
                
                while($row = mysqli_fetch_assoc($list))
                {
                    $i_board = $row['i_board'];
                    $title = $row['title'];
                    $created_at = $row['created_at'];
                    $name = $row['nm'];
                    $name_img = $row['profile_img'] == null ? "basic.jpg" : $row['i_user'] . "/" . $row['profile_img'] ;

                    print "<tr>";
                    print "<td>$i_board</td>";
                    print "<td><a href='detail.php?i_board=${i_board}'>$title</a></td>";
                    print "<td>" . $name . 
                            "<div class='circular__img circular__size40'>
                            <img src='/board_login/img/profile/$name_img'>
                            </div>                    
                            </td>";
                    print "<td>$created_at</td>";
                    print "</tr>";
                }
                ?>
            </table>
            <div>
            <?php for($i=1; $i<=$paging_count; $i++) { ?>
                <span class ="<?=$i===$page ? "pageSelected" : ""?>">
                    <a href="list.php?page=<?=$i?>"><?=$i?></a>
                </span>                    
            <?php } ?>
            </div>
            
           
        </main>
    </div>
    
    
    
</body>
</html>