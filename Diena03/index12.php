<?php 
	function stacia2() {

		$a = $_GET['name'];
		$b = $_GET['surname'];
		$result = 'Vardas: '.$a.'<br>'.'Pavarde: '.$b;
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
		<label><p>Name:</p><input type="text" name = "name"></label><label>
		<label><p>Surname:</p><input type="text" name = "surname"></label><label> 
		<input type="submit" value="get result">
	</form>
</body>
</html>