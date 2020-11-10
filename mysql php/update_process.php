<?php
$DBcon=mysqli_connect("127.0.0.1","root","348127","test");
$filtered_id =mysqli_real_escape_string($DBcon,$_GET['id']);

$read2="select * from mysql where id={$filtered_id}";
 $result2=mysqli_query($DBcon,$read2);
 $array2=mysqli_fetch_array($result2);
 ?>

<form action="update.php" method="post">
  <input type="hidden" name="id" value="<?php echo $filtered_id;?>">
  <p><input type="text" name="title" value="<?php echo $array2['title'];?>"><br></p>
  <p><textarea  name="description"><?php echo $array2['description'];?></textarea><br></p>
  <input type="submit" value="update">
</form>
