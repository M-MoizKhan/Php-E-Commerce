<?php

include('conn.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Product Page</title>
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
      <a class="nav-link" href="#">Home</a>
    </li>
    <li class="nav-item mx-3 font-weight-bold">
      <a class="nav-link" href="pro.php">Products</a>
    </li>
    <li class="nav-item mx-3 font-weight-bold">
      <a class="nav-link" href="#">Sell</a>
    </li>
    <li class="nav-item mx-3 font-weight-bold">
      <a class="nav-link" href="index.php">Logout</a>
    </li>
  </ul>
</nav>
</div>

<h1>Product Panel</h1>
<div class='test'>
<a href='ipro.php'> Insert Product </a>
<a href='prol.php'> Product List </a>
</div>
<?php
if(isset($_POST['sub']))
{
    $un = $_POST['un'];
    $ps = $_POST['ps'];

    $q = 'select * from admin';
    $run = mysqli_query($link,$q);
    $row = mysqli_fetch_array($run);

    $u = $row['un'];
    $p = $row['ps'];
    if($un==$u && $ps==$p){
        header('Location:adminHome.php');
    }
}
?>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>