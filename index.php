<?php
    // header('Access-Control-Allow-Origin: https://www.knowledgecoop.com/');
    // header("Access-Control-Allow-Credentials: true");
    // header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS');
    // header('Access-Control-Max-Age: 1000');
    // header('Access-Control-Allow-Headers: Content-Type, Content-Range, Content-Disposition, Content-Description');


    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // The request is using the POST method
        return "hi";
   }else {
     return "Noooooooo!";
   }


// Show all information, defaults to INFO_ALL
// phpinfo();
