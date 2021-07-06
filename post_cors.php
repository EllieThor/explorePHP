<?php 
    $input = json_decode(file_get_contents("php://input"), true);
   // print_r($input); 
   $name = $input['name'];
   echo $name;
?>