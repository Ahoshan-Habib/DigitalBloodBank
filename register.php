<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Registration Page</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a href="#"><b>Digital</b>BloodBank</a>
  </div>
    <div class="col-sm-12" align="center">
        <?php
        if(isset($_SESSION['message'])){
            echo $_SESSION['message'];
        } else {
            echo " ";
        }
        $_SESSION['message'] = "";
        ?>
    </div>
  <div class="card">
    <div class="card-body register-card-body">
      <p class="login-box-msg">Register a new membership</p>
      <form action="register_processor.php" method="post">
        <div class="input-group mb-3">
          <input type="text" name="full_name" id="full_name" class="form-control"
                 placeholder="Full name" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="contact" id="contact"
                 minlength="11" maxlength="11" pattern="[0-9]{11,}" title="Please enter only numbers..."
                 placeholder="contact" autocomplete="off" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-phone"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="password" id="password" class="form-control"
                 pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" title="Must contain at least one number and one
                  uppercase and lowercase letter,
                 and at least 6 or more characters"
                 placeholder="Password"
                 oninput="checkPassword()" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="confirmation_password" id="confirmation_password" class="form-control"
                 placeholder="Retype password" oninput="checkPassword()" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- /.col -->
          <div class="col-12">
            <button type="submit" name="register_btn" id="register_btn" class="btn btn-primary btn-block" disabled>Register</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
</div>
<!-- /.register-box -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>

<script>
  function checkPassword() {
      var password_val = document.getElementById("password").value;
      var confirmation_password_val = document.getElementById("confirmation_password").value;

      if(password_val == null || password_val == "" || password_val== " "){
          alert("Please enter a password first, then retype again to confirm.");
      } else {
          if(password_val == confirmation_password_val){
              document.getElementById("register_btn").disabled = false;
          } else {
              document.getElementById("register_btn").disabled = true;
          }
      }
  }

</script>
</body>
</html>
