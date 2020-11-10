<html>
<body>


<?php
$DBcon=mysqli_connect("127.0.0.1","root","348127","test");
  $filtered_title =mysqli_real_escape_string($DBcon,$_POST['title']);
  $filtered_description =mysqli_real_escape_string($DBcon,$_POST['description']);
  $filtered_description2 =htmlspecialchars($filtered_description);
$insert="insert into mysql (title,description,created) value('{$filtered_title}','{$filtered_description}',NOW());";

$result=mysqli_query($DBcon,$insert);


if($result==true){

  header("Location: /index.php");
}
else{
  echo ' 실패';
}

?>
<a href="index.php">돌아가기</a>
</body>
<html>
