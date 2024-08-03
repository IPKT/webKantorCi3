﻿//Add your own map providers here. See help for details
mapProvider = [];
mapProvider[0] = new L.TileLayer('http://{s}.tile.openstreetmap.fr/hot/{z}/{x}/{y}.png', { maxZoom: 18, attribution: '&copy; Openstreetmap France | &copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>' });
mapProvider[1] = new L.TileLayer('http://{s}.tile.thunderforest.com/transport-dark/{z}/{x}/{y}.png', { maxZoom: 18, attribution: '&copy; <a href="http://www.opencyclemap.org">OpenCycleMap</a>, &copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>' });
mapProvider[2] = new L.TileLayer('http://{s}.tile.thunderforest.com/landscape/{z}/{x}/{y}.png', { maxZoom: 18, attribution: '&copy; <a href="http://www.opencyclemap.org">OpenCycleMap</a>, &copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>' });
mapProvider[3] = new L.TileLayer('http://{s}.tile.openstreetmap.se/hydda/full/{z}/{x}/{y}.png', { minZoom: 0, maxZoom: 18, attribution: 'Tiles courtesy of <a href="http://openstreetmap.se/" target="_blank">OpenStreetMap Sweden</a> &mdash; Map data &copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>' });
mapProvider[4] = new L.tileLayer('http://korona.geog.uni-heidelberg.de/tiles/roads/x={x}&y={y}&z={z}', { maxZoom: 20, attribution: 'Imagery from <a href="http://giscience.uni-hd.de/">GIScience Research Group @ University of Heidelberg</a> &mdash; Map data &copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>' });
mapProvider[5] = new L.tileLayer('http://{s}.tile.openstreetmap.fr/osmfr/{z}/{x}/{y}.png', {  maxZoom: 19,  attribution: '&copy; Openstreetmap France | &copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'});
mapProvider[6] = new L.TileLayer('http://server.arcgisonline.com/ArcGIS/rest/services/World_Shaded_Relief/MapServer/tile/{z}/{y}/{x}', { attribution: 'Tiles &copy; Esri &mdash; Source: Esri', maxZoom: 13 });
mapProvider[7] = new L.TileLayer('http://server.arcgisonline.com/ArcGIS/rest/services/NatGeo_World_Map/MapServer/tile/{z}/{y}/{x}', { attribution: 'Tiles &copy; Esri &mdash; National Geographic, Esri, DeLorme, NAVTEQ + Others', maxZoom: 16 });
mapProvider[8] = new L.TileLayer('http://{s}.tile.opentopomap.org/{z}/{x}/{y}.png', { maxZoom: 16, attribution: 'Map data: &copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>, <a href="http://viewfinderpanoramas.org">SRTM</a> | Map style: &copy; <a href="https://opentopomap.org">OpenTopoMap</a> (<a href="https://creativecommons.org/licenses/by-sa/3.0/">CC-BY-SA</a>)' });
mapProvider[9] = new L.tileLayer('http://{s}.tile.openstreetmap.se/hydda/roads_and_labels/{z}/{x}/{y}.png', { attribution: 'Tiles courtesy of <a href="http://openstreetmap.se/" target="_blank">OpenStreetMap Sweden</a> &mdash; Map data &copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>', minZoom: 6, maxZoom: 18, opacity: 0.9 });
mapProvider[10] = new L.TileLayer('http://server.arcgisonline.com/ArcGIS/rest/services/World_Imagery/MapServer/tile/{z}/{y}/{x}', { noWrap: true, attribution: '&copy;Esri' });
mapProvider[11] = new L.TileLayer('http://{s}.tile.openstreetmap.se/hydda/roads_and_labels/{z}/{x}/{y}.png', { attribution: '&copy;<a href="http://openstreetmap.se/" target="_blank">OpenStreetMap Sweden</a>', opacity: 0.5 });
mapProvider[12] = new L.TileLayer('http://server.arcgisonline.com/ArcGIS/rest/services/World_Physical_Map/MapServer/tile/{z}/{y}/{x}', { attribution: 'Tiles &copy; Esri &mdash; Source: US National Park Service', maxZoom: 8 });