<!DOCTYPE html>
<html>
<body>

Annie

<?php
$link=mysqli_connect("localhost","root","mmmmmmmm","school") or die(mysql_error());

$query="INSERT INTO student(sno,sname,ssex) VALUES ('".$_POST['sno']."','".$_POST['sname']."','".$_POST['ssex']."')";


 $result=mysqli_query($link,$query) or die(mysql_error());

echo "<script>alert('新增成功');location.href='list.php'</script>";


?>
</body><html>