<!doctype html>
<html>
<head>
   <meta charset="utf-8">


  <title><?php if(isset($_GET['id'])){
    $DBcon=mysqli_connect("127.0.0.1","root","348127","test");
    $filtered_id =mysqli_real_escape_string(  $DBcon,$_GET['id']);

  $read2="select * from mysql where id={$filtered_id}";
   $result2=mysqli_query($DBcon,$read2);
   $array2=mysqli_fetch_array($result2);
   echo $array2['title'];}
   else{
     echo 'welcome';
   }
   ?></title>
</head>
<body>
<h1>Web</h1>
<?php

$DBcon=mysqli_connect("127.0.0.1","root","348127","test");
$read="select * from mysql";
 $result=mysqli_query($DBcon,$read);
  while($array=mysqli_fetch_array($result)){
    echo "<li><a href=\"index.php?id={$array['id']}\">".$array['title'].'</a></li><br>';
  }
  if(isset($_GET['id'])){
    $filtered_id =mysqli_real_escape_string(  $DBcon,$_GET['id']);
  $read2="select * from mysql where id={$filtered_id}";
   $result2=mysqli_query($DBcon,$read2);
   $array2=mysqli_fetch_array($result2);
   echo $array2['description'].'<br>' ;



 }
   else{
echo 'welcome <br>';


   }


?>
<a href="create_process.php" place>create</a>
<?php
if(isset($_GET['id'])){
  $filtered_id =mysqli_real_escape_string($DBcon,$_GET['id']);
echo "<a href=\"update_process.php?id={$filtered_id}\">update</a>";

$delete='<form action="delete.php" method="post">
  <input type="hidden" name="id" value="'.$filtered_id.'">
  <input type="submit" value="delete">
</form>';


echo $delete;

}

?>




</body>


</html>
