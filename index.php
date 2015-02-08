<!doctype html>
<html>

<head>

<meta charset="iso-8859-1">
<meta charset="utf-8">

<title> Find 4 Me </title>

<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="css/style-index.css">
<link rel="stylesheet" type="text/css" href="css/estilo-comum.css"/>
<script src="javascript/jquery.js"></script>
<script charset="ISO-8859-1" type="text/javascript" src="javascript/funcoes.js"></script>
<!-- Maps API Javascript -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBaDW8DNpnHS9E0osi_8MJUbpAHUgIgEfs&sensor=false"></script>

<script type="text/javascript">
      function initialize() {
        var mapOptions = {
          center: new google.maps.LatLng(-7.121, -34.824),
          zoom: 8,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        var map = new google.maps.Map(document.getElementById("map_canvas"),
            mapOptions);
      }
</script>
</head>

<body onload="initialize()">

	
	<div class="page">
    
    	<header class="topo">
        	<img class="logo" src="logo.JPG">            
            <h1 class="alunos"> Universidade Federal da Para�ba </br> Centro de Inform�tica </br> Arthur Chacon </br> Rafael Germano </h1>
            <img class="logoufpb" src="logo_ufpb.JPG">
        </header>
    
	    <div class="barra-menu">
        	<nav class="barra">
                <ul>
                    <li><a class="buscarA" onClick="painelBuscar();">Home</a></span></li>
                    <li><a class="informacao">Sobre</a></li>
                    <li><a class="contate-nos"><span>Gest�o</span></a></li>
                </ul>
	        </nav>
    	</div>
        
    	<div class="meio">
        	<div class="buscarPainel">
            	<h1> Busca </h1>
                <form action="buscar.php" name="form1" class="form1" id="form1" method="post" enctype="multipart/form-data">
					<label for="nome">Nome: </label>
	                <input type="text" tabindex="1" maxlength="80" name="nome" class="nome" placeholder="Nome do restaurante"/><br>
                    <label for="tipo">Tipo: </label>
	                <select class="tipo" tabindex="2">
	                    <option value="Culin�ria Brasileira">Culin�ria Brasileira</option>
	                    <option value="Culin�ria Japonesa">Culin�ria Japonesa</option>
	                    <option value="Culin�ria Churrascaria">Churrascaria</option>
	                    <option value="Culin�ria Fast Food">Fast Food</option>
	                    <option value="Culin�ria Pizzaria">Pizzaria</option>                                                                        
                    </select>
                    <br>
                    <label for="local">Local: </label>
	                <input type="text" tabindex="3" maxlength="20" name="local" class="local" placeholder="Bairro"/><br>
                    <input type="submit" tabindex="4" class="buscar-button" name="burcar" value="Buscar"/>
                </form>
            </div>
            <div class="map_canvas" id="map_canvas">
            </div>
        </div>
        
        
    </div>

</body>
</html>
