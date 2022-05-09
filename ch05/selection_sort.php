<?php

    $arr = [7,4,5,1,56,47,41,65,44];

     
    for($i=0; $i<count($arr)-1;$i++)
    {
        $idx = $i;
        for($z=$i+1; $z<count($arr); $z++)
        {
            if($arr[$idx] > $arr [$z])
            {
                $idx = $z;
            }
        }
        if($idx != $i)
        {
            $temp = $arr[$idx];
            $arr[$idx] = $arr[$i];
            $arr[$i] = $temp;
        }


    }

    print "<br>";

    print_r($arr);


?>