<?php
include 'header.php';
?>
<?php
   include 'dbh.php';









 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>products</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="index.css" type="text/css">
</head>
<body class="container">
<h1  style="margin-top:60px;" class="text-center text-primary "> SHOP YOUR BRAND <?php echo  ( $_SESSION['username'])?></h1>
<?php

if(isset($_SESSION["cart_item"])){
  $total_quantity = 0;
  $total_price = 0;
?>
<table class="tbl-cart" cellpadding="10" cellspacing="1">
<tbody>
<tr>
<th style="text-align:left;">Name</th>
<th style="text-align:left;">Code</th>
<th style="text-align:right;" width="5%">Quantity</th>
<th style="text-align:right;" width="10%">Unit Price</th>
<th style="text-align:right;" width="10%">Price</th>
<th style="text-align:center;" width="5%">Remove</th>
</tr>
<?php
  foreach ($_SESSION["cart_item"] as $item){
      $item_price = $item["quantity"]*$item["price"];
  ?>
      <tr>
      <td><img src="<?php echo $item["image"]; ?>" class="cart-item-image" /><?php echo $item["name"]; ?></td>
      <td><?php echo $item["code"]; ?></td>
      <td style="text-align:right;"><?php echo $item["quantity"]; ?></td>
      <td  style="text-align:right;"><?php echo "$ ".$item["price"]; ?></td>
      <td  style="text-align:right;"><?php echo "$ ". number_format($item_price,2); ?></td>
      <td style="text-align:center;"><a href="index.php?action=remove&code=<?php echo $item["code"]; ?>" class="btnRemoveAction"><img src="icon-delete.png" alt="Remove Item" /></a></td>
      </tr>
      <?php
      $total_quantity += $item["quantity"];
      $total_price += ($item["price"]*$item["quantity"]);
  }
  ?>

<tr>
<td colspan="2" style="align:right">Total:</td>
<td style="align:right"><?php echo $total_quantity; ?></td>
<td style="align:right" colspan="2"><strong><?php echo "$ ".number_format($total_price, 2); ?></strong></td>
<td></td>
</tr>
</tbody>
</table>
<?php
} ?>

<div class="row">

<?php
 session_start();





$query = " SELECT `products_id`,`products_title`,`products_image`,`products_price`,`products_discount` FROM `products_tb`  order by products_id ASC";
$queryfire = mysqli_query($conn,$query);
$num = mysqli_num_rows($queryfire);

if($num > 0){
    while($product = mysqli_fetch_array($queryfire)){


?>

    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">

          <div class="media">
             <h4 class="media-title"><?php echo $product['products_id'];?> <?php echo $product['products_title'];?>
             </h4>
            <div class="media-body">

              <img  src="<?php echo $product['products_image']; ?>" alt="product here" height="200px" width="200px" >
              <h4 class="media-title">&#8377;<?php echo  $product['products_price'];?><span>
              <?php echo  $product['products_discount']; ?> % off</span>
             </h4>
             </h4>
             <h6 style="background-color:skyblue" class="badge badge-success">4.4<i class="glyphicon glyphicon-star"></i></h6>

            </div>
            <div class="btn-group">
            <div class=" cart_action "><input type="text" class="product-quantity btn btn-default " name="quantity" value="1" size="2" />
            <a href="cartfunction.php?add=  <?php echo $product['products_id'];?>" class="btnAddAction btn btn-primary"> ADD TO CART </a> </div>
          </div>
          </div>
             <?php


             ?>




    </div><!---------col div end-------->


    <?php
}
}

?>

</div><!-----------row div end----------->

</body>
</html>
