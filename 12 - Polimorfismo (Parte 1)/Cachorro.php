<?php 

require_once 'Mamifero.php';	

class Cachorro extends Mamifero {
	function emitirSom() {
		echo p('au au au');
	}
}