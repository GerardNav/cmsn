<div class="ed_transprentbg ed_toppadder80 ed_bottompadder80">
<div class="container">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="ed_heading_top ed_bottompadder80">
<h3>Nuestros Cursos</h3>
</div>
</div>
<div class="col-lg-3 col-md-3col-sm-3 col-xs-3">
<div class="form-group">
<h4>Ordenar</h4>
<select name="curso" id="" class="form-control" onchange="ordenar(this.selectedIndex);">
<option value="">Fecha</option>
<option value="">Precio</option>
<option value="">T&iacute;tulo</option>
</select></div>
</div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="ed_mostrecomeded_course_slider ed_mostrecomededcourseslider">
<div id="owl-demo3">
	<?php

		$articulos = new Articulos();
		$articulos -> seleccionarArticulosCursosMController();

	?>
</div>
</div>
</div>
</div>
<!-- /.container --></div>
<!-- /.container -->
<script>// <![CDATA[
function ordenar (aux)  {

		switch (aux){
			case 0: 
				var divList = $(".listing-item");
				divList.sort(function(a, b){
					console.log($(a).data("listing-fecha")-$(b).data("listing-fecha"));
				    return $(a).data("listing-fecha")-$(b).data("listing-fecha");
				});
				$('#owl-demo3').fadeOut(150);
				$('#owl-demo3').fadeIn(1500).html(divList);
				break;
			case 1: 
				var divList = $(".listing-item");
				divList.sort(function(a, b){
					console.log($(a).data("listing-price")-$(b).data("listing-price"));
				    return $(a).data("listing-price")-$(b).data("listing-price");
				});
				$('#owl-demo3').fadeOut(150);
				$('#owl-demo3').fadeIn(1500).html(divList);
				break;
			case 2:
				var divList = $(".listing-item");
				divList.sort(function(a, b){
					//console.log($(a).data("listing-titu")-$(b).data("listing-titu"));
				    return $(a).data("listing-titu")-$(b).data("listing-titu");
				});
				$('#owl-demo3').fadeOut(150);
				$('#owl-demo3').fadeIn(1500).html(divList);
			

			}}
// ]]></script>