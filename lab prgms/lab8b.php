<html>
<head><title>MO</title></head>

<body>
<h1>Matrix operations</h1>

	<?php
	$a=array(array(1,2,3),array(1,2,3),array(1,2,3));
	$b=array(array(1,2,3),array(1,2,3),array(1,2,3));
	
	echo("The matrix-A is:<br>");
	
	for($i=0;$i<3;$i++)
	{
		for($j=0;$j<3;$j++)
		echo(" ".$a[$i][$j]);
		echo("<br>");
	}
	echo("The matrix-B is:<br>");
	
	for($i=0;$i<3;$i++)
	{
		for($j=0;$j<3;$j++)
		echo(" ".$b[$i][$j]);
		echo("<br>");
	}

	echo("The Transpose of matrix<br>");
	for($i=0;$i<3;$i++)
	{
		for($j=0;$j<3;$j++)
		echo(" ".$b[$j][$i]);
		echo("<br>");
	}
	
	echo("The Addition of matrix<br>");
	for($i=0;$i<3;$i++)
	{
		for($j=0;$j<3;$j++)
		echo(" ".($a[$i][$j]+$b[$i][$j]));
		echo("<br>");
	}
	
	
	$c=array();
	for($i=0;$i<3;$i++)
	{
		for($j=0;$j<3;$j++)
		{
		$c[$i][$j]=0;
		for($k=0;$k<=2;$k++)
		$c[$i][$j]+=$a[$i][$k]+$b[$k][$j];
		}
		
	}
	
	echo("The Muliplication of matrix<br>");
	for($i=0;$i<3;$i++)
	{
		for($j=0;$j<3;$j++)
		echo(" ".$c[$i][$j]);
		echo("<br>");
	}
	
	
	?>
	</body>
	</html>
	
	
	
	
	
	
	