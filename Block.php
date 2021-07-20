<!DOCTYPE html>
<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Admin</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src='https://kit.fontawesome.com/a076d05399.js'></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>  
</head>
<body>
    <div class="col-md-8 offset-md-2">
        <span class="anchor" id="formUserEdit"></span>
        <br>
    <div class="card card-outline-secondary">	
    <div class="card-header">
        <h3 class="mb-0">Users</h3>
    </div>
    <div class="table-responsive">

        <?php 
include('db.php');
$select=mysql_query("select * from manage");
         ?>

      <table class="table">
        
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Username</th>
            <th scope="col"> Current Status</th>  
            <th scope="col"> Changed Status</th>          
          </tr>
        
        
            <?php
            while($row=mysqli_fetch_assoc($result)){
              ?>

          <tr>
            <td ><?php echo $row['ID']; ?> </td>
            <td><?php echo $row['Username'] ; ?></td>
            <td>
             <?php
            if($row['status'])
            {
              echo "<p id=str" . $row['user_id'].">active</p>";
            }
            else{
              echo "<p id=str" . $row['user_id'].">Disactive</p>";
            }           
            ?>
            </td>                  
            <td>
            <select onchange="active_disactive_user(this.value.<?php echo $row['user_id'];?>)">
            <option value="1"> Active</option>
            <option value="0"> DisActive</option>
            </select>            
            </td>           
          </tr>
     
      </table>   
    </div>  
</div>	
</div>    
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script type="text/javascript"> 
          function active_disactive_user(val,user_id){
            $.ajax({
              type:'post',
              url:'change.php',
              data:{val:val,user_id:user_id},
              success : function(result){
                if(result==1)
                {
                  $('#str' +user_id).html('Active');
                }else
                {
                  $('#str' +user_id).html('disActive');
                }
              }
            });

          }
          </script>
</html>