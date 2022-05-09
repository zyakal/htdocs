<?php

    $snum = 3;
    $enum = 10;
    print_num_from_to($snum, $enum);
    print "<br><br><br>";
    print_num_from_to2($snum, $enum);

    // [4,5,6,7,8,9,10]  이렇게 출력되도록
    // 만약 enum값이 더 작으면 "종료값이 더 작을 수 없습니다."가 출력되도록

    function print_num_from_to($num1, $num2)
    {
        $arr_1 = array();
        for($num1; $num1 <= $num2; $num1++)
        {
            array_push($arr_1, $num1);
        }
        print_r($arr_1);
    }


    


    function print_num_from_to2($num1, $num2)
    {
        if($num1>$num2) 
        { print "종료값이 더 작을 수 없습니다.";}

        elseif($num1 < $num2)
        {
            print "[" ;
            for($num1; $num1 < $num2; $num1++)
            {
                print "$num1 , ";
            }
            print "$num1 ]";
        }
               
        
        
    }
    /* 답안-----------------
    
    function print_num_from_to($snum, $enum) 
    {
        if($enum < $snum) 
        {
            print "<div>종료값이 더 작을 수 없습니다.</div>";
            return;
        } 
        
        print "[";
        for($i=$snum; $i<=$enum; $i++)
        {
            if($i > $snum) 
            {
                print ", ";
            }
            print $i;
        }
        print "]";

    } 
    
    */

?>

