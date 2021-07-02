<?php 
 session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ElSHA Fashion's</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="index.css" type="text/css">
    
</head>
<body>

   
   <nav class="navbar navbar-default navbar-fixed-top">
  <div class="container containerro">
    <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <a  style="color:black" class="navbar-brand" href="#">BRAND<br/> STORE</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
    <ul class="nav navbar-nav">
      <li><a href="index.php">HOME</a></li>
      <li><a style="color: black" href="#">MEN</a></li>
      <li><a style="color:black" href="#">WOMEN</a></li>
      <li><a  style="color:black"href="#">KIDS</a></li>
    </ul>
    <!------------search box-------------------------->
    <form class="navbar-form navbar-right" action="searchbox.php" method="POST">
    <div class="input-group">
    <input type="text" class="form-control" placeholder="Search">
    <div class="input-group-btn">
      <button class="btn btn-default" type="submit">
        <i class="glyphicon glyphicon-search"></i>
      </button>
    </div>
  </div>
      
    </form>
    <!-------------------search box end-------------------->
    <ul class="nav navbar-nav navbar-right">
      <li><a style="color:black" href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a   style="color:black" href="signin.php"><span   class="glyphicon glyphicon-log-in"></span> Login</a></li>
      
    </ul>
  </div>
</nav>

       <div class="container-fluid" >

          

          <div id="myCarousel" class="carousel slide" data-ride="carousel" >
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="imagesfol/adult-beautiful-black-friday-291762.jpg" class="img-responsive" alt="Chania">
      <div class="carousel-caption">
        <span class="ses"><?php echo "welcome Guest "  .( $_SESSION['username']) ?></span>
        <h4>Have a Great shopping ahead </h4>
      </div>
    </div>

    <div class="item">
      <img src="imagesfol/beautiful-black-friday-blur-974911.jpg" class="img-responsive" alt="Chicago">
      <div class="carousel-caption">
        <h3>Chicago</h3>
        <p>Thank you, Chicago!</p>
      </div>
    </div>

    <div class="item">
      <img src="imagesfol/black-friday-fashion-friends-1345082.jpg" class="img-responsive" alt="New York">
      <div class="carousel-caption">
        <h3>New York</h3>
        <p>We love the Big Apple!</p>
      </div>
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

       

</div>
<div class="container">
<div class="row">
    <div class="col-lg-6">
      
    <a href="products.php"> <img src="imagesfol/black-friday-fashion-friends-1345082.jpg" class="img-responsive image1" >
    <div class="carousel-caption">
        <h3>NIKE</h3>
        
      </div>
    </a>
</div>
    <div class="col-lg-6">
    <a href="products.php">  <img  src="imagesfol/krists-luhaers-543526-unsplash.jpg" class="img-responsive image1">
    <div class="carousel-caption">
        <h3>ADIDAS</h3>
        
      </div></a>
</div>

</div>
<div class="row">
<div class="col-lg-6">
  
    <a href="products.php"><img  src="imagesfol/boxed-water-is-better-1464026-unsplash.jpg"  class="img-responsive image1" >
    <div class="carousel-caption">
        <h3>CONVERSE</h3>
       
      </div>
</a>
    
</div>
  

    

    <div class="col-lg-6">
    <a href="#"> <img  src="imagesfol/krists-luhaers-543526-unsplash.jpg" class="img-responsive image1">
    <div class="carousel-caption">
        <h3>GUCCI</h3>
        
      </div></a>
</div>
</div>
</div>
<div class="container-fluid image2" >

    <div class="row foot">
        <div class="col-sm-3">
            <h6>Ajio </h6>
            <a href="#">who we are</a><br/>
            <a href="#">join our team</a><br/>
            <a href="#">Terms and conditions</a><br/>
            <a href="#">we respect your privacy</a><br/>
            <a href="#">Fees & Payments</a><br/>
            <a href="#">Returns & Refunds Policy</a>
       </div>
       <div class="col-sm-3">
            <h6>Help</h6>
            <a href="#">Track your Order</a><br/>
            <a href="#">Frequently asked questions</a><br/>
            <a href="#">Returns</a><br/>
            <a href="#">Cancellations</a><br/>
            <a href="#">Payments</a><br/>
            <a href="#">Customer Care</a>
       </div>
       <div class="col-sm-3">
            <h6>Shop by</h6>
            <a href="#">Collections</a><br/>
            <a href="#">Men</a><br/>
            <a href="#">women</a><br/>
            <a href="#">kids</a><br/>
            <a href="#">indie</a><br/>
            <a href="#">New arrivals</a>
       </div>

       <div class="col-sm-3">
            <h1>B R A N D <br/>
                S T O R E
            <h1>

            
</div>
<div class="row">
              <div class="col-lg-12">

              <div class="image3">
                <p>copyright 2019 &copy; All rights reserved BRAND STORE</p>
</div>
</div>
</div>

</div> 
</body>
</html>