<html>
<head>
<title>Checking</title>
</head>
<body>
<?php 
	$y = $_GET["number"]; 
	$x = 0;

	while($x < $y) {
		$x+=2;
		if ($x > $y) {
			break;
		}
		echo "$x <br>";
	}
?>
</body>
</html>