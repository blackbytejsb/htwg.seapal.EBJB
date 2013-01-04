	
	
	var map;
    
    var curmarker;
	var latLngFrom = null;
    var markerTarget = null;
    
    var routemarkers = [];
    var infos = [];
      
    var closedInfo = false;
      
    var ib;
    var boxText = document.createElement("div");
	boxText.style.cssText = "border: 1px solid black; margin-top: 8px; background: white; padding: 5px;";
	
    var routePoints = [];
	var route = new google.maps.Polyline({
	    path: routePoints,
	    strokeColor: "#FF0000",
	    strokeOpacity: 1.0,
	    strokeWeight: 2
	});

	var contentString = '<div id="content"><ul>'+
    '<li><button onclick="addMarker(curmarker.getPosition())">Markierung setzen </button></li>'+
    '<li><button onclick="addRoute()">Route setzen </button></li>'+
    '<li><button onclick="distanceFrom()">Abstand von hier</button></li>'+
    '<li><button onclick="distance(latLngFrom,curmarker)">Abstand nach hier</button></li>'+
    '<li><button onclick="markasTarget(curmarker)">Zum Ziel machen </button></li>'+ 
    '<li><button onclick="deleteMarker()">Löschen</button></li>'+
    '<span id="distance"></span></ul></div>';

    function initialize() {
      	
      	
      	
        var mapTypeIds = ["roadmap", "satellite", "OSM"];
        var mapOptions = {
          center: new google.maps.LatLng(47.66, 9.16),
          zoom: 14,
          mapTypeId: google.maps.MapTypeId.ROADMAP,
          mapTypeControlOptions: {
                    mapTypeIds: mapTypeIds
                }
        };
        
         map = new google.maps.Map(document.getElementById("map_canvas"),
            mapOptions);
                        
                        
         // Adding Open Street Map Overlay
         map.mapTypes.set("OSM", new google.maps.ImageMapType({
                getTileUrl: function(coord, zoom) {
                    return "http://tile.openstreetmap.org/" + zoom + "/" + coord.x + "/" + coord.y + ".png";
                },
                tileSize: new google.maps.Size(256, 256),
                name: "OpenStreetMap",
                maxZoom: 18
            }));
            
         map.overlayMapTypes.push(new google.maps.ImageMapType({getTileUrl: function(coord, zoom) {
                    return "http://tiles.openseamap.org/seamark/" + zoom + "/" + coord.x + "/" + coord.y + ".png";
                },
                tileSize: new google.maps.Size(256, 256),
                name: "OpenSeaMap",
                maxZoom: 18 }));
            
            
        // Listener to show current center of the map    
      	document.getElementById("mapcenter").innerHTML=convertDecimalToMin(map.getCenter());

        google.maps.event.addListener(map, 'center_changed', function() {
			  
			  document.getElementById("mapcenter").innerHTML=convertDecimalToMin(map.getCenter());

        })
        
        
        // Adding a Marker 
        
        google.maps.event.addListener(map, 'click', function(event) {
            addMarker(event.latLng);
        })
        }
        // Infowindow Management for multiple infowindows
        function bindInfoW(marker, contentString, infowindow)
		{
        	google.maps.event.addListener(marker, 'click', function() {
        		closeInfos();
        		
        	 	curmarker = marker;
            	infowindow.setContent(contentString);
            	infowindow.open(map, marker);
            	
            	infos[0]=infowindow;
        	});
        	
        	
		}
		
		// Add InfoBox to Marker
		
		function showInfoBox(marker)
		{
			if (ib == null) {
		        var myOptions = {
		                 content: boxText
		                ,disableAutoPan: false
		                ,maxWidth: 0
		                ,pixelOffset: new google.maps.Size(-75, 0)
		                ,zIndex: null
		                ,boxStyle: { 
		                  background: "url('tipbox.gif') no-repeat"
		                  ,opacity: 0.75
		                  ,width: "150px"
		                 }
		                ,infoBoxClearance: new google.maps.Size(1, 1)
		                ,isHidden: false
		                                ,closeBoxURL: ""
	
		                ,pane: "floatPane"
		                ,enableEventPropagation: false
		        };
	
	    	    ib = new InfoBox(myOptions);
			};
			
	        ib.open(map, marker);
	       
		}

		function closeInfos(){
	  		if(infos.length > 0){
	 
	      		/* detach the info-window from the marker */
	      		infos[0].set("marker",null);
	 
	      		/* and close it */
	      		infos[0].close();
	 
	      		/* blank the array */
	      		infos.length = 0;
	   		}
		}
		
		// Distance calculation  
        function distance(fromPosition,toMarker)
        {
        	if (fromPosition != null) {
        		// Route anzeigen und distanz ausrechnen + anzeigen
	        	var toPosition = toMarker.getPosition();
	        	
	        	
	        	//distance = distHaversine(fromMarker,toMarker);
	        	var distance = google.maps.geometry.spherical.computeDistanceBetween (fromPosition, toPosition);
			
	        	document.getElementById('distance').innerHTML = "<li>Distance: " + distance.toFixed(2) + "m</li>";

        	} else{
        		document.getElementById('distance').innerHTML = "<li>Set start position first</li>";

        	};
			
        	
        }
        
        
        function distanceFrom()
        {
        	latLngFrom = curmarker.getPosition();
        }
        
        
        function markasTarget(marker)
        {
        	if (markerTarget != null) {
        		markerTarget.setIcon(null);
        		markerTarget.setOptions({raiseOnDrag: true});
				markerTarget.set("isTarget", false);

        	};
        	
        	var myLatLng = marker.getPosition();
			var lat = myLatLng.lat();
			var lng = myLatLng.lng();

			boxText.innerHTML = '<span id="position" >'+convertDecimalToMin(myLatLng)+'</span>';
			
        	showInfoBox(marker);

        	markerTarget = marker;
        	markerTarget.setOptions({raiseOnDrag: false});
        	
			markerTarget.setIcon('targetmarker.png');
			markerTarget.set("isTarget", true);

			
        }
        
        function deleteMarker()
        {
			closedInfo = true;
        	closeInfos();
			
        	curmarker.setMap(null);
        	
        	if(markers.indexOf(curmarker) != -1)
        	{
        		delete markers[markers.indexOf(curmarker)];
        		delete routePoints[markers.indexOf(curmarker)];
				route.setMap(map);
        	};
        }
       
        // Routes
        function addRoute()
        {
        	
			document.getElementById('distance').innerHTML = "<li>Bla</li>";

        	routePoints.push(curmarker.getPosition());
        	routemarkers.push(curmarker);
        	route.setOptions({path: routePoints});
        	route.setMap(map);
			curmarker.set("isRoute", true);

        }
        
		
        function addMarker(position)
        {
        	var markerOptions= {
	            position: position,
                map: map,
                draggable:true,
                visible: true
            }
            
            if (closedInfo == false)
            {
            	var marker = new google.maps.Marker(markerOptions);
	        	
				var infowindow = new google.maps.InfoWindow;
	
				bindInfoW(marker,contentString,infowindow);
				
				if (markerTarget == null)
				{
					markasTarget(marker);
				}
				
				// Drag of Marker, if TargetMarker then update lat/long, if routemarker, update routes
				google.maps.event.addListener(marker, 'drag', function() {
        		
        			var myLatLng = marker.getPosition();
					
	        		if(marker.get("isTarget"))
	        		{
			        	document.getElementById("position").innerHTML=convertDecimalToMin(myLatLng);
	        		}
	        		
					
	        		if(marker.get("isRoute"))
	        		{
	        			
	        			routePoints[routemarkers.indexOf(marker)] = myLatLng;
	        			 
						route.setOptions({path: routePoints});

	        			route.setMap(map);

	        		}
					
        		})
				
            } else {
            	closedInfo = false;
            }
        }
      


		// Decimal to DTM converter
		
		function convertDecimalToMin(pnt) { 
	        /* 
	                Input:        GPoint Or GLatLng 
	                Output: String with Latitude & Longitude in Degree Minute Second 
							Compass format 
	        */ 
	        var lat = pnt.lat(); 
	        var lng = pnt.lng(); 
	        var dirLat; 
	        var dirLng; 
	        if (lat > 0) { 
	                dirLat = "N"; 
	        } 
	        else { 
	                dirLat = "S"; 
	                lat = lat * -1; 
	        } 
	        if (lng > 0) { 
	                dirLng = "E"; 
	        } 
	        else { 
	                dirLng = "W"; 
	                lng = lng * -1; 
	        } 
	
	        var degLat = Math.floor( lat );                        // use 
	        var degLng = Math.floor( lng );                        // use 
	        var decLat = lat - degLat; 
	        var decLng = lng - degLng; 
	        var dmnLat = 60 * decLat; 
	        var dmnLng = 60 * decLng; 
	        var minLat = parseInt(dmnLat);                // use 
	        var minLng = parseInt(dmnLng);                // use 
	        var dscLat = dmnLat - minLat; 
	        var dscLng = dmnLng - minLng; 
	        var secLat = parseInt(60 * dscLat);        // use 
	        var secLng = parseInt(60 * dscLng);        // use 
	        var sDeg = "Lat: " + pad(degLat,2) + "&#176; " + pad(minLat,2) + "' " + pad(secLat,2) 
						+ "\" " + dirLat + " Lng: " + pad(degLng,3) + "&#176; " + pad(minLng,2) + "' " 
						+ pad(secLng,2) + "\" " + dirLng; 
	        return sDeg; 
		}
		
		function pad(number, length) {
   
		    var str = '' + number;
		    while (str.length < length) {
		        str = '0' + str;
		    }
   
    		return str;
		}
