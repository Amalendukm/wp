<html>
<body>
<form method="get">
<input type="number" placeholder="firstnum" name="num1"/>
<input type="number" placeholder="secondnum" name="num2"/>
<button type="submit" name="submit" value="submit">Check</button>
</form>
<?php
if(isset($_GET['submit']))
{
	$num1=$_GET['num1'];
	$num2=$_GET['num2'];
	echo "Even numbers between $num1 and $num2 are:<br>";
	for($i=$num1;$i<=$num2;$i++)
	{
		if($i %2 == 0)
		{
			echo "$i <br>";
		}
	}
}
?>
</body>
</html>
