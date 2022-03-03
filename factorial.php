<html>
<head>
<title>Factorial</title>
</head>
<body>
<h2 align="center"><u>Factorial of a number</u></h2>
<form method="get">
<input type="number" placeholder="number" name="number"/>
<button type="submit" name="submit" value="submit">Check</button>
</form>
<?php
if(isset($_GET['submit']))
{
	$x=1;
	$n=$_GET['number'];
	for($i=1;$i<$n-1;$i++)
	{
		$x=$x*($i+1);
	}
	echo "factorial of $n is $x";
}
?>
</body>
</html>