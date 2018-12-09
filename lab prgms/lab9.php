<html>
<head><title>Var states</title></head>
<body>
	<?php
	$states="Mississippii Alabama Texas Massachusetts Kansas";
	echo "".$states;
	$s1=preg_split("/ /",$states);
	$List=array();
	echo("<br>The O/P:<br>"); 
	foreach($s1 as $v1)
	{
			if(preg_match("/.*xas$/",$v1))
				$List[0]=$v1;
			
			if(preg_match("/^K.*s$/i",$v1))
			$List[1]=$v1;

			if(preg_match("/^M.*s$/",$v1))
			$List[2]=$v1;
			
			if(preg_match("/.*a$/",$v1))
			$List[3]=$v1;
	}
	ksort($List);
	print_r($List);
	?>
	
</body>

</html>