"use strict";

var mapa = function () {

    var customIcon = L.icon({
        iconUrl: 'https://apdiamantes-local.com/demo3/media/icons/duotune/maps/map007.svg',
        iconSize: [41, 41],  // Tamaño del ícono
        iconAnchor: [12, 41], // Punto de anclaje del ícono
        popupAnchor: [1, -34] // Posición del popup respecto al ícono
    });

    var map = L.map('kt_contact_map').setView([19.432608, -99.133209], 15); // Coordenadas de ejemplo (Zócalo, Ciudad de México)

    // Configuración de la capa de OpenStreetMap
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://osm.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    // Agregar un marcador en el Zócalo
    L.marker([19.432608, -99.133209], { icon: customIcon }).addTo(map)
        .bindPopup("Zócalo, Ciudad de México")
        .openPopup();
    // Corregir el problema del tamaño del mapa cuando el modal se muestra
    document.getElementById('kt_modal_contacto').addEventListener('shown.bs.modal', function () {
        map.invalidateSize(); // Forzar a Leaflet a recalcular el tamaño
        map.setView([19.432608, -99.133209], 15); // Pequeño retraso para asegurarse de que el modal esté completamente visible
    });

    // Public methods
    return {
        init: function () {
            map;
        }
    }
}();

KTUtil.onDOMContentLoaded(function () {
    mapa.init();
});