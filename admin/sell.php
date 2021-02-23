<?php

include('conn.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Order Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>

<nav class="navbar navbar-expand-lg bg-info navbar-light">
<h1 class="navbar-brand logo">KhanBaba</h1>

<!-- Button for Responsive Navbar 
when screen small so botton is display -->

<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarSupportedContent">
  <ul class="navbar-nav ml-auto">
    <li class="nav-item  mx-3 font-weight-bold">
      <a class="nav-link" href="adminHome.php">Home</a>
    </li>
    <li class="nav-item dropdown mx-3 font-weight-bold">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Products
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item " href="ipro.php">Insert Product</a>
        <a class="dropdown-item" href="pl.php">Products List</a>
      </div>
    </li>
    <li class="nav-item mx-3 font-weight-bold">
      <a class="nav-link" href="sell.php">Orders</a>
    </li>
    <li class="nav-item mx-3 font-weight-bold">
      <a class="nav-link" href="index.php">Logout</a>
    </li>
  </ul>
</nav>
</div>

<div class="container bg-info rounded-lg mt-3">
<table class='table text-white'>
<tr class='pt-3'>
<th> Order No </th>
<th> Product Details </th>
<th> Total Ammount </th>
<th> Buyer Details </th>
<th> Action </th>
</tr>

<?php

if(isset($_POST['sub'])){  
  $del = "delete from sell where orderNo = {$_POST['id']}";
  if(mysqli_query($link, $del)){
  }
  }  

$q = "select * from sell";
$query = mysqli_query($link, $q);
while($row = mysqli_fetch_array($query)){
  $orderNo = $row['orderNo'];
  $modelNo = $row['modelNo'];
  $cat = $row['cat'];
  $brand = $row['brand'];
  $proQty = $row['proQty'];
  $img = $row['img'];
  $price = $row['price'];
  $buyname = $row['buyname'];
  $city = $row['city'];
  $add = $row['addres'];
  $mNo = $row['mNo'];

  $ammount = $price * $proQty;

  ?>

  <tr>
  <?php echo "<td> $orderNo </td>"; ?>
  <?php echo "<td>
  Category: $cat <br/>
  Brand: $brand <br/>
  Model No: $modelNo <br/>
  Price: $price/- <br/>
  Product Qty: $proQty 
  </td>"; ?>
  <?php echo "<td> Rs:$ammount/- </td>"; ?>
  <?php echo "<td> 
  Name: $buyname <br/>
  Mobile No: $mNo <br/>
  Address: $add <br/>
  City: $city
  </td>"; ?>
  <td> <form method="post">
  <input type="hidden" name='id' value='<?php echo $orderNo ?>'>
  <input type='submit' class='btn btn-info' name='sub' value='Delete'>
  </form></td>
  </tr>
  <?php
}
?>
  </table>
  </div>
  

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>