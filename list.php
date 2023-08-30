<!DOCTYPE html>
<html>
<head><style> 
table, th,td{'border:1px solid';}
h1   {color: GREEN;}
</style>
</head>
<h1>TEST</h1>
<a href="insert.php">Add record</a>
<?php

$link=mysqli_connect("localhost","root","mmmmmmmm","school") or die(mysql_error());

$query="SELECT * FROM student";
$result=mysqli_query($link,$query) or die(mysql_error());
?>
<table border=1><th>學號</th><th>name</th><th>Gender</th><th>action</th>
<?php while ($row=mysqli_fetch_array($result)){
	?>
  <tr>
  <td><?=$row['sno']?></td>
    <td><?=$row['sname']?></td>
	  <td><?=$row['ssex']?></td>
	  
	  <td><a href="edit.php?sno=<?=$row['sno']?>">Edit</a>
	  
	  <a href="delete.php?sno=<?=$row['sno']?>" 
	  onclick="return confirm('Reconfirm Delete?')">Delete</a></td>
	  
  </tr>
<?php
}
?>
</table>
</html>