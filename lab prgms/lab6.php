<html>
<head><title>Page count</title></head>
<body>
	<h1>Page count</h1>
	<?php
	$f1=fopen("count.txt","r");
	$c1=fscanf($f1,"%d");
	fclose($f1);
	
	$c1[0]++;
	
	$f2=fopen("count.txt","w");
	fprintf($f2,"%d",$c1[0]);
	fclose($f2);
	echo $c1[0];
	
	?>
</body>
</html>
