<?php
error_reporting(0);
include "./db.php";
$get_product = "SELECT 
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
$result = $db->query($get_product);


?>





<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>View Item</title>
    <link rel="stylesheet" href="admincss/css/style.css">
    <link href="../admin/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../admin/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">
    <link href="../admin/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">
    <link href="../admin/bower_components/datatables-responsive/css/dataTables.responsive.css" rel="stylesheet">
    <link href="../admin/dist/css/sb-admin-2.css" rel="stylesheet">
    <link href="../admin/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

</head>

<body>

    <div class="wrapper d-flex align-items-stretch">

        <!-- Navigation -->
        <?php include('leftbar.php') ?>
        <!-- Page Content  -->

        <div style="width:70%;" id="content" class="p-4 p-md-5 pt-5">
            <div class="row">
            <div class="col-lg-12">
					<h3 style="font-family:'Times New Roman', Times, serif;" class="page-header"> <?php echo strtoupper("Welcome," . " " . "Admin"); ?></h3>
				</div>
                <!-- /.col-lg-12 -->
            </div>
            <?php if ($_GET['isDelete']) {
                echo '<div class="row">
                <div class="col-lg-6">
                    <div class="alert alert-danger" role="alert">
                        Product is deleted successfully!
                    </div>
                </div>
            </div>';
            } ?>
            <?php if ($_GET['isUpdate']) {
                echo '<div class="row">
                <div class="col-lg-6">
                    <div class="alert alert-success" role="alert">
                        Product is updated successfully!
                    </div>
                </div>
            </div>';
            } ?>

            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <?php if (!$result->num_rows > 0) {
                            echo '<div class="panel-heading">
                            <strong>No Products Available</strong>
                        </div>';
                        } else { ?>


                            <div class="panel-heading text-center">
                                <h4><strong>View Product</strong> </h4>
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">

                                <div class="dataTable_wrapper">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                            <tr>
                                                <th>Sr. No.</th>
                                                <th>Product Category</th>
                                                <th>Name</th>
                                                <th>Price</th>
                                                <th>Description</th>
                                                <th>Quantity</th>
                                                <th>State</th>

                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php



                                            // output data of each row
                                            $count = 0;
                                            while ($row = $result->fetch_assoc()) {
                                                $count += 1;
                                                echo '<tr class="odd gradeX">';
                                                echo "<td>" . $count . "</td>";
                                                echo "<td>" . $row["category_name"] . "</td>";
                                                echo "<td>" . $row["product_name"] . "</td>";
                                                echo "<td>" . $row["product_price"] . "</td>";
                                                echo "<td>" . $row["product_description"] . "</td>";
                                                echo "<td>" . $row["quantity"] . "</td>";
                                                if ($row["active"]) {
                                                    echo "<td>Active</td>";
                                                } else {

                                                    echo "<td>Inactive</td>";
                                                }


                                                // <p class="fa fa-edit"></p> 
                                                echo '<td>
                                                            
                                                            
                                                            <form action="update-item.php" method="post" style="float:left">
                                                                <input type="hidden" name="productId" value="' . $row["product_id"] . '">
                                                                <button style="border: none;" name="editProduct" type="submit"><span class="fa fa-edit"></span></button>
                                                            </form>
                                                            
                                                            <form action="request/delete-item.php" method="post">
                                                                <input type="hidden" name="productId" value="' . $row["product_id"] . '">
                                                                <button style="border: none;" name="deleteProduct" type="submit"><span class="fa fa-times-circle"></span></button>
                                                            </form>
                                                            
                                                            
                                                            </td></tr>';
                                            }
                                            ?>



                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.table-responsive -->

                            </div>
                            <!-- /.panel-body -->
                        <?php } ?>
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->



        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../admin/bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../admin/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../admin/bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="../admin/bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="../admin/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../admin/dist/js/sb-admin-2.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
        $(document).ready(function() {
            $('#dataTables-example').DataTable({
                responsive: true
            });
        });
    </script>

</body>

</html>