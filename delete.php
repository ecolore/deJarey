<?php
  echo"Caution! to delete...";
$link=mysqli_connect("localhost","root","mmmmmmmm","school") or die(mysql_error());

$query="DELETE FROM student WHERE sno='".$_GET['sno']."'";

if (mysqli_query($link,$query) ) {

echo "<script>alert('Delete成功');location.href='list.php'</script>";
 } else {
	echo "<script>alert('DELETE Failed');history.go(-1)</script>";
 }

?>

