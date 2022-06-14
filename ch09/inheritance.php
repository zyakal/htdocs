<?php
    class People {
        //protected 를 쓰면 상속관계에서 사용이 가능하다

        protected $name;
        protected $age;
        function __construct()
        {   
                print "나는 people이오"            ;
        }

        function printPeople(){
            print "Name : {$this->name}<br>";
            print "Age : {$this->age}<br>";
        }
    }
    
    class Student extends People {
        private $studentId;

        function __construct($name, $age, $studentId)
        {
            print "나는 Student이오<br>";
           $this->name = $name;
           $this->age = $age;
           $this->studentId = $studentId;
        }
        function printStudent(){
            print "- Student - <br>";
            $this->printPeople();
            // parent::printPeople();
            print "Id : {$this->studentId}<br>";
        }

        function printPeople(){
            print "Student에 있는 print People<br>";
        }
    }

    $stu1 = new Student("홍길동", 21, 1010);
    $stu1 -> printPeople();
    print "-------------<br>";
    $stu1->printStudent();
