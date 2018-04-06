<!--Newsletter Section six start-->
<div class="ed_newsletter_section" data-stellar-background-ratio="0.5" data-stellar-vertical-offset="-900">
<div class="ed_img_overlay"></div>
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<div class="row">
					<div class="col-lg-4 col-md-7 col-sm-12 col-xs-12">
						<div class="ed_newsletter_section_heading">
							<h4>Permítanos informarle sobre todo lo importante directamente.</h4>
						</div>
					</div>
					<div class="col-lg-6 col-md-5 col-sm-6 col-xs-6 col-lg-offset-0 col-md-offset-0 col-sm-offset-3 col-xs-offset-3">
						<div class="row">
							<div class="ed_newsletter_section_form">
								<form class="form" method="post">
									<div class="col-lg-5 col-md-8 col-sm-8 col-xs-8">
										<input class="form-control" name="nombre" type="text" placeholder="Nombre" />
									</div>
									<div class="col-lg-5	 col-md-8 col-sm-8 col-xs-8">
										<input class="form-control" name="email" type="text" placeholder="Email" />
									</div>
									<div class="col-lg-2 col-md-4 col-sm-4 col-xs-4">
										<button class="btn ed_btn ed_green">Suscribirse</button>
									</div>
								</form>
								<?php

								$mensajes = new MensajesController();
								$mensajes -> registroMensajesController();

								?>
							</div>
						</div>
					</div>
				</div>
			</div>
        </div>
	</div>
</div>
<!--Newsletter Section six end-->
