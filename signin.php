<?php 
   include 'header.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Signup</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="index.css" type="text/css">
</head>
<body class="backro">

<!---------------------navbar ending--------------------->
<div >
<h1 style="text-align:center">signinform</h1>
<div class="row">
    <div class="col-lg-offset-5 col-lg-3">
<div class="panel-group">
<div class="panel panel-primary">
    <div class="panel-heading">signup</div>
  <div class="panel-body">    

<form action="signinform.php" method="post">
<div class="form-group">      
<label>user</label> 
       <input type="text" class="form-control" name="user">

</div>
<div class="form-group"> 
       <label>password</label>
       <input type="password"  class="form-control" name="password">
       </div>
       <button type="submit" class="btn btn-primary" name="submit-button">submit</button>
    </form>

    </div>

<div class="panel-footer"></div>
    </div>
</div>
</div>
</body>
</html>