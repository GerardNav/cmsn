<!--video_section Section three start -->
<div class="ed_parallax_section" data-stellar-background-ratio="0.5" data-stellar-vertical-offset="100" style="background-image: url(views/images/room.jpg);" >
<div class="ed_img_overlay"></div>
	<div class="container">
		<div class="row">
	<div class="row" id="articulos">
			
	<hr>

	<h1 class="text-center text-info"><b>ARTÍCULOS DE INTERÉS</b></h1>

	<hr>

	<ul>

		<?php

			$articulos = new Articulos();
			$articulos -> seleccionarArticulosControllerAC();

		?>

	</ul>

</div>
		</div>
	</div>
</div>
<!--video_section Section three end -->

