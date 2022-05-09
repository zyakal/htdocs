<?php


    $dan = rand(2,9);
    
    print_gugudan($dan);

    /* 
    구구단 함수 만들기   
    
    */


    function print_gugudan($num)
    {
        for($i=1; $i<10; $i++)
        {
            print "$num x $i = " . ($num*$i) . "<br>";
        }
        
    }

    

?>

