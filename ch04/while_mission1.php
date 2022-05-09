<?php

    /*val 변수에 있는 숫자를 1부터 모두 더해주세요 */

    $val = rand(50, 100);
    $i = 1;
    $sum = 0;
    
    while($i<=$val)
    {
        $sum += $i++;
        
        
    }
   
    print "val : $val <br>" ;
    print $sum . "<Br>";

    print $i;

?>