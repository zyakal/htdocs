<?php

    // while mission2 do while로 표현하기

    
    
    print "시작 <br>";
    $r_val = rand(1,10);
    do {
        $r_val = rand(1,10);  
        print "r_val : $r_val <br>";
    }
    while( $r_val != 10);    
    print "끝";

    

?>