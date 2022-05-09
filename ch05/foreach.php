<?php

    //for문보다 foreach 권장. foreach는 읽기할때 자주 사용, 수정필요시 for문 자주 사용

    $array = array(100, 200 ,300 ,400 ,500);

    foreach($array as $val)
    {
        print $val . "<Br>";
    }
    print "---------------<br>";

    foreach($array as $key => $val)
    {
        print $key. " : " . $val . "<Br>";
    }

?>