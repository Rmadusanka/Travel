<?php
   ob_start();
   session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>SB Admin - Start Bootstrap Template</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
</head>

<body class="bg-dark">
<?php

include 'config/config.php';
  
$error = "";

if(isset($_POST['login'])){
  $uid= mysqli_real_escape_string($conn, $_POST['username']);
  
  $username = $uid;
  $password = md5($_POST['password']);
     if($username != '' and $password != ''){
  
    $query = mysqli_query($conn, "SELECT * FROM user WHERE username='".$username."' AND password='".$password."' ") or die("There is an error");
    $res = mysqli_fetch_array($query);
    if(!empty($res['username']) && !empty($res['password'])){
      session_start();
      $_SESSION['username']=$username;
      $error = "ok";
      header('location:index.php');
    }else{
      $error = "Invaild Username or Password";
    }
    
  }else{
    $error = "Please Enter Username and Password ";
  }
  
}

?>
  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Login</div>
      <div class="card-body">
        <form action="login.php" method="POST" >
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input class="form-control" id="exampleInputEmail1" type="text" name="username" placeholder="Enter email">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input class="form-control" id="exampleInputPassword1" type="password" name="password" placeholder="Password">
          </div>
          <div class="form-group">
            <div class="form-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox"> Remember Password</label>
            </div>
          </div>
          <input type="submit" class="btn btn-primary btn-block" name="login" value="login" >
        </form>
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
</body>

</html>
