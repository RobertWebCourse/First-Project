<?php 
	$cities3 = [
		"Tokijas" => ['Tokijas', '1868', 'Japonija'],
		"Vasingtonas" => ['0.6', '1790', 'JAV'],
		"Makva" => ['11.5', '1147', 'Rusija'],
	];

	$ang = ["Londonas" => ['8,6', '43', 'Anglija']];

	$cities3[] = $ang;

	foreach ($cities3 as $key => $value) {
		print_r($value);
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Masyvai</title>
</head>
<body>
	<ul>
		<li>
			<?php 
				foreach ($ang as $key => $value) {
					print_r("Gyventoju skacius: $value[0]");
				}
			?>
		</li>
		<li>
			<?php 
				foreach ($ang as $key => $value) {
					print_r("Gyventoju skacius: $value[1] mln.");
				}
			?>
		</li>
		<li>
			<?php 
				foreach ($ang as $key => $value) {
					print_r("Gyventoju skacius: $key m.");
				}
			?>
		</li>
	</ul>
</body>
</html>