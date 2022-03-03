<html>
<body>
<form method="post" >
<label>Enter your number:</label>
<input type="text" name="number"  />
<button type="submit" name="submit">continue</button>
</form>
<?php
if(isset($_POST['submit']))
{
	$a=$_POST['number'];
	$b=$a;
	$sum=0;
	while($a>=1)
	{
		$d=$a%10;
		$e=$d*$d*$d;
		$sum=$sum+$e;
		$a=$a/10;
	}
if($b==$sum)
echo "number is amstrong ".$b;
else
echo "number is not amstrong ".$b;
}
?>
</body>
</html>