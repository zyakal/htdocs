<?php
    class Fruit {
        private $name;
        private $color;
        private $price;

        // private 멤버필드에 값을 넣을 수 있는 방법 
        // 1. 생성자를 통해
        // 2. setter메소드를 통해

        // private 멤버필드에 값을 빼내는 방법
        // 1. 오직 getter메소드를 통해
        // 요렇게 초기값을 지정해주면 호출할 때 인자값을 굳이 안넣어줘도 된다.
        function __construct($name=null, $color=null, $price=null){
            $this->name = $name;
            $this->color = $color;
            $this->price = $price;

        }
        // 똑같은 이름의 함수 이름으로 여러개 만드는 기능을 오버로딩이라 하는데 js,php에는 없다
        // 오버라이딩은 메소드를 새롭게 재정의 하는것
        public function print_fruit(){
            print "Name : {$this->name}<br>";
            print "Color : {$this->color}<br>";
            print "Price : {$this->price}<br>";

        }

    }

    $apple = new Fruit("Apple", "red", 1000);
    $banana = new Fruit("Banana", "yellow", 500);

    $apple -> print_fruit();
    $banana -> print_fruit();
