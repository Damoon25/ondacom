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
        { lat: -22.9068, lng: -43.1729, description: 'Rio de Janeiro' },
        { lat: -23.5505, lng: -46.6333, description: 'São Paulo' },
        { lat: -15.7801, lng: -47.9292, description: 'Brasilia' },
        { lat: -12.9714, lng: -38.5014, description: 'Salvador' },
        { lat: -19.9167, lng: -43.9345, description: 'Belo Horizonte' },
        { lat: -8.0476, lng: -34.8770, description: 'Recife' },
        { lat: -3.7172, lng: -38.5434, description: 'Fortaleza' },
        { lat: -16.6869, lng: -49.2648, description: 'Goiânia' },
        { lat: -20.4697, lng: -54.6201, description: 'Campo Grande' },
        { lat: -25.4295, lng: -49.2713, description: 'Curitiba' },
        { lat: -29.6842, lng: -53.8069, description: 'Santa Maria' },
        { lat: -15.6014, lng: -56.0979, description: 'Cuiabá' },
        { lat: -2.5307, lng: -44.3068, description: 'São Luís' },
        { lat: -22.2216, lng: -54.8063, description: 'Dourados' },
        { lat: -10.9472, lng: -37.0731, description: 'Aracaju' },
        { lat: -10.1847, lng: -48.3337, description: 'Palmas' },
        { lat: -3.1190, lng: -60.0217, description: 'Manaus' },
        { lat: -1.4558, lng: -48.4902, description: 'Belém' },
        { lat: -12.2581, lng: -55.7523, description: 'Sinop' },
        { lat: -5.7945, lng: -35.2110, description: 'Natal' },
        { lat: -8.0539, lng: -34.8811, description: 'Olinda' },
        { lat: -16.7279, lng: -43.8601, description: 'Montes Claros' }
    ];

    // Añadir los pines al mapa
    locations.forEach(function (location) {
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
