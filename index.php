<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="initial-scale=1,user-scalable=no,maximum-scale=1,width=device-width">
        <meta name="mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <link rel="stylesheet" href="css/leaflet.css">
        <link rel="stylesheet" href="css/qgis2web.css"><link rel="stylesheet" href="css/fontawesome-all.min.css">
        <style>
        html, body, #map {
            width: 100%;
            height: 100%;
            padding: 0;
            margin: 0;
        }
        </style>
        <title></title>
    </head>
    <body>
        <div id="map">
        </div>
        <script src="js/qgis2web_expressions.js"></script>
        <script src="js/leaflet.js"></script>
        <script src="js/leaflet.rotatedMarker.js"></script>
        <script src="js/leaflet.pattern.js"></script>
        <script src="js/leaflet-hash.js"></script>
        <script src="js/Autolinker.min.js"></script>
        <script src="js/rbush.min.js"></script>
        <script src="js/labelgun.min.js"></script>
        <script src="js/labels.js"></script>
        <script src="data/Kecamatan_1.php"></script>
        <script src="data/Hotel_2.php"></script>
        <script>
        var highlightLayer;
        function highlightFeature(e) {
            highlightLayer = e.target;
            highlightLayer.openPopup();
        }
        var map = L.map('map', {
            zoomControl:true, maxZoom:28, minZoom:11
        })
        var hash = new L.Hash(map);
        map.attributionControl.setPrefix('<a href="https://github.com/tomchadwin/qgis2web" target="_blank">qgis2web</a> &middot; <a href="https://leafletjs.com" title="A JS library for interactive maps">Leaflet</a> &middot; <a href="https://qgis.org">QGIS</a>');
        var autolinker = new Autolinker({truncate: {length: 30, location: 'smart'}});
        var bounds_group = new L.featureGroup([]);
        function setBounds() {
            if (bounds_group.getLayers().length) {
                map.fitBounds(bounds_group.getBounds());
            }
        }
        map.createPane('pane_OpenStreetMap_0');
        map.getPane('pane_OpenStreetMap_0').style.zIndex = 400;
        var layer_OpenStreetMap_0 = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            pane: 'pane_OpenStreetMap_0',
            opacity: 1.0,
            attribution: '',
            minZoom: 11,
            maxZoom: 28,
            minNativeZoom: 0,
            maxNativeZoom: 19
        });
        layer_OpenStreetMap_0;
        map.addLayer(layer_OpenStreetMap_0);
        function pop_Kecamatan_1(feature, layer) {
            layer.on({
                mouseout: function(e) {
                    if (typeof layer.closePopup == 'function') {
                        layer.closePopup();
                    } else {
                        layer.eachLayer(function(feature){
                            feature.closePopup()
                        });
                    }
                },
                mouseover: highlightFeature,
            });
            var popupContent = '<table>\
                    <tr>\
                        <th scope="row">Kecamatan : </th>\
                        <td>' + (feature.properties['NAMOBJ'] !== null ? autolinker.link(feature.properties['NAMOBJ'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Remark : </th>\
                        <td>' + (feature.properties['REMARK'] !== null ? autolinker.link(feature.properties['REMARK'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Kota : </th>\
                        <td>' + (feature.properties['WADMKK'] !== null ? autolinker.link(feature.properties['WADMKK'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Provinsi : </th>\
                        <td>' + (feature.properties['WADMPR'] !== null ? autolinker.link(feature.properties['WADMPR'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Jumlah Hotel : </th>\
                        <td>' + (feature.properties['Jumlah Hotel'] !== null ? autolinker.link(feature.properties['Jumlah Hotel'].toLocaleString()) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_Kecamatan_1_0(feature) {
            if (feature.properties['Jumlah Hotel'] >= 0.000000 && feature.properties['Jumlah Hotel'] <= 0.000000 ) {
                return {
                pane: 'pane_Kecamatan_1',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(255,255,255,1.0)',
                interactive: true,
            }
            }
            if (feature.properties['Jumlah Hotel'] >= 0.000000 && feature.properties['Jumlah Hotel'] <= 3.000000 ) {
                return {
                pane: 'pane_Kecamatan_1',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(255,191,191,1.0)',
                interactive: true,
            }
            }
            if (feature.properties['Jumlah Hotel'] >= 3.000000 && feature.properties['Jumlah Hotel'] <= 7.000000 ) {
                return {
                pane: 'pane_Kecamatan_1',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(255,128,128,1.0)',
                interactive: true,
            }
            }
            if (feature.properties['Jumlah Hotel'] >= 7.000000 && feature.properties['Jumlah Hotel'] <= 25.000000 ) {
                return {
                pane: 'pane_Kecamatan_1',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(255,64,64,1.0)',
                interactive: true,
            }
            }
            if (feature.properties['Jumlah Hotel'] >= 25.000000 && feature.properties['Jumlah Hotel'] <= 38.000000 ) {
                return {
                pane: 'pane_Kecamatan_1',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(255,0,0,1.0)',
                interactive: true,
            }
            }
        }
        map.createPane('pane_Kecamatan_1');
        map.getPane('pane_Kecamatan_1').style.zIndex = 401;
        map.getPane('pane_Kecamatan_1').style['mix-blend-mode'] = 'normal';
        var layer_Kecamatan_1 = new L.geoJson(json_Kecamatan_1, {
            attribution: '',
            interactive: true,
            dataVar: 'json_Kecamatan_1',
            layerName: 'layer_Kecamatan_1',
            pane: 'pane_Kecamatan_1',
            onEachFeature: pop_Kecamatan_1,
            style: style_Kecamatan_1_0,
        });
        bounds_group.addLayer(layer_Kecamatan_1);
        map.addLayer(layer_Kecamatan_1);
        function pop_Hotel_2(feature, layer) {
            layer.on({
                mouseout: function(e) {
                    if (typeof layer.closePopup == 'function') {
                        layer.closePopup();
                    } else {
                        layer.eachLayer(function(feature){
                            feature.closePopup()
                        });
                    }
                },
                mouseover: highlightFeature,
            });
            var popupContent = '<table>\
                    <tr>\
                        <th scope="row">id : </th>\
                        <td>' + (feature.properties['id'] !== null ? autolinker.link(feature.properties['id'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Nama Hotel : </th>\
                        <td>' + (feature.properties['Nama Hotel'] !== null ? autolinker.link(feature.properties['Nama Hotel'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Jenis : </th>\
                        <td>' + (feature.properties['Jenis'] !== null ? autolinker.link(feature.properties['Jenis'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Alamat : </th>\
                        <td>' + (feature.properties['Alamat'] !== null ? autolinker.link(feature.properties['Alamat'].toLocaleString()) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        //penambahan icon hotel
        var IconHotelbintang = L.icon({
            iconUrl:'legend/berbintang.png',
            iconSize:[40, 25],
            iconAnchor:[16, 15],
            popupAnchor:[-6, -16]
        });
        var IconHotelnonbintang = L.icon({
            iconUrl:'legend/nonbintang.png',
            iconSize:[40, 25],
            iconAnchor:[16, 15],
            popupAnchor:[-6, -16]
        });

        function style_Hotel_2_0(feature) {
            switch(String(feature.properties['Jenis'])) {
                case 'Berbintang':
                    return {
                pane: 'pane_Hotel_2',
        rotationAngle: -0.00872665,
        rotationOrigin: 'center center',
        icon: L.icon({
            iconUrl: 'markers/five-star-hotel.svg',
            iconSize: [45.6, 45.6]
        }),
                interactive: true,
            }
                    break;
                case 'Non-Bintang':
                    return {
                pane: 'pane_Hotel_2',
        rotationAngle: 0.0,
        rotationOrigin: 'center center',
        icon: L.icon({
            iconUrl: 'markers/hotel.svg',
            iconSize: [45.6, 45.6]
        }),
                interactive: true,
            }
                    break;
                default:
                    return {
                pane: 'pane_Hotel_2',
                radius: 4.0,
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1,
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(75,15,203,1.0)',
                interactive: true,
            }
                    break;
            }
        }
        map.createPane('pane_Hotel_2');
        map.getPane('pane_Hotel_2').style.zIndex = 402;
        map.getPane('pane_Hotel_2').style['mix-blend-mode'] = 'normal';
        var layer_Hotel_2 = new L.geoJson(json_Hotel_2, {
            attribution: '',
            interactive: true,
            dataVar: 'json_Hotel_2',
            layerName: 'layer_Hotel_2',
            pane: 'pane_Hotel_2',
            onEachFeature: pop_Hotel_2,
            pointToLayer: function (feature, latlng) {
                var context = {
                    feature: feature,
                    variables: {}
                };
                //return L.circleMarker(latlng, style_Hotel_2_0(feature));
                return L.marker(latlng, style_Hotel_2_0(feature));
            },
        });
        bounds_group.addLayer(layer_Hotel_2);
        map.addLayer(layer_Hotel_2);
        var baseMaps = {};
        L.control.layers(baseMaps,{'Hotel<br /><table><tr><td style="text-align: center;"><img src="legend/Hotel_2_Berbintang0.png" /></td><td>Berbintang</td></tr><tr><td style="text-align: center;"><img src="legend/Hotel_2_NonBintang1.png" /></td><td>Non-Bintang</td></tr><tr><td style="text-align: center;"></td><td></td></tr></table>': layer_Hotel_2,'Kecamatan<br /><table><tr><td style="text-align: center;"><img src="legend/Kecamatan_1_000.png" /></td><td>0 - 0</td></tr><tr><td style="text-align: center;"><img src="legend/Kecamatan_1_031.png" /></td><td>0 - 3</td></tr><tr><td style="text-align: center;"><img src="legend/Kecamatan_1_372.png" /></td><td>3 - 7</td></tr><tr><td style="text-align: center;"><img src="legend/Kecamatan_1_7253.png" /></td><td>7 - 25</td></tr><tr><td style="text-align: center;"><img src="legend/Kecamatan_1_25384.png" /></td><td>25 - 38</td></tr></table>': layer_Kecamatan_1,"OpenStreetMap": layer_OpenStreetMap_0,},{collapsed:false}).addTo(map);
        setBounds();
        var i = 0;
        layer_Kecamatan_1.eachLayer(function(layer) {
            var context = {
                feature: layer.feature,
                variables: {}
            };
            layer.bindTooltip((layer.feature.properties['NAMOBJ'] !== null?String('<div style="color: #000000; font-size: 10pt; font-weight: bold; font-family: \'MS Shell Dlg 2\', sans-serif;">' + layer.feature.properties['NAMOBJ']) + '</div>':''), {permanent: true, offset: [-0, -16], className: 'css_Kecamatan_1'});
            labels.push(layer);
            totalMarkers += 1;
              layer.added = true;
              addLabel(layer, i);
              i++;
        });
        resetLabels([layer_Kecamatan_1]);
        map.on("zoomend", function(){
            resetLabels([layer_Kecamatan_1]);
        });
        map.on("layeradd", function(){
            resetLabels([layer_Kecamatan_1]);
        });
        map.on("layerremove", function(){
            resetLabels([layer_Kecamatan_1]);
        });
        </script>
    </body>
</html>
