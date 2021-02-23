<?php

include('conn.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Update Product</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>

<nav class="navbar navbar-expand-md bg-info navbar-light">
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
      <!-- <a class="nav-link" href="pro.php">Products</a> -->
      <a class="nav-link dropdown-toggle" href="" id="navbardrop" data-toggle="dropdown">
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

<?php
$idfech = $_GET['id'];
$qf = "select * from products where id = '{$idfech}' ";
$qfech = mysqli_query($link, $qf);
if($row = mysqli_fetch_array($qfech)){
  $id = $row['id'];
  $modelNo = $row['modelNo'];
  $cat = $row['cat'];
  $brand = $row['brand'];
  $price = $row['price'];
  // echo $img = $row['img'];

?>

<div class='w-50 mx-auto bg-info text-white'>
<form method='post' enctype='multipart/form-data'>
<!-- Form attribute enctype='multipart/form-data' use for
insert images ad files in database.  -->
<h1 class='text-center mt-5 pt-3'>Update Product</h1>
  <div class="form-group my-4 mx-3">
    <label>Product Model:</label>
    <input type="text" class="form-control" value='<?php echo $modelNo ?>' name="pm" required='required'>
  </div>
  <div class="form-group my-4 mx-3 d-inline">
    <label>Product Category:</label>
    <select name='cat'>
    <option
      <?php if($cat == "Sun Glass"){
      echo "selected";
      } ?> 
    > Sun Glass </option>
    <option
      <?php if($cat == "Frame"){
      echo "selected";
      } ?>
    > Frame </option>
    <option
      <?php if($cat == "Watch"){
      echo "selected";
      } ?>
    > Watch </option>
    </select> 
  </div>
  <div class="form-group my-4 mx-3 d-inline">
    <label>Product Brand:</label>
    <select name='brand'>
    <option
      <?php if($brand == "Raybon"){
      echo "selected";
      } ?> 
    > Raybon </option>
    <option
      <?php if($brand == "MontBlank"){
      echo "selected";
      } ?>
    > MontBlank </option>
    <option
      <?php if($brand == "Gucci"){
      echo "selected";
      } ?>
    > Gucci </option>
    </select> 
  </div>
  <!-- <div class="form-group my-4 mx-3">
    <label>Product Image:</label>
    <input type="file" name="file" value='<?php echo $img ?>'/>
  </div> -->
  <div class="form-group my-4 mx-3 ">
    <label>Product Price:</label>
    <input type="text" class="form-control" name="pp" value='<?php echo $price ?>' required='required'>
  </div>
  <button type="submit" name='update' class="btn btn-info btn-lg mx-auto d-block">Update</button>
  <br/>
</form>
</div>

<?php

if(isset($_POST['update']))
{
    $pm = $_POST['pm'];
    $cat = $_POST['cat'];
    $brand = $_POST['brand'];
    $pp = $_POST['pp'];

    $query = "update products set modelNo='$pm', cat='$cat', brand='$brand', price='$pp' where id = {$id} ";

    if(mysqli_query($link, $query))
    {
      header('location: pl.php');
    }  
    else
    {
      echo "<script> alert('Product is not Update')</script>";
    }
  }
  }
?>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>