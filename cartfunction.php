<?php
session_start();
include 'header.php';
$page = 'products.php';
  include 'dbh.php';


  if(isset($_GET['add'])){




$item_id = $_GET['add'];
}
?>
<table  style="margin-top:100px "; class="table">
              <thead>
                <tr>
                  <th class="text-center">ItemNo </th>
                  <th class="text-center">Name</th>
                  <th class="text-center">Price</th>
                  <th class="text-center">remove</th>
                  <th class="text-center">confirm</th>
                </tr>
              </thead>
            </table>

<?php
$query= "SELECT * FROM products_tb WHERE products_id= '$item_id'";
$result = mysqli_query($conn,$query) or die("unable to add");
$rows = mysqli_num_rows($result);

if ($rows < 1) {  ?>


 <?php }  else {


while($rows = mysqli_fetch_array($result)){
?>
<table style="margin-left:50px;" class="table">
<tr class="table">
                      <td class="text-center"><?php echo $rows['products_id'];?></td>
                      <td class="text-center"><img  src="<?php echo $rows['products_image']; ?>" alt="product here" height="100px" width="100px" ></td>
                      <td class="text-center"><?php echo $rows['products_title'];?></td>
                      <td class="text-center">Rs <?php echo $rows['products_price'];?>.00/-</td>
                      <td class="text-center"><a class="btn btn-danger" href="<?php echo $rem_link;?>">REMOVE</a></td>
                        <td class="text-center"><a class="btn btn-primary" href="success.php">CONFORM</a></td>
                    </tr>
                  </table>
<?php  }
}



?>
