<html>
<head>
	<script type="text/javascript">
		function cal("cid")
		{
			var v1=ParseInt(document.getElementById("op1").value);
			var v2=ParseInt(document.getElementById("op2").value);
			
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
			else if(cid=="div")
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
		
		<input type="button" value="+" id="add" Onclick="cal(this.id)">
		<input type="button" value="-" id="sub" Onclick="cal(this.id)">
		<input type="button" value="*" id="mul" Onclick="cal(this.id)">
		<input type="button" value="/" id="div" Onclick="cal(this.id)"><br>
		<input type="reset" value="CLEAR">
		</form>
		</body>
</html>
		