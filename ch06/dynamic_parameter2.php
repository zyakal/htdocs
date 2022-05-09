<?php
    // func_num_args() : 인자수 리턴
    // func_get_arg() : 인자갑 가져올때 사용
    // fun_get_args() : 인자배열로 받음

    function multi()
   {
       print "count : " . count(func_get_args()) . "<br>";
       print "[1] : " . func_get_args()[1] . "<br>";
   }

   multi(2);
   multi(5, 10);

    function print_sum()
    {
        echo "func_num_args() : " .func_num_args() . "<br>";
        print "func_get_arg(0) : " . func_get_arg(0) . "<br>";
        print "func_get_arg(1) : " . func_get_arg(1) . "<br>";
        print "------<br>";
        
    }

    function sum()
    {
        print "count : " . count(func_get_args()) . "<Br>";
        $sum = 0;
        foreach(func_get_args() as $val)
        {
            $sum += $val;
        }
        return $sum;
    }

    print "sum : " . sum(1,2,15,44,45,15) . "<br>";



    print_sum(1,2);       // sum : 3    
    print_sum(1,2,3);     // sum : 6
    print_sum(1,2,3,4);   // sum : 10
    print_sum(1,2,3,4,5);

?>