<?php
    // Access Modifie
    // 접근지시어
    // 접근제어자
    // java : private default protected public

    // 배열과 객체의 차이는 메소드의 유무
    class Student {
        //상수는 퍼블릭가능, 변수는 전부 private
        private $studentId;
        private $studentName;

        public function printStudent($id, $name) {
            print "ID : {$id}<br>";
            print "Name : {$name}<br>";

        }

    }

    $obj = new Student;
   

    $obj->printStudent(1234, "홍길동");