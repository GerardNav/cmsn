<?php

class Articulos{

	public function seleccionarArticulosCursosController(){

		$respuesta = ArticulosModels::mostrarCursos("articulos");

		foreach ($respuesta as $row => $item){

			echo '
					<div class="item">
							<div class="ed_item_img">
								<a href="'.$item["url"].'"><img src="backend/'.$item["ruta"].'" alt="item1" class="img-responsive"></a>
							</div>
							<div class="ed_item_description">
								<a href="'.$item["url"].'"><h4>'.$item["titulo"].'</h4></a>
								<p>'.$item["extracto"].'</p>
							</div>
						</div>';

		}


	}

	public function listarArticulosCursosController(){

		$respuesta = ArticulosModels::mostrarCursos("articulos");

		foreach ($respuesta as $row => $item){

			$arreglo2 = explode("/", $item["subtitulo"] );

			echo '
					<li><a href="'.$item["url"].'">'.$item["titulo"].'</a></li>';

		}


	}

	public function seleccionarArticulosCursosMController(){

		$respuesta = ArticulosModels::mostrarCursos("articulos");

		foreach ($respuesta as $row => $item){

			$arreglo2 = explode("/", $item["subtitulo"] );

			echo '

				<div class="item listing-item col-lg-3 col-md-4 col-sm-6 col-xs-10" data-listing-price="'.@$arreglo2[2].'" data-listing-titu="'.$item["titulo"].'" data-listing-fecha="'.fechas::torden($item["fecha"]).'">
					<div class="ed_item_img"><img src="backend/'.$item["ruta"].'" alt="item1" class="img-responsive" /></div>
					<div class="ed_item_description ed_most_recomended_data">
					<h4><a href="'.$item["url"].'">'.$item["titulo"].'</a><span>'.@$arreglo2[2].'&euro;</span></h4>
					<div class="course_detail">
					<div class="course_faculty"><a href="'.@$arreglo2[1].'">'.@$arreglo2[0].'</a></div>
					</div>
					<p>'.$item["extracto"].'</p>
					<a href="'.$item["url"].'" class="ed_getinvolved">leer m&aacute;s <i class="fa fa-long-arrow-right"></i></a></div>
					</div>';

		}


	}

	public function seleccionarArticulosPonentesMController(){

		$respuesta = ArticulosModels::mostrarPonentes("articulos");

		foreach ($respuesta as $row => $item){
			@	$i= $i+1;
			echo '
				<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
				<div class="ed_team_member">
				<div class="ed_team_member_img"><img src="backend/'.$item["ruta"].'" alt="item1" class="img-responsive" /></div>
				<div class="ed_team_member_description">
				<h4><a href="'.$item["url"].'">'.$item["titulo"].'</a></h4>
				<h5>'.$item["subtitulo"].'</h5>
				<p>'.$item["extracto"].'</p>
				</div>
				</div>
				</div>';
			if ($i % 4 == 0) {
				echo '<div class="clearfix"></div>';
			}

		}


	}
	public function seleccionarArticulosControllerAC(){

		$respuesta = ArticulosModels::seleccionarArticulosModelAC("articulos");

		foreach ($respuesta as $row => $item){

			echo '<li class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

					<img src="backend/'.$item["ruta"].'" class="img-thumbnail">
					<h1>'.$item["titulo"].'</h1>
					<p>'.$item["introduccion"].'</p>
					<a href="#articulo'.$item["id"].'" data-toggle="modal">
					<button class="btn btn-default">Leer Más</button>
					</a>

					<hr>

				</li>

				<div id="articulo'.$item["id"].'" class="modal fade">
      
					<div class="modal-dialog modal-content">

						<div class="modal-header" style="border:1px solid #eee">
			            
			   				<button type="button" class="close" data-dismiss="modal">&times;</button>
			  		 		<h3 class="modal-title">'.$item["titulo"].'</h3>
			            
						</div>

						<div class="modal-body" style="border:1px solid #eee">
			            
			    			<img src="backend/'.$item["ruta"].'" width="100%" style="margin-bottom:20px">
			    			<p class="parrafoContenido text-justify">'.$item["contenido"].'</p>
			            
						</div>

							<div class="modal-footer" style="border:1px solid #eee">
			            
			    				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			            
							</div>

					</div>

				</div>';

		}


	}

	public function enlacesArticulosController($enlaces){

		$respuesta = ArticulosModels::seleccionarEnlacesArticulosModel("articulos" , $enlaces);

		//reemplazar :: por directorio de enlaces

		$bodytag = str_replace("::", "views/resources/", $respuesta["contenido"]);
		$respuesta["contenido"] = $bodytag;

		//reemplazar boton por imagen de descarga

		$bodytag = str_replace("BTN", '<img src="views/images/btn.png" height="75" />', $respuesta["contenido"]);
		$respuesta["contenido"] = $bodytag;
		
		if ($respuesta["tipoarticulo"] == "2") { 

			include "views/articulo.php";
			
		} else { 

			include "views/general.php";

		}



	}

	public function mostrarCursosController($id){
		$respuesta = ArticulosModels::mostrarCursos("articulos");		
		foreach($respuesta as $row => $item) {
				echo '
				<option value="'.$item["id"].'">'.$item["titulo"].'</option>';

		}

	}

}
