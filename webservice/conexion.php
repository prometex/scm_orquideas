<?php
	/*
		Clase de conexión a MySQL con PDO
		Marko Robles
		Códigos de Programación
	*/
	class Conexion extends PDO
	{
		private $hostBd = 'localhost';
		private $nombreBd = 'scm_orquideas';
		private $usuarioBd = 'root';
		private $passwordBd = 'warhammer';
		//private $pass
		public function __construct()
		{
			try{
				parent::__construct('mysql:host=' . $this->hostBd . ';dbname=' . $this->nombreBd . ';charset=utf8', $this->usuarioBd, $this->passwordBd, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
				
				} catch(PDOException $e){
				echo 'Error: ' . $e->getMessage();
				exit;
			}
		}
	}
?>