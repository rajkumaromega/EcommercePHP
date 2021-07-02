<?php
  include 'header.php';

  include 'dbh.php';
?>
<h1> SEARCH PAGE</h1>

<div class="row">
<?php

       if(isset($_POST['submit-btn'])){

        $search =$_POST['search'];

     }
      $sql = " SELECT * FROM products_tb WHERE products_title LIKE '%$search%' OR products_price LIKE ''";

     $result = mysqli_query($conn,$sql);
     $queryResult = mysqli_num_rows($result);

     if($queryResult > 0){
       while($rows = mysqli_fetch_array($result)){
         ?>

         <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">

                  <div class="media">
                     <h4 class="media-title"><?php echo $rows['products_id'];?> <?php echo $rows['products_title'];?>
                     </h4>
                    <div class="media-body">

                      <img  src="<?php echo $rows['products_image']; ?>" alt="product here" height="200px" width="200px" >
                      <h4 class="media-title">&#8377;<?php echo  $rows['products_price'];?><span>
                      <?php echo  $rows['products_discount']; ?> % off</span>
                     </h4>
                     </h4>
                     <h6 style="background-color:skyblue" class="badge badge-success">4.4<i class="glyphicon glyphicon-star"></i></h6>

                    </div>
                    <div class="btn-group">
                    <div class=" cart_action "><input type="text" class="product-quantity btn btn-default " name="quantity" value="1" size="2" />
                    <a href="cartfunction.php?add=  <?php echo $rows['products_id'];?>" class="btnAddAction btn btn-primary"> ADD TO CART </a> </div>
                  </div>
                  </div>
                </div><!----row container--->

   <?php        }
        }






   ?>
