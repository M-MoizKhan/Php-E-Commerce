<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
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
      <a class="nav-link" href="index.php">Home</a>
    </li>
    <li class="nav-item mx-3 font-weight-bold">
      <a class="nav-link" href="#">About Us</a>
    </li>
    <li class="nav-item mx-3 font-weight-bold">
      <a class="nav-link" href="#">Contact US</a>
    </li>
    <li class="nav-item mx-3 font-weight-bold">
      <a class="nav-link" href="#">Help</a>
    </li>
  </ul>
</nav>
</div>

<div class='container-fluid'>
<div class='row'>
  <div class='col-md-2 col-4 bg-info'>
  <div class='bg-info'>
  <h4> Brands </h4>
  <form method='post'>
  <button name='ray' class='btn btn-info mx-auto d-block my-4'> Raybon </button>
  <button name='mb' class='btn btn-info mx-auto d-block my-4'> MontBlank </button>
  <button name='guc' class='btn btn-info mx-auto d-block my-4'> Gucci </button>
  <br />
  <h4> Category </h4>
  <button name='sun' class='btn btn-info mx-auto d-block my-4'> Sun Glass </button>
  <button name='fr' class='btn btn-info mx-auto d-block my-4'> Frame </button>
  <button name='wat' class='btn btn-info mx-auto d-block my-4'> Watch </button>
  </form>
  </div>
  <br />
  <br />
  <br />
  </div>

<div class='col-md-10 col-8'>
<div class='container-fluid'>
<div class='row mt-3'>

<?php

$con = mysqli_connect('localhost','root','','ecomm');

if(isset($_POST['ray'])){
  $raybon = 'Raybon';  
  $q = "select * from products where brand like '%$raybon%'";

  // include piece of code from propieceOfindex.php file

include('propieceOfindex.php'); 

}

elseif(isset($_POST['mb'])){
  $mb = 'MontBlank';  
  $q = "select * from products where brand like '%$mb%'";
  
  // include piece of code from propieceOfindex.php file
  
  include('propieceOfindex.php');

}
elseif(isset($_POST['guc'])){
  $guc= 'Gucci';  
  $q = "select * from products where brand like '%$guc%'";
  
  // include piece of code from propieceOfindex.php file
  
  include('propieceOfindex.php');

}
elseif(isset($_POST['sun'])){
  $sun = 'Sun Glass';  
  $q = "select * from products where cat like '%$sun%'";
  
  // include piece of code from propieceOfindex.php file

  include('propieceOfindex.php');

}
elseif(isset($_POST['fr'])){
  $fr = 'Frame';  
  $q = "select * from products where cat like '%$fr%'";
  
  // include piece of code from propieceOfindex.php file

  include('propieceOfindex.php');

}
elseif(isset($_POST['wat'])){
  $wat = 'Watch';  
  $q = "select * from products where cat like '%$wat%'";
  
  // include piece of code from propieceOfindex.php file

  include('propieceOfindex.php');

}
else{
$q = 'select * from products';
$query = mysqli_query($con, $q);

  // include piece of code from propieceOfindex.php file
  
include('propieceOfindex.php');

}
?>

</div>
</div>
</div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>