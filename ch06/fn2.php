<?php


    //숫자 10(는)은 짝수입니다.
    //숫자 1(는)은 홀수입니다.


    $num = rand(1, 10);

    
    function print_odd_even($n)
    {
        print "숫자 $n (는)은 " . ($n%2===0 ? '짝' : '홀') . "수입니다.";
    }



    print_odd_even($num);

    


    


    

?>


