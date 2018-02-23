<?php

    if ($_POST) {


      $field_em = $_POST['email'];
      $field_e = $_POST['event'];

      echo $field_em.' '.$field_e;


        // The request is using the POST method
      //
      // $fp = fopen('file.csv', 'w');
      //
      // fputcsv($fp, $fields);
      //
      //
      //
      // echo "sucess";



   }else {
     echo "Not a resource";
   }
