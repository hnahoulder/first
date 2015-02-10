$(document).ready( function () {

	$('#customZoomIn').bind('click', function(){
	map.zoomIn();
	});
	$('#customZoomOut').bind('click', function(){
		map.zoomOut();
	});
	$('#zoomToMaxExtent').bind('click', function(){
		map.setView(new L.LatLng(-18.9156, 47.5218),15);
	});
	$('#map').addClass('map-cursor-default');
	$('#btnSearch').click(function(){
		if(!$('#rightpanel').hasClass('chat-view')){
			$('#rightpanel').addClass('chat-view');
		}
		if($('#rp-edition').hasClass('active')){
			$('#rp-edition').removeClass('active');
		}
		$('#rp-search').addClass('active');
		$('#map').mouseover(function(){
			$('#map').removeClass('map-edit');
			$('#map').addClass('map-cursor-default');
		})
		
		edit=false;
	});
	$('.btnRightPanelClose').click(function(){
		$('#rightpanel').removeClass('chat-view');

	});
	$('#btnEdition').click(function(){
		if(!$('#rightpanel').hasClass('chat-view')){
			$('#rightpanel').addClass('chat-view');
		}
		if($('#rp-search').hasClass('active')){
			$('#rp-search').removeClass('active');
		}
		$('#rp-edition').addClass('active');
		edit=true;
		$('#map').mouseover(function(){
			/*$('#map').removeClass('map-cursor-default');
			$('#map').addClass('map-edit');*/
			$('#map').awesomeCursor('plus',{
 
			  // The color of the cursor
			  color: '#2B83CB',
			  size: 22,
			  hotspot: [8,10],
			  flip: '',
			  rotate: 0,
			  outline: null,
			  font: {
			    family: 'FontAwesome',
			    cssClass: 'fa fa-md fa-fw fa-%s'
			  }
			});
		})


	});
	/*$('#rightpanel').awesomeCursor('arrows', {
 
  // The color of the cursor
  color: '#000000',
 
  // The size of the cursor
  size: 18,
 
  // The string descriptor for the hotspot location
  // x and y offsets hotspot: [0, 17]
  // or using a string descriptor:  hotspot: 'bottom left'
  hotspot: [0, 0],
 
  // Cursors can be flipped horizontally, vertically, or in both directions
  // 'horizontal', 'vertical' or 'both'
  flip: '',
 
  // Cursor can be rotated any number of degrees
  // rotate: 45
  rotate: 0,
 
  // specify an outline color for cursors
  outline: null,
 
  // To use a different font, the font option must be set to an object,
  // specifying the font family and the CSS class format for icons.
  font: {
    family: 'FontAwesome',
    cssClass: 'fa fa-%s'
  }
});*/
	function onMapClick(e) {
		if(edit==true){

			map.removeLayer(marker);
			marker = L.marker(e.latlng,{draggable:true, riseOnHover:true, clickable:true, id:'marker_id'}).addTo(map);

		}
        
	}
	map.on('click', onMapClick);



	
		

	

});