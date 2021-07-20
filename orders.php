
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
$getcart = "SELECT 
order_id,date,amount
FROM orders WHERE user_id = ".$user."";
//$sql = "SELECT product_name, product_price FROM cart";
$resultset = mysqli_query($con, $getcart) or die("database error:". mysqli_error($con));

// 
//     $record[] = $row;
// }
mysqli_close($con);
?>



<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Grocery | Orders</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
    <!-- Shoping Cart Section Begin -->
    <?php require 'header1.php'; ?>
    
    <section class="shoping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
					<div class="section-title">
                        <h2>Orders</h2>
                    </div>
                    <div class="shoping__cart__table">
                        <table>
                            <thead>
                                <tr>
                                    <th>ORDER ID
                                    </th>
                                    <th>DATE</th>
                                    <th>AMOUNT</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php while( $rec = mysqli_fetch_assoc($resultset)) {?>
                                <tr>
                                    <td class="shoping__cart__item">
                                        <img src="img/cart/cart-1.jpg" alt="">
                                        <h5><?php echo $rec['order_id']; ?></h5>
                                    </td>
                                    <td class="shoping__cart__price">
                                    <?php echo $rec['date'];?>
                                    </td>
                                    <td class="shoping__cart__quantity">
                                    <?php echo $rec['amount'];?>
                                    </td>
                                    
                                
                                </tr>
                            <?php } ?> 

                                </tbody>
                        </table>
                    </div>
                </div>
            </div>
            
        </div>
    </section>
    <!-- Shoping Cart Section End -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>

<?php include 'footer.php'; ?>

</body>

</html>