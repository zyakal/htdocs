<?php

    $arr_age = array(

        "Peter" => 35,
        "Ben" => 37,
        "Joe" => 43,
        "John" => 24,
    );
    // 값 정렬
    // sort, rsort
    // 키값을 살리고 싶으면 asort, arsort

    $copy_arr_1 = $arr_age;
    print "copy : ";
    
    print_r($copy_arr_1);
    print "<br>";

    rsort($copy_arr_1);

    print "origin : ";
    print_r($arr_age);
    print "<br>";

    rsort($copy_arr_1);

    print "copy : ";
    print_r($copy_arr_1);
    print "<br>---------------------<br>";

    // 키 정렬    ksort, krsort

    $copy_arr_2 = $arr_age;
    print "copy2 : ";
    print_r($copy_arr_2);
    print "<br>";
    ksort($copy_arr_2);
    print_r($copy_arr_2);
    print "<br>";



?>