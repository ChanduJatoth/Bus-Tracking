<!DOCTYPE html>
<head>    
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    
        <script>
            L_NO_TOUCH = false;
            L_DISABLE_3D = false;
        </script>
    
    <style>html, body {width: 100%;height: 100%;margin: 0;padding: 0;}</style>
    <style>#map {position:absolute;top:0;bottom:0;right:0;left:0;}</style>
    <script src="https://cdn.jsdelivr.net/npm/leaflet@1.6.0/dist/leaflet.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Leaflet.awesome-markers/2.0.2/leaflet.awesome-markers.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/leaflet@1.6.0/dist/leaflet.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Leaflet.awesome-markers/2.0.2/leaflet.awesome-markers.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/python-visualization/folium/folium/templates/leaflet.awesome.rotate.min.css"/>
            <meta name="viewport" content="width=device-width,
                initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
            <style>
                #map_cd72396250474360a91f815ecda738da {
                    position: relative;
                    width: 100.0%;
                    height: 100.0%;
                    left: 0.0%;
                    top: 0.0%;
                }
            </style>   
</head>
<body>    
    
            <div class="folium-map" id="map_cd72396250474360a91f815ecda738da" ></div>
        
</body>
<script>    
        //setInterval(function(){
            var watchId = navigator.geolocation.watchPosition(position => {
            var { latitude, longitude } = position.coords;
            var map_cd72396250474360a91f815ecda738da = L.map(
                "map_cd72396250474360a91f815ecda738da",
                {
                    center: [latitude,longitude],
                    crs: L.CRS.EPSG3857,
                    zoom: 15,
                    zoomControl: true,
                    preferCanvas: false,
                }
            );
            $.ajax({
                type: "POST",
                url: "https://53d6bb34-4e2b-4c47-940a-efe733b4a671.mock.pstmn.io/post",
                //url: "http://localhost:3000/post",
                data: JSON.stringify({lat:latitude, long :longitude}),
                contentType: "application/json",
                success: function (result) {
                    console.log(result);
                },
                error: function (result, status) {
                    console.log(result);
                }
                });

            var tile_layer_ead925eb145241a7a9f245d117ce727e = L.tileLayer(
                "https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png",
                {"attribution": "Data by \u0026copy; \u003ca href=\"http://openstreetmap.org\"\u003eOpenStreetMap\u003c/a\u003e, under \u003ca href=\"http://www.openstreetmap.org/copyright\"\u003eODbL\u003c/a\u003e.", "detectRetina": false, "maxNativeZoom": 18, "maxZoom": 18, "minZoom": 0, "noWrap": false, "opacity": 1, "subdomains": "abc", "tms": false}
            ).addTo(map_cd72396250474360a91f815ecda738da);
        
    
            var marker_e28622e9e8744de88cbc16bb31546ed1 = L.marker(
                [latitude, longitude],
                {}
            ).addTo(map_cd72396250474360a91f815ecda738da);
        
    
            var popup_724f33950f74490bbd21400be9939360 = L.popup({"maxWidth": "100%"});

            
                var html_18a4fa83bb0a42cabc613007210cfc7c = $(`<div id="html_18a4fa83bb0a42cabc613007210cfc7c" style="width: 100.0%; height: 100.0%;">Ahmedabad Local, Gujarat</div>`)[0];
                popup_724f33950f74490bbd21400be9939360.setContent(html_18a4fa83bb0a42cabc613007210cfc7c);
            

            marker_e28622e9e8744de88cbc16bb31546ed1.bindPopup(popup_724f33950f74490bbd21400be9939360)
            ;
            
            });
        //},500);
</script>