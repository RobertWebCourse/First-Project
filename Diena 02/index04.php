<?php 
	$cities = ['Berlynas','Roma','Londonas'];
	$cities[] = 'Tokijas';
	for ($i=0; $i < count($cities); $i++) {
		print_r($cities[$i].'<br><br>');
	}

	$cities2 = [
		'tokija' => 13.6,
		'vasingtonas' => 0.6,
		'maskva' => 11.5
	];

	echo $cities['Londonas'] = 8.6.' '; 

	foreach ($cities2 as $key => $value) {
		echo "$key - $value ";
	}


?>
<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Cities</title>
	</head>
	<body>
		<ul>
			<?php  
				echo "<li>$cities[2]</li>";
			?>
		</ul>
		<ul>
			<?php 
				print_r("Gyventojų skaičius: ".$cities2['tokija']." mln");
			?>
		</ul>
	</body>
	</html>	