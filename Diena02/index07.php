<?php 
	$cities4 = ['Tokijas', 'Vasingtonas', 'Maskva', 'Londonas'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>City</title>
</head>
<body>
	<ul>
		<?php 
			for ($i=0; $i < count($cities4); $i++) { 
				echo "<li>$cities4[$i]</li>";
			}
		?>
	</ul>
	<ul>
		<?php
      		foreach ($cities4 as $city) {
        		echo "<li>$city</li>";
     		}
        ?>
	</ul>
</body>
</html>