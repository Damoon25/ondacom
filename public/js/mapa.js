document.addEventListener("DOMContentLoaded", function () {
    // Definir los límites del mapa ajustados para que solo se vea Brasil
    var bounds = [
        [-33.7684, -73.9828],  // Suroeste de Brasil (más cercano)
        [5.2718, -32.425]      // Noreste de Brasil (más cercano)
    ];

    // Inicializar el mapa centrado en Brasil con restricciones de zoom y límites ajustados
    var map = L.map('map', {
        maxBounds: bounds,
        maxBoundsViscosity: 1.0,
        zoomControl: true,
        minZoom: 5,   // Zoom mínimo para no ver más allá de Brasil
        maxZoom: 10,
        scrollWheelZoom: false,  // Desactiva el zoom con la rueda del mouse por defecto
        dragging: true  // Permite mover el mapa, pero restringido a los límites de Brasil
    }).setView([-14.235, -51.9253], 5);  // Coordenadas centrales de Brasil

    // Añadir capa de mapa (OpenStreetMap) y ajustar estilo para centrarse en Brasil
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '© OpenStreetMap contributors',
        noWrap: true  // Evitar que el mapa se repita (para centrarlo en Brasil)
    }).addTo(map);

    var locations = [
    { lat: -3.1190, lng: -60.0217, description: 'Manaos' },
    { lat: 0.0349, lng: -51.0694, description: 'Macapá-AP' },
    { lat: -1.4558, lng: -48.4902, description: 'Belém-PA' },
    { lat: -2.5307, lng: -44.3068, description: 'São Luiz' },
    { lat: -13.0325, lng: -56.0977, description: 'Lucas do Rio Verde-MT' },
    { lat: -10.1847, lng: -48.3337, description: 'Palmas' },
    { lat: -12.9714, lng: -38.5014, description: 'Bahía' },
    { lat: -16.4731, lng: -54.6354, description: 'Rondonópolis' },
    { lat: -26.3044, lng: -48.8487, description: 'Joinville' },
    { lat: -16.7279, lng: -43.8601, description: 'Montes Claros' },
    { lat: -15.7801, lng: -47.9292, description: 'Brasília-DF' },
    { lat: -16.8237, lng: -49.2469, description: 'Aparecida de Goiânia' },
    { lat: -17.7426, lng: -48.6196, description: 'Caldas Novas-GO' },
    { lat: -17.7989, lng: -50.9238, description: 'Rio Verde-GO' },
    { lat: -18.9146, lng: -48.2754, description: 'Uberlândia-MG' },
    { lat: -19.9167, lng: -43.9345, description: 'Belo Horizonte' },
    { lat: -20.121, lng: -40.3071, description: 'Serra-ES' },
    { lat: -23.420999, lng: -51.933055, description: 'Maringá' },
    { lat: -24.9555, lng: -53.4552, description: 'Cascavel' },
    { lat: -25.0945, lng: -50.1636, description: 'Ponta Grossa' },
    { lat: -25.4295, lng: -49.2713, description: 'Curitiba' },
    { lat: -23.5505, lng: -46.6333, description: 'São Paulo' },
    { lat: -23.1017, lng: -46.8786, description: 'Cajamar-SP' },
    { lat: -26.3044, lng: -48.8487, description: 'Joinville-SC' },
    { lat: -26.9194, lng: -49.0661, description: 'Blumenau' },
    { lat: -27.5954, lng: -48.548, description: 'São José' },
    { lat: -30.0346, lng: -51.2177, description: 'Porto Alegre' }
];

// Añadir los pines al mapa
locations.forEach(function(location) {
    L.marker([location.lat, location.lng])
        .addTo(map)
        .bindPopup(location.description);
});

    // Limitar la vista a Brasil
    map.setMaxBounds(bounds);

    // Permitir scroll dentro del mapa solo cuando se haga clic en él
    map.on('click', function () {
        map.scrollWheelZoom.enable();  // Habilitar el zoom con la rueda solo al hacer clic
    });

    // Desactivar el zoom con la rueda al salir del mapa
    map.on('mouseout', function () {
        map.scrollWheelZoom.disable();  // Desactivar el zoom con la rueda al salir del área
    });
});
