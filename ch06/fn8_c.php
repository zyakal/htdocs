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
            $num = $val*$val - $z*$val;
            for($i =1 ; $i <= $val; $i++ )
            {
                print "<td>" . $num-- . "</td>";
            }
            print "</tr>";
        }
        print "</table>";
    }
    



?>
<?php
/* 
예찬씨꺼
function print_table($val)
    {
        print "구구단 표 : $val";
        $num = $val * $val;
        for($i=1; $i<=$val; $i++)
        {
            print "<tr>";
            for($z=1; $z<=$val; $z++)
            {
                print "<td>" . $num-- . "</td>";
            }
            print "</tr>";
        }
    }

동휘씨꺼
    print "val : ${v}<br>";
        $n=$v *$v;
        for($i=$v; $i>0;$i--)
        {
            print "<tr>";
            for($z=$v;$z>0;$z--)
            {
                print "<td>". $n-- ."</td>";
            }
            print "</tr>";
        }


*/
?>