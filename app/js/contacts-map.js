function createMap(){
	var opts = {
		center: {
			lat: 59.433139,
			lng: 24.835289,
		},
		zoom: 15,
		styles: [
			{
				"featureType": "administrative",
				"elementType": "labels.text.fill",
				"stylers": [
					{
						"color": "#706550"
					}
				]
			},
			{
				"featureType": "administrative",
				"elementType": "labels.text.stroke",
				"stylers": [
					{
						"color": "#ffffff"
					},
					{
						"weight": "1.00"
					}
				]
			},
			{
				"featureType": "poi",
				"elementType": "labels",
				"stylers": [
					{
						"visibility": "off"
					}
				]
			},
			{
				"featureType": "poi.park",
				"elementType": "geometry.fill",
				"stylers": [
					{
						"color": "#debc81"
					}
				]
			},
			{
				"featureType": "road.highway",
				"elementType": "geometry.fill",
				"stylers": [
					{
						"color": "#fccf7c"
					}
				]
			}
		],
		maxZoom: 20,
		minZoom: 0,
		mapTypeId: 'roadmap',
	};

	
	opts.clickableIcons = true;
	opts.disableDoubleClickZoom = false;
	opts.draggable = true;
	opts.keyboardShortcuts = true;
	opts.scrollwheel = true;
	

	
	var setControlOptions = function(key, enabled, position, style, mapTypeIds){
		opts[key + 'Control'] = enabled;
		opts[key + 'ControlOptions'] = {
			position: google.maps.ControlPosition[position],
			style: google.maps.MapTypeControlStyle[style],
			mapTypeIds: mapTypeIds
		};
	};
	
		
	setControlOptions('fullscreen',false,'DEFAULT','',null);
	
		
	setControlOptions('mapType',false,'DEFAULT','DEFAULT',["roadmap","satellite","terrain"]);
	
		
	setControlOptions('rotate',false,'DEFAULT','',null);
	
		
	setControlOptions('scale',false,'','',null);
	
		
	setControlOptions('streetView',false,'DEFAULT','',null);
	
		
	setControlOptions('zoom',false,'DEFAULT','',null);
	

	var map = new google.maps.Map(document.getElementById('map'), opts);

	
	(function(){
		var markerOptions = {
			map: map,
			position: {
				lat: 59.433139,
				lng: 24.835289,
			}
		};
		
		markerOptions.icon = {
			path: 'M11 2c-3.9 0-7 3.1-7 7 0 5.3 7 13 7 13 0 0 7-7.7 7-13 0-3.9-3.1-7-7-7Zm0 9.5c-1.4 0-2.5-1.1-2.5-2.5 0-1.4 1.1-2.5 2.5-2.5 1.4 0 2.5 1.1 2.5 2.5 0 1.4-1.1 2.5-2.5 2.5Z',
			scale: 1.4545454545454545454545454545,
			anchor: new google.maps.Point(11, 22),
			fillOpacity: 1,
			fillColor: '#8e67fd',
			strokeOpacity: 0
		};
		
		var marker = new google.maps.Marker(markerOptions);


	})();
	

}
