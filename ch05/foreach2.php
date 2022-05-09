<?php

    //for문보다 foreach 권장. foreach는 읽기할때 자주 사용, 수정필요시 for문 자주 사용
    /* */
    $array = array(
        "Hong" => 182.2,
        "Hwang" => 180.4,
        "Kim" => 176.3,
        "Park" => 174.1
    );
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{border-collapse:collapse;}
        table, td, th{ border: 1px solid #000; }
    </style>
</head>
<body>
    <table>
        <tr>
            <th>이름</th>
            <th>키</th>
        </tr>
        <?php
            foreach($array as $name => $tall)
            {
                print "<tr><td>" . $name .  "</td>" . "<td>" . $tall . "</td>";
                
            }
            

        ?>

        
    </table>
    
            
</body>
</html>