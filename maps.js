	
	
	var map;
    
    var curmarker;
	var markerFrom = null;
    var markerTarget = null;
    
    var markers = [];
    var infos = [];
      
    var closedInfo = false;
      
    var ib;
    var boxText = document.createElement("div");
	boxText.style.cssText = "border: 1px solid black; margin-top: 8px; background: white; padding: 5px;";
	
    

	var contentString = '<div id="content"><ul>'+
    '<li><button onclick="thefunction(curmarker)">Markierung setzen </button></li>'+
    '<li><button onclick="thefunction(curmarker)">Route setzen </button></li>'+
    '<li><button onclick="distanceFrom()">Abstand von hier</button></li>'+
    '<li><button onclick="distance(markerFrom,curmarker)">Abstand nach hier</button></li>'+
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
        
        google.maps.event.addListener(map, 'center_changed', function() {
        	document.getElementById("lat").firstChild.nodeValue=map.getCenter().lat();
        	document.getElementById("long").firstChild.nodeValue=map.getCenter().lng();
        })
        
        
        // Adding a Marker 
        
        google.maps.event.addListener(map, 'click', function(event) {
            var markerOptions= {
	            position: event.latLng,
                map: map,
                draggable:true,
                visible: true
            }
            
            if (closedInfo == false)
            {
            	var marker = new google.maps.Marker(markerOptions);
	        	markers.push(marker);
	        	
				var infowindow = new google.maps.InfoWindow;
	
				bindInfoW(marker,contentString,infowindow);
				
				if (markerTarget == null)
				{
					markasTarget(marker);
				}
				
            } else {
            	closedInfo = false;
            }
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
		                ,pixelOffset: new google.maps.Size(-140, 0)
		                ,zIndex: null
		                ,boxStyle: { 
		                  background: "url('tipbox.gif') no-repeat"
		                  ,opacity: 0.75
		                  ,width: "280px"
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
        function distance(fromMarker,toMarker)
        {
        	if (fromMarker != null) {
        		// Route anzeigen und distanz ausrechnen + anzeigen
	        	var latLngA = fromMarker.getPosition();
	        	var latLngB = toMarker.getPosition();
	        	
	        	
	        	//distance = distHaversine(fromMarker,toMarker);
	        	var distance = google.maps.geometry.spherical.computeDistanceBetween (latLngA, latLngB);
			
	        	document.getElementById('distance').innerHTML = "<li>Distance: " + distance.toFixed(2) + "m</li>";

        	} else{
        		document.getElementById('distance').innerHTML = "<li>Set start position first</li>";

        	};
			
        	
        }
        
        
        function distanceFrom()
        {
        	markerFrom = curmarker;
        }
        
        
        function markasTarget(marker)
        {
        	if (markerTarget != null) {
        		markerTarget.setIcon(null);
        		markerTarget.setOptions({raiseOnDrag: true});
				google.maps.event.clearListeners(marker, 'drag');

        	};
        	
        	var myLatLng = marker.getPosition();
			var lat = myLatLng.lat();
			var lng = myLatLng.lng();

			boxText.innerHTML = 'Lat <span id="lat1">'+lat+'</span><br /> Long <span id="long1">'+lng+'</span>';
			
        	showInfoBox(marker);

        	markerTarget = marker;
        	markerTarget.setOptions({raiseOnDrag: false});
        	
			marker.setIcon('targetmarker.png');
			
			google.maps.event.addListener(marker, 'drag', function() {
				var myLatLng = marker.getPosition();
				var lat = myLatLng.lat();
				var lng = myLatLng.lng();
				
	        	document.getElementById("lat1").firstChild.nodeValue=lat;
	        	document.getElementById("long1").firstChild.nodeValue=lng;
        	})
        }
        
        function deleteMarker()
        {
			closedInfo = true;
        	closeInfos();
			
        	curmarker.setMap(null);
        	delete markers[markers.indexOf(curmarker)];
        }
       
        /*
          var routePoints = [
            new google.maps.LatLng(47.66, 9.16),
            new google.maps.LatLng(47.67, 9.17),
            new google.maps.LatLng(47.69, 9.14),
          ];
          var route = new google.maps.Polyline({
            path: routePoints,
            strokeColor: "#FF0000",
            strokeOpacity: 1.0,
            strokeWeight: 2
          });

        route.setMap(map);
        */
      