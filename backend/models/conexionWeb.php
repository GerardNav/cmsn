<?php



class Conexion{



	public static function conectar(){



		$link = new PDO("mysql:host=localhost;dbname=logxxiformacion_cmsw","logxxiformacion_cmswu","GDXDuB?OZ+2Q");

		return $link;



	}



}