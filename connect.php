<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<?php
$conn = "host=ec2-52-87-58-157.compute-1.amazonaws.com port=5432 dbname=d6ta5n5v2gcpl2 user=vbvfmzkrwcdhub password=8ba1bca82f6b4d577ab221c7b6b3705bccf4ed5e1085307c14c13a7b81c3a5b6";
$cnn = pg_connect($conn);
if (isset($_POST['_use'])) {
    $usename = $_POST['_use'];
}
if (isset($_POST['_pass'])) {
    $pass = $_POST['_pass'];
}
$result = pg_query($cnn, "select * from login where _use = '" . $username . "' and _pass = '" . $pass . "'");
if($result){
//echo "thanh cong";
     header('location:home.php');
} else {
  echo 'that bai';
}
//        while($row= pg_fetch_row($result)){
//            if($row[0]=$usename && $row[1]=$pass){
//                echo 'success';
//            }
//        } 
?>
  
