<html><head></head><body>
<?php
  echo"Hello World";

?><hr>
<form action="add.php" method="post">
ID<input type="text" name="sno"><br>
Your Name <input type="text" name="sname"></input><br>
Gender <input type="radio" name="ssex" value='Male'>Male</input><br>
<input type="radio" name="ssex" value='Female'>Female</input><br>
<input type="submit" value="Go"</input>
<input type="reset" value="Clear"</input>
</form>
</body></html>