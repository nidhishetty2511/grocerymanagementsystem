<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS"
        crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <title></title>
<style>
    .navbar-inverse
{
    background-color: #2c3e50;
}
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-md navbar-dark bg-dark navbar-fixed-top">
        <a class="navbar-brand text-light font-weight-bold px-3 ">
            <span class="glyphicon glyphicon-shopping-cart"></span> Grocery</a>
        <button type="button" class="navbar-toggler ml-auto custom-toggler " data-toggle="collapse" data-target="#nav">
            <span class="navbar-toggler-icon "></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between" id="nav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link text-light font-weight-bold px-3" href="./home.php">
                    <span class="glyphicon glyphicon-home"></span> Home</a>
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link text-light font-weight-bold px-3" href="#">Contact</a>
                </li> -->
            </ul>
            <ul class="nav navbar-nav navbar-right bg-dark text-dark font-weight-bold px-3">
                    <li class="nav-item">
                            <a class="nav-link text-light font-weight-bold px-3" href="customer/prod.php">
                            <span class="glyphicon glyphicon-tag"></span> Products</a>
                        </li>
                        <li>
                    <a class="nav-link text-light font-weight-bold px-3" href="cart.php">
                        <span class="glyphicon glyphicon-shopping-cart"></span> My Cart</a>
                </li>
                <li>
                    <a class="nav-link text-light font-weight-bold px-3" href="orders.php">
                        <span class="glyphicon glyphicon-list"></span> My Orders</a>
                </li>
                <!-- <li>
                    <a class="nav-link text-light font-weight-bold px-3" href="#">
                        <span class="glyphicon glyphicon-user"></span> Profile</a>
                </li> -->
                <li>
                    <a class="nav-link text-light font-weight-bold px-3" href="logout.php">
                        <span class="glyphicon glyphicon-log-out"></span> Logout</a>
                </li>

            </ul>
        </div>
        </form>
        </div>
    </nav>
</body>

</html>