<html>
<body>
<h2 align="center"><u>Factorial of number using function</u></h2>
<form method="get">
<input type="number" placeholder="number" name="n_number">
<button type="submit" name="n_submit" value="submit">Check</button>
</form>
<?php
if(isset($_GET['n_submit']))
{
	$num=$_GET['n_number'];
	function factorial(int $catch)
	{
		$factorial=1;
		for($i=1;$i<=$catch-1;$i++)
		$factorial=$factorial *($i+1);
		return factorial;
	}
	echo "Factorial of $numis".factorial($num);
}
?>
</body>
</html>