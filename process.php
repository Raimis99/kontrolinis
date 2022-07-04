<?php
include('config.php');

extract($_POST);
$query = "INSERT INTO 'contact-data'('name','surname','phone','email','subject','message') VALUE('".$name."','".$surname."','".$email."','".$phone."','".$subject."','".$message."')";
$result = $mysql->query($query);
if(!$result){
    echo"Kazkas blogai".$mysql->error;
}

echo"aciu uz jusu uzklausa";
$mysql->close();








?>