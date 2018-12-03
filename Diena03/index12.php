<?php
	$a = $_GET['name'];
	$b = $_GET['surname'];
	if($a && $b) {
		echo 'Vardas: '.$a.'<br>'.'Pavarde: '.$b;
		exit();
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Form</title>
</head>
<body>
	<form action="" method="GET">
		<label><p>Name:</p><input type="text" name = "name"></label><label>
		<label><p>Surname:</p><input type="text" name = "surname"></label><label> 
		<input type="submit" value="get result">
	</form>
</body>
</html>