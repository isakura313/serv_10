<?php

$request = $_SERVER['REQUEST_URI'];
echo($request);
// switch ($request) {
    if($request == '/serv_10/ad/'){
        require __DIR__ . '/admin/admin.php';
        // break;
     }if($request == '/serv_10/'){
        require __DIR__ . '/main.php';
        // break;
    // case '/about' :
    //     require __DIR__ . '/views/about.php';
    //     break;
     } else{
        http_response_code(404);
        require __DIR__ . '/404.php';
        // break;
    }
