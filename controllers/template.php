<?php

class TemplateController{

	public function template(){
		
		if(isset($_GET["action"])){

			$enlaces = $_GET["action"];

			if ($enlaces == "inicio") {

				include "views/template.php";

			} elseif ($enlaces == "contacto") {

				include "views/contacto.php";

			} 
			elseif ($enlaces == "inscripcion") {

				include "views/inscripcion.php";

			}
			elseif ($enlaces == "cursos") {

				include "views/cursosO.php";

			}
			elseif ($enlaces == "ponentes") {

				include "views/ponentesO.php";

			}
			else {
				$articulo = new Articulos();
				$articulo -> enlacesArticulosController($enlaces);

			}



		} 

		else{

			include "views/template.php";

		} 



		
		

	}

}


