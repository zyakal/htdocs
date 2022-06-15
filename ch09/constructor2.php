<?php

use Fruit as GlobalFruit;

    class Fruit {
        //class 란 멤버필드와 멤버메소드로 구성되어있다.
        //class 안에서 메소드가 아닌 것들을 멤버필드라 함
        private $name;
        private $color;
        private $price;

        // private 멤버필드에 값을 넣을 수 있는 방법 
        // 1. 생성자를 통해
        // 2. setter메소드를 통해

        // private 멤버필드에 값을 빼내는 방법
        // 1. 오직 getter메소드를 통해

        // function __construct()
        // { return $this;
            
        // }
        

        public function print_fruit(){
            print "Name : {$this->name}<br>";
            print "Color : {$this->color}<br>";
            print "Price : {$this->price}<br>";

        }


        public function setName($name){
                $this->name = $name;
                return $this;
        }

        
        public function setColor($color){
                $this->color = $color;
                return $this;
        }

        
        public function setPrice($price){
                $this->price = $price;
                return $this;
        }
    }

    $apple1 = (new Fruit)->setName("사과");
    $apple1 ->print_fruit();
    $apple2 = (new Fruit)
                ->setColor("파랑")
                ->setPrice(1000);

    $apple2->print_fruit();

    $banana1 = new Fruit;
    $banana1 -> setColor("노랑");
    $banana1 -> setPrice(500);
    $banana1 -> print_fruit();