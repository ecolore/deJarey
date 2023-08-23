<html><head></head><body style='align:center'>
<form action="update.php" method="post">

<?php
  echo"Hello World";
$link=mysqli_connect("localhost","root","spot1234","school") or die(mysql_error());

$query="SELECT * FROM student WHERE sno='".$_GET['sno']."'";

$result=mysqli_query($link,$query) or die(mysql_error());
while ($row=mysqli_fetch_array($result)){
 
 
?>

ID<input type="text" name="sno" value=<?=$row['sno']?>><br>
Your Name <input type="text" name="sname" value=<?=$row['sname']?>></input><br>
Gender <input type="radio" name="ssex"  value='Male' <?php echo (substr($row['ssex'],0,1)=='M')?('checked'):('') ?>>Male</input><br>
<input type="radio" name="ssex" value='F' <?php echo (substr($row['ssex'],0,1)=='F')?('checked'):('')?>>Female</input><br>
<input type='hidden' name='o_sno' value=<?=$row['sno']?>>
<input type="submit" value="Go"</input>
<input type="reset" value="Clear"</input>

<?php
}
?>
</form>
</body></html>