<?php

$query = mysqli_query($con, $q);
  while ($row = mysqli_fetch_array($query)){
   $id = $row['id'];
   $modelNo = $row['modelNo'];
   $cat = $row['cat'];
   $brand = $row['brand'];
   $price = $row['price'];
   $img = $row['img'];
   $sNo = $srNo++;
  ?>
  <tr>
  <?php echo "<td class='text-white'> $sNo </td>"; ?>
  <?php echo "<td class='text-white'> $cat </td>"; ?>
  <?php echo "<td class='text-white'> $brand </td>"; ?>
  <?php echo "<td class='text-white'> $modelNo </td>"; ?>
  <?php echo "<td class='text-white'> Rs:$price/- </td>"; ?>
  <?php echo " <td> <img src='img/$img' class='img-fluid mx-auto d-block test' style='width:70px; height:50px' > </td>"; ?> </td>
  <td> <form method="post">
  <!-- <input type="hidden" name='id' value='<?php echo $id ?>'> -->
  <a href='upro.php?id=<?php echo $id ?>' class='btn btn-info' >
  <!-- & mNo=<?php echo $modelNo ?> 
  & cat=<?php echo $cat ?> 
  & brand=<?php echo $brand ?> 
  & rs=<?php echo $price ?> 
  & img=<?php echo $img ?>" -->
  Edit </a> 
  <input type="hidden" name='id' value='<?php echo $id ?>'>
  <button type="submit" name='sub' class='btn btn-info'> Delete </button>
  </form> </td>
  </tr>
<?php
  }
?>