<?php
    $week = array("일", "월", "화", "수", "목", "금", "토");

    print $week[0] . "<br>";
    print $week[3] . "<br>";

    $week[3] = "wed";

    print $week[3] . "<br>";
    

    print $week;

    array_push($week, "C", "D");
    print "$week[7]<br>";
    print count($week) . "<br>";


    $test = array(1, 3.44, "ㅇㅎ");
    print $test[0];
    print $test[1];
    print $test[2];
    
    ?>