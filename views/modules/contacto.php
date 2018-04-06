<!--Breadcrumb start-->
<div class="ed_pagetitle" data-stellar-background-ratio="0.5" data-stellar-vertical-offset="0" style="background-image: url(views/images/ctc.jpg);">
<div class="ed_img_overlay"></div>
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-4 col-sm-6">
				<div class="page_title">
					<h2>Contactanos</h2>
				</div>
			</div>
			<div class="col-lg-6 col-md-8 col-sm-6">
				<ul class="breadcrumb">
					<li><a href="inicio">Inicio</a></li>
					<li><i class="fa fa-chevron-left"></i></li>
					<li><a href="contact.html">Contactanos</a></li>
				</ul>
			</div>
		</div>
	</div>
</div>
<!--Breadcrumb end-->

<!--Section fifteen Contact form start-->
<div class="ed_event_single_contact_address ed_toppadder70 ed_bottompadder70">
	<div class="container">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="ed_heading_top ed_bottompadder70">
					<h3>Contactos y Ubicación</h3>
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6">
				<div class="row">
					<div class="ed_event_single_address_info ed_toppadder50 ed_bottompadder50">
						<h3>Logxxi Formación</h3>
						<h4 class="ed_bottompadder30">Contacta con nosotros: 
</h4><p>Podrás localizarnos en:</p>
<p>C/ Pinos alta nº 3, 3 CNT-IZQ (Madrid)</p>
						<p>Teléfono: <span> 630736570</span></p>
						<p>Movil: <span> 630736570</span></p>
						<p>Email: <a href="#"><span>info@logxxiformacion.com</span></a></p>

					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6">
				<div class="row">
					<div class="ed_event_single_address_map">
						<div id="map"></div>
					</div>
				</div>
			</div>
	</div>
</div>
<!--Section fifteen Contact form start-->
<!--Section fourteen Contact form start-->

	


<div class="ed_transprentbg ed_toppadder80 ed_bottompadder80">
	<div class="container">
		<div class="row fondo" style="background-image: url(views/images/bgct.jpg);">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div style="text-align: center;">
					<h3>O bien, si lo prefieres, puedes rellenar el siguiente formulario:</h3>
				</div>
			</div>
			<form method="post">
			<div class="ed_contact_form ed_toppadder60">
				<div class="col-lg-6 col-md-6 col-sm-12">
				<div class="form-group">
					<input type="text" id="uname" class="form-control" name="nombre"  placeholder="Nombre">
				</div>
				<div class="form-group">
					<input type="email" id="umail" class="form-control"  name="email" placeholder="Email">
				</div>
				<div class="form-group">
					<input type="text" id="sub" class="form-control" name="asunto"  placeholder="Asunto">
				</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12">
				<div class="form-group">
					<textarea id="msg" class="form-control" rows="6" name="mensaje" placeholder="Mensaje"></textarea>
				</div>
				<button id="ed_submit" class="btn ed_btn ed_orange pull-right" style="margin-bottom: 5px;">Enviar</button>
				<p id="err"></p>
				</div>
			</div>
			</form>
		</div>
	</div>
</div>
<?php

		$mensajes = new MensajesController();
		$mensajes -> contactoController();

		?>
<!--Section fourteen Contact form start-->
