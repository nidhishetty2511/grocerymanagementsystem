<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- JS, Popper.js, and jQuery -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
    integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
    crossorigin="anonymous"></script>
  <!------ Include the above in your HEAD tag ---------->

  <link rel="stylesheet" href="https://unpkg.com/flickity@2.0/dist/flickity.min.css">
  <script src="https://unpkg.com/flickity@2.0/dist/flickity.pkgd.min.js"></script>
  <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS"
      crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k"
      crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  
  <link rel="stylesheet" href="gallery.css">
  <title>Grocery</title>
</head>
<body>


<?php require './header.php'; ?>

<div id="demo" class="carousel slide" data-ride="carousel">

    <!-- Indicators -->
    <ul class="carousel-indicators">
        <li data-target="#demo" data-slide-to="0" class="active"></li>
        <li data-target="#demo" data-slide-to="1"></li>
        <li data-target="#demo" data-slide-to="2"></li>
    </ul>

    <!-- The slideshow -->
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="images/1.jpeg" class="caro" width="100%">
            <div class="carousel-caption">
                <!-- <p class="car">Grocery Management System</p> -->
            </div>
        </div>
        <div class="carousel-item">
            <img src="images/2.jpeg" class="caro" width="100%">
            <div class="carousel-caption">
                <!-- <p class="car">Grocery Management System</p> -->
            </div>
        </div>
        <div class="carousel-item">
            <img src="images/3.jpg" class="caro" width="100%">
            <div class="carousel-caption">
                <!-- <p class="car">Grocery Management System</p> -->
            </div>
        </div>
    </div>

    <!-- Left and right controls -->
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
        <span class="carousel-control-next-icon"></span>
    </a>
</div>
<div class="container">

    <div class="col-sm-15 text-center">

        <h1><b>| About us |</b></h1>
        <p class="about">We at Sebbzay established in 2011,have almost a decade of experience in fetching together one of India's premium high quality
            edibles and perishables from our wide range produce inventory directly to your doorstep
            We at Sebbzay bring all our local labourers and producers together in collecting, verifying and delivering upscale groceries and essential at You.
            All our products are handpicked bg our network of team and give all quality assurance and no adulterated pure organics and various produce at your disposal<br>
            Please do not hesitate to<a class="link" href="contact"> contact us </a>or mail us at at dummy@gmail.com</p>
    </div>


</div>
<div class="cat">
    <h1 class="text-center">| Our Products |</h1>
</div>
<div class="carousel-wrapper">
    <div class="carousel" data-flickity>
        <div class="carousel-cell">
            <div class="card" style="width: 18rem;">
                <div class="img-container">
                    <img src="images/vegetables.jpg" class="i" alt="...">
                </div>
                <div class="card-body">
                    <h5 class="card-title text-center">Vegetables</h5>
                    <div class="text-center">

                        <a href="main/login.php" class="btn btn-secondary">See</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="carousel-cell">
            <div class="card" style="width: 18rem;">
                <div class="img-container">
                    <img src="images/fruits.jpg" class="i" alt="...">
                </div>
                <div class="card-body">
                    <h5 class="card-title text-center">Fruits</h5>
                    <div class="text-center">
                        <a href="main/login.php" class="btn btn-secondary ">See</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-cell">
            <div class="card" style="width: 18rem;">
                <div class="img-container">
                    <img src="images/dairy.jpg" class="i" alt="...">
                </div>
                <div class="card-body">
                    <h5 class="card-title text-center">Dairy</h5>

                    <div class="text-center">
                        <a href="main/login.php" class="btn btn-secondary ">See</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-cell">
            <div class="card" style="width: 18rem;">
                <div class="img-container">

                    <img src="images/meat.jpg" class="i" alt="...">
                </div>
                <div class="card-body">
                    <h5 class="card-title text-center">Meat</h5>
                    <div class="text-center">
                        <a href="main/login.php" class="btn btn-secondary ">See</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-cell">
            <div class="card" style="width: 18rem;">
                <div class="img-container">

                    <img src="images/snacks.jpg" class="i" alt="...">
                </div>
                <div class="card-body">
                    <h5 class="card-title text-center">Baked snacks</h5>
                    <div class="text-center">
                        <a href="main/login.php" class="btn btn-secondary ">See</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="carousel-cell">
            <div class="card" style="width: 18rem;">
                <div class="img-container">

                    <img src="images/spices.jpg" class="i" alt="...">
                </div>
                <div class="card-body">
                    <h5 class="card-title text-center">Spices</h5>

                    <div class="text-center">
                        <a href="main/login.php" class="btn btn-secondary ">See</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<?php require './footer.php'; ?>