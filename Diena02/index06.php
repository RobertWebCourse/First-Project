<?php 

	$cities3 = [
		"Tokijas" => ['Tokijas', '1868', 'Japonija'],
		"Vasingtonas" => ['0.6', 1790, 'JAV'],
		"Makva" => ['11.5', '1147', 'Rusija'],
	];

	$metai = 1774;
	if ($metai >= $cities3['Vasingtonas'][1]) {
		echo "Vasingtonas yra JAV sostine";
	}
	elseif($metai == 1774) {
		echo "JAV sostine vis dar Filadelfijoje";
	}
	else {
		$result =  $cities3['Vasingtonas'][1] - $metai;
		echo $result;
	}
?>