<?php

// A piece of code is index.php 
// index.php is very large therefor
// divde in pieces

// Full Piece of Code therefor
// easily understand:

// <div class='col-lg-10'>
// <div class='container-fluid'>
// <div class='row mt-3'>
// <?php
// $con = mysqli_connect('localhost','root','','ecomm');
// if(isset($_POST['ray'])){
//   $raybon = 'Raybon';  
//   $q = "select * from products where brand like '%$raybon%'";
$query = mysqli_query($con, $q);
  while ($row = mysqli_fetch_array($query)){
   $id = $row['id'];
   $modelNo = $row['modelNo'];
   $brand = $row['brand'];
   $price = $row['price'];
   $img = $row['img'];
  ?>
    <div class='col-lg-4 col-md-6'>
    <div class='bg-info rounded-lg my-2 py-3'>
    <div class=''>
      <?php echo "<img src='admin/img/$img' class='img-fluid mx-auto d-block' style='width:300px; height:180px' >"; ?>
      </div>
      <?php echo "<p class='d-inline ml-2 my-2 text-white'> Brand: $brand </p>"; ?>
      <?php echo "<p class='d-inline float-md-right mr-2 text-white'> Price: $price/- </p>"; ?>
      <a href="pd.php?id=<?php echo $id; ?>" class='btn btn-info btn-sm mx-auto mt-2 d-block w-50'> View Details </a>
    </div>
    </div>
  <?php
  }
// }
  ?>