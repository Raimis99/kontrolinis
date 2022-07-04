<?php
include('config.php');

extract($_POST);
$query = "INSERT INTO 'contact-data' ('name','surname','phone','email','subject','message')
VALUES ('".$name."','".$surname."','".$email."','".$phone."','".$subject."','".$message."')";
$result = $mysqli->query($query);
if(!$result){
    echo"Kazkas blogai".$mysqli->error;
}

echo"aciu uz jusu uzklausa";
$mysqli->close();


print_r($_POST);





?>