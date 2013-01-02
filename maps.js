 var map
      var marker
      var infowindow = new google.maps.InfoWindow();
      var infowindowContent = '<div id="content">'+
    							'<div id="siteNotice">'+
    							'</div>'+
    							'<h1 id="firstHeading" class="firstHeading">Uluru</h1>'+
    							'<div id="bodyContent">'+
    								'<p><b>Uluru</b>, also referred to as <b>Ayers Rock</b>, is a large ' +
    								'sandstone rock formation in the southern part of the '+
    								'Northern Territory, central Australia. It lies 335 km (208 mi) '+
    								'south west of the nearest large town, Alice Springs; 450 km '+
    								'(280 mi) by road. Kata Tjuta and Uluru are the two major '+
    								'features of the Uluru - Kata Tjuta National Park. Uluru is '+
    								'sacred to the Pitjantjatjara and Yankunytjatjara, the '+
    								'Aboriginal people of the area. It has many springs, waterholes, '+
    								'rock caves and ancient paintings. Uluru is listed as a World '+
    								'Heritage Site.</p>'+
    								'<p>Attribution: Uluru, <a href="http://en.wikipedia.org/w/index.php?title=Uluru&oldid=297882194">'+
    							'http://en.wikipedia.org/w/index.php?title=Uluru</a> (last visited June 22, 2009).</p>'+
   					 			'</div>'+
    						'</div>';
      
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
        	 marker = new google.maps.Marker(markerOptions);
        	 
        	 google.maps.event.addListener(marker, 'click', function() {
        	 		infowindow.setContent("contentString");
				    infowindow.open(map, marker);
				
			})
        })
        
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
      }