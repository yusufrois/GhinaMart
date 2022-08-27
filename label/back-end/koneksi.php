<?php
 header("Access-Control-Allow-Origin: *");
 header('Access-Control-Allow-Methods: POST');
 header('Access-Control-Max-Age: 1000');
 // $con = mysqli_connect("localhost:3306","root","","ghinamart_label") or die ("could not connect database");
 $con = mysqli_connect("localhost:3306","root","","ghinamart") or die ("could not connect database");
?>
