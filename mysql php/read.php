<?php
$DBcon=mysqli_connect("127.0.0.1","root","348127","test");
$read="select * from mysql";
 $result=mysqli_query($DBcon,$read);
 $array=mysqli_fetch_array($result);

echo '<h2>'.$array['title'].'</h2><br>';
echo $array['description'];

?>
