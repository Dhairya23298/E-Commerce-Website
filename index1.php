<?php
  session_start();
?>

<!doctype html>
<html>
<link href="css/style.css" rel="stylesheet" type="text/css">
<head>
<meta charset="utf-8">
<meta http-equiv-"X-UA-Compatible" content = "IE=edge">
<meta name = "viewport" content="width=device-width,initial scale=1">
 <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous"> -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<title>Instacart</title>
</head>
<body style="padding-top: 50px">
<nav class="navbar navbar-default navbar-fixed-top navbar-inverse">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#topFixedNavbar1" aria-expanded="false"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
      <a class="navbar-brand" href="https://en.wikipedia.org/wiki/Instacart" target = "_blank"><span class = "title">Instacart</span></a></div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="topFixedNavbar1">
      <ul class="nav navbar-nav navbar-right">
        <?php
          $username = $_SESSION['u_uid'];
          echo '<li class = "dropdown"><a href="#" class = "dropdown-toggle navigation" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Welcome '.$username.'<span class = "caret"></span></a></li>
            <ul class="dropdown-menu">
              <li><a href="#">My Profile</a></li>
              <li><a href="#">Settings</a></li>    
              <li role="separator" class="divider"></li>
           </ul>
           </li>';
        ?>
        <li class = "active navigation"><a href="index.html">Home<span class="sr-only"></span></a></li>
        <li class="dropdown"><a href="#" class="dropdown-toggle navigation" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Products<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="IndigenousProd.html">Electronic Products</a></li>
            <li><a href="ClothesShoes.html">Clothes and Shoes</a></li>    
            <li role="separator" class="divider"></li>
            <!--<li><a href="#">Dealers</a></li>-->
          </ul>
        </li>
        <li class = "navigation"><a href = "../index.php">Log In</a></li>
        <li class = "navigation"><a href = "../signup.php">Sign Up</a></li>
        <li class = "navigation"><a href="AboutUs.html">About Us</a></li>
	   <li class = "navigation"><a href="form.php">Contact Us</a></li>
      </ul>
    </div>
    <!-- /.navbar-collapse -->
  </div>
  <!-- /.container-fluid -->
</nav>
<div id="carousel1" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carousel1" data-slide-to="0" class="active"></li>
    <li data-target="#carousel1" data-slide-to="1"></li>
    <li data-target="#carousel1" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner" role="listbox">
    <div class="item active"><img src="images/shopping.jpg" alt="Ecommerce" class="center-block">
      <div class="carousel-caption">
        <h3 class = "cartext">Shop Online !</h3>
        <p class = "cartext">Hurry Now !</p>
      </div>
    </div>
    <div class="item"><img src="images/ShoppingCart.png" alt="shopping" class="center-block">
      <div class="carousel-caption">
        <h3 class = "cartext">Fill up your carts with the best products !</h3>
      </div>
    </div>
    <div class="item"><img src="images/Shop.jpg" alt="Carousel" class="center-block">
      <div class="carousel-caption">
        <h3 class = "cartext">What You waiting for ?</h3>
      </div>
    </div>
  </div>
  <a class="left carousel-control" href="#carousel1" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span><span class="sr-only">Previous</span></a><a class="right carousel-control" href="#carousel1" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span><span class="sr-only">Next</span></a></div>
  
  
  <h1 class="heading">Welcome to the most amazing online store !</h1>
<div class = "container">
  <div class = "row">
    <div class = "col-md-4 text-center">
      <div class = "col-md-12 col-sm-12 call-to-action">
  <img src="images/ourteam.jpg" class="img-circle img-responsive center-block" alt="Placeholder image">
      <h3  class = "one">Our Team</h3>
       <p class = "height">Who are we? Where on the great journey will we be recreated? Reality has always been electrified with pilgrims whose chakras are opened by science. We are in the midst of a Vedic unfolding of choice that will let us access the infinite itself.</p>
      <button type="button" class="btn btn-primary"><a href="AboutUs.html" style="color: white">View Details</a></button>
       </div><!--col-md-12-->
    </div><!--col-md-4-->
    
    <div class = "col-md-4 text-center">
      <div class = "col-md-12 col-sm-12 call-to-action">
  <img src="images/ourspeciality.png" class="img-circle img-responsive center-block" alt="Placeholder image">
      <h3  class = "two">Our Speciality</h3>
       <p class = "height">Who are we? Where on the great journey will we be recreated? Reality has always been electrified with pilgrims whose chakras are opened by science. We are in the midst of a Vedic unfolding of choice that will let us access the infinite itself.</p>
		  <button type="button" class="btn btn-primary"><a href="AboutUs.html" style="color: white">View Details</a></button>
      </div><!--col-md-12-->
    </div><!--col-md-4-->
    
    <div class = "col-md-4 text-center">
      <div class = "col-md-12 col-sm-12 call-to-action">
  <img src="images/ourteam.jpg" class="img-circle img-responsive center-block" alt="Placeholder image">
      <h3  class = "three">Our Aim</h3>
       <p class = "height">Who are we? Where on the great journey will we be recreated? Reality has always been electrified with pilgrims whose chakras are opened by science. We are in the midst of a Vedic unfolding of choice that will let us access the infinite itself.</p>
		  <button type="button" class="btn btn-primary"><a href="AboutUs.html" style="color: white">View Details</a></button>
      </div><!--col-md-12-->
    </div><!--col-md-4-->
    </div> <!--row-->
  </div>
  <div class = "space"></div>
<div class = "container">
 <div class="row">
    <div class="col-md-3">
      <div class="thumbnail text-center"><img src="images/apple.png" alt="Apple Logo">
        <div class="caption">
          <h3>Apple Logo</h3>
          <p align = "justify">Gadget beauty Apple Logo for Apple IPhone 6,6S,7</p>
          <p><a href="#" class="btn btn-primary" role="button">Buy Now</a><a href="#" class="btn btn-default btn-next" role="button">View Now</a></p>
        </div><!--caption-->
      </div><!--thumbnail-->
    </div><!--col-md-3-->
    
    <div class="col-md-3">
      <div class="thumbnail text-center"><img src="images/Iphone 5s.jpg" alt="Iphone 5s">
        <div class="caption">
          <h3>Iphone 5s</h3>
          <p align = "justify">Apple iPhone 5s.The stunning ever Iphone 5s ! Hurry! Buy now !</p>
          <p><a href="#" class="btn btn-primary" role="button">Buy Now</a><a href="#" class="btn btn-default btn-next" role="button">View Now</a></p>
        </div><!--caption-->
      </div><!--thumbnail-->
    </div><!--col-md-3-->
    
    <div class="col-md-3">
      <div class="thumbnail text-center"><img src="images/iphone6s.jpg" alt="Iphone 6s">
        <div class="caption">
          <h3>Iphone 6s</h3>
          <p align = "justify">Apple iPhone 6s.The stunning ever Iphone 6s ! Hurry! Buy now ! !</p>
          <p><a href="#" class="btn btn-primary" role="button">Buy Now</a><a href="#" class="btn btn-default btn-next" role="button">View Now</a></p>
        </div><!--caption-->
      </div><!--thumbnail-->
    </div><!--col-md-3-->
    
    <div class="col-md-3">
      <div class="thumbnail text-center"><img src="images/iphone7plus.png" alt="Iphone 7plus">
        <div class="caption">
          <h3>Iphone 7 plus</h3>
          <p align = "justify">Apple iPhone 7 Plus.The stunning ever Iphone 7 plus ! Hurry! Buy now !</p>
          <p><a href="#" class="btn btn-primary" role="button">Buy Now</a><a href="#" class="btn btn-default btn-next" role="button">View Now</a></p>
        </div><!--caption-->
      </div><!--thumbnail-->
    </div><!--col-md-3-->
  </div><!--row-->
</div><!--container-->
<div class = "space"></div>
<div class = "container">
 <div class = "row">
   <div class = "col-md-6">
<div class="media-object-default">
  <div class="media">
    <div class="media-left"><a href="#"><img class="media-object" src="images/MediaObj_Placeholder.png" alt="placeholder image"></a></div>
    <div class="media-body">
      <h4 class="media-heading">BCD says</h4>
      <p align = "justify">This is the most amazing website I have ever seen ! You can almost find anything you want here at a very cheap price.</p></div>
  </div>
<div class="media">
    <div class="media-left"><a href="#"><img class="media-object" src="images/MediaObj_Placeholder.png" alt="placeholder image"></a></div>
    <div class="media-body">
      <h4 class="media-heading">ABC says</h4>
      <p align = "justify">The service is really good and products arrive in very good quality.After sales service is also really nice !</p>
      <div class="media">
        <div class="media-left"><a href="#"><img class="media-object" src="images/MediaObj_Placeholder.png" alt="placeholder image"></a></div>
        <div class="media-body">
          <h4 class="media-heading">BCD says</h4>
          <p align = "justify">True that ! </p></div>
      </div>
    </div>
  </div>
 </div>
 </div>
 <div class = "col-md-6">
   <div class = "col-md-9 col-md-offset-3">
 	<h3 class = "gap">Contact Us </h3>
 	<form action = "#" method = "post" role = "form">
 		<div class = "form-group">
 			<label for="fullname">Name: </label>
 			<input type = "text" class = "form-control" id = "fullname" placeholder="Enter your name">
 		</div>
 		<div class = "form-group">
 			<label for="email">Email Address: </label>
 			<input type = "email" class = "form-control" id = "email" placeholder="Enter your email-id">
 		</div>
 		<div class = "form-group">
 			<label for="tel">Telephone: </label>
 			<input type = "tel" class = "form-control" id = "tel" placeholder="Enter your contact no">
 		</div>
 		<div class = "form-group">
 			<label for="Message">Message: </label>
 			<textarea class = "form-control" id = "message" rows = "3" placeholder="Enter your message"></textarea>
 		</div>
 		<button type="submit" class="btn btn-primary">Submit</button>
    </form>
 	</div>
 </div>
  </div> <!--row-->
</div><!-- container-->
<div class = "space"></div>
<div class = "container">
<h4>Watch video on our products.</h4>
	<div class="embed-responsive embed-responsive-16by9">
	  <iframe class="embed-responsive-item" src="http://tv.adobe.com/embed/1221/24197/"></iframe>
	</div>
</div>
<div class = "space"></div>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet"/>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet"/>
<footer class = "footer">
	<div class = "container">
		<div class = "row copyright">
			<p>&copy;Copyright - All Rights Reserved</p>
		</div>
		<div class="container text-left">
			<a href="#"><i class="fa fa-facebook"></i></a>
			<a href="#"><i class="fa fa-twitter"></i></a>
			<a href="#"><i class="fa fa-linkedin"></i></a>
			<a href="#"><i class="fa fa-google-plus"></i></a>
			<a href="#"><i class="fa fa-skype"></i></a>
  		</div>
	</div>
</footer>
<!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>-->
<!--<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>-->
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>-->

    <!-- Latest compiled and minified CSS & JS -->
<!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>-->
<script src="https://code.jquery.com/jquery-3.1.0.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>s

</body>
</html>
