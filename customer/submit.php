<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "nidz251100", "grocery");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$productid = mysqli_real_escape_string($link, $_REQUEST['product']);
$user_id = 6;
$quantity = mysqli_real_escape_string($link, $_REQUEST['qty']);

// Attempt insert query execution

$sql = "INSERT INTO cart (prod_id, user_id,quantity) VALUES ('$productid', '$user_id','$quantity')";
if(mysqli_query($link, $sql)){
    
header("Location: prod.php");
exit();

} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>