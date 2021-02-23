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
  <link rel="stylesheet" type="text/css" href="css/style.css">
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
      <a class="nav-link" href="adminHome">Home</a>
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
      <a class="nav-link" href="sell.php">Sell</a>
    </li>
    <li class="nav-item mx-3 font-weight-bold">
      <a class="nav-link" href="index.php">Logout</a>
    </li>
  </ul>
</nav>
</div>

<?php

$q = "INSERT INTO sell (modelNo, cat, brand, price, img, buyname, city, addres, mNo, proQty) 
VALUES ('$name','$cat','$brand','$price','$name','$img','$city','$add','$mno','$proqty')";
if(mysqli_query($link, $q))
{
  header('location: index.php');
}
else{
  echo "<script> alert ('Data Not Transfer') </script>";
}


?>

</div>
</div>

</div>
</div>
</div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>