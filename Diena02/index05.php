<?php 
	$cities3 = [
		"Tokijas" => ['13.6', '1868', 'Japonija'],
		"Vasingtonas" => ['0.6', '1790', 'JAV'],
		"Makva" => ['11.5', '1147', 'Rusija'],
	];

	$cities3 ["Londonas"] = ['8,6', '43', 'Anglija'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Masyvai</title>
</head>
<body>
	<ul>
		<li><?php echo "Gyventoju skaicius: ".$cities3['Londonas'][0]; ?></li>
		<li><?php echo "Ikurtas: ".$cities3['Londonas'][1]; ?></li>
		<li><?php echo "Salis: ".$cities3['Londonas'][2]; ?></li>
	</ul>
</body>
</html>