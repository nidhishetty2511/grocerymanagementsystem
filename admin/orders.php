<?php
error_reporting(0);
include "./db.php";
$get_product = "SELECT 
    orders.order_id,
    orders.date,
    orders.is_confirmed,
    users.name
    FROM orders INNER JOIN users
    ON orders.user_id = users.id;";
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
    <title>Orders</title>
    <link rel="stylesheet" href="admincss/css/style.css">
    <link href="../admin/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../admin/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">
    <link href="../admin/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">
    <link href="../admin/bower_components/datatables-responsive/css/dataTables.responsive.css" rel="stylesheet">
    <link href="../admin/dist/css/sb-admin-2.css" rel="stylesheet">
    <link href="../admin/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">


    <style>
        .row{
            display: block;


        }
    </style>
</head>

<body>

    <div class="wrapper d-flex align-items-stretch">

        <!-- Navigation -->
        <?php include('leftbar.php') ?>
        <!-- Page Content  -->

        <div style="width:100%;" id="content" class="p-4 p-md-5 pt-5">
            <div class="row">
                <div class="col-lg-12">
					<h3 style="font-family:'Times New Roman', Times, serif;" class="page-header"> <?php echo strtoupper("Welcome," . " " . "Admin"); ?></h3>
				</div>
                <!-- /.col-lg-12 -->
            </div>
            
            <!-- /.row -->
            <div  class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <?php if (!$result->num_rows > 0) { 
                            echo '<div class="panel-heading">
                            <strong>No Products Available</strong>
                        </div>';
                        } else { ?>
                            
                            <div class="panel-heading text-center">
                                <h4><strong>Orders</strong> </h4>
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">

                                <div class="dataTable_wrapper">
                                    <table class="table  table-striped table-bordered table-hover"  id="dataTables-example">
                                        <thead>
                                            <tr>
                                                <th>Sr. No.</th>
                                                <th>Order ID</th>
                                                <th>Customer Name</th>
                                                <th>Date</th>
                                                <th>Status</th>
                                                <th>Options</th>
                                                
                                                
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
                                                echo "<td>" . $row["order_id"] . "</td>";
                                                echo "<td>" . $row["name"] . "</td>";
                                                echo "<td>" . $row["date"] . "</td>";

                                                if ($row["is_confirmed"]) {
                                                    echo '<td><p id="str' . $row['order_id'] . '">Confirmed</p></td>';
                                                } else {

                                                    echo '<td><p id="str' . $row['order_id'] . '">Pending</p></td>';
                                                }?>
                                                <td>
                                                <div class="form-group">
                                                        <select class="form-control" onchange="active_disactive_user(this.value, <?php echo $row['order_id']; ?>)">
                                                            <?php
                                                            if ($row['is_confirmed']) {
                                                                echo '<option value="1" selected>Confirm</option>';
                                                                echo '<option value="0">Pending</option>';
                                                            } else {
                                                                echo '<option value="1">Confirm</option>';
                                                                echo '<option value="0" selected>Pending</option>';
                                                            }
                                                            ?>

                                                        </select>
                                                    </div>
                                                </td>
                                          <?php  }  ?>

                                           

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
                // responsive: true
                "dom": '<"top"if>rt<"bottom"lp><"clear">'
                // "dom": 'lf<t>p'
                // "dom": '<lf<t>ip>'
            });
        });
    </script>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->

    <script type="text/javascript">
    function active_disactive_user(val, orderId) {
        $.ajax({
            type: 'post',
            url: 'request/change_order.php',
            data: {
                val: val,
                orderId: orderId
            },
            success: function(result) {

                if (result == 1) {
                    if (document.getElementById("str" + orderId).innerHTML == "Confirmed") {
                        document.getElementById("str" + orderId).innerHTML = "Pending";
                    } else {
                        document.getElementById("str" + orderId).innerHTML = "Confirmed";
                    }

                }
            }
        });

    }
</script>

</body>

</html>