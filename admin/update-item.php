<?php
include "./db.php";

if (isset($_POST['editProduct'])) {

    $get_grocery = "SELECT category_id, category_name FROM category";
    $result = $db->query($get_grocery);

    $productId = $_POST['productId'];
    $get_product = "SELECT * FROM PRODUCT WHERE PRODUCT_ID =". $productId;
    $products = $db->query($get_product);

    // $get_product_query = $db->prepare("SELECT * FROM PRODUCT WHERE PRODUCT_ID = ?");
    // $get_product_query->bind_param("i", $productId);

    // $productId = $_POST['productId'];
    // echo $productId;

    // $product = $get_product_query->execute();
    // echo $product;
    // $get_product_query->close();
    if ($products->num_rows == 1) {
        // output data of each row
        while($product = $products->fetch_assoc()) {

?>





    <!DOCTYPE html>
    <html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Update Item</title>
        <link rel="stylesheet" href="admincss/css/style.css">
        <!-- Bootstrap Core CSS -->
        <link href="../admin/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="../admin/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="../admin/dist/css/sb-admin-2.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="../admin/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    </head>

    <body>
        <div class="wrapper d-flex align-items-stretch">

            <!-- Navigation -->
            <?php include('leftbar.php') ?>
            <!-- Page Content  -->
            <!--nav-->
            <div id="content" class="p-4 p-md-5 pt-5" style="min-width: 60%">
                <div class="row">
                <div class="col-lg-12">
					<h3 style="font-family:'Times New Roman', Times, serif;" class="page-header"> <?php echo strtoupper("Welcome," . " " . "Admin"); ?></h3>
				</div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading"><strong>Update Product</strong></div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-10">
                                        <form action="request/update-item.php" method="post" enctype="multipart/form-data">
                                            <?php echo '<input type="hidden" name="product" value="' . $product["product_id"] . '">'; ?>
                                            <div class="form-group row">
                                                <div class="col-lg-4">
                                                    <label for="category">Product Category<span id="" style="font-size:11px;color:red">*</span> </label>
                                                </div>
                                                <div class="col-lg-6">
                                                    <select class="form-control shadow " required="required" name="category" id="category" value="">
                                                        <?php
                                                        if ($result->num_rows > 0) {
                                                            echo "<option>Choose Category</option>";

                                                            // output data of each row
                                                            while ($row = $result->fetch_assoc()) {
                                                                if ($row["category_id"] == $product["category_id"]) {
                                                                    echo "<option value='" . $row["category_id"] . "' selected>" . $row["category_name"] . "</option>";
                                                                } else {
                                                                    echo "<option value='" . $row["category_id"] . "'>" . $row["category_name"] . "</option>";
                                                                }
                                                            }
                                                        } else {
                                                            echo "<option>No Category available!</option>";
                                                        }

                                                        ?>
                                                    </select>


                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-lg-4">
                                                    <label for="productName">Product Name<span id="" style="font-size:11px;color:red">*</span></label>
                                                </div>
                                                <div class="col-lg-6">
                                                    <input class="form-control shadow" name="productName" id="productName" required="required" <?php echo 'value="'. $product['product_name'] .'"' ?>>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-lg-4">
                                                    <label for="price">Price<span id="" style="font-size:11px;color:red">*</span></label>
                                                </div>
                                                <div class="col-lg-6">
                                                    <input class="form-control shadow" name="price" id="price" required="required" <?php echo 'value="'. $product['product_price'] .'"' ?>>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-lg-4">
                                                    <label for="description">Description<span id="" style="font-size:11px;color:red">*</span></label>
                                                </div>
                                                <div class="col-lg-6">
                                                    <input class="form-control shadow" name="description" id="description" required="required" <?php echo 'value="'. $product['product_description'] .'"' ?>>
                                                </div>
                                            </div>
                                            <!-- <div class="form-group row">
                                                <div class="col-lg-4">
                                                    <label for="file">Image<span id="" style="font-size:11px;color:red">*</span></label>
                                                </div>
                                                <div class="col-lg-6">
                                                    <input type="file" id="file" name="image" accept="image/*" placeholder="Profile Image" class="form-control shadow" required="required">
                                                </div>
                                            </div> -->
                                            <div class="form-group row">
                                                <div class="col-lg-4">
                                                    <label for="quantity">Quantity<span id="" style="font-size:11px;color:red">*</span></label>
                                                </div>
                                                <div class="col-lg-6">
                                                    <input class="form-control shadow" name="quantity" id="quantity" required="required" <?php echo 'value="'. $product['quantity'] .'"' ?>>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-lg-4">
                                                    <label for="isActive">State<span id="" style="font-size:11px;color:red">*</span> </label>
                                                </div>
                                                <div class="col-lg-6">

                                                    <select class="form-control shadow " name="isActive" id="isActive" required="required">
                                                        <option>---Select State---</option>
                                                        <?php if ($product['active']) {
                                                          echo'  <option value="1" style="color: black;" selected>Active</option>
                                                            <option value="0" style="color: black;">Inactive</option>';

                                                        } else {
                                                            echo'  <option value="1" style="color: black;">Active</option>
                                                            <option value="0" style="color: black;" selected>Inactive</option>';
                                                        }?>

                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-lg-4">
                                                </div>
                                                <div class="col-lg-6">
                                                    <input type="submit" class="btn btn-primary" name="UpdateProduct" value="Create" style="margin-top: 10px;">
                                                </div>
                                            </div>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <script src="../admin/bower_components/jquery/dist/jquery.min.js" type="text/javascript"></script>


        <script src="../admin/bower_components/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="../admin/bower_components/metisMenu/dist/metisMenu.min.js" type="text/javascript"></script>

        <!-- Custom Theme JavaScript -->
        <script src="../admin/dist/js/sb-admin-2.js" type="text/javascript"></script>

        </form>
    </body>

    </html>

<?php 
}
} else {
    echo "more";
}

} else {
    header("Location: http://localhost/grocery/1/admin/view-item.php");
    exit;
} ?>