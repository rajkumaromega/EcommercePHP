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
      <li ><a href="index.php">HOME</a></li>
      <li><a style="color: black" href="#">MEN</a></li>
      <li><a style="color:black" href="#">WOMEN</a></li>
      <li><a  style="color:black"href="#">KIDS</a></li>
    </ul>
    <!------------search box-------------------------->
    <form class="navbar-form navbar-right" action="searchbox.php" method="POST">
    <div class="input-group">
    <input type="text" class="form-control" placeholder="Search" name="search">
    <div class="input-group-btn">
      <button class="btn btn-default" type="submit" name="submit-btn">
        <i class="glyphicon glyphicon-search"></i>
      </button>
    </div>
  </div>

    </form>
    <!-------------------search box end-------------------->
    <ul class="nav navbar-nav navbar-right">
      <li><a style="color:black" href="cartfunction.php">CART<span class="glyphicon glyphicon-shopping-cart"></span></a></li>


    </ul>
  </div>
</nav>
</body>
</html>
