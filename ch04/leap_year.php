<?php
    $year = 2020;
    //Q. 연도를 400으로 나눴을 때 나머지가 0이거나, 
    //연도를 4로 나눴을 때 나머지가 0이고, 100으로 나눴을때 나머지가 0이 아니라면  윤년이다.
    if( $year % 400 === 0 || ($year % 4 === 0 && $year % 100 !== 0))
    {
        print "<div>${year}년은 윤년이다</div>";
    }
    else
    {
        print "<div>${year}년은 윤년이 아니다.</div>";
    }
    
    print "${year}년은 윤년" . ( $year % 400 === 0 || ($year % 4 === 0 && $year % 100 !== 0) ? "이다" : "이 아니다");

?>

