<!DOCTYPE html>
<html lang="es">
<!--<![endif]-->

<!-- Begin Head -->
<head><meta http-equiv="Content-Type" content="text/html; charset=shift_jis">

<title>LOGXXI</title>
<meta content="width=device-width, initial-scale=1.0" name="viewport" />
<meta name="description"  content="Educo"/>
<meta name="keywords" content="Educo, html template, Education template" />
<meta name="author"  content="Kamleshyadav"/>
<meta name="MobileOptimized" content="320" />

<!--srart theme style -->
<link href="views/css/main.css" rel="stylesheet" type="text/css"/>
<link href="views/css/sweetalert.css" rel="stylesheet" type="text/css"/>
<!-- end theme style -->
<!-- favicon links -->
<link rel="shortcut icon" type="image/png" href="views/images/header/logo.png" />
<script type="text/javascript" src="views/js/jquery-1.12.2.js"></script> 
<script type="text/javascript" src="views/js/sweetalert.min.js"></script> 
</head>

<body>

	<div id="educo_wrapper">
	
		<!--=====================================
		CABEZOTE
		======================================-->
		
		<?php include "modules/cabezote.php"; ?>
		
		<!--====  Fin de CABEZOTE  ====-->

		<!--=====================================
		SLIDE
		======================================-->
		
		
		<?php include "modules/contacto.php" ?>

		
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
<script src="http://maps.google.com/maps/api/js?key=AIzaSyCntHvMBDsxNTA-aO5XHrwAngplawxkRJc"></script>
<script type="text/javascript" src="views/js/gmaps.js"></script>
<script type="text/javascript" src="views/js/custom.js"></script> 

<script src="views/js/script.min.js"></script>

<script>
     var map;
    $(document).ready(function(){
      map = new GMaps({
        el: '#map',
        zoom: 16,
        lat: 40.4651039,
        lng: -3.6974036,
        tittle: 'Calle Pinos Alta, 3',
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
     var marker
     marker = map.addMarker({
  		lat: 40.4651039,
  		lng: -3.6974036,
  		title: 'Madrid',
    	draggable: false,
        animation: google.maps.Animation.DROP,
    	infoWindow: {
  		content: '<p>Calle Pinos Alta, 3</p>'
		}
      });
      function toggleBounce() {
        if (marker.getAnimation() !== null) {
          marker.setAnimation(null);
        } else {
          marker.setAnimation(google.maps.Animation.BOUNCE);
        }
      }
      marker.setAnimation(google.maps.Animation.BOUNCE);
    });
  </script>
 <script>
      
 </script>
</body>
</html>


