<?php

include('conn.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin Login Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>

<nav class="navbar navbar-expand-lg bg-info navbar-light">
<h1 class="navbar-brand logo">KhanBaba</h1>
</nav>



<div class='w-50 mx-auto bg-info'>
<form method='post'>
<h1 class='text-center mt-5 pt-3 text-white'> Admin Login </h1>
  <div class="form-group m-5 text-white">
    <label>Username:</label>
    <input type="text" class="form-control" placeholder="Enter Username" name="un" required='required'>
  </div>
  <div class="form-group m-5 text-white">
    <label>Password:</label>
    <input type="password" class="form-control" placeholder="Enter Password" name="ps" required='required'>
  </div>
  <button type="submit" name='sub' class="btn btn-info btn-lg mx-auto d-block">Login</button>
  <br/>
</form>
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