<?php 
	function stacia2() {

		$a = $_GET['a'];
		$b = $_GET['b'];
		$result = $a * 2 + $b * 2;
		echo $result;
	}
	stacia2();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Form</title>
</head>
<body>
	<form action="<?php $result; ?>" method="GET">
		<label><p>A:</p><input type="text" name = "a"></label><label>
		<label><p>B:</p><input type="text" name = "b"></label><label> 
		<input type="submit" value="get result">
	</form>
</body>
</html>