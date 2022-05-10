<?php
    $name = "홍길동";
    $age = 22;
    $height = 177.32;
    $blood_type = 'O';

    printf("제 이름은 %s입니다. 나이는 %d세이고, 키는 %fcm입니다. 혈액형은 %s입니다." 
    //%s는 string %d는 정수 %f는 float 실수
    //%4d 라고 하면 4칸차지하게 할 수 있다. 남는 칸은 빈칸처리
    //%.2f 라고 하면 소수점 두 자리까지 나타나도록 함
    , $name, $age, $height, $blood_type);

    

