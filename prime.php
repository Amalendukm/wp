<html>
<head>
<h1>prime with range
</h1></head>
<form method="POST">
<label>Enter the starting number:</label>
<input type="text"name="starting"/>
<label><br>Enetr the ending number:</label>
<input type="text" name="ending"/><br>
<button type="click" name="click" style="width:150px;height:50px"><b>submit</b></button>
</form>
<?php
if(isset($_POST['click']))
{
	$l=$_POST['starting'];
	$u=$_POST['ending'];
	$flag=0;
	$count=0;
	for($i=$l; $i<=$u; $i++)
	{
		$flag=0;
		for($j=2; $j<=$i/2; $j=$j+1)
		{
			$c=$i % $j;
			if($c==0)
			{
				$flag=1;
			}
		}
		if($flag==0 && $count==0)
		{
			echo "Prime number:<br>";
			$count=1;
		}
		if($flag==0)
		echo "$i <br>";
	}
}
?>
</body>
</html>
			