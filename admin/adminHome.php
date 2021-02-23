<?php

include('conn.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin Home Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>

<nav class="navbar navbar-expand-lg bg-info navbar-light">
<h1 class="navbar-brand logo">KhanBaba</h1>



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
        <a class="dropdown-item" href="ipro.php">Insert Product</a>
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

<div class="container">
<div class="row mt-5">
<div class="col-md-6 text-white text-center">
<div class='bg-info my-3 rounded-circle'>
<br/>
<h1 style='font-size: 80px'> 3 </h1>
<h5> Category </h5>
<br/>
</div>
</div>
<div class="col-md-6 text-white text-center">
<div class='bg-info my-3 rounded-circle'>
<br/>
<h1 style='font-size: 80px'> 3 </h1>
<h5> Brands </h5>
<br/>
</div>
</div>

<?php

$qPro = mysqli_query($link, 'select * from products');
$cPro = mysqli_num_rows($qPro);

$qOrd = mysqli_query($link, 'select * from sell');
$cOrd = mysqli_num_rows($qOrd);

?>

<div class="col-md-6 text-white text-center">
<div class='bg-info my-3 rounded-circle'>
<br/>
<h1 style='font-size: 80px'> <a href='pl.php'> <?php echo $cPro ?> </a> </h1>
<h5> Products </h5>
<br/>
</div>
</div>
<div class="col-md-6 text-white text-center">
<div class='bg-info my-3 rounded-circle'>
<br/>
<h1 style='font-size: 80px'> <a href='sell.php'> <?php echo $cOrd ?> </a> </h1>
<h5> Orders </h5>
<br/>
</div>
</div>
</div>
</div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>