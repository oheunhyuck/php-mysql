<?php
$DBcon=mysqli_connect("127.0.0.1","root","348127","test");
$delete= "delete from mysql where id={$_POST['id']}";
$result=mysqli_query($DBcon,$delete);
if($result==true){
    header("Location: /index.php");
}
else{
  echo ' 실패';
}
 ?>
 <a href="index.php">돌아가기</a>
