<?php
// include('db.php');
// $select=mysql_query("select * from manage");

include "./db.php";
$get_product = "SELECT * FROM USERS;";
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
    <title>Users</title>
    <link rel="stylesheet" href="admincss/css/style.css">
    <link href="../admin/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../admin/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">
    <link href="../admin/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">
    <link href="../admin/bower_components/datatables-responsive/css/dataTables.responsive.css" rel="stylesheet">
    <link href="../admin/dist/css/sb-admin-2.css" rel="stylesheet">
    <link href="../admin/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <style>
        /* div{
        height: 100%;
       } */
    </style>
</head>

<body>

    <div class="wrapper  d-flex  align-items-stretch">

        <!-- Navigation -->
        <?php include('leftbar.php') ?>
        <!-- Page Content  -->

        <div style="width:90%;" id="content" class="p-4 p-md-5 pt-5">
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
                        <?php if (!$result->num_rows > 0) {
                            echo '<div class="panel-heading">
                            <strong>No Products Available</strong>
                        </div>';
                        } else { ?>


                            <div class="panel-heading text-center">
                                <h4>
                                    <strong>Users</strong>

                                </h4>
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">

                                <div class="dataTable_wrapper">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Username</th>
                                                <th>Current Status</th>
                                                <th>Change Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            while ($row = mysqli_fetch_assoc($result)) {
                                            ?>

                                                <tr>
                                                    <td><?php echo $row['id']; ?> </td>
                                                    <td><?php echo $row['name']; ?></td>
                                                    <td>
                                                        <?php
                                                        if ($row['status']) {
                                                            echo '<p id="str' . $row['id'] . '">Active</p>';
                                                        } else {
                                                            echo '<p id="str' . $row['id'] . '">Inactive</p>';
                                                        }
                                                        ?>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <select class="form-control" onchange="active_disactive_user(this.value, <?php echo $row['id']; ?>)">
                                                                <?php
                                                                if ($row['status']) {
                                                                    echo '<option value="1" selected>Active</option>';
                                                                    echo '<option value="0">Inactive</option>';
                                                                } else {
                                                                    echo '<option value="1">Active</option>';
                                                                    echo '<option value="0" selected>Inactive</option>';
                                                                }
                                                                ?>

                                                            </select>
                                                        </div>
                                                    </td>
                                                </tr>
                                            <?php  } ?>


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
            });
        });
    </script>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->

    <script type="text/javascript">
        function active_disactive_user(val, userId) {
            $.ajax({
                type: 'post',
                url: 'request/change.php',
                data: {
                    val: val,
                    userId: userId
                },
                success: function(result) {

                    if (result == 1) {
                        if (document.getElementById("str" + userId).innerHTML == 'Active') {
                            document.getElementById("str" + userId).innerHTML = "Inactive";
                        } else {
                            document.getElementById("str" + userId).innerHTML = "Active";
                        }

                    }
                }
            });

        }
    </script>

</body>

</html>