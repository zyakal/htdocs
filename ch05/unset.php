<?php
    //isset 해당 변수에 값이 있는지 없는지?에 따라 o, 1값을 반환
    if(isset($name)) {
        print "name is ok!!";
    }

    $name = "HongGilDong";
    if(isset($name)) {
        print "name is great!!";
    }
    print $name . "<br>";

    unset($name);
    print $name . "<br>";

    print "The End";


?>