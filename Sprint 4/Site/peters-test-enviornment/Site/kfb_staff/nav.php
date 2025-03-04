<?php
require('auth.php');
	/* Staff Navigation
	 * Kent Food Bank Staff
	 * Jami Team Binary
	 * http://teambinary.greenrivertech.net/kfb_staff/nav.php
	 */

?>
<!DOCTYPE html>

<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">
		<title>Kent Food Bank Staff</title>

		<!-- Bootstrap Core CSS -->
		<link href="../readable_css/bootstrap.css" rel="stylesheet">
		<link href="../readable_css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

		<!-- Custom CSS -->
			  <link href="navbar-fixed-top.css" rel="stylesheet">


		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	 </head>

<body>

 <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand hidden-sm" href="index.php">Kent Food Bank - Staff</a>
        </div><!--/.nav-header -->
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li> <a href="index.php">Staff Main</a></li>
            <li><a href="update_top_ten_items.php">Top Ten Items</a></li>
			<li><a href="volunteers.php">Volunteers</a></li>
			<li><a href="sponsors.php">Sponsors</a></li>
			<li><a href="/">Public</a></li>

                <?php
                    if(isset($_SESSION['username'])) {
                        echo "<li><a href='logout.php'><b>Logout</b></a></li>";
                    }
                 ?>

          </ul>
         </div><!--/.nav-collapse -->
      </div> <!-- end of container -->
    </nav>
	<!-- Bootstrap core JavaScript -->
    <!-- ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../js/ie10-viewport-bug-workaround.js"></script>
