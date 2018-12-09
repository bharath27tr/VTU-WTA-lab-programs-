<<html>
<head><title>Server time</title></head>
	<body>
	<h1>Server time</h1>
	<br>
	<hr>
	<h3>Current time</h3>
	<meta http-equiv="refresh" content="1">
	<?php
	date_default_timezone_set("Asia/calcutta");
	echo date("h:i:sA");
	?>
	</body>
	</html>