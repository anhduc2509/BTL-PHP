<?php 
require_once 'conn.php';

session_start();
$acc = $_POST["account"];
$pass = $_POST["password"];
// echo $acc;
// echo $pass;

$sql = "SELECT `id`, `account`, `password` FROM `acc_admin`";

$result = $conn->query($sql);

if (isset($_POST["login"])) {
  # code...
  while($row = $result->fetch_assoc()) {
      if($row["account"] == $acc && $row["password"] == $pass) {
          $err = "";
          $_SESSION["id"] = $row["id"];
          header("location: dashboard.php");
      } else {
         $err = "Tài khoản hoặc mật khẩu không đúng xin mời nhập lại !";
      }
  }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <style>
      .divider:after,
      .divider:before {
      content: "";
      flex: 1;
      height: 1px;
      background: #eee;
      }
      .h-custom {
      height: calc(100% - 73px);
      }
      @media (max-width: 450px) {
      .h-custom {
      height: 100%;
      }
      }
  </style>
</head>
<body>
  <form action="" method="post">
  <section class="vh-100">
  <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-9 col-lg-6 col-xl-5">
        <img src="../plugins/images/admin.png"class="img-fluid" alt="Sample image">
      </div>
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">

          <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
            <p class="lead fw-normal mb-4 me-3">Sign in with</p>
          </div>
          <!-- Email input -->
          <div class="form-outline mb-4">
            <input type="text" name="account" id="form3Example3" class="form-control form-control-lg"placeholder="Enter a valid email address" />
            <label class="form-label" for="form3Example3">Email address</label>
          </div>

          <!-- Password input -->
          <div class="form-outline mb-3">
            <input type="password" name="password" id="form3Example4" class="form-control form-control-lg"
              placeholder="Enter password" />
            <label class="form-label" for="form3Example4">Password</label>
          </div>
            <div class="mb-4" style="color:red"><?php echo $err ?></div>
            <button name="login" type="submit" class="btn btn-primary btn-lg"style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
      </div>
    </div>
  </div>
  <div
    class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-primary">
    <!-- Copyright -->
    <div class="text-white mb-3 mb-md-0">
      Copyright © 2020. All rights reserved.
    </div>
    <!-- Copyright -->
  </div>
</section>

  </form>
</body>
</html>