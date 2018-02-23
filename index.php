<?php





    if ($_SERVER['REQUEST_METHOD'] === "POST") {
      $field_em = $_POST['email'];
      $field_e = $_POST['event'];
      $fields = array($field_em,$field_e);
      $fp = fopen('file.csv', 'w');
      fputcsv($fp, $fields);
      
      echo "sucess";



   }else {
     echo "Not a resource";
   }

echo "last";
