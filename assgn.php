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
$sql = "create table tcet
(
    ID int NOT NULL,
    Name varchar(20),
    Roll_no int(20),
    Class varchar(20),
    Division varchar(20)
)";
if($db1->query($sql)=== True){
    echo "success";
}
else{
    echo "error".$db1->error;
}
$db1->close();
?>