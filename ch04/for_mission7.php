<?php
    /*
        $star 숫자 만큼 별(*) 표시하기
     */

    
    $star = rand(1, 10);
    $star1 = $star;
    $star2 = $star;
    $star3 = $star;
    
    for($star1; $star1; $star1--)
    {
        print "*";
               
    }
    print "<br>";    

    for(; $star2; $star2--)
    {
        print "*";
       
    }
    
    /*
    본래 값을 그대로 놔두는게 좋다. 따라서,

    for($i=$star; $i; $i--)
    {
        print "*";
       
    }

    PHP외의 언어에서는 반복 조건문을 아래와 같이 적어주는 것이 맞다.

    for($i=$star; $i>0; $i--)
    {
        print "*";
       
    }

    */


    /* 답안

    for($i=o; $i<$star; $i++)
    {
        print "*";
    }
    */
    

?>  