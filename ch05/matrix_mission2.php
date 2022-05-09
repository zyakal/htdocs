<?php
    // 국어 합계 , 평균 / 영어 합계, 평균 / 수학 합계, 평균

    $scores = array(
        array(100, 100, 100),
        array(90, 80, 70),
        array(55, 65, 75),
        array(90, 88, 55),
    );
    $val;
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


<?php
    /* 답안
    국어
    합계: ?, 평균: ?
    영어
    합계: ?, 평균: ?
    수학
    합계: ?, 평균: ?
    */
    $scores = array(
        //국, 영, 수
        array(100, 100, 100),   
        array(90, 80, 70),      
        array(55, 65, 75),      
        array(90, 88, 55),
    );

    $cls_names = array("국어", "영어", "수학");
    $cls_sums = array();
    for($i=0; $i<count($scores); $i++)
    {        
        for($z=0; $z<count($scores[$i]); $z++)
        {
            $cls_sums[$z] += $scores[$i][$z];
            
        }        
    }
    // print_r($cls_sums);
    for($i=0; $i<count($cls_names); $i++)
    {
        $sum = $cls_sums[$i];
        $avg = $sum / count($scores);
        print $cls_names[$i] . "<br>";
        print "합계 : $sum, 평균 : $avg <br>";
        print "<br>";
    }
?>

<?php
    /* 답안참고하여 값과 프린트 분리
    국어
    합계: ?, 평균: ?
    영어
    합계: ?, 평균: ?
    수학
    합계: ?, 평균: ?
    */
    $scores = array(
        //국, 영, 수
        array(100, 100, 100),   
        array(90, 80, 70),      
        array(55, 65, 75),      
        array(90, 88, 55),
    );

    $cls_names = array("국어", "영어", "수학");
    $cls_sums = array();
    $cls_avg = array();
    
    for($i=0; $i<count($scores); $i++)
    {        
        for($z=0; $z<count($scores[$i]); $z++)
        {
            $cls_sums[$z] += $scores[$i][$z];
            
        }        
    }

    print_r($cls_sums);
    print "<br>";
    
    
    for($i=0; $i<count($cls_names); $i++)
    {
        $sum2 = $cls_sums[$i];
        $cls_avg[$i] += $sum2 / count($scores);        
    }

    print_r($cls_avg);
    print "<br><br>";
    for($i=0; $i<count($cls_names); $i++)
    {
        print $cls_names[$i] . "<br>";
        print "합계 : " . $cls_sums[$i] . ", 평균 : " . $cls_avg[$i] . "<br>";
        print "<br>";

    }
   
?> 