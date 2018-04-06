
<!--Our expertise section one start -->
<div class="ed_transprentbg ed_toppadder100" >
	<div class="container" >
		<div class="row" >
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="ed_heading_top ed_toppadder50">
					<h3>NUESTROS CURSOS</h3>
				</div>
			</div>
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="ed_populer_areas_slider">
					<div class="owl-carousel owl-theme">

						<?php

							$articulos = new Articulos();
							$articulos -> seleccionarArticulosCursosController();

						?>
					</div>
				</div>
			</div>
		</div>
    </div><!-- /.container -->
</div>
<!--Our expertise section one end -->
