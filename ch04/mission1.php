<?php
    /*
        97점 이상 100점 A+
        93점~90점 A-
        사이는 A
        60점 미만은 F
        100점이상은 잘못된 값
    */

    
    $score = rand(0, 120);
    print "점수 : $score <br>";
    $z = $score;
    $value1 = $score % 10;

    if( $z > 100 || $z < 0)
    {
        print "잘못된 값";
    }

    else if ($z >= 90 && $z <= 100)
    {
        print "A";
    }
    else if ($z >= 80 && $z < 90)
    {
        print "B";
    }
    else if ($z >= 70 && $z < 80)
    {
        print "C";
    }
    else if ($z >= 60 && $z < 70)
    {
        print "D";
    }
    else
    {
        print "F";
    }
    
    if(  $z >= 60 && ($z === 100 || $value1 >= 7  && $z <= 100 && $z > 0))
    {
        print "+";
    }  
    else if( $z >= 60 && $value1  <= 3 && $z <= 100 && $z > 0)
    {
        print "-";
    }

    print "<br>";

   
    
    
    if($score > 100 || $score < 0) 
    {
        print "잘못된 값";
    } 
    else 
    {
        $sign = "F";
        $symbol = "";
        $val_1 = intval($score * 0.1);    
        switch($val_1) 
        {
            case 10: case 9:
                $sign = "A";
                break;
            case 8:
                $sign = "B";
                break;
            case 7:
                $sign = "C";
                break;
            case 6:
                $sign = "D";
                break;
        }
        $val_2 = $score % 10; // 1의 자리
        if($score >= 60)
        {
            if($score === 100 || $val_2 >= 7)
            {
                $symbol = "+";
            } 
            else if($val_2 <= 3)
            {
                $symbol = "-";
            }
        }
        print $sign . $symbol;
    }


    
?>