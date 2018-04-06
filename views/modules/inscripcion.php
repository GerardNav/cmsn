<div class="ed_graysection ed_toppadder80 ed_bottompadder80">
<div class="container">
<div class="row">
<div class="row">
<div class="woo-cart-table">
<div class="row"><form class="checkout woocommerce-checkout"  method="POST">
<div class="col-lg-6 col-md-6 col-sm-12 col-lg-offset-3 col-md-offset-3">
<div class="row">
<div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
<h3 class="checkout-heading">Solicitud de reserva</h3>
</div>
<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5"><label>fecha:<sup>*</sup></label><input name="fecha" type="date" class="form-control" required="" /></div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="form-group">
<h4>Elija un Curso <sup>*</sup></h4>
<select name="curso" id="curso" class="form-control" onchange="llenar(this);">
<?php 
             $mostrarCursos = new Articulos();
             $mostrarCursos -> mostrarCursosController(0);
 ?>
</select>
<input type="hidden" id="cursot" name="cursot">
</div>
</div>
<div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
<h4>datos personales</h4>
</div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="form-group"><label>Apellidos <sup>*</sup></label> <input name="apellido" type="text" class="form-control" placeholder="" required="" /></div>
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
<optio">Teruel</option>
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
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><input type="checkbox" id="cbox1" value="first_checkbox" /> Estoy de acuerto con los <a target="blank" href="terminos-y-condiciones">terminos y condiciones</a><br /> <button id="ed_submit" class="btn ed_btn ed_orange pull-right">Enviar</button></div>
</div>
</div>
</form></div>
</div>
</div>
</div>
</div>
</div>
<script type="text/javascript">
function llenar (sel)  {
	$('#cursot').val(sel.options[sel.selectedIndex].text);
}
</script>