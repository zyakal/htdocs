<?php
    // 국어 합계 , 평균 / 영어 합계, 평균 / 수학 합계, 평균

    $scores = array(
        array(100, 100, 100),
        array(90, 80, 70),
        array(55, 65, 75),
        array(90, 88, 55),
    );
    
    $names = array("국어", "영어", "수학");
    
    
    
    for($i=0; $i <3; $i++)
    {
        for($z=0; $z <4; $z++)
        {
            
            $sum += $scores[$z][$i] ;
            
        }
        
        print $names[$i] . "<br> 합계 :" . $sum . " , ";
        print  "평균 : " . $sum/count($scores) . "<br>";
        $sum = 0;
    }

?>