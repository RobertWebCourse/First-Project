<?php 
	$cities = ['Berlynas','Roma','Londonas'];
	$cities[] = 'Tokijas';
	print_r($cities);

	print_r($cities2 = [
		'tokija' => 13.6,
		'vasingtonas' => 0.6,
		'maskva' => 11.5
	]);

	echo $cities['Londonas'] = 8.6.' '; 


?>
<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Cities</title>
	</head>
	<body>
		<ul>
			<li>
				<?php  
					echo $cities[2];
				?>
			</li>
		</ul>
		<ul>
			<?php 
				print_r("Gyventojų skaičius: ".$cities2['tokija']." mln");
			?>
		</ul>
	</body>
	</html>	