<?php
    $star = rand(3, 10);

    print "스타 = $star <br>";

    print_star($star);
    print "<br><br>";
    print_star_line($star);
    print "<br><br>";
    print_star_triangle($star);

    // $star = 3
    // ***

    
    

    function print_star($num)
    {
        for($i=0; $i < $num; $i++)
        {
            print "*";
        }
        
    }



    function print_star_line($n1)
    {
        for($z=0; $z < $n1 ; $z++)
        {
            print_star($n1);
            print "<br>";
        }
    }





    function print_star_triangle($num)
    {

        for($z=0; $z <= $num ; $z++)
        {
            print_star($z);
            print "<br>";
        }
        
    }







?>

