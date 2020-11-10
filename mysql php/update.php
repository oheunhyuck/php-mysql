<?php
$DBcon=mysqli_connect("127.0.0.1","root","348127","test");
$read2="update mysql set title=\"{$_POST['title']}\",description=\"{$_POST['description']}\" where id={$_POST['id']}";
 $result=mysqli_query($DBcon,$read2);
 if($result==true){
    header("Location: /index.php");;
 }
 else{
   echo ' 실패';
 }

 ?>
 <a href="index.php">돌아가기</a>
 </body>
 <html>
