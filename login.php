<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/styles.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>login</title>
</head>
<body class="logbdy">
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
            <li class="active"><a href="#">Login</a></li>
           </ul>
        </div><!-- /.navbar-collapse -->
     <!-- /.container-fluid -->
    </nav>
    <div class="col-md-8">
    	<img id="login" src="https://scontent-sit4-1.xx.fbcdn.net/v/t1.0-9/14600951_1517065144976307_5731201938094492594_n.jpg?oh=8dd79218ea5f105a59ee85998516c14b&oe=590D3B0F">
    </div>
    <div class="col-md-3 pull-right text-center form" >
    	<form action="" method="POST" class="form-horizontal">
  <div class="form-group">
    <label class="" for="exampleInputEmail3">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail3" placeholder="Email">
  </div>
  <div class="form-group">
    <label class="" for="exampleInputPassword3">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword3" placeholder="Password">
  </div>
  <div class="checkbox">
    <label>
      <input type="checkbox"> Remember me
    </label>
  </div>
  <button type="submit" class="btn btn-default">Log in</button>
  <a href="signup.php">sign up</a>
</form>
    </div>
     </div>
     <?php 
     session_start();
      $db = mysqli_connect('localhost', 'root', 'root', 'bikes') or die (mysql_error());
      if(isset($_POST['email']) && ($_POST['password'])) {
  $email=$_POST["email"];
  $password=$_POST["password"];
    $result = mysqli_query($db,"SELECT * FROM `tbl_user` where Email='".$email."' and Password='".$password."'"); 
    $row= mysqli_fetch_array($result);
    if ($row['Email']==$email && $row['Password']==$password) {
      $_SESSION['Email']=$email;
       header('Location:admin.php');
  } else {
    echo "invalid email and password";
  }
}
    ?>
</body>
</html>