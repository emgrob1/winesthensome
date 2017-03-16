<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<title>Wines Then Some</title>

<!-- Google fonts -->
<link href='http://fonts.googleapis.com/css?family=Raleway:300,500,800|Old+Standard+TT' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Raleway:300,500,800' rel='stylesheet' type='text/css'>

<!-- font awesome -->
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">


<!-- bootstrap -->
<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />

<!-- uniform -->
<link type="text/css" rel="stylesheet" href="assets/uniform/css/uniform.default.min.css" />

<!-- animate.css -->
<link rel="stylesheet" href="assets/wow/animate.css" />


<!-- gallery -->
<link rel="stylesheet" href="assets/gallery/blueimp-gallery.min.css">


<!-- favicon -->


<link rel="stylesheet" href="assets/style.css">
<link rel="stylesheet" href="public/css/default.css">
<link rel="stylesheet" href="public/css/default.css" />
	<script type="text/javascript" src="public/js/jquery.js"></script>
	<script type="text/javascript" src="public/js/custom.js"></script>
<?php
		if (isset($this->js)) 
		
		{
			foreach ($this->js as $js)
			{
				echo '<script type="text/javascript" src="'.URL.'views/'.$js.'"></script>';
			}
		}
	?>
</head>

<body id="home">


<!-- top 
  <form class="navbar-form navbar-left newsletter" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Enter Your Email Id Here">
        </div>
        <button type="submit" class="btn btn-inverse">Subscribe</button>
    </form>
 top -->

<!-- header -->
<nav class="navbar  navbar-default" role="navigation">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
     
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
      
       <ul class="nav navbar-nav"> 
       	
       	<?php
     $url = $_SERVER['REQUEST_URI'];

$url_path = parse_url($url, PHP_URL_PATH);
$parts = explode('/', $url_path);
$last = end($parts);
 
if($last == 'backend'){?>
	
	 
        <li><a href="<?php echo URL; ?>admin_grapes">Grapes</a></li>        
      
   
         <li>	<?php if (Session::get('loggedIn') == true):?>
		<a href="<?php echo URL; ?>dashboard/logout">Logout</a>	
	<?php else: ?>
		<a href="<?php echo URL; ?>login">Login</a>
	<?php endif; ?></li>
	
<?php } else {
	
       	?>       
        <li><a href="<?php echo URL; ?>index">Home</a></li>
        <li><a href="<?php echo URL; ?>grapes">Grapes</a></li>        
        <!-- <li><a href="introduction.php">Growing Regions</a></li> -->
        <li><a href="<?php echo URL; ?>learn">Learn About Wines</a></li>
         <li>	<?php if (Session::get('loggedIn') == true):?>
		<a href="<?php echo URL; ?>dashboard/logout">Logout</a>	
	<?php else: ?>
		<a href="<?php echo URL; ?>login">Login</a>
	<?php endif; ?></li>
	<?php }?>
      </ul>
    </div><!-- Wnavbar-collapse -->
  </div><!-- container-fluid -->
</nav>
<!-- header -->

