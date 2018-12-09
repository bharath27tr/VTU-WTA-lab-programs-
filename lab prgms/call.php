<html>
	<head><title>Simple calculator in php </title></head>
	<body bgcolor="Skyblue">
		<h1 align="center">Simple calculator</h1>
		<hr>
		<form method="POST"  align="center">
		Input1:<input type="text" name="op1"><br>
		Input2:<input type="text" name="op2"><br>
		<input type="submit" name="a" value="+">
		
		<input type="submit" name="s" value="-">
		<input type="submit" name="d" value="/">
		<input type="submit" name="m" value="*">
		</form>
		
		<?php
		$n1=$_POST['op1'];
		$n2=$_POST['op2'];

		if(is_numeric($n1) and is_numeric($n2))
		{
			if(isset($_POST["a"]))
				echo "<center><b>Result:".($n1+$n2)."</center>";
			if(isset($_POST["s"]))
				echo "<center><b>Result:".($n1-$n2)."</center>";
			if(isset($_POST["m"]))
				echo "<center><b>Result:".($n1*$n2)."</center>";
			if(isset($_POST["d"]))
				echo "<center><b>Result:".($n1/$n2)."</center>";
		}
		?>
		
		</body>
		</html>