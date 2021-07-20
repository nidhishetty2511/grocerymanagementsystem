<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "nidz251100", "grocery");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$name = mysqli_real_escape_string($link, $_REQUEST['name']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);
$pass = mysqli_real_escape_string($link, $_REQUEST['pass']);
$status = True;
// Attempt insert query execution
$sql = "INSERT INTO users (name, email, pass,status) VALUES ('$name', '$email','$pass','$status')";
if(mysqli_query($link, $sql)){
    
header("Location: details.php");
exit();

} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>