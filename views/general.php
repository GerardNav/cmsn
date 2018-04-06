<!DOCTYPE html>
<html lang="es">
<!--<![endif]-->

<!-- Begin Head -->
<head>
<meta charset="utf-8" />
<title>LOGXXI - <?php echo $respuesta["titulo"]; ?></title>
<meta content="width=device-width, initial-scale=1.0" name="viewport" />
<meta name="description"  content="<?php echo $respuesta["titulo"]; ?>"/>
<meta name="keywords" content="<?php echo $respuesta["etiquetas"]; ?>" />
<meta name="MobileOptimized" content="320" />

<!--srart theme style -->
<link href="views/css/main.css" rel="stylesheet" type="text/css"/>
<!-- end theme style -->
<!-- favicon links -->
<link rel="shortcut icon" type="image/png" href="views/images/header/logo.png" />
</head>

<body>

	<div id="educo_wrapper">
	
		<!--=====================================
		CABEZOTE
		======================================-->
		
		<?php include "modules/cabezote.php"; ?>
		
		<!--====  Fin de CABEZOTE  ====-->

		<!--=====================================
		Contenido
		======================================-->
		<?php 
		if ($respuesta["tipoarticulo"] == "4") { 

			$arreglo = explode("<hr />", $respuesta["contenido"] );
			$arreglo2 = explode("/", $respuesta["subtitulo"] );
			include "modules/cursosa.php";


		} else {
			include "modules/generalDetalles.php"; 
		}
		?>
			
		<!--=====================================
			FOOTER         
		======================================-->

		<?php include "modules/footer.php"; ?>	

    	<!--====  Fin de FOOTER ====-->
		</div>
	</div>



<script type="text/javascript" src="views/js/jquery-1.12.2.js"></script> 
<script type="text/javascript" src="views/js/bootstrap.js"></script> 
<script type="text/javascript" src="views/js/modernizr.js"></script> 
<script type="text/javascript" src="views/js/owl.carousel.js"></script> 
<script type="text/javascript" src="views/js/jquery.stellar.js"></script> 
<script type="text/javascript" src="views/js/smooth-scroll.js"></script> 
<script type="text/javascript" src="views/js/plugins/revel/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="views/js/plugins/revel/jquery.themepunch.revolution.min.js"></script>
<script type="text/javascript" src="views/js/plugins/revel/revolution.extension.layeranimation.min.js"></script>
<script type="text/javascript" src="views/js/plugins/revel/revolution.extension.navigation.min.js"></script>
<script type="text/javascript" src="views/js/plugins/revel/revolution.extension.slideanims.min.js"></script>
<script type="text/javascript" src="views/js/plugins/countto/jquery.countTo.js"></script>
<script type="text/javascript" src="views/js/plugins/countto/jquery.appear.js"></script>
<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script type="text/javascript" src="views/js/gmaps.js"></script>
<script type="text/javascript" src="views/js/custom.js"></script> 

<script src="views/js/script.min.js"></script>
<script>
     var map;
    $(document).ready(function(){
      map = new GMaps({
        el: '#map',
        zoom: 16,
        lat: -12.043333,
        lng: -77.028333,
		scrollwheel: false,
		draggable:false,
		zoomControl: false,
		navigationControl: false,
		mapTypeControl: false,
		scaleControl: false,
		disableDoubleClickZoom: true,
		streetViewControl : false,
		overviewMapControl: false,
		panControl : false
      });
   
    });
  </script>
</body>
</html>


