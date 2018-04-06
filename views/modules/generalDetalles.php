<div class="ed_pagetitle" data-stellar-background-ratio="0.5" data-stellar-vertical-offset="0" style="background-image: url(views/images/art.jpg); background-repeat: no-repeat; background-color: #ffffff;">
<div class="ed_img_overlay"></div>
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-6 col-sm-6">
				<div class="page_title">
						<h2><?php echo $respuesta["titulo"]; ?></h2>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4">
				<ul class="breadcrumb">
					<li><a href="inicio">Inicio</a></li>
					<li><i class="fa fa-chevron-left"></i></li>
					<li><a href="quienes-somos">Quienes somos</a></li>
				</ul>
			</div>
		</div>
	</div>
</div>
<!--Breadcrumb end-->
<?php echo utf8_encode($respuesta["contenido"]); ?>
