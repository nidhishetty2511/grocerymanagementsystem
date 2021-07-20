<?php

$localhost = "localhost";
$user = "root";
$pass = "nidz251100";
$dbname = "grocery";

$db = new mysqli($localhost, $user, $pass, $dbname);

if(!$db){
    die ("Error : " . mysqli_connect_error());
} else {
    // echo "Connection Successful!";
}

// $query1 = "CREATE TABLE HEY(ID INT NOT NULL, NAME VARCHAR(25))";

// if($db->query($query1) === True){
//     echo "<br>Table created successfully";
// } else {
//     echo "<br>Error : " . $db->error;
// }

// $db-> close();


?>  