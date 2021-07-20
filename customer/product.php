<?php 

session_start();

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
                            <li data-filter=".Vegetables">Vegetables</li>
                            <li data-filter=".Fruits">Fruits</li>
                            <li data-filter=".Dairy">Dairy</li>
                            <li data-filter=".Meat">Meat</li>
							<li data-filter=".Spices">Spices</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row featured__filter">
                <div class="col-lg-3 col-md-4 col-sm-6 mix Vegetables">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="images/vegetables/onion.jpg"></div>
                        <div class="featured__item__text">
                            <h6><a href="#">Onion</a></h6>
							<h5>Rs.30.00</h5>
							<div><input type="submit" class="btn btn-primary" name="submit" value="Add to cart" style="background-color: #7fad39; margin-top: 10px;"></div>
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix Vegetables">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="images/vegetables/carrot.jpg">
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">carrot</a></h6>
                            <h5>₹30.00</h5>
							<div><input type="submit" class="btn btn-primary" name="submit" value="Add to cart" style="background-color: #7fad39; margin-top: 10px;"></div>
                        </div>
                    </div>
                </div>
              
				<div class="col-lg-3 col-md-4 col-sm-6 mix Fruits">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="images/Fruits/oranges.jpg">
                            
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">Oranges</a></h6>
                            <h5>₹30.00</h5>
							<div><input type="submit" class="btn btn-primary" name="submit" value="Add to cart" style="background-color: #7fad39; margin-top: 10px;"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix Fruits">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="images/Fruits/grapes.jpg">
                           
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">Grapes</a></h6>
                            <h5>₹30.00</h5>
							<div><input type="submit" class="btn btn-primary" name="submit" value="Add to cart" style="background-color: #7fad39; margin-top: 10px;"></div>
                        </div>
                    </div>
                </div>
                
				<div class="col-lg-3 col-md-4 col-sm-6 mix Spices">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="images/spices/jeera.jpg">
                           
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">jeera</a></h6>
                            <h5>₹30.00</h5>
							<div><input type="submit" class="btn btn-primary" name="submit" value="Add to cart" style="background-color: #7fad39; margin-top: 10px;"></div>
                        </div>
                    </div>
                </div>
                
				<div class="col-lg-3 col-md-4 col-sm-6 mix Dairy">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="images/dairy/butter.jpg">
                            
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">Butter</a></h6>
                            <h5>₹30.00</h5>
							<div><input type="submit" class="btn btn-primary" name="submit" value="Add to cart" style="background-color: #7fad39; margin-top: 10px;"></div>
                        </div>
                    </div>
                </div>
				
				<div class="col-lg-3 col-md-4 col-sm-6 mix Dairy">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="images/dairy/icecream.jpg">
                            
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">Ice Cream</a></h6>
                            <h5>₹30.00</h5>
							<div><input type="submit" class="btn btn-primary" name="submit" value="Add to cart" style="background-color: #7fad39; margin-top: 10px;"></div>
                        </div>
                    </div>
                </div>
				
				<div class="col-lg-3 col-md-4 col-sm-6 mix Dairy">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="images/dairy/Cheese.jpg">
                            
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">Cheese</a></h6>
                            <h5>₹30.00</h5>
							<div><input type="submit" class="btn btn-primary" name="submit" value="Add to cart" style="background-color: #7fad39; margin-top: 10px;"></div>
                        </div>
                    </div>
                </div>
				
				<div class="col-lg-3 col-md-4 col-sm-6 mix Dairy">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="images/dairy/milk.jpg">
                            
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">Milk</a></h6>
                            <h5>₹30.00</h5>
							<div><input type="submit" class="btn btn-primary" name="submit" value="Add to cart" style="background-color: #7fad39; margin-top: 10px;"></div>
                        </div>
                    </div>
                </div>
				
				<div class="col-lg-3 col-md-4 col-sm-6 mix Dairy">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="images/dairy/yoghurt.jpg">
                            
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">yoghurt</a></h6>
                            <h5>₹30.00</h5>
							<div><input type="submit" class="btn btn-primary" name="submit" value="Add to cart" style="background-color: #7fad39; margin-top: 10px;"></div>
                        </div>
                    </div>
                </div>
				
				<div class="col-lg-3 col-md-4 col-sm-6 mix Dairy">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="images/dairy/paneer.jpg">
                           
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">Paneer</a></h6>
                            <h5>₹30.00</h5>
							<div><input type="submit" class="btn btn-primary" name="submit" value="Add to cart" style="background-color: #7fad39; margin-top: 10px;"></div>
                        </div>
                    </div>
                </div>
                
				
				<div class="col-lg-3 col-md-4 col-sm-6 mix Meat">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="images/Meat/mutton.jpg">
                            
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">Mutton</a></h6>
                            <h5>₹30.00</h5>
							<div><input type="submit" class="btn btn-primary" name="submit" value="Add to cart" style="background-color: #7fad39; margin-top: 10px;"></div>
                        </div>
                    </div>
                </div>
				
				<div class="col-lg-3 col-md-4 col-sm-6 mix Meat">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="images/Meat/chicken.jpg">
                            
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">Chicken</a></h6>
                            <h5>₹30.00</h5>
							<div><input type="submit" class="btn btn-primary" name="submit" value="Add to cart" style="background-color: #7fad39; margin-top: 10px;"></div>
                        </div>
                    </div>
                </div>
                
				<div class="col-lg-3 col-md-4 col-sm-6 mix Meat">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="images/Meat/prawns.jpg">
                            
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">Prawns</a></h6>
                            <h5>₹30.00</h5>
							<div><input type="submit" class="btn btn-primary" name="submit" value="Add to cart" style="background-color: #7fad39; margin-top: 10px;"></div>
                        </div>
                    </div>
                </div>
				
				<div class="col-lg-3 col-md-4 col-sm-6 mix Meat">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="images/Meat/pomfret.jpg">
                            
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">Pomfret</a></h6>
                            <h5>₹30.00</h5>
							<div><input type="submit" class="btn btn-primary" name="submit" value="Add to cart" style="background-color: #7fad39; margin-top: 10px;"></div>
                        </div>
                    </div>
                </div>
				
				<div class="col-lg-3 col-md-4 col-sm-6 mix Meat">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="images/Meat/salmon.jpg">
                            
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">Salmon</a></h6>
                            <h5>₹30.00</h5>
							<div><input type="submit" class="btn btn-primary" name="submit" value="Add to cart" style="background-color: #7fad39; margin-top: 10px;"></div>
                        </div>
                    </div>
                </div>
				
				<div class="col-lg-3 col-md-4 col-sm-6 mix Meat">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="images/Meat/lobster.jpg">
                            
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">lobster</a></h6>
                            <h5>₹30.00</h5>
							<div><input type="submit" class="btn btn-primary" name="submit" value="Add to cart" style="background-color: #7fad39; margin-top: 10px;"></div>
                        </div>
                    </div>
                </div>
				
				<div class="col-lg-3 col-md-4 col-sm-6 mix Meat">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="images/Meat/crabs.jpg">
                            
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">Crabs</a></h6>
                            <h5>₹30.00</h5>
							<div><input type="submit" class="btn btn-primary" name="submit" value="Add to cart" style="background-color: #7fad39; margin-top: 10px;"></div>
                        </div>
                    </div>
                </div>
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
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

</html>