<?php
  require_once __DIR__."/../../../app/app.php";
  require_once __DIR__."/../../../controller/user/login.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title></title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="../../../assets/css/bootstrap.css">
  	<link rel="stylesheet" href="../../../assets/css/loginCss.css">
</head>
<body>
    <div class="contaier-fluid cust_container">
        <img src="../../../uploads/images/travelnepal.jpg" width="250px" height="100px">
        <div class="dark_bg">
            <form method="post" action="">
              <div class="form-group">
                <label for="uname">Username:</label>
                <input type="text" class="form-control" name="uname" id="uname">
              </div>
              <div class="form-group">
                <label for="psw">Password:</label>
                <input type="password" class="form-control" name="password" id="psw">
              </div>
              <div class="form-check">
                <label class="form-check-label">
                  <input class="form-check-input" type="checkbox"> Remember me
                </label>
              </div>
              <button type="submit" name="submit" class="btn btn-primary">Login</button>
              <a href="" class="pull-right">Forgot Password?</a>
            </form>
        </div><!-- <div class="dark_bg"> -->
        
    </div><!-- <div class="contaier-fluid"> -->
    <script src="../../../assets/js/jquery.js"></script>
    <script src="../../../assets/js/bootstrap.js"></script>
</body>
</html>