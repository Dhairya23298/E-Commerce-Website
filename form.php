
<?php include('form-process.php'); ?>

<link rel="stylesheet" type="text/css" href="form.css">
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<nav class="navbar navbar-default navbar-fixed-top navbar-inverse">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#topFixedNavbar1" aria-expanded="false"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
      <a class="navbar-brand" href="https://en.wikipedia.org/wiki/Instacart" target = "_blank"><span class = "title">Instacart</span></a></div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="topFixedNavbar1">
      <ul class="nav navbar-nav navbar-right">
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
<div class="container">  
  <form id="contact" action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
    <h3>Quick Contact</h3>
    <h4>Contact us today, and get reply with in 24 hours!</h4>
    <fieldset>
      <input placeholder="Your name" type="text" name="name" value="<?= $name?>" tabindex="1" autofocus>
       <span class="error"><?= $name_error ?></span>
    </fieldset>
    <fieldset>
      <input placeholder="Your Email Address" type="text" name="email" value="<?= $email?>" tabindex="2">
      <span class="error"><?= $email_error ?></span>
    </fieldset>
    <fieldset>
      <input placeholder="Your Phone Number" type="text" name="phone" value="<?= $phone?>" tabindex="3" >
       <span class="error"><?= $phone_error ?></span>
    </fieldset>
    <fieldset>
      <input placeholder="Your Web Site starts with http://" type="url"  name="url" value="<?= $url?>" tabindex="4" >
       <span class="error"><?= $url_error ?></span>
    </fieldset>
    <fieldset>
      <textarea placeholder="Type your Message Here...." name="message" value="<?= $message?>" type="text" tabindex="5" ></textarea>
    </fieldset>
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
    </fieldset>
    <div class="success"><?= $success;?></span>
  </form>
</div>