<?php
    //for 문을 활용하여 1~100을 더한 값을 구하시오

    $sum = 0;  //여기서 sum을 선언하지 않으면 for문 안에서 sum이 선언되고 그대로 사라질수있다.

    for($i=1 ; $i<=100 ; $i++)
    {
        $sum = $sum + $i;
    }
    print $sum;



?> 