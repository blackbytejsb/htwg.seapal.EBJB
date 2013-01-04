	
	
	var map;
    
    var curmarker;
	var markerFrom;
    var markerTarget;
    
    var markers = [];
    var infos = [];
      
    var closedInfo = false;
      
    

      
      function initialize() {
      	
      	var contentString = '<div id="content"><ul>'+
    '<li><button onclick="thefunction(curmarker)">Markierung setzen </button></li>'+
    '<li><button onclick="thefunction(curmarker)">Route setzen </button></li>'+
    '<li><button onclick="thefunction(curmarker)">Abstand von hier </button></li>'+
    '<li><button onclick="thefunction(curmarker)">Zum Ziel machen </button></li>'+ 
    '<li><button onclick="deleteMarker()">Löschen</button></li>'+
    '</ul></div>';
      	
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
            
        google.maps.event.addListener(map, 'center_changed', function() {
        	document.getElementById("lat").firstChild.nodeValue=map.getCenter().lat();
        	document.getElementById("long").firstChild.nodeValue=map.getCenter().lng();
        })
        
        google.maps.event.addListener(map, 'click', function(event) {
            var markerOptions= {
	            position: event.latLng,
                map: map,
                draggable:true
            }
            
            if (closedInfo == false)
            {
            	var marker = new google.maps.Marker(markerOptions);
	        	markers.push(marker);
	        	
				var infowindow = new google.maps.InfoWindow;
	
				bindInfoW(marker,contentString,infowindow);
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
        	// Route anzeigen und distanz ausrechnen + anzeigen
        }
        
        
        function routeFrom(marker)
        {
        	if (markerTarget != null) {
        		// distanz von hier zum target berechnen und anzeigen
        		distance(marker,markerTarget);
        	};
        }
        
        function markasTarget(marker)
        {
        	
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
      