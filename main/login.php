
<?php
   include("db_config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db1,$_POST['name']);
      $mypassword = mysqli_real_escape_string($db1,$_POST['pass']); 
      
      $sql = "SELECT id FROM users WHERE name = '$myusername' and pass = '$mypassword'";
      $result = mysqli_query($db1,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $id = $row['id'];
      $count = mysqli_num_rows($result);
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
            if($id == 1){
                $_SESSION['login_user'] = $myusername;
                $_SESSION['login_id'] = $id;
                header("location: ../admin/index.php");
            }
            else{
                $_SESSION['login_user'] = $myusername;
                $_SESSION['login_id'] = $id;
                header("location: ../home.php");
            }
      }
      else {
        header("location: ../index.php");
        
      }
   }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Grocery | Login</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
    <style>
        .main {
    background: white;
    padding: 10px 0;
}
        </style>
</head>

<body>
<?php require './header.php'; ?>
    <div class="main">
        <!-- Sing in  Form -->
        <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure>
                            <img src="images/signin-image.png" alt="sing up image">
                        </figure>
                        <a href="signup.php" class="signup-image-link">Create an account</a>
                    </div>
                    <div class="signin-form">
                        <h2 class="form-title">Log In</h2>
                        <form method="POST" class="register-form" id="login-form">
                            <div class="form-group">
                                <label for="your_name">
                                    <i class="zmdi zmdi-account material-icons-name"></i>
                                </label>
                                <input type="text" name="name" id="name" placeholder="Your Name" />
                            </div>
                            <div class="form-group">
                                <label for="your_pass">
                                    <i class="zmdi zmdi-lock"></i>
                                </label>
                                <input type="password" name="pass" id="pass" placeholder="Password" />
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
                                <label for="remember-me" class="label-agree-term">
                                    <span>
                                        <span></span>
                                    </span>Remember me</label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signin" id="signin" class="form-submit" value="Log in" />
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </section>
    </div>
    <?php require '../footer.php'; ?> 
</body>

</html>