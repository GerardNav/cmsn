<?php



class Conexion{



	public static function conectar(){



		$link = new PDO("mysql:host=localhost;dbname=cmsd","root","");

		return $link;



	}



}