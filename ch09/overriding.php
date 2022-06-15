<?php

class Animal {
    function crying(){
        print "동물이 운다. <br>";
    }
}

class Dog extends Animal {
    function crying() {
        parent::crying();
        print "강아지가 멍멍. <br>";
    }
}

class Poodle extends Dog {
    function crying() {
        print "푸들이 왕왕. <br>";
    }
}

class Cat extends Animal {
    function crying(){
        print "고양이가 야옹. <br>";
    }
}

class Human {
    function speak(){
        print "사람이 말하다";
    }
}

function doCry($ani){
    if(method_exists($ani, "crying")){
    $ani->crying();
}
    else { print "crying 메소드없음";}
}

doCry(new Dog);
doCry(new Cat);
doCry(new Poodle);
doCry(new Human);
