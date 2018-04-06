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
					<li><a href="cursos">Cursos</a></li>
				</ul>
			</div>
		</div>
	</div>
</div>
<!--Breadcrumb end-->
<div class="ed_graysection ed_course_single ed_toppadder80 ed_bottompadder80">
<div class="container">
<div class="row">
<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
<div class="ed_course_single_item">
<div class="ed_course_single_image"><img src="<?php echo 'backend/'.$respuesta["ruta"]; ?>" alt="event image" /></div>
<div class="ed_course_single_info">
<h2><?php echo $respuesta["titulo"]; ?><span><?php echo @$arreglo2[2]; ?>Eur</span></h2>
<div class="ed_rating"></div>
<div class="row">
<div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
<div class="course_detail">
<div class="course_faculty"><a href="<?php echo @$arreglo2[1]; ?>"><?php echo @$arreglo2[0]; ?></a></div>
</div>
</div>
<div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 pull-right text-right">
</div>
</div>
</div>
<div class="ed_course_single_tab">
<div role="tabpanel"><!-- Nav tabs -->
<ul class="nav nav-tabs" role="tablist">
<li role="presentation" class="active"><a href="#description" aria-controls="description" role="tab" data-toggle="tab">Descripci&oacute;n</a></li>
<li role="presentation"><a href="#news1" aria-controls="news" role="tab" data-toggle="tab">Programa</a></li>
<li role="presentation"><a href="#news2" aria-controls="news" role="tab" data-toggle="tab">Lugar</a></li>
<li role="presentation"><a href="#news3" aria-controls="news" role="tab" data-toggle="tab">Condiciones</a></li>
<li role="presentation"><a href="#events" aria-controls="events" role="tab" data-toggle="tab">Inscripci&oacute;n</a></li>
</ul>
<!-- Tab panes -->
<div class="tab-content">
<div role="tabpanel" class="tab-pane active" id="description">
<div class="ed_course_tabconetent">
<h2>DESCRIPCI&Oacute;N DEL CURSO:</h2>
<?php echo utf8_encode($arreglo[1]); ?>
<div style="text-align: center;"></div>
</div>
</div>
<div role="tabpanel" class="tab-pane" id="news1">
<div class="ed_course_tabconetent">
<h2>PROGRAMA</h2>
<?php echo utf8_encode($arreglo[2]); ?>
</div>
</div>
<div role="tabpanel" class="tab-pane" id="news2">
<div class="ed_course_tabconetent">
<h2>LUGAR DE CELEBRACI&Oacute;N</h2>
<?php echo utf8_encode($arreglo[3]); ?>
</div>
</div>
<div role="tabpanel" class="tab-pane" id="news3">
<div class="ed_course_tabconetent">
<h2>Condiciones</h2>
<?php echo utf8_encode($arreglo[4]); ?>
</div>
</div>
<div role="tabpanel" class="tab-pane" id="events">
<div class="woo-cart-table">
<div class="row">
<div class="clearfix"></div>
<form class="checkout woocommerce-checkout" method="POST" action="inscripcion">
<div class="col-lg-12 col-md-12 col-sm-12">
<div class="row">
<div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
<h3 class="checkout-heading">Solicitud de reserva</h3>
</div>
<input type="hidden" value="<?php echo $respuesta["id"]; ?>" name="curso" />
<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5"><label>fecha:<sup>*</sup></label><input name="fecha" type="date" class="form-control" required="" /></div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"></div>
<div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
<h4>datos personales</h4>
</div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="form-group"><label>Apellidos <sup>*</sup></label> <input name="apellido" type="text" class="form-control" placeholder="" required="" />
<input type="hidden" id="cursot" name="cursot" value="<?php echo $respuesta["titulo"]; ?>"></div>
</div>
<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
<div class="form-group"><label>Nombre <sup>*</sup></label> <input type="text" name="nombre" class="form-control" placeholder="" required="" /></div>
</div>
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
<div class="form-group"><label>DNI</label> <input type="text" class="form-control" name="dni" placeholder="" required="" /></div>
</div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="form-group"><label>Domicilio <sup>*</sup></label> <input type="text" name="domicilio" class="form-control" placeholder="" /></div>
</div>
<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
<div class="form-group"><label>Codigo postal</label> <input type="text" name="cp" class="form-control" placeholder="" /></div>
</div>
<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
<div class="form-group"><label>Poblaci&oacute;n</label> <input type="text" name="poblacion" class="form-control" placeholder="" /></div>
</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
<div class="form-group"><label>Provincia <sup>*</sup></label><select name="provincia" class="form-control" required="">
<option>Selecciona una Provincia</option>
<option>&Aacute;lava</option>
<option>Albacete</option>
<option>Alicante</option>
<option>Almer&iacute;a</option>
<option>Asturias</option>
<option>&Aacute;vila</option>
<option>Badajoz</option>
<option>Barcelona</option>
<option>Burgos</option>
<option>C&aacute;ceres</option>
<option>C&aacute;diz</option>
<option>Cantabria</option>
<option>Castell&oacute;n</option>
<option>Ciudad Real</option>
<option>C&oacute;rdoba</option>
<option>La Coru&ntilde;a</option>
<option>Cuenca</option>
<option>Gerona</option>
<option>Granada</option>
<option>Guadalajara</option>
<option>Guip&uacute;zcoa</option>
<option>Huelva</option>
<option>Huesca</option>
<option>Islas Baleares</option>
<option>Ja&eacute;n</option>
<option>Le&oacute;n</option>
<option>L&eacute;rida</option>
<option>Lugo</option>
<option>Madrid</option>
<option>M&aacute;laga</option>
<option>Murcia</option>
<option>Navarra</option>
<option>Orense</option>
<option>Palencia</option>
<option>Las Palmas</option>
<option>Pontevedra</option>
<option>La Rioja</option>
<option>Salamanca</option>
<option>Segovia</option>
<option>Sevilla</option>
<option>Soria</option>
<option>Tarragona</option>
<option>Santa Cruz de Tenerife</option>
&lt;optio"&gt;Teruel
<option>Toledo</option>
<option>Valencia</option>
<option>Valladolid</option>
<option>Vizcaya</option>
<option>Zamora</option>
<option>Zaragoza</option>
</select></div>
</div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="form-group"><label>E-mail <sup>*</sup></label> <input name="email" type="E-mail" class="form-control" placeholder="" required="" /></div>
</div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="form-group"><label>telefono <sup>*</sup></label> <input name="telefono" type="text" class="form-control" placeholder="" required="" /></div>
</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
<div class="form-group"><label>Profesion/Estudiante</label> <input name="profesion" type="text" class="form-control" placeholder="" /></div>
</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
<div class="form-group"><label>Lugar de trabajo</label> <input name="lugarTrabajo" type="text" class="form-control" placeholder="" /></div>
</div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><input type="checkbox" id="cbox1" value="first_checkbox" /> Estoy de acuerto con los <a target="blank" href="terminos-y-condiciones">terminos y condiciones</a><br /> <input type="submit" class="btn ed_btn ed_orange pull-right" /></div>
</div>
</div>
</form></div>
</div>
</div>
</div>
</div>
</div>
<!--tab End--></div>
</div>
<!--Sidebar Start-->
<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
<div class="sidebar_wrapper_upper">
<div class="sidebar_wrapper">
<aside class="widget widget_button"><a href="inscripcion" class="ed_btn ed_green">Unirse</a></aside>
<aside class="widget widget_categories">
<h4 class="widget-title">Otros Cursos</h4>
<ul>
	<?php 
		$lista = new Articulos();
		$lista -> listarArticulosCursosController();
	 ?>
</ul>
</aside>
<aside class="widget widget_sharing">
<h4 class="widget-title">Compartir este Curso</h4>
<ul>
<li><a href="https://www.facebook.com/sharer/sharer.php?u=http%3A//logxxiformacion.com/<?php echo $respuesta["url"]; ?>" target="blank">
	<i class="fa fa-facebook"></i> facebook</a></li>
<li><a target="blank" href="https://twitter.com/home?status=http%3A//logxxiformacion.com/<?php echo $respuesta["url"]; ?>"><i class="fa fa-twitter"></i> twitter</a></li>
<li><a target="blank" href="https://plus.google.com/share?url=http%3A//logxxiformacion.com/<?php echo $respuesta["url"]; ?>"><i class="fa fa-google-plus"></i> google+</a></li>
</ul>
</aside>
</div>
</div>
</div>
<!--Sidebar End--></div>
</div>
</div>
