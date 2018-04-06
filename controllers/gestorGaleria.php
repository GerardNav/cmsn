<?php

class Galeria{

	public function seleccionarGaleriaController(){

		$respuesta = GaleriaModels::seleccionarGaleriaModel("galeria");

		foreach ($respuesta as $row => $item){

			echo '
				<div id="owl-demo2" >
					<div class="item">
						<div class="ed_item_img">
								<img src="backend/'.substr($item["ruta"], 6).'" alt="item1" class="img-responsive">
						</div>
					</div>
				</div>';

		}

	}

}