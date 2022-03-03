<html>
<body>
<?php
$x=array("a"=>20,"b"=>25,"c"=>45,"d"=>35);
echo "The array is <br>";
foreach($x as $i)
{
	echo $i;
	echo"<br>";
}
echo "Assending order<br>";
asort($x);
foreach($x as $i)
{
	echo $i;
	echo "<br>";
}
echo"Asending order<br>";
asort($x);
foreach($x as $i)
{
	echo $i;
	echo "<br>";
}
echo "Desending order<br>";
arsort($x);