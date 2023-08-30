<!DOCTYPE html>
<html>
<body>

Annie

<?php
$link=mysqli_connect("localhost","root","mmmmmmmm","school") or die(mysql_error());

$query="UPDATE student SET sno='".$_POST['sno'];
$query.="',sname='".$_POST['sname']."',ssex='".$_POST['ssex']."' WHERE sno='".$_POST['o_sno'] ."'";
//echo $query;
 if (mysqli_query($link,$query) ) {

echo "<script>alert('Update成功');location.href='list.php'</script>";
 } else {
	echo "<script>alert('Update Fail');history.go(-1)</script>";
 }
?>
</body><html>