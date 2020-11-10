
<?php

$DBcon=mysqli_connect("127.0.0.1","root","348127","test");
$read="select 1 from mysql;; ";
 $result=mysqli_query($DBcon,$read);

 $array=mysqli_fetch_array($result);
  print_r($array);

 ?>
