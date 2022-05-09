<?php
    // 객체 안에 함수가 있으면 method라고 부른다.
    // 객채 안이 아니라면 function(함수)라고 부른다.

    // 함수의 정의
    function sum($n1, $n2)
    {
        return $n1 + $n2;
        
    }

    // 함수의 호출
    $result = sum(10, 20);

    print "result : $result <br>";
    print "result : " . sum(30,40) . "<br>";


    function minus($n1, $n2)
    {
        print "minus : " . ($n1 - $n2) . "<br>";
        return;
    }
    
    minus(15, 7)
    
    
?>
