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
		<?php include('leftbar.php')?>;
			<!-- Page Content  -->
	<!--nav-->
	<nav>
		<div id="content" class="p-4 p-md-5 pt-5">
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
                        <div class="panel-heading">
                            <strong>View Item</strong>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">

                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Sr No</th>
                                            <th>Product Category</th>
                                            <th>Item Name</th>
                                            <th>Item Price</th>
											<th>Description</th>
											<th>Quantity</th>
											<th>State</th>
											
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <tr class="odd gradeX">
                                            <td>1</td>
                                            <td>Vegetables</td>
                                            <td>Carrot</td>
                                            <td>30$</td>
											<td>Good Quality and Fresh </td>
											<td>1</td>
											<td>Active</td>
											
                                             <td>&nbsp;&nbsp;<a href="edit-course.php?cid="><p class="fa fa-edit"></p></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                             <a href="view-course.php?del="> <p class="fa fa-times-circle"></p></td>
                                            
                                        </tr>
										<tr class="odd gradeX">
                                            <td>2</td>
                                            <td>Fruits</td>
                                            <td>Apples</td>
                                            <td>30$</td>
											<td>Good Quality and Fresh </td>
											<td>1</td>
											<td>Active</td>
											
                                             <td>&nbsp;&nbsp;<a href="edit-course.php?cid="><p class="fa fa-edit"></p></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                             <a href="view-course.php?del="> <p class="fa fa-times-circle"></p></td>
                                            
                                        </tr>
										<tr class="odd gradeX">
                                            <td>3</td>
                                            <td>Dairy</td>
                                            <td>Milk</td>
                                            <td>30$</td>
											<td>Good Quality and Fresh </td>
											<td>1</td>
											<td>Active</td>
											
                                             <td>&nbsp;&nbsp;<a href="edit-course.php?cid="><p class="fa fa-edit"></p></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                             <a href="view-course.php?del="> <p class="fa fa-times-circle"></p></td>
                                            
                                        </tr>
                                        
       	           
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                           
                        </div>
                        <!-- /.panel-body -->
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
