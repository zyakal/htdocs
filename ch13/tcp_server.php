<?php
    $addr = gethostbyname("127.0.0.1");
    $port = 5091;
    print $addr;

    if(($sock = socket_create(AF_INET, SOCK_STREAM, 0))<0){
        echo "socket_create() failed: reason :" . socket_strerror($sock) . "<br>";
    }

    if(($ret = socket_bind($sock, $addr, $port ==false))<0){
        echo "socket_bind() failed: reason :" . socket_strerror($ret) . "<br>";
    }