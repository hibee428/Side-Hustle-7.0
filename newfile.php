<?php

$db_connect = mysqli_connect('localhost', 'root', '', 'text_db');


 if ($db_connect){
    echo "Connected Successfully ";
 }else
 echo "Not Connected";
?>
