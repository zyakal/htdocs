<?php
    echo "Country : ", $_COOKIE['country'], "<br>";

    $_COOKIE['country'] = "UK";
    echo "Country : ", $_COOKIE['country'], "<br>";

    unset($_COOKIE['country']);//두개가 한셋트로 사용되어야 쿠키가 삭제된다.
    setcookie("country");  //두개가 한셋트로 사용되어야 쿠키가 삭제된다.


    echo "Country : ", $_COOKIE['country'], "<br>";