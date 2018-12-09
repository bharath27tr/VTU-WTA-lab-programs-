<html>
<head><title>Simple calci</title></head>

<body bgcolor="skyblue">
<h1 align="center">Simple calci</h1>
<hr>
<form method="POST" align="center">
input1:<input type="text" name="id1"><br>
input2:<input type="text" name="id2">
<br>
<input type="submit" name="add" value="+">
<input type="submit" name="sub" value="-">
<input type="submit" name="mul" value="*">
<input type="submit" name="div" value="/">

</form>

	<?php
	$n1=$_POST['id1'];
	$n2=$_POST['id2'];
	
	if(is_numeric($n1) and is_numeric($n2))
	{
		if(isset($_POST["add"]))
			echo"<center>Result: ".($n1+$n2);
		else if(isset($_POST["sub"]))
			echo"<center> Result: ".($n1-$n2);
		if(isset($_POST["mul"]))
			echo"<center> Result: ".($n1*$n2);
		if(isset($_POST["div"]))
			echo"<center> Result: ".($n1/$n2);
	}

	?>
	</body>
	</html>