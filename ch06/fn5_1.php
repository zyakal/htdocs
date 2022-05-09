<?php

    $snum = 15;
    $enum = 10;
    //print_num_from_to($snum, $enum);
    print "<br><br><br>";
    print_num_from_to2($snum, $enum);

    // [4,5,6,7,8,9,10]  이렇게 출력되도록
    // 만약 enum값이 더 작으면 반대순서로 출력되도록



    function print_num_from_to2($num1, $num2)
    {
        if($num1>$num2) 
        { 
            print "[" ;
            for($num1; $num1 > $num2; $num1--)
            {
                print $num1;
                print ", ";
            }
            print $num1;
            print "]";
            return;
        }

        if($num1 < $num2)
        {
            print "[" ;
            for($num1; $num1 < $num2; $num1++)
            {
                print "$num1, ";
            }
            print "$num1 ]";
        }
               
        
        
    }


    
    /* 답안이라기 보단 색다른 방법-----------------깃허브 참고

    function print_num_from_to2($snum, $enum)
    {
        print "[";
        for($i=$snum; $snum < $enum ? $i<=$enum : $i>=$enum; $snum < $enum ? $i++ : $i--)
        {
            if($i != $snum) { print ", ";}
            print $i;
        }
        print "]";
    }


    
    
    
    */

?>

