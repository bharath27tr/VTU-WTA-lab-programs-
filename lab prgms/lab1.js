<html>
<head>
	<script type="text/javascript">
		function calc("cid")
		{
			var v1=parseInt(document.getElementById("op1").value);
			var v2=parseInt(document.getElementById("op2").value);
			
			if(isNaN(v1) || isNaN(v2))
			{
				alert("Invalid Input");
			}
			else if(cid=="add")
				document.getElementById("res").value=v1+v2;
			else if(cid=="sub")
				document.getElementById("res").value=v1-v2;
			else if(cid=="mul")
				document.getElementById("res").value=v1*v2;
			else(cid=="div")
				document.getElementById("res").value=v1/v2;
			
		}
		</script>
		
		</head>
		<title>SC</title>
		<body>
		<h1>SC</h1>
		<form>
		op1:<input type="text" id="op1">
		op2:<input type="text" id="op2">
		res:<input type="text" id="res">
		
		<input type="button" value="+" id="add" onclick="calc(this.id)">
		<input type="button" value="-" id="sub" onclick="calc(this.id)">
		<input type="button" value="*" id="mul" onclick="calc(this.id)">
		<input type="button" value="/" id="div" onclick="calc(this.id)"><br>
		<input type="reset" value="CLEAR">
		</form>
		</body>
</html>
		