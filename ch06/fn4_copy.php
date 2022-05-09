<?php


    print_gugudan(2, 6);
    
    

    /* 
    구구단 함수 만들기   
    
    */


    function print_gugudan($n1, $n2)
    {

        for($n1; $n1 <= $n2; $n1++)
        {
            for($i=1; $i<10; $i++)
            {
                print "$n1 x $i = " . ($n1*$i) . "<br>";
            }
            print "--------------------<br>";
        }
        
    }

    

?>

