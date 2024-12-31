<div class="content">
    <div id="map" style="width: 100%; height: 600px; color:black;"></div>
</div>
<script>
    // fungsi untuk menampilkan peta
    var spbu = new L.LayerGroup();
    var kot = new L.LayerGroup();
    var kec = new L.LayerGroup();
    var kel = new L.LayerGroup();


    var map = L.map('map', {
        center: [-1.7912604466772375, 116.42311966554416],
        zoom: 5,
        zoomControl: false,
        layers: []
    });

    var GoogleSatelliteHybrid = L.tileLayer('https://mt1.google.com/vt/lyrs=y&x={x}&y={y}&z={z}', {
        maxZoom: 22,
        attribution: 'Latihan Web GIS'
    }).addTo(map);

    var Esri_WorldStreetMap = L.tileLayer('https://server.arcgisonline.com/ArcGIS/rest/services/World_Street_Map/MapServer/tile/{z}/{y}/{x}', {
        attribution: 'Tiles &copy; Esri &mdash; Source: Esri, DeLorme, NAVTEQ, USGS, Intermap, iPC, NRCAN, Esri Japan, METI, Esri China (Hong Kong), Esri (Thailand), TomTom, 2012'
    });

    var GoogleMaps = new L.TileLayer('https://mt1.google.com/vt/lyrs=m&x={x}&y={y}&z={z}', {
        opacity: 1.0,
        attribution: 'Latihan Web GIS'
    });

    var GoogleRoads = new L.TileLayer('https://mt1.google.com/vt/lyrs=h&x={x}&y={y}&z={z}', {
        opacity: 1.0,
        attribution: 'Latihan Web GIS'
    })

    var baseLayers = {
        'Google Satellite Hybrid': GoogleSatelliteHybrid,
        'Esri World StreetMap': Esri_WorldStreetMap,
        'Google Maps': GoogleMaps,
        'Google Roads': GoogleRoads,
    };

    var groupedOverlays = {
        "Peta Dasar": {
            'Kota': kot,
            'Kecamatan': kec,
            'Kelurahan': kel,
        },
        "Peta Khusus": {
            'Pom Bensin': spbu,
        },
    };

    L.control.groupedLayers(baseLayers, groupedOverlays).addTo(map);

    var osmUrl = 'https://server.arcgisonline.com/ArcGIS/rest/services/World_Imagery/MapServer/tile/{z}/{y}/{x}';
    var osmAttrib = 'Map data &copy; OpenStreetMap contributors';
    var osm2 = new L.TileLayer(osmUrl, { minZoom: 0, maxZoom: 13, attribution: osmAttrib });
    var rect1 = { color: "#ff1100", weight: 3 };
    var rect2 = { color: "#0000AA", weight: 1, opacity: 0, fillOpacity: 0 };
    var miniMap = new L.Control.MiniMap(osm2, {
        toggleDisplay: true,
        position: "bottomright",
        aimingRectOptions: rect1,
        shadowRectOptions: rect2
    }).addTo(map);

    L.Control.geocoder({ position: "topleft", collapsed: true }).addTo(map);

    /* GPS enabled geolocation control set to follow the user's location */
    locateControl = L.control.locate({
        position: "topleft",
        drawCircle: true,
        follow: true,
        setView: true,
        keepCurrentZoomLevel: true,
        markerStyle: {
            weight: 0.8,
            opacity: 0.8,
            fillOpacity: 0.8
        },
        circleStyle: {
            weight: 0.8,
            clickable: false
        },
        icon: "fa fa-location-arrow",
        metric: false,
        strings: {
            title: "My location",
            popup: "You are within {distance} {unit} from this point",
            outsideMapBoundsMsg: "You seem located outside the boundaries of the map"
        },
        locateOptions: {
            maxZoom: 18,
            watch: true,
            enableHighAccuracy: true,
            maximumAge: 10000,
            timeout: 10000
        }
    }).addTo(map);

    // Menyesuaikan ikon agar lebih tengah
    document.querySelector(".fa-location-arrow").style.cssText = `
    vertical-align: middle;
    line-height: normal;
    font-size: 1.2em;
`;


    var zoom_bar = new L.Control.ZoomBar({ position: 'topleft' }).addTo(map);

    L.control.coordinates({
        position: "bottomleft",
        decimals: 2,
        decimalSeperator: ",",
        labelTemplateLat: "Latitude: {y}",
        labelTemplateLng: "Longitude: {x}"
    }).addTo(map);
    /* scala */
    L.control.scale({ metric: true, position: "bottomleft" }).addTo(map);

    var north = L.control({ position: "bottomleft" });
    north.onAdd = function (map) {
        var div = L.DomUtil.create("div", "info legend");
        div.innerHTML = '<img src="<?= base_url() ?>assets/arah-mata-angin-2.png"style=width:250px;>';
        return div;
    }
    north.addTo(map);

    $.getJSON("<?= base_url() ?>assets/provinsi.geojson", function (data) {
        var ratIcon = L.icon({
            iconUrl: '<?= base_url() ?>assets/1-Marker.png',
            iconSize: [10, 20]
        });
        L.geoJson(data, {
            pointToLayer: function (feature, latlng) {
                var marker = L.marker(latlng, { icon: ratIcon });
                marker.bindPopup(feature.properties.CITY_NAME);
                return marker;
            }
        }).addTo(prov);
    });

    $.getJSON("<?= base_url() ?>assets/rsu.geojson", function (data) {
        var ratIcon = L.icon({
            iconUrl: '<?= base_url() ?>assets/2-Marker.png',
            iconSize: [5, 10]
        });
        L.geoJson(data, {
            pointToLayer: function (feature, latlng) {
                var marker = L.marker(latlng, { icon: ratIcon });
                marker.bindPopup(feature.properties.NAMOBJ);
                return marker;
            }
        }).addTo(faskes);
    });

    $.getJSON("<?= base_url() ?>assets/poliklinik.geojson", function (data) {
        var ratIcon = L.icon({
            iconUrl: '<?= base_url() ?>assets/3-Marker.png',
            iconSize: [5, 10]
        });
        L.geoJson(data, {
            pointToLayer: function (feature, latlng) {
                var marker = L.marker(latlng, { icon: ratIcon });
                marker.bindPopup(feature.properties.NAMOBJ);
                return marker;
            }
        }).addTo(faskes);
    });

    $.getJSON("<?= base_url() ?>assets/puskesmas.geojson", function (data) {
        var ratIcon = L.icon({
            iconUrl: '<?= base_url() ?>assets/4-Marker.png',
            iconSize: [5, 10]
        });
        L.geoJson(data, {
            pointToLayer: function (feature, latlng) {
                var marker = L.marker(latlng, { icon: ratIcon });
                marker.bindPopup(feature.properties.NAMOBJ);
                return marker;
            }
        }).addTo(faskes);
    });

    $.getJSON("<?= base_url() ?>/assets/sungai.geojson", function (kode) {
        L.geoJson(kode, {
            style: function (feature) {
                var color,
                    kode = feature.properties.kode;
                if (kode < 2) color = "#0094FF";
                else if (kode > 0) color = "#f2051d";
                else color = "#f2051d"; // no data
                return { color: "#999", weight: 3, color: color, fillOpacity: .8 };
            },
            onEachFeature: function (feature, layer) {
                layer.bindPopup
                    ()
            }
        }).addTo(sungai);
    });

    $.getJSON("<?= base_url() ?>/assets/provinsi_poligon.geojson", function (kode) {
        L.geoJson(kode, {
            style: function (feature) {
                var fillColor,
                    kode = feature.properties.kode;
                if (kode > 34) fillColor = "#7fcdbb";
                else if (kode > 33) fillColor = "#edf8b1";
                else if (kode > 32) fillColor = "#fc9272";
                else if (kode > 31) fillColor = "#fee391";
                else if (kode > 30) fillColor = "#d0d1e6";
                else if (kode > 29) fillColor = "#0570b0";
                else if (kode > 28) fillColor = "#74c476";
                else if (kode > 27) fillColor = "#d73027";
                else if (kode > 26) fillColor = "#f46d43";
                else if (kode > 25) fillColor = "#4575b4";
                else if (kode > 24) fillColor = "#66c2a5";
                else if (kode > 23) fillColor = "#3288bd";
                else if (kode > 22) fillColor = "#abdda4";
                else if (kode > 21) fillColor = "#006837";
                else if (kode > 20) fillColor = "#fec44f";
                else if (kode > 19) fillColor = "#c2e699";
                else if (kode > 18) fillColor = "#fee0d2";
                else if (kode > 17) fillColor = "#756bb1";
                else if (kode > 16) fillColor = "#8c510a";
                else if (kode > 15) fillColor = "#01665e";
                else if (kode > 14) fillColor = "#e41a1c";
                else if (kode > 13) fillColor = "#636363";
                else if (kode > 12) fillColor = "#762a83";
                else if (kode > 11) fillColor = "#1b7837";
                else if (kode > 10) fillColor = "#d53e4f";
                else if (kode > 9) fillColor = "#67001f";
                else if (kode > 8) fillColor = "#c994c7";
                else if (kode > 7) fillColor = "#fdbb84";
                else if (kode > 6) fillColor = "#dd1c77";
                else if (kode > 5) fillColor = "#3182bd";
                else if (kode > 4) fillColor = "#f03b20";
                else if (kode > 3) fillColor = "#31a354";
                else if (kode > 2) fillColor = "#78c679";
                else if (kode > 1) fillColor = "#c2e699";
                else if (kode > 0) fillColor = "#ffffcc";
                else fillColor = "#f7f7f7"; // no data
                return { color: "#999", weight: 1, fillColor: fillColor, fillOpacity: 0.6 };
            },
            onEachFeature: function (feature, layer) {
                layer.bindPopup(feature.properties.PROV);
            }
        }).addTo(provin);
    });

    $.getJSON("<?= base_url() ?>assets/myspbu.geojson", function (data) {
        var ratIcon = L.icon({
            iconUrl: '<?= base_url() ?>assets/gas.png',
            iconSize: [20, 30]
        });

        L.geoJson(data, {
            pointToLayer: function (feature, latlng) {
                var marker = L.marker(latlng, { icon: ratIcon });

                // Periksa apakah properti ada dan tidak kosong
                if (feature.properties) {
                    let popupContent = `
                    <div style="
                        font-family: Arial, sans-serif; 
                        font-size: 14px; 
                        color: #333; 
                        line-height: 1.6; 
                        max-width: 300px; 
                        padding: 15px; 
                        border-radius: 8px; 
                        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2); 
                        background-color: #fff;">
                `;

                    // Menambahkan Kode SPBU
                    if (feature.properties.kode_pom) {
                        popupContent += `
                        <h3 style="
                            font-size: 18px; 
                            margin: 0; 
                            margin-bottom: 10px; 
                            color: #007BFF; 
                            display: flex; 
                            align-items: center;">
                            <i class="fas fa-gas-pump" style="margin-right: 8px;"></i>
                            ${feature.properties.kode_pom}
                        </h3>
                        `;
                    }

                    // Menambahkan Jenis SPBU
                    if (feature.properties.jenis_pom) {
                        popupContent += `
                        <p style="
                            margin: 0; 
                            margin-bottom: 8px;">
                            <strong>Jenis:</strong> ${feature.properties.jenis_pom}
                        </p>
                    `;
                    }

                    // Menambahkan Alamat SPBU (Nama Jalan)
                    if (feature.properties.nama_jalan) {
                        popupContent += `
                        <p style="
                            margin: 0; 
                            margin-bottom: 8px;">
                            <strong>Jalan:</strong> ${feature.properties.nama_jalan}
                        </p>
                    `;
                    }

                    // Menambahkan Alamat SPBU (Nama Kelurahan)
                    if (feature.properties.nama_kelur) {
                        popupContent += `
                        <p style="
                            margin: 0; 
                            margin-bottom: 8px;">
                            <strong>Kelurahan:</strong> ${feature.properties.nama_kelur}
                        </p>
                    `;
                    }

                    // Menambahkan Alamat SPBU (Nama Kecamatan)
                    if (feature.properties.nama_kecam) {
                        popupContent += `
                        <p style="
                            margin: 0; 
                            margin-bottom: 8px;">
                            <strong>Kecamatan:</strong> ${feature.properties.nama_kecam}
                        </p>
                    `;
                    }

                    // Menambahkan Alamat SPBU (Nama Kota)
                    if (feature.properties.nama_kota) {
                        popupContent += `
                        <p style="
                            margin: 0; 
                            margin-bottom: 8px;">
                            <strong>Kota:</strong> ${feature.properties.nama_kota}
                        </p>
                    `;
                    }

                    // Menambahkan Jam Operasional
                    if (feature.properties.jam_operas) {
                        popupContent += `
                        <p style="
                            margin: 0; 
                            margin-bottom: 8px;">
                            <strong>Jam Operasional:</strong> ${feature.properties.jam_operas}
                        </p>
                    `;
                    }

                    // Menambahkan Banyaknya Tanki Motor
                    if (feature.properties.tanki_moto) {
                        popupContent += `
                        <p style="
                            margin: 0; 
                            margin-bottom: 8px;">
                            <strong>Dispenser Bahan Bakar Motor:</strong> ${feature.properties.tanki_moto}
                        </p>
                    `;
                    }

                    // Menambahkan Banyaknya Tanki Mobil
                    if (feature.properties.tanki_mobi) {
                        popupContent += `
                        <p style="
                            margin: 0; 
                            margin-bottom: 8px;">
                            <strong>Dispenser Bahan Bakar Mobil:</strong> ${feature.properties.tanki_mobi} 
                        </p>
                    `;
                    }

                    // Menambahkan Total Tanki
                    if (feature.properties.banyak_tan) {
                        popupContent += `
                        <p style="
                            margin: 0; 
                            margin-bottom: 8px;">
                            <strong>Jumlah Dispenser Bahan Bakar:</strong> ${feature.properties.banyak_tan}
                        </p>
                    `;
                    }

                    // Menambahkan Fasilitas
                    if (feature.properties.fasilitas) {
                        popupContent += `
                        <p style="
                            margin: 0; 
                            margin-bottom: 8px;">
                            <strong>Fasilitas:</strong> ${feature.properties.fasilitas}
                        </p>
                    `;
                    }

                    // Menambahkan Status Operasi
                    if (feature.properties.status_ope) {
                        popupContent += `
                        <p style="
                            margin: 0; 
                            margin-bottom: 8px;">
                            <strong>Status Operasi:</strong> ${feature.properties.status_ope}
                        </p>
                    `;
                    }
                    // Menambahkan Foto SPBU
                    if (feature.properties.foto_spbu) {
                        let imagePath = "<?= base_url() ?>assets/dokumentasi_spbu/" + feature.properties.foto_spbu;
                        popupContent += `
                        <div style="margin-top: 15px; text-align: center;">
                            <img src="${imagePath}" alt="Foto SPBU" 
                                style="
                                    width: 100%; 
                                    max-width: 250px; 
                                    height: auto; 
                                    border-radius: 5px; 
                                    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);">
                        </div>
                    `;
                    } else {
                        popupContent += `
                        <p style="
                            margin-top: 15px; 
                            text-align: center; 
                            font-style: italic; 
                            color: #888;">
                            Foto SPBU tidak tersedia.
                        </p>
                    `;
                    }

                    popupContent += "</div>"; // Menutup div

                    marker.bindPopup(popupContent);
                } else {
                    marker.bindPopup("<div style='font-family: Arial, sans-serif; font-size: 14px; color: #444;'>Data SPBU tidak tersedia.</div>");
                }
                return marker;
            }
        }).addTo(spbu);
    });

    $.getJSON("<?= base_url() ?>/assets/LayerKota.geojson", function (kode) {
        L.geoJson(kode, {
            style: function (feature) {
                var fillColor,
                    kode = feature.properties.kode;
                if (kode = 1) fillColor = "blue";
                return { color: "#999", weight: 1, fillColor: fillColor, fillOpacity: .6 };
            },
            onEachFeature: function (feature, layer) {
                layer.bindPopup(feature.properties.WADMKK)
            }
        }).addTo(kot);
    });

    $.getJSON("<?= base_url() ?>/assets/LayerKecamatan.geojson", function (kode) {
        L.geoJson(kode, {
            style: function (feature) {
                var fillColor,
                    kode = feature.properties.kode;
                if (kode > 7) fillColor = "#006837";
                else if (kode > 6) fillColor = "#fec44f"
                else if (kode > 5) fillColor = "#c2e699"
                else if (kode > 4) fillColor = "#fee0d2"
                else if (kode > 3) fillColor = "#756bb1"
                else if (kode > 2) fillColor = "#8c510a"
                else if (kode > 1) fillColor = "#01665e"
                else if (kode > 0) fillColor = "#01665e"
                return { color: "#999", weight: 1, fillColor: fillColor, fillOpacity: .6 };
            },
            onEachFeature: function (feature, layer) {
                layer.bindPopup(feature.properties.WADMKC)
            }
        }).addTo(kec);
    });

    $.getJSON("<?= base_url() ?>/assets/LayerKelurahan.geojson", function (kode) {
        L.geoJson(kode, {
            style: function (feature) {
                var kodeValue = feature.properties.kode; // Ambil nilai kode
                var fillColor;

                // Periksa nilai kode dan tetapkan warna acak
                if (kodeValue >= 1 && kodeValue <= 40) {
                    fillColor = getRandomColor(); // Warna acak untuk kode 1–34
                } else {
                    fillColor = "#cccccc"; // Warna default jika kode di luar rentang
                }

                return {
                    fillColor: fillColor,
                    fillOpacity: 0.7, // Opasitas warna
                    weight: 1,        // Ketebalan garis
                    color: '#000'     // Warna garis border
                };
            },
            onEachFeature: function (feature, layer) {
                layer.bindPopup(feature.properties.NAMOBJ)
            }
        }).addTo(kel);
    });

    // Fungsi untuk menghasilkan warna acak
    function getRandomColor() {
        var letters = '0123456789ABCDEF';
        var color = '#';
        for (var i = 0; i < 6; i++) {
            color += letters[Math.floor(Math.random() * 16)];
        }
        return color;
    }

</script>