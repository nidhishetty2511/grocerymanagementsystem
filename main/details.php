
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Grocery | Details</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<?php require './header.php'; ?>
<div class="container">
<div class="card-header">
            <h3 class="text-center mb-0">Personal Details</h3>
</div>
<form method="POST" action="server1.php" class="register-form" id="register-form">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label >First Name </label>
      <input type="text" class="form-control" id="fname"  name="fname"required>
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Last name</label>
      <input type="text" class="form-control" name="lname" id="lname"required>
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Flat No/Room No/Office No</label>
    <input type="text" class="form-control" name="add1" id="add1" required>
  </div>
  <div class="form-group">
    <label for="inputAddress2">Building Name/House Name</label>
    <input type="text" class="form-control"  name="add2" id="add2" required>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">State </label>
      <input type="text" class="form-control" name="state" id="state" value="Maharashtra">
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">Pincode</label>
      <input type="text" class="form-control" type="text" value="" name="pin" id="pin" required>
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">Phone no</label>
      <input type="text" class="form-control" value="" name="con" id="con"" required>
    </div>
  </div>
  <input type="reset" class="btn btn-secondary" value="Reset">
  <input type="submit" name="details" id="details" class="btn btn-secondary form-submit" value="Register" />
</form>
  
  
</div>
<?php require '../footer.php'; ?>
</body>
</html>