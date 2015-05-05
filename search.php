<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>Hypixel API | Search</title>
		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<link href="css/styles.css" rel="stylesheet">
	</head>
	<body>
<div class="navbar navbar-default navbar-static-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Hypixel API</a>
    </div>
    <div class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li><a href="index.php">Home</a></li>
        <li class="active"><a href="search.php">Statistics Viewer</a></li>
        <li><a href="kitsearch.php">Class Viewer</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#about"></a></li>
      </ul>
    </div><!--/.nav-collapse -->
  </div>
</div>

<div class="container">

  <div class="text-center">
    <h1>Search Statistics</h1>
    <p class="lead">Search below to begin your journey of 'stalkery'.<br>
	<div class="form-group">
		<form action="hypixel.php" method="get">
		<label class="control-label" name="name">Username or UUID (Case-Sensitive)</label>
		<input type="text" class="form-control input-lg" name="name" /><br>
		<input type="submit" class="btn btn-primary btn-lg" value="Submit" /></ul>
		</form>
	</div>
  </div>

</div><!-- /.container -->
	<!-- script references -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>
