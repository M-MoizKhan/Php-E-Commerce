<?php

include('conn.php');

?>

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

<div class='container my-4 border bg-info rounded-lg'>
<?php
$link = mysqli_connect('localhost','root','','ecomm');
$id = $_GET['id'];
$q = "select * from products where id like '%$id%'";
$query = mysqli_query($link,$q);
$row = mysqli_fetch_array($query);
  //  $id = $row['id'];
   $modelNo = $row['modelNo'];
   $cat = $row['cat'];
   $brand = $row['brand'];
   $price = $row['price'];
   $img = $row['img'];
   ?>
   <div class='row'>
   <div class='col-md-6 col-sm-12'>
   <div class='pt-3'>
     <?php echo "<img src='admin/img/$img' class='img-fluid mx-auto d-block' style='width:450px; height:300px' >"; ?>
   </div>

    <table class='table table-bordered mt-3 text-center text-white'>

    <tr>
    <th colspan='4'> Product Details </th>
    </tr>
    <tr>
    <td> Brand: </td>
    <?php echo "<td> $brand </td>"; ?>
    <td> Price: </td>
    <?php echo "<td> $price/- </td>"; ?>
    </tr>
    <tr>
    <td> Model No: </td>
    <?php echo "<td> $modelNo </td>"; ?>
    <td> Category: </td>
    <?php echo "<td> $cat </td>"; ?>
    </tr>
    </table>
   </div>

   <div class='col-md-6 col-sm-12'>
   <form method="post">
   <table class='table mt-5 text-white'>
   <tr>
    <th colspan='2' class='text-center'> Buyer Data </th>
   </tr>
   <tr>
    <th> <label class="">Name:</label> </th>
    <td> <input type="text" class="form-control" name='buyname' placeholder="Enter Name" required='required'> </td>
   </tr>
   <tr>
    <th> <label class="">City:</label> </th>
    <td> <input type="text" class="form-control" name='city' placeholder="Enter City" required='required'> </td>
   </tr>
   <tr>
    <th> <label class="">Address:</label> </th>
    <td> <input type="text" class="form-control" name='add' placeholder="Enter Address" required='required'> </td>
   </tr>
   <tr>
    <th> <label class="">Mobile No:</label> </th>
    <td> <input type="text" class="form-control" name='mno' placeholder="Enter Mobile No" required='required'> </td>
   </tr>
   <tr>
    <th> <label class="">Product Qty:</label> </th>
    <td> <input type="text" class="form-control" name='proqty' placeholder="Enter Product Qty" required='required'> </td>
   </tr>
   <tr>
    <th colspan='2' class='text-center'> <button type="submit" name='sub' class="btn btn-info">Buy Now</button> </th>
   </tr>
   <tr> <td colspan='2'> </td> </tr>
   </table> 
    </div>
  </div>
</form>

<?php
  echo $date = date('Y-d-m');
if(isset($_POST['sub'])){
  $buyname = $_POST['buyname'];
  $city = $_POST['city'];
  $add = $_POST['add'];
  $mno = $_POST['mno'];
  $proqty = $_POST['proqty'];
  $date = date("Y-d-m H:i:s");
// $date = 'CURRENT_TIMESTAMP';

$q = "INSERT INTO sell (modelNo, cat, brand, price, buyname, img, city, addres, mNo, proQty, orderDate) 
VALUES ('$modelNo','$cat','$brand','$price','$buyname','$img','$city','$add','$mno','$proqty','$date')";
if(mysqli_query($link, $q))
{
  header('location: index.php');
}
else{
  echo "<script> alert ('Data Not Transfer') </script>";
}
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