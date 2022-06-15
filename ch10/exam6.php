<?php
    // exam6.txt 파일 읽어서 전부 대문자로 변경한 후
    // exam6_capital.txt에 저장해주세요.

    $filep = fopen("exam6.txt", "r");
    $upper = "";
    while($line = fgets($filep, 1024)){
        $upper .=  strtoupper($line);
    }

    fclose($filep);

    $filep = fopen("exam6_capital.txt", "w");

    fputs($filep, $upper);

    fclose($filep);

    // //2번 방법
    // $data=file("exam6.txt");

    // $filep2=fopen("./exam6_capital.txt","w");
    // foreach($data as $line){
    //     fputs($filep2,strtoupper($line));
    // }

    // fclose($filep2);

    // //3번 방법
    // $filep3=fopen("./exam6.txt","r");
    // $newfilep=fopen("./exam6_capital.txt","w");

    // while($line=fgets($filep3)){
    //     fputs($newfilep,strtoupper($line));
    // }

    // fclose($filep3);
    // fclose($newfilep);