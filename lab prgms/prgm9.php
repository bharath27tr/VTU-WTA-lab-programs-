<html>
	<head><title>Variable States</title></head>
	<body bgcolor="#BFF">
	<?php
	$states="Mississippi Alabama Texas Massachusetts Kansas";
	echo "Input Text<br>".$states;
	
	
	$states1=preg_split("/ /",$states);
	
	$statelist=array();
	
	echo "<br>The output:<br>";
	
	foreach($states1 as $v1)
	{
		if(preg_match("/xas$/",$v1))
			$statelist[0]=$v1;
		if(preg_match("/^K.*s$/i",$v1))
			$statelist[1]=$v1;
		if(preg_match("/^M.*s$/",$v1))
			$statelist[2]=$v1;
		if(preg_match("/.*a$/",$v1))
			$statelist[3]=$v1;
	}
	
	ksort($statelist);
	print_r($statelist);
	?>
		</body>
		</html>
		