 var map
      var marker
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
        	document.getElementById("latitude").firstChild.nodeValue=map.getCenter().lat();
        	document.getElementById("longitude").firstChild.nodeValue=map.getCenter().lng();
        })
        
        google.maps.event.addListener(map, 'click', function(event) {
             var markerOptions= {
	             position: event.latLng,
                 map: map,
                 draggable:true
             }
        	 marker = new google.maps.Marker(markerOptions);
        	 
        	 google.maps.event.addListener(marker, 'click', function() {alert("Marker was clicked")})
        })
        
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
      }