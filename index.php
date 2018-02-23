<?php
// error_reporting(E_ALL);
// ini_set('display_errors', '1');
//

$x = http_build_query($_REQUEST);





    if ($_SERVER['REQUEST_METHOD'] === "POST") {
try {

      $field_em = $_POST['email_home'];
      $field_e = $_POST['event'];
      $fields = array($field_em,$field_e);
      $fp = fopen('file.csv', 'a');
      fputcsv($fp, $fields);
      echo "sucess";

    } catch (Exception $e) {


          $fp = fopen('error_requests.txt', 'a');
          $data = "\n".$e->getMessage();
          fwrite($handle, $data);

          $data = $x;
          fwrite($handle, $data);

          fclose($handle);


    echo 'Caught exception: ',  $e->getMessage(), "\n";

    }

   }else {
     echo "Not a resource";
   }
