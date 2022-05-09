<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table  {border-collapse: collapse; }
        table, td { border: 1px solid #000;}
    </style>
</head>
<body>
    <table border=1>
    <?php
        $val = rand(3, 10);
        print $val;
        $num = 1;
        
        for ($i=1; $i<=$val; $i++)
        {
            print "<tr>";
            for ($z=1; $z<=$val; $z++){
                print "<td>" . $num++ . "</td>";
            }
            print "</tr>";
        }

       // $num 대신 식으로 표현하면 $i * $val + $z
        






/*
        for($i=0; $i<$val; $i++)
        {
            print "<tr>";
            for($z=1; $z<=$val; $z++)
            {
                print "<td>" . $num++ . "</td>";
            }
            print "</tr>";
        }
*/

    ?>
     </table>
    
</body>
</html>