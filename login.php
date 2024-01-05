<?php
session_start(); 
include('connection.php');

   if(isset($_POST['login'])){
       $ID = $_POST['iden'];
       $pwd = md5($_POST['password']);
       $sql = mysqli_query($dbcon,"SELECT * FROM users WHERE (user_id = '$ID' OR name='$ID') AND password='$pwd'");
       foreach ($sql as $s) {
           extract($s);
           $_SESSION['user_id'] = $ID;
           $_SESSION['name'] = $name;
           $_SESSION['role'] = $role;
       }
       // echo ">>>>>".$_SESSION[''];
            
   if(mysqli_num_rows($sql)){
       echo "<div class='alert alert-success'>Login Successful, redirectiing...</div>"; 
        // echo'<meta http-equiv="refresh" content="1; url=home.php" />';
          } else{
           echo "<div class='alert alert-danger'>Wrong Credentials!</div>";
       }

  //redirecting role to their dashboards respectively
   if ($_SESSION['role'] == "admin") {
     // $_SESSION['admin_name'] = $name;
     header("Location: admin_dashboard.php");
     exit();
   }
   elseif ($_SESSION['role'] == "hod") {
    header("Location: hod_dashboard.php");
   }
   elseif ($_SESSION['role'] == "lecturer") {
       header("Location: lecturer_dashboard.php");
       exit();
   }
   elseif ($_SESSION['role'] == "student") {
     header("Location: student_dashboard.php");
     exit();
        }
        // else {
        //   echo "<div class = "alert alert-danger"> Not Successful! </div>"
        // }
    }
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
     <!-- General CSS Files -->
    <link rel="stylesheet" href="assets/css/app.min.css">
    <link rel="stylesheet" href="assets/bundles/bootstrap-social/bootstrap-social.css">
    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/components.css">
    <!-- Custom style CSS -->
    <link rel="stylesheet" href="#">
    <link rel='shortcut icon' type='image/x-icon' href='assets/img/attendance.png' />

</head>
<body>
     <div class="loader"></div>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            <div class="card card-primary">
                <div class="">
                    <img src="https://www.lystloc.com/blog/wp-content/uploads/2022/11/ezgif.com-gif-maker-6.webp"
                    class="img-fluid " alt="Phone image">
                    <style type="text/css">
                        img {
/*                            The order is; top  right  bottom  left*/
                            padding: 2px 2px 0px 2px;
                            border-radius: 14px;
                        }
                    </style>
                </div>
              <div class="card-header">
                <h2>Login</h2>
              </div>
              <div class="card-body">
                <form method="POST" action="#" class="needs-validation" novalidate="">
                  <div class="form-group">
                    <!-- <label for="email"></label> -->
                    <input id="iden" type="iden" class="form-control" name="iden" placeholder="Emp ID / Enrollment No" tabindex="1" required autofocus>
                    <div class="invalid-feedback">
                      Please enter your ID
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="d-block">
                      <label for="password" class="control-label"></label>
                      <div class="float-right">
                        <!-- Linking to a forgot password / recovery page -->
                        <a href="auth-forgot-password.html" class="text-small">
                          Forgot Password?
                        </a>
                      </div>
                    </div>
                    <input id="password" type="password" class="form-control" name="password" placeholder="Password" tabindex="2" required>
                    <div class="invalid-feedback">
                      Please fill in your password
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" name="remember" class="custom-control-input" tabindex="3" id="remember-me">
                      <label class="custom-control-label" for="remember-me">Remember Me</label>
                    </div>
                  </div>
                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" name="login" tabindex="4">
                      Login
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- General JS Scripts -->
  <script src="assets/js/app.min.js"></script>
  <!-- JS Libraies -->
  <!-- Page Specific JS File -->
  <!-- Template JS File -->
  <script src="assets/js/scripts.js"></script>
  <!-- Custom JS File -->
  <script src="assets/js/custom.js"></script>
</body>
</html>