
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

$sql = "SELECT 
product.product_id,
product.product_name,
product.product_price,
product.product_description,
product.product_image,
product.quantity,
product.active,
category.category_name
FROM product INNER JOIN category
ON product.category_id = category.category_id;";
$resultset = mysqli_query($con, $sql) or die("database error:". mysqli_error($con));

$sql2 = "SELECT * FROM CATEGORY";

$category = mysqli_query($con, $sql2) or die("database error:". mysqli_error($con));
?>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product</title>

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
    <link rel="stylesheet" href="css/product.css" type="text/css">
</head>

<body>
<?php require 'header1.php'; ?>
<!-- Featured Section Begin -->
<section class="featured spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Featured Product</h2>
                    </div>
                    <div class="featured__controls">
                        <ul>
                          <li class="active" data-filter="*">All</li>
                          <?php while( $rec = mysqli_fetch_assoc($category)) {
                              echo '<li data-filter=".' .$rec['category_name']. '">'. $rec['category_name'] .'</li>';
                        }  
                            ?>

                           
                        </ul>
                    </div>
                </div>
            </div>


<div class="row featured__filter">
<?php while( $rec = mysqli_fetch_assoc($resultset)) {?>
                <div <?php echo 'class="col-lg-3 col-md-4 col-sm-6 mix '.$rec['category_name'].'"'; ?> >
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="<?php echo $rec['product_image']; ?>"></div>
                        <div class="featured__item__text">
                            <h6 style="border:none; font-size:15px; font-weight:bold; text-align:center;"><?php echo $rec['product_name']; ?></h6>
							<h5 style="border:none; font-size:15px; font-weight:bold; text-align:center;"><?php echo $rec['product_price']; ?></h5>
                            
                                        <form method="POST" action="submit.php">
                                            <input type="number" name="qty" style=" border-radius:5px; font-size:15px; font-weight:bold; text-align:center;" placeholder="Quantity">
                                            <input type="hidden" name="product" <?php echo 'value="'. $rec['product_id'] .'"' ?>>
                                <input type="submit" class="btn btn-primary" name="submit" value="Add to cart" style="background-color: #7fad39; margin-top: 10px;">
                            </form>	
                              
                        </div>
                    </div>
                </div>	
                
                <?php } ?> 
</div>

             </div>
    </section>
    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>

<?php require 'footer.php'; ?>

</body>


