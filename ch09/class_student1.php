<?php
    // Access Modifie
    // 접근지시어
    // 접근제어자
    // java : private default protected public

    // 배열과 객체의 차이는 메소드의 유무
    class Student {
        public $studentId;
        public $studentName;

        public function printStudent($id, $name) {
            print "ID : {$id}<br>";
            print "Name : {$name}<br>";

        }

    }

    $obj = new Student;
   
    $obj->studentName = "Alice";

    $obj->printStudent($obj->studentId = 20171234, $obj->studentName);