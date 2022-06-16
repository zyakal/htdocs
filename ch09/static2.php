<?php

class Computer {
    public static $brand;
    public $price;

    function __construct()
    {
        self::init();
    }

    function init() {
        self::$brand = "2";
    }

    static function setBrand($brand){
        self::$brand = $brand;
    }

    function myPrint(){
        print "컴퓨터 브랜드는" . self::$brand. ", 가격은 {$this->price}입니다.<br>";
    }
    // self는 선언할 때 Computer를 가리키고 this는 새로운 객체(new Computer)를 만든 대상을 가리킨다 

    // static function myStaticPrint(){
    //     print "컴퓨터 브랜드는" . self::$brand. ", 가격은 {$this->price}입니다.<br>";
    // }
    // 오류나는 이유는 static을 사용하면 메모리에 저장을 해놓는데 function myStaticPrint()를 메모리에 넣으려니 $this가 아직 사용되지 않는 상태다
    // static이 붙은 function 은 static이 붙은 변수만 사용한다면 사용가능하다.
}

Computer::$brand = "LG";

$c = new Computer;
$c->price = 10000;

$c2 = new Computer;
$c2->price = 20000;

$c->myPrint();
$c2->myPrint();
