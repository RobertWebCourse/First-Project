<?php 
	class person {
		public $name;
		public $surname;

		public function hello() {
			echo 'Hello, '.$this -> name.' '.$this -> surname.'<br>';
		}
	}

	$jonas = new person();
	$andrius = new person();

	$jonas -> name = "Jonas";
	$jonas -> surname = 'Jonaitis';

	$andrius -> name = 'Andrius';
	$andrius -> surname = 'Andriusaitis';

	echo $jonas -> hello();
	echo $andrius -> hello();
?>