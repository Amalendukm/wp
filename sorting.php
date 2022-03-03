<html>
<body>
<?php
$age=array("Peter"=>35,"Ben"=>37,"Joe"=>43);
arsort($age);
foreach($age as $x=>$_value)
{
	echo "key=".$x.",value=".$_value;
	echo "<br>";
}
echo "<br>";
krsort($age);
foreach($age as $y=>$y_value)
{
	echo "key=".$y.",value=".$y_value;
	echo "<br>";
}
?>
</body>
</html>