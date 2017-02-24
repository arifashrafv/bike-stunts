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
	<title>adminhome</title>
</head>
<body class="adm">
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
    <?php 
  $db = mysqli_connect('localhost', 'root', 'root', 'bikes') or die (mysql_error());
  $sql = "SELECT * FROM `tbl_news`";
  $result = mysqli_query($db, $sql);
  // $row = mysqli_fetch_assoc($result);
?>
        <h3 class="text-center"><u>Admin</u></h3>
<div class="col-md-6 new">
<h5 class="text-center"><u>News</u></h5>
<?php while($row = mysqli_fetch_assoc($result)) { ?>
<ul class="admind">
	<li><p><?php echo $row['Date']; ?></p></li>
	<li><p><?php echo $row['Description']?></p></li>
</ul>
<?php } ?>
</div>

<div class="col-md-6 new">
<h5 class="text-center"><u>Events</u></h5>
<ul class="admind">
	<li><p>abc</p></li>
	<li><p>xyz</p></li>
</ul>
</div>
<div class="col-md-5"> </div>
<div class="col-md-4">
  <button type="button" class="btn btn-default btn-lg text-center"><a href="add.php">Add News or Events</a></button>
</div>
</body>
</html>