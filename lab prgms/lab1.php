<html>
<head>
	<script type="text/javascript">
		function calc("id")
		{
			var v1=parseInt(document.getElementById("id1").value);
			var v2=parseInt(document.getElementById("id2").value);
			
			if(isNaN(v1) || isNaN(v2))
			{
				alert("Invalid Input");
			}
			else if(id=="add")
				document.getElementById("res").value=v1+v2;
			else if(id=="sub")
				document.getElementById("res").value=v1-v2;
			else if(id=="mul")
				document.getElementById("res").value=v1*v2;
			else if(id=="div")
				document.getElementById("res").value=v1/v2;
			
		}
		</script>
		
		</head>
		<title>SC</title>
		<body>
		<h1>SC</h1>
		<form>
		op1:<input type="text" id="id1">
		op2:<input type="text" id="id2">
		res:<input type="text" id="res"><br>
		
		<input type="button" value="+" id="add">
		<input type="button" value="-" id="sub">
		<input type="button" value="*" id="mul">
		<input type="button" value="/" id="div"><br>
		<input type="reset" value="CLEAR">
		</form>
		</body>
		</html>
		