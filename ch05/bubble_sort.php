<?php

    $arr = [7,4,5,1,56,47,41,65,44];

    

    for($z=0; $z < count($arr) ; $z++)
    {
        for($i=0 ; $i < count($arr)-1 ; $i++)
        {
            if($arr[$i] > $arr[$i+1])
            {
                $tem = $arr[$i];
                $arr[$i] = $arr[$i+1];
                $arr[$i+1] = $tem;
               
            }
            
        }
    }
    
    
    

    print_r($arr);

    print "<br>";
    print "<br>";




    for($i=count($arr)-1; $i>0; $i--)
    {
        for($z=0; $z<$i; $z++)
        {
            if($arr[$z] > $arr[$z+1])
            {
                $temp = $arr[$z];
                $arr[$z] = $arr[$z+1];
                $arr[$z+1] = $temp;
            }
        }
    }

    print_r($arr);
?>