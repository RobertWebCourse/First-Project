<?php

	$date = new DateTime("08/12/2012");
	$now = new DateTime();

	if($date -> format('Y') < $now -> format('Y')) {
  	  echo $date -> format('Y').' - '.$now -> format('Y');
	}else {
		echo $now -> format('Y');
	}
?>