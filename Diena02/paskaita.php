<?php
	echo "<table border=\"1\">";

	for ($row=1; $row <= 10; $row++) { 
		echo "<tr>\n";

		for($col = 1; $col <=10; $col++) {
			$x = $col * $row;

			echo "<td>$x</td>\n";
		}
		echo "</tr>";
	}
	echo "</table>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>For ciklo panaudojimas</title>
	<style>
		tr {
			height: 40px;
			text-align: center;
		}
	</style>
</head>
<body>
	<h1>2018-2019 E</h1>
</body>
</html>