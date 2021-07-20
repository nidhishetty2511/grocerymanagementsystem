<?php

$lh = "localhost";
$user = "root";
$pass='nidz251100';
$db = 'grocery';

$db1 = new mysqli($lh,$user,$pass,$db);

if(!$db1){
    die ("Connection Failed : " . mysqli_connect_error());
}
$con = mysqli_connect($lh,$user,$pass,$db);
$user = 6;//session through
$date = (string)date("Y-m-d");
$getcart = "SELECT 
cart.id,
cart.quantity,
product.product_name,
product.product_price
FROM cart INNER JOIN product
ON cart.prod_id = product.product_id WHERE user_id = ".$user."";
//$sql = "SELECT product_name, product_price FROM cart";
$resultset = mysqli_query($con, $getcart) or die("database error:". mysqli_error($con));
$neworder =  "INSERT into orders (user_id,date,is_confirmed,amount) values (".$user.", '".$date."',0,0)";
$res = mysqli_query($con, $neworder) or die("database error:". mysqli_error($con));
$last_id = mysqli_insert_id($con);
$total = 0;
 while( $rec = mysqli_fetch_assoc($resultset)) {
     
     $total += $rec['product_price'] * $rec['quantity'];
$orderdata = "INSERT into orderdata (orderid,prod_name,prod_price,quantity) values(".$last_id.",'".$rec['product_name']."',".$rec['product_price'].",".$rec['quantity'].")";
$order =  mysqli_query($con, $orderdata) or die("database error:". mysqli_error($con));

 }
 $enter_ammount = "UPDATE orders set amount= ".$total." where order_id = ".$last_id;
 $amount_enter =mysqli_query($con, $enter_ammount) or die("database error:". mysqli_error($con));

 $cart = "delete from cart where user_id = ".$user ;
 $cart_deleted =mysqli_query($con, $cart) or die("database error:". mysqli_error($con));
 header("location: orders.php");

mysqli_close($con);
?>
