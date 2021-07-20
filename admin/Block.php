<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Admin</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

  <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
  <script src='https://kit.fontawesome.com/a076d05399.js'></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>

<body>
  <?php  include "leftbar.php";  ?>
  <div class="row">
    <div class="col-md-8 offset-md-2">
      <span class="anchor" id="formUserEdit"></span>
      <br>
      <div class="card card-outline-secondary">
        <div class="card-header">
          <h3 class="mb-0">Users</h3>
        </div>
        <div class="table-responsive">

          <?php
          // include('db.php');
          // $select=mysql_query("select * from manage");

          include "./db.php";
          $get_product = "SELECT * FROM USERS;";
          $result = $db->query($get_product);

          ?>

          <table class="table">

            <tr>
              <th scope="col">ID</th>
              <th scope="col">Username</th>
              <th scope="col"> Current Status</th>
              <th scope="col"> Changed Status</th>
            </tr>


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
                  <select onchange="active_disactive_user(this.value, <?php echo $row['id']; ?>)">
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
                </td>
              </tr>
            <?php  } ?>
          </table>
        </div>
      </div>
    </div>
  </div>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <script type="text/javascript">
    function active_disactive_user(val, user_id) {
      $.ajax({
        type: 'post',
        url: 'request/change.php',
        data: {
          val: val,
          userId: user_id
        },
        success: function(result) {

          if (result == 1) {
            // document.getElementById("str"+user).innerHTML = "Active";
            // console.log($('#str' + user_id).val());
            // if($('#str' + user_id).val() == 'Inactive'){
            // $('#str' + user_id).html('Active');

            // } else {

            
            // }
            if (document.getElementById("str" + user_id).innerHTML == 'Active') {
              document.getElementById("str" + user_id).innerHTML = "Inactive";
            } else {
              document.getElementById("str" + user_id).innerHTML = "Active";
            }

          } else {}
        }
      });

    }
  </script>
</body>

</html>