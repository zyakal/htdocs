<?php
    $result = 1;
    if($result > 0 )
    {
        // result 값을 반으로 만드세요
        
        $result /=  2 ;

        // 나누기 기호는 가능하면 안쓰는것이 좋다.
        /* 따라서 
        
        $result *= 0.5; 
        
        가 가장 좋다.*/
        
        print "$result <br>";
        print "positive <br>";
    }
    else
    {
        print "$result <br>";
        print "negative <br>";
    }

?>
