<?php
    /*
        만약에 star값이 1이면
        *
        2이면
        *
        **
        

        
     */

    $star = rand(3,10);
    echo "star : " . $star . "<br>";

    for($z=1;$z<=$star;$z++)
    {
        
        
        for($i=1;$i<=$z;$i++)
        {
            echo "*";
            
        }
        echo "<br>";
    }
    
    /*
    for($z=1;$z<=$star;$z++)
    {
        $sum = $sum . "@";
        print "{$sum}<br>";
    }
    */

?>  