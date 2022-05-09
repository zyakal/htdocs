<?php
    /*
        지금까지 배운것 모두 활용하여 다음과 같이 표시되도록 하라
        출력 : [1,2,3,4,5,6,7]
     */
    /*
    echo "[1";
    for($i=2;$i<8;$i++)
    {
        print ",$i";
    }
    echo "]";
    */

    // 이게 맞냐

    /*
    echo "[";
    for($i=1;$i<8;$i++)
    {
        if($i<7)
        {print "$i, ";}
        else
        {print $i;}
    }
    echo "]";
    */
    
    //답안

    $end_val = 12;
    echo "[";
    for($i=1;$i<=$end_val;$i++)
    {
        print $i;
        if($i < $end_val )  { print ", "; }
            
        
    }
    echo "]";

    

?>  