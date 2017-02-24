<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/styles.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>events</title>
</head>
<body class="evtbdy">
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
            <li class="active"><a href="events.php">Events</a></li>
            <li><a href="login.php">Login</a></li>
           </ul>
        </div><!-- /.navbar-collapse -->
      <!-- /.container-fluid -->
    </nav>
    <?php 
  $db = mysqli_connect('localhost', 'root', 'root', 'bikes') or die (mysql_error());
  $sql = "SELECT * FROM `tbl_event`";
  $result = mysqli_query($db, $sql);
  // $row = mysqli_fetch_assoc($result);
?>
<h3 class="text-center"><u>Events</u></h3>
<?php while($row = mysqli_fetch_assoc($result)) { ?>
<div class="container row">
	<div class="col-md-4">
		<h5> <?php echo $row['Title'] ?> </h5>
		<h5> <?php echo $row['Place'] ?></h5> 
	</div>
	<div class="col-md-6">
		<h4><u><?php echo $row['Description'] ?></u></h4> 
	</div>
</div>
</div>
   <?php } ?>

</body>
</html>