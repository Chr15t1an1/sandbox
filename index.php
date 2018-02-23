<?php

// Report all errors except E_NOTICE
error_reporting(E_ALL & ~E_NOTICE);





    if ($_SERVER['REQUEST_METHOD'] === "POST") {


try {

      $field_em = $_POST['email'];
      $field_e = $_POST['event'];
      $fields = array($field_em,$field_e);
      $fp = fopen('file.csv', 'w');
      fputcsv($fp, $fields);
      echo "sucess";

    } catch (Exception $e) {
        echo 'Caught exception: ',  $e->getMessage(), "\n";
    }

   }else {
     echo "Not a resource";
   }

echo "last";
