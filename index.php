<?php
    header('Access-Control-Allow-Origin: https://www.knowledgecoop.com/');
    header("Access-Control-Allow-Credentials: true");
    header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS');
    header('Access-Control-Max-Age: 1000');
    header('Access-Control-Allow-Headers: Content-Type, Content-Range, Content-Disposition, Content-Description');




    if( isset($_POST[]) )
    {
         //$fromPerson = '+from%3A'.$_POST['fromPerson'];
         // echo $fromPerson;
         return true;

    }


// Show all information, defaults to INFO_ALL
//phpinfo();
