

<!DOCTYPE HTML>
        
        

<html>
<head>
	<meta charset="utf-8" />
	<title>Leaflet</title>

	 
</head>
<body class="horizontal-menu" style="height:850px">
<!-- <div class="container-fluid">
	<div  id="map" class="row">
		<div  class="span10"></div>
		<div class="span2"></div>

	</div>

</div> -->
<nav class="navbar navbar-default">
<div></div>
</nav>
<div id="map" style="height: 100%"></div>
	<div id="mapControls" style="z-index: 10; height:100%">
		 <div>
			<div class="btn-group-vertical">
				 <button class="btn btn-black btn-transparent " id="customZoomIn" style="border-top-right-radius: 0px;cursor: -webkit-zoom-in; cursor: -moz-zoom-in;"
		                    data-toggle="tooltip" data-placement="left" data-original-title="Vue rapprochee">
		                <i class="fa fa-inverse fa-plus fa-md  fa-fw "></i>
		            </button>
		            <button class="btn btn-black btn-transparent" id="zoomToMaxExtent">
		                <i class="fa fa-inverse fa-globe fa-lg fa-fw"></i>
		            </button>
		            <button class="btn btn-black btn-transparent" id="customZoomOut" style="border-bottom-right-radius: 0px; cursor: -webkit-zoom-out; cursor: -moz-zoom-out;">
		                <i class="fa fa-inverse fa-minus fa-md fa-fw"></i>
		            </button>
			</div>
			<div class="mb30"></div>
		        <div class="btn-group-vertical">
		            <button class="btn btn-black btn-transparent" id="btnSearch" style="border-top-right-radius: 0px;">
		                <i class="fa fa-inverse fa-search fa-md fa-fw"></i>
		            </button>
		            <button class="btn btn-black btn-transparent" id="btnEdition" style="border-top-right-radius: 0px;">
		                <i class="fa fa-inverse fa-pencil-square-o fa-lg fa-fw"></i>

		            </button>
		        </div>
			</div>
		</div> 
	</div>
	

     
<div class="rightpanel" id="rightpanel" style="background-color: white; float:right;">
	<ul class="nav nav-tabs nav-justified" id="rightPanelTab" style="display: none" >
	        <li class="active"><a href="#rp-search" data-toggle="tab"><i class="fa fa-users"></i></a></li>
	        <li><a href="#rp-edition" data-toggle="tab"><i class="fa fa-heart"></i></a></li>
	</ul>
     <div class="tab-content" style="height: 100%">
        <div class="tab-pane active" id="rp-search">
            <h5 class="sidebartitle" >Recherche d'un arrêt <a href="#" class="btnRightPanelClose"><i class="fa fa-times "> </i> </a></h5>
                <label for="stop_name">Nom de l'arrêt:</label>
                <div class="input-group">
			      <input type="text" class="form-control" placeholder="Rechercher un ârret ...">
			      <span class="input-group-btn">
			        <button class="btn btn-default" type="button">Go!!!</button>
			      </span>
			    </div>
			    <span class="input-group-btn">
			        <button class="btn btn-default pull-right" type="button">Supprimer</button>
			     </span>
		</div>
		 <div class="tab-pane" id="rp-edition">
            <h5 class="sidebartitle">Edition <a href="#" class="btnRightPanelClose"><i class="fa fa-times"></i> </a></h5>
            <label for="stop_name">Nom de l'arrêt: </label>
            <div class="input-group">
			      <input type="text" class="form-control" placeholder="Nom d l'arrêt ...">
			</div>
			<label for="stop_name">Numéro de bus: </label>
            <div class="input-group">
			      <input type="text" class="form-control" placeholder="Numéro du bus qui passe ...">
			</div>
			<span class="input-group-btn">
			        <button class="btn btn-default pull-right" type="button">Valider </button>
			      </span>
		</div> 
     </div>

</body>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<!-- <link rel="stylesheet" href="http://cdn.leafletjs.com/leaflet-0.7.3/leaflet.css" /> --> 
 	<link rel="stylesheet" type="text/css" href="leaflet/leaflet.css"> 
	<link rel="stylesheet" type="text/css" href="style.css" />
	<script src="http://cdn.leafletjs.com/leaflet-0.7.3/leaflet.js"></script>
	<script type="text/javascript" src="dist/Leaflet.Coordinates-0.1.4.min.js"></script>
	<link rel="stylesheet" href="dist/Leaflet.Coordinates-0.1.4.css"/>
	<link href="bootstrap/dist/css/bootstrap.css" rel="stylesheet">
	<link href="font-awesome/css/font-awesome.css" rel="stylesheet">
	<script type="text/javascript" src="bootstrap/dist/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js.js"></script>
	<script type="text/javascript" src="cursor-awesome/dist/jquery.awesome-cursor.js"></script>
<script type="text/javascript">
	var map;
	var edit;
	var edit=false;
	var marker=L.marker();

function initmap() {
	// set up the map
	map = new L.Map('map', {zoomControl:false});

	// create the tile layer with correct attribution
	var osmUrl='http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png';
	var osmAttrib='Map data © <a href="http://openstreetmap.org">OpenStreetMap</a> contributors';
	var osm = new L.TileLayer(osmUrl, {minZoom: 1, maxZoom: 20});
	//var osm = new L.TileLayer(osmUrl, {minZoom: 1, maxZoom: 20, attribution: osmAttrib});			

	// start the map in South-East England
	map.setView(new L.LatLng(-18.9156, 47.5218),15);
	map.addLayer(osm);


	
}
initmap();



</script>
</html>