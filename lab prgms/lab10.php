<?php

$con=mysqli_connect("localhost","root","","student") or die("Can't connect".mysqli_error());
$res=mysqli_query($con,"select * from student_info");

echo("<b>Before sorting</b>");

echo("<table border=1> <tr> <th> USN </th> <th> Name </th> <th>Address</th></tr>");
$a=array();
while($row=mysqli_fetch_row($res))
{
	echo("<tr><th>".$row[0]."</th> <th>".$row[1]."</th> <th>".$row[2]."</th></tr>");
	array_push($a,$row[0]);
}

echo"</table>";
$n=count($a);
for($i=0;$i<($n-1);$i++)
{
	$pos=$i;
	for($j=$i;$j<$n;$j++)
	{
		if($a[$pos]>$a[$j])
		{
			$pos=$j;
		}
	
	if($pos!=$i)
	{
		$temp=$a[$i];
		$a[$i]=$a[$pos];
		$a[$pos]=$temp;
	}
	}
}

$c=array();
$d=array();

$res1=mysqli_query($con,"select * from student_info");
while($row=mysqli_fetch_row($res1))
{
	for($i=0;$i<$n;$i++)
	{
		if($row[0]==$a[$i])
		{
			$c[$i]=$row[1];
			$d[$i]=$row[2];
		}
		
		
	}
}
echo("<b>After sorting</b>");
echo("<table border=1> <tr> <th> USN </th> <th> Name </th> <th>Address</th></tr>");

for($i=0;$i<$n;$i++)
{
	echo("<tr><th>$a[$i]</th> <th>$c[$i]</th> <th>$d[$i]</th></tr>");
}
echo("</table>");

mysqli_free_result($res1);
mysqli_close($con);
?>