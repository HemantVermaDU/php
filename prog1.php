<html>
<head>
<title>Web Portal</title>
</head>
<body>
<?php
echo "My first web page <br>";
$arr= array("23","11","22","24","67");
	echo $arr[0]," ",$arr[1]," ",$arr[2]," ",$arr[3]," ",$arr[4];
	echo "<br> sorting array <br>";
	sort($arr);
	$clength = count($arr);
	for($x=0;$x < $clength; $x++)
	{
		echo $arr[$x];
		echo "<br>";
	}
	
	
	
	
	
?>
</body>
</html>