<?php
session_start();
if (!isset($_SESSION['Email'])) {
  header('location:login.php');
} 
  ?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/styles.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>adminadd</title>
</head>
<body class="addbdy">
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
            <li><a href="logout.php">Sign out</a></li>
           </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
    <h3 class="text-center"><u>Add Events/News</u></h3>
    <div>
    <form action="" method="POST" class="form form-horizontal">
     <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Type</label>
    <div class="col-sm-7">
    	<select name="type" class="form-control">
  <option>Events</option>
  <option>News</option>
</select>
</div>
</div>
  <div class="form-group">
    <label for="title" class="col-sm-2 control-label">Title</label>
    <div class="col-sm-7">
      <input type="text" name="title" class="form-control" id="title" placeholder="Title">
    </div>
  </div>
  <div class="form-group">
    <label for="des" class="col-sm-2 control-label">Description</label>
    <div class="col-sm-7">
      <input type="text" name="descr" class="form-control" id="des" placeholder="description">
    </div>
  </div>
   <div class="form-group">
    <label for="date" class="col-sm-2 control-label">Date</label>
    <div class="col-sm-7">
      <input type="date" name="date" class="form-control" id="date" placeholder="">
    </div>
  </div>
   <div class="form-group">
    <label for="place" class="col-sm-2 control-label">place</label>
    <div class="col-sm-7">
      <input type="name" name="place" class="form-control" id="place" placeholder="place">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-primary ">Add</button>
    </div>
  </div>
</form>
    </div>
    <?php 
if (isset($_POST['type']) && ($_POST['title']) && ($_POST['descr']) && ($_POST['date']) && ($_POST['place'])) {
$type=$_POST['type'];
$title=$_POST['title'];
$descr=$_POST['descr'];
$date=$_POST['date'];
$place=$_POST['place'];

$db= mysqli_connect('localhost','root', 'root', 'bikes');
if($type == "Events") {
$sql= "INSERT INTO tbl_event(`title`,`description`,`date`,`place`) VALUES ('".$title."', '".$descr."', '".$date."','".$place."')";
} else {
$sql= "INSERT INTO tbl_news(`title`,`description`,`date`,`place`) VALUES ('".$title."', '".$descr."', '".$date."','".$place."')";

}
  mysqli_query($db, $sql);

}
?>
</body>
</html>