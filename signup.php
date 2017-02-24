<!DOCTYPE html>
<html>
<head>
 <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/styles.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>signup</title>
</head>
<body class="signbdy">
 <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="home.php">OUTLAWZ</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav pull-right">
            <li><a href="news.php">News</a></li>
            <li><a href="gallery.php">Gallery</a></li>
            <li><a href="events.php">Events</a></li>
            <li class="active"><a href="login.php">Login</a></li>
           </ul>
        </div><!-- /.navbar-collapse -->
    <!-- /.container-fluid -->
    </nav>
    <h3 class="text-center"><u>Sign Up</u></h3>
    <form action="" method="POST" class="form">
    <div class="col-md-7">
    <div class="form-group">
    <label for="Name">Name</label>
    <input type="name" name="name" class="form-control" id="exampleInputPassword1" placeholder="Name">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Confirm Password</label>
    <input type="password" name="cpassword" class="form-control" id="exampleInputPassword1" placeholder="Confirm Password">
  </div>

  <button type="submit" class="btn btn-default">Sign up</button>
  </div>
  </div>
</form>
<?php 
if (isset($_POST['name']) && ($_POST['email']) && ($_POST['password']) && ($_POST['cpassword'])) {
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$cpassword=$_POST['cpassword'];

$db= mysqli_connect('localhost','root', 'root', 'bikes');
$sql= "INSERT INTO tbl_user (`name`,`email`,`password`) VALUES ('".$name."', '".$email."', '".$password."')";
	mysqli_query($db, $sql);

}
?>
</body>
</html>