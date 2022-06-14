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
        function __construct($name, $color, $price){
            $this->name = $name;
            $this->color = $color;
            $this->price = $price;

        }

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
