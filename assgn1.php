<?php

$lh = "localhost";
$user = "root";
$pass='nidz251100';
$db = 'grocery';

$db1 = new mysqli($lh,$user,$pass,$db);

if(!$db1){
    die ("Connection Failed : " . mysqli_connect_error());
}
else{
    echo "Connection Successful";
}
$sql = "INSERT INTO tcet (Name, Roll_no, Class, Division) VALUES ('Nidhi', 68,'TEIT', 'B')";

if($db1->query($sql)=== True){
    echo "success";
}
else{
    echo "error".$db1->error;
}
$db1->close();
?>