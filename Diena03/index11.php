<?php 
	$a = $_POST['a'];
	$b = $_POST['b'];
	echo $a * $b;
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Form</title>
</head>
<body>
	<form action="<?php $_PHP_SELF; ?>" method="POST">
		<label><p>A:</p><input type="text" name = "a"></label><label>
		<label><p>B:</p><input type="text" name = "b"></label><label> 
		<input type="submit" value="get result">
	</form>
</body>
</html>