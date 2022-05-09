<?php


    $start_num = 1;
    $end_num = 50;

    $result = sum_from_to($start_num, $end_num);

    print "$start_num ~ $end_num 을(를) 모두 더한 값은 $result 이다. <br>";

    
    
    function sum_from_to($n1, $n2)
    {
        for($n1;$n1<=$n2;$n1++)
        {
            $sum += $n1;
        }
        return $sum;
    }

    
    
/* 

    $start_num = 1;
    $end_num = 100;

    $result = sum_from_to($start_num, $end_num);

    print "$start_num ~ $end_num 을(를) 모두 더한 값은 $result <br>";

    function sum_from_to($snum, $enum)
    {
        $result = 0;
        for($i=$snum; $i<=$enum; $i++)
        {
            $result += $i;
        }
        return $result;
    }

*/

    

?>

