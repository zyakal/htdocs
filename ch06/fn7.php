<?php
    $mon = rand(0, 15);

    $season = get_season($mon);

    
    if($season)
    {
        print "${mon}월은 ${season}입니다";
    }
    else
    {
        print "${mon}월은 잘못된 값입니다";
    }
    
    //3~5 봄, 6~8 여름, 9~11, 가을, 12,1,2 겨울



    function get_season($num)
    {
        if($num >= 1 && $num <= 12)
        {
        
            switch((int)($num/3))
            {
                case 1:
                    return "봄";
                case 2:
                    return "여름";
                case 3:
                    return "가을";
                case 4: case 0:
                    return "겨울";       
                default:
                    return "";     
            }
            
        }
        
    }

/* if 로 하는 방법

    function get_season($mon)
    {
        if($mon < 1 || $mon > 12)      { return ""; } 
        if($mon < 3 || $mon === 12)    { return "겨울"; } 
        if($mon < 6)                   { return "봄"; } 
        if($mon < 9)                   { return "여름"; } 
        return "가을";
    }
*/




?>

