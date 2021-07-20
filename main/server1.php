<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "nidz251100", "grocery");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$fname = mysqli_real_escape_string($link, $_REQUEST['fname']);
$lname = mysqli_real_escape_string($link, $_REQUEST['lname']);
$add1 = mysqli_real_escape_string($link, $_REQUEST['add1']);
$add2 = mysqli_real_escape_string($link, $_REQUEST['add2']);
$state = mysqli_real_escape_string($link, $_REQUEST['state']);
$pin = mysqli_real_escape_string($link, $_REQUEST['pin']);
$con = mysqli_real_escape_string($link, $_REQUEST['con']);
 
// Attempt insert query execution
$sql = "INSERT INTO details (fname, lname, add1, add2, state, pin, con) VALUES ('$fname', '$lname','$add1', '$add2','$state', '$pin','$con')";
if(mysqli_query($link, $sql)){
    
header("Location: login.php");
exit();

} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>