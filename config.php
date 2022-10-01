<?php
		
		$mysqli = new mysqli('localhost', 'root', 'warhammer', 'scm_orquideas');
		if ($mysqli->connect_errno) {
			echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
		}


		
?>