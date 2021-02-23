<!-- <?php

include('conn.php');

?> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Insert Product Page</title>
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

<div class='w-50 mx-auto bg-info text-white'>
<form method='post' enctype='multipart/form-data'>
<!-- Form attribute enctype='multipart/form-data' use for
insert images ad files in database.  -->
<h1 class='text-center mt-5 pt-3'>Insert Product</h1>
  <div class="form-group my-4 mx-3">
    <label>Product Model:</label>
    <input type="text" class="form-control" placeholder="Enter Product Model" name="pm" required='required'>
  </div>
  <div class="form-group my-4 mx-3 d-inline">
    <label>Product Category:</label>
    <select name='cat'>
    <option> Sun Glass </option>
    <option> Frame </option>
    <option> Watch </option>
    </select> 
  </div>
  <div class="form-group my-4 mx-3 d-inline">
    <label>Product Brand:</label>
    <select name='brand'>
    <option> Raybon </option>
    <option> MontBlank </option>
    <option> Gucci </option>
    </select> 
  </div>
  <div class="form-group my-4 mx-3">
    <label>Product Image:</label>
    <input type="file" name="file" />
  </div>
  <div class="form-group my-4 mx-3 ">
    <label>Product Price:</label>
    <input type="text" class="form-control" placeholder="Enter Product Price" name="pp" required='required'>
  </div>
  <button type="submit" name='submit' class="btn btn-info btn-lg mx-auto d-block">Save</button>
  <br/>
</form>
</div>


<?php

$link = mysqli_connect('localhost','root');
mysqli_select_db($link, 'ecomm');

if(isset($_POST['submit']))
{
    $pm = $_POST['pm'];
    $cat = $_POST['cat'];
    $brand = $_POST['brand'];
    $pp = $_POST['pp'];
    // when insert images and files in database 
    // so use $_FILES except $_POST
    $files = $_FILES['file'];
    

    $filename = $files['name'];
    $filetmp = $files['tmp_name'];

    $path = 'img/'.$filename;
    move_uploaded_file($filetmp,$path);

    // $image = $_FILES['file']['name'];
    // $image_tmp = $_FILES['file']['tmp_name'];
    // move_uploaded_file('image_tmp','img/.$image');

    $query = "INSERT INTO products (modelNo, cat, brand, price, img) values ('$pm','$cat','$brand','$pp','$filename')";
    
    if(mysqli_query($link, $query))
    {
      header('location: ipro.php');
    }  
    else
    {
      echo "<script> alert('Product is not Insert')</script>";
    }
  }
?>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>