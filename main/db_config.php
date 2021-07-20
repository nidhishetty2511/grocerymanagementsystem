<?php

$lh = "localhost";
$user = "root";
$pass='nidz251100';
$db = 'grocery';

$db1 = new mysqli($lh,$user,$pass,$db);

if(!$db1){
    die ("Connection Failed : " . mysqli_connect_error());
}

?>