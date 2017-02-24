<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/styles.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>news</title>
</head>
<body class="bodybg">
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
            <li class="active"><a href="news.php">News</a></li>
            <li><a href="gallery.php">Gallery</a></li>
            <li><a href="events.php">Events</a></li>
            <li><a href="login.php">Login</a></li>
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
<div class="container row" >
<h3 class="text-center"><u>News</u></h3>
<?php while($row = mysqli_fetch_assoc($result)) { ?>   
      <div class="col-md-4 ">
    	<h5><u><?php echo $row['Date']; ?></u></h5>
    	</div>
    	<div class="col-md-4">
    		<p class="para"> <?php echo $row['Description']?></p>
    	</div>
      </div>
          <?php } ?>
    	<div class="container row"> 
    	<img class="newimg  col-md-5" src="https://scontent-sit4-1.xx.fbcdn.net/v/t1.0-9/14910430_1310254449025212_4249816673249230428_n.jpg?oh=d75ede10dd45272bad8566e0bbe8aaff&oe=5923E81B">
<!--     	<img class="newimg col-md-5"src="https://scontent-sit4-1.xx.fbcdn.net/v/t1.0-9/14054034_1249858015064856_6330626571128324146_n.jpg?oh=d9cabc1c25da34e670cabb38175a1378&oe=5907ED2C">
 -->    </div>
   
</body>
</html>