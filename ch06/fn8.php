<style>
    table { border-collapse:collapse;}

    table, td { border: 1px solid #000;}
    td{ padding : 10px; text-align: center;}
</style>



<?php
    $val = rand(2,5);

    print_table($val);

    //$val = 2

    function print_table($val)
    {
        print "<table>";
        for($z =0 ; $z < $val ; $z++ )
        { 
            print "<tr>";
            $num = $z*$val;
            for($i =1 ; $i <= $val; $i++ )
            {
                print "<td>" . $i+$num . "</td>";
            }
            print "</tr>";
        }
        print "</table>";
    }




?>

