<?php

	$date = new DateTime("08/12/2018");
	$now = new DateTime();

	if($date -> format('Y') < $now -> format('Y')) {
  	  echo '&copy; '.$date -> format('Y').' - '.$now -> format('Y');
	}else {
		echo '&copy; '.$now -> format('Y');
	}
?>