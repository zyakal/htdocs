<?php
    // Access Modifie
    // 접근지시어
    // 접근제어자
    // java : private default protected public

    // 배열과 객체의 차이는 메소드의 유무
    // private 멤버필드에 값을 넣을 수 있는 방법 
    // 1. 생성자를 통해
    // 2. setter메소드를 통해

    // private 멤버필드에 값을 빼내는 방법
    // 1. 오직 getter메소드를 통해
    // private 을 쓰는 이유는 1. 메소드를 통해 값변경을 하도록하여 순서를 지킬수 있도록 해준다.
    //                        2. 값을 입력할 때 조건에 따라 넣을 수 있게 한다.
    class Student {
        private $studentId;
        private $studentName;
        // public const ;
        //getters
        function getStudentId(){
            return $this->studentId;
        }

        function getStudentName(){
            return $this->studentName;
        }
        //setters
        function setStudentId($studentId){
            $this->studentId = $studentId;
            return $this;
        }
        function setStudentName($studentName){
            $this->studentName = $studentName;
            return $this;
        }


        function printStudent() {
            print "ID : {$this->studentId}<br>";
            print "Name : {$this->studentName}<br>";

        }


        
    }

    $obj = new Student;
    print "1번째 : " . $obj->setStudentId(1122)->getStudentId()."<br>";
    $obj2 = new Student;
    print $obj2->setStudentId(8888)->getStudentId(). "<br>";
    print "2번쨰 : " . $obj->getStudentId() . "<br>";

    // $obj->printStudent();

  