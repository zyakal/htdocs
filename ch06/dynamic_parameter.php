<?php
    // ...$변수명 은 print_sum이 쓰인 각 배열을 뜻한다.
    function print_sum(...$vals)
    {
        
        for($i=0;$i < count($vals) ; $i++)
        {
            $sum += $vals[$i];
            
        }
        print "sum : $sum <br>";
        # 얘만 있어도 됨 print "sum : " . array_sum($vals) . "<br>";
        
    }


    print_sum(1,2);       // sum : 3    
    print_sum(1,2,3);     // sum : 6
    print_sum(1,2,3,4);   // sum : 10
    print_sum(1,2,3,4,5);

/* function print_sum(...$vals)
{
    foreach($vals as $val)
    {
        $sum += $val;
    }
    print "sum : $sum <br>";
} */
?>