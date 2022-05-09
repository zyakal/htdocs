<?php
    /*  망할 오타
        합계 : 
        평균 :
    */
    $score_arr = array(100,90,33,87,65);
    $sum = 0;
    $len = count($score_arr);
    for($i=0;$i<5;$i++)
    {
        $sum += $score_arr[$i];
        
        
    }
    print $sum . "<br>";
    print $sum/$len;

?>
