<?php
    //다차원배열

    $matrix = array(
        array(1,2,3,0),
        array(4,5,6,0,1),
        array(7,8,9,0),
    );
    print_r($matrix);
    print "<br><br>";
    
    print $matrix[1][1];
    
    print "<br><br>";
    $child1 = $matrix[1];
    print $child1[1];
    print "<br><br>";
    print "count($matrix)" . count($matrix) . "<br>";
    print "count($matrix[0])" . count($matrix[0]) .  "<br>";
    print "count($matrix[1])" . count($matrix[1]) .  "<br>";
    print "count($matrix[2])" . count($matrix[2]) .  "<br>";
?>
