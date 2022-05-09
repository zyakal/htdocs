<?php

    // 범위지정이 안된다는 가정하에 switch로 미션
    // 3~5 봄, 6~8 여름, 9~11, 가을, 12~2 겨울, default 값은 계절없음

    $mon = rand(1,12);
    
    switch($mon)
    {
        case 3: 
        case 4: 
        case 5:
            print "봄";
            break;
        case 6: 
        case 7: 
        case 8:
            print "여름";
            break;
        case 9: 
        case 10: 
        case 11:
            print "가을";
            break;
        case 12: 
        case 1: 
        case 2:
            print "겨울";
            break;
        default:
            print "계절없음";
            break;
    }
    
    switch((int)($mon/3))
    {
            case 1:
                print "봄";
                break;
            case 2:
                print "여름";
                break;
            case 3:
                print "가을";
                break;
            case 4: case 0:
                print "겨울";
                break;
            default:
                print "계절없음";
                break;
    }

?>