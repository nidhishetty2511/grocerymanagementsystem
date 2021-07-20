<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cart</title>

    <!-- Google Font -->

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/sweetalert.min.js" ></script>
    <link rel="stylesheet" href="css/font-awesome.min.css">

</head>

<body>
    <!-- Shoping Cart Section Begin -->
    <?php require 'header1.php'; ?>
    <div class="container">
    <table class="table table-hover">
    <thead>
      <tr>
        <th>Product</th>
        <th>Quantity</th>
        <th>Rate</th>
        <th>Amount</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
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

$sql = "SELECT product_name, product_price FROM cart";
$resultset = mysqli_query($con, $sql) or die("database error:". mysqli_error($con));

$record = array();
while( $row = mysqli_fetch_assoc($resultset)) {
    
            echo '<tr>';
            echo '<td>'.$row['product_name'].'</td>';
            //echo '<td>'.$row['quantity'].'</td>';
            echo '<td>₹'.$row['product-price'].'</td>';
            //echo '<td>₹'.$row['amount'].'</td>';
            echo '<td>';
            echo '<a href="#"><i class="fa fa-trash fa-lg text-danger"></i>';
            echo '</a>';
            echo '</td>';
            echo '</tr>';
            $totalamount += $row['amount'];
          }
      ?>
      
    </tbody>
  </table>
</div>
    <div id="checkout">
        <p class="lead text-right">
            Total Amount: <i class="fa fa-inr fa-lg"></i><?php echo $totalamount; ?>/-
        </p>
        
        <form class="float-right" action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
            <input type="submit" class="btn btn-primary" value="Checkout">
        </form>
        </div>
    <!-- Shoping Cart Section End -->

    <!-- Js Plugins -->
    
<?php include 'footer.php'; ?>

</body>

</html>





    
    
        