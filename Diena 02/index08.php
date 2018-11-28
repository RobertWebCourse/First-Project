<?php 
	$temp = ['Vilniaus balandžio mėnesio oro temperatūras:' => [4, 3, 9, 19, 19, 9, 12, 20, 24, 20, 12, 14, 18, 21, 20, 23, 16, 16, 15, 19, 19, 17, 17, 15, 12, 13, 13, 15, 19, 21]];

	foreach ($temp as $key => $value) {
		$first = sort($value);
		$resfirst = array_slice($value, 0, 5);
		print_r($resfirst);
		$last =rsort($value);
		$reslast = array_slice($value, 0, 5);
		print_r($reslast);
	}
?>