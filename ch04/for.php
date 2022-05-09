<?php
    // A는 초기화 공간 ; B는 반복 조건문 ; C는 증감식 
    /*

    for ($i = 0 ; $i < 10 ; $i+=2)
    {
        print "$i<br>";
    }

    */
    // 음...문제를...회원등급이 VVIP 면 30% 세일을,  VIP는 20%, normal이면 10%할인
    // 물품은 10000~200000원 사이 랜덤값
    
    $price = rand(10000, 200000);
    print "해당 상품의 가격은 " . $price . "원 입니다.<br>";
    $u_grade = array("VVIP", "VIP", "Normal") ;
    $selected = array_rand($u_grade);
    print "유저의 등급은 " . $u_grade[$selected] . " 입니다. <br>";

    switch($u_grade[$selected])
    {
        case "VVIP":
            $sale = $price * 0.7; //이미 실수를 곱해서 정수가 안먹히는구나
            print "<br>당신의 등급은 " . $u_grade[$selected] . "입니다. <br>상품이 30% 할인되어 " . (int)$sale . "원에 구매하실 수 있습니다.<br>";
            break;
        case "VIP":
            $sale = $price * 0.8; 
            print "<br>당신의 등급은 " . $u_grade[$selected] . "입니다. <br>상품이 20% 할인되어 " . (int)$sale . "원에 구매하실 수 있습니다.<br>";
            break;
        case "Normal":
            $sale = $price * 0.9;
            print "<br>당신의 등급은 " . $u_grade[$selected] . "입니다. <br>상품이 10% 할인되어 " . (int)$sale . "원에 구매하실 수 있습니다.<br>";
            break;
            
    }
  
    // for를 써서 랜덤의 가격(10000~200000)을 가진 10개의 상품 생성

    for ($i= 1 ; $i < 11 ; $i++)
    {
        $price =rand(10000, 200000);
        print $i . "번 상품의 가격은 " . $price .  "원 입니다.<br>";
        
    }

    print "오늘은 여기까지";

?>