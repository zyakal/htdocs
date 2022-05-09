<?php
    /*
        난관?
        2 x 1 = 2
        ~~
        구구단 2~9단까지
     */

    
    for($i=1;$i<10;$i++)
    {
        
        for($z=2;$z<10;$z++)
        {
            
            print " " . $z . " x " . $i . " = " ;
            if(($i*$z)<10)
            {
                print "&nbsp";
            }
            print $i*$z;
           
        }
        if($i<10)
            {
                print "&nbsp";
            }
        print "<br>";
        
    }



?>  