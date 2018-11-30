<?php 
	class people {
		public $name;
		public $surname;

		public $jonas;
		public $andrius;

		public function hello($name, $surname) {
			echo $name.' '.$surname.'<br>';
		}
	}

	$people1 = new people();
	$people2 = new people();

	$people1 -> hello('Jonas', 'Jonaitis');
	$people2 ->hello('Andrius', 'Andriusaitis');
?>