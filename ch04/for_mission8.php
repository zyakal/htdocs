<?php
    /*
        만약에 star값이 2라면
        **
        **
        아 문제를 잘못봤네

        
     */

    $star = rand(2,10);

    echo "star : " . $star . "<br>";
    

    for($z=$star;$z>0;$z--)
    {
            for($i=$star; $i>0;$i--)
        {
            echo "*";
        }
        echo "<br>";
    }
    
    echo "<br>";

    
    

    echo "star : " . $star . "<br>";
    

    for($z=0; $z < $star; $z++)
    {
            for($i=0; $i < $star; $i++)
        {
            echo "*";
        }
        echo "<br>";
    }
    
    echo "<br>";
    







    echo "<br>";
    for($i=0; $i < $star; $i++)
    {
        echo "*";
    }
    echo "<br>";
    for($i=0; $i < $star; $i++)
    {
        echo "*";
    }

?>  