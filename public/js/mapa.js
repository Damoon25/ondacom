document.addEventListener("DOMContentLoaded", function () {
    // Verifica si la pantalla es móvil
    var isMobile = window.innerWidth <= 768;

    // Definir los límites del mapa ajustados para que solo se vea Brasil
    var bounds = [
        [-33.7684, -73.9828],  // Suroeste de Brasil
        [5.2718, -32.425]      // Noreste de Brasil
    ];

    // Inicializar el mapa centrado en Brasil con restricciones de zoom y límites ajustados
    var map = L.map('map', {
        maxBounds: bounds,
        maxBoundsViscosity: 1.0,
        zoomControl: true,
        minZoom: isMobile ? 4 : 5,  // Zoom mínimo diferente en mobile
        maxZoom: 10,
        scrollWheelZoom: false,  // Desactiva el zoom con la rueda del mouse por defecto
        dragging: !isMobile,     // Desactiva el arrastre en mobile
        tap: isMobile            // Desactiva el "tap" en mobile para evitar problemas de desplazamiento
    }).setView([-14.235, -51.9253], isMobile ? 4 : 5);  // Ajusta el zoom inicial en mobile a 4

    // Añadir capa de mapa (OpenStreetMap) y ajustar estilo para centrarse en Brasil
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '© OpenStreetMap contributors',
        noWrap: true  // Evitar que el mapa se repita (para centrarlo en Brasil)
    }).addTo(map);

    // Definir las ubicaciones con coordenadas y descripciones (con enlaces a Google Maps)
    var locations = [
        { lat: -3.1190, lng: -60.0217, description: '<a href="https://www.google.com/maps?q=-3.1190,-60.0217" target="_blank" class="popUpMap">Manaos</a>' },
        { lat: 0.0349, lng: -51.0694, description: '<a href="https://www.google.com/maps?q=0.0349,-51.0694" target="_blank" class="popUpMap">Macapá-AP</a>' },
        { lat: -1.4558, lng: -48.4902, description: '<a href="https://www.google.com/maps?q=-1.4558,-48.4902" target="_blank" class="popUpMap">Belém-PA</a>' },
        { lat: -2.5307, lng: -44.3068, description: '<a href="https://www.google.com/maps?q=-2.5307,-44.3068" target="_blank" class="popUpMap">São Luiz</a>' },
        { lat: -13.0325, lng: -56.0977, description: '<a href="https://www.google.com/maps?q=-13.0325,-56.0977" target="_blank" class="popUpMap">Lucas do Rio Verde-MT</a>' },
        { lat: -10.1847, lng: -48.3337, description: '<a href="https://www.google.com/maps?q=-10.1847,-48.3337" target="_blank" class="popUpMap">Palmas</a>' },
        { lat: -12.9714, lng: -38.5014, description: '<a href="https://www.google.com/maps?q=-12.9714,-38.5014" target="_blank" class="popUpMap">Bahía</a>' },
        { lat: -16.4731, lng: -54.6354, description: '<a href="https://www.google.com/maps?q=-16.4731,-54.6354" target="_blank" class="popUpMap">Rondonópolis</a>' },
        { lat: -26.3044, lng: -48.8487, description: '<a href="https://www.google.com/maps?q=-26.3044,-48.8487" target="_blank" class="popUpMap">Joinville</a>' },
        { lat: -16.7279, lng: -43.8601, description: '<a href="https://www.google.com/maps?q=-16.7279,-43.8601" target="_blank" class="popUpMap">Montes Claros</a>' },
        { lat: -15.7801, lng: -47.9292, description: '<a href="https://www.google.com/maps?q=-15.7801,-47.9292" target="_blank" class="popUpMap">Brasília-DF</a>' },
        { lat: -16.8237, lng: -49.2469, description: '<a href="https://www.google.com/maps?q=-16.8237,-49.2469" target="_blank" class="popUpMap">Aparecida de Goiânia</a>' },
        { lat: -17.7426, lng: -48.6196, description: '<a href="https://www.google.com/maps?q=-17.7426,-48.6196" target="_blank" class="popUpMap">Caldas Novas-GO</a>' },
        { lat: -17.7989, lng: -50.9238, description: '<a href="https://www.google.com/maps?q=-17.7989,-50.9238" target="_blank" class="popUpMap">Rio Verde-GO</a>' },
        { lat: -18.9146, lng: -48.2754, description: '<a href="https://www.google.com/maps?q=-18.9146,-48.2754" target="_blank" class="popUpMap">Uberlândia-MG</a>' },
        { lat: -19.9167, lng: -43.9345, description: '<a href="https://www.google.com/maps?q=-19.9167,-43.9345" target="_blank" class="popUpMap">Belo Horizonte</a>' },
        { lat: -20.121, lng: -40.3071, description: '<a href="https://www.google.com/maps?q=-20.121,-40.3071" target="_blank" class="popUpMap">Serra-ES</a>' },
        { lat: -23.420999, lng: -51.933055, description: '<a href="https://www.google.com/maps?q=-23.420999,-51.933055" target="_blank" class="popUpMap">Maringá</a>' },
        { lat: -24.9555, lng: -53.4552, description: '<a href="https://www.google.com/maps?q=-24.9555,-53.4552" target="_blank" class="popUpMap">Cascavel</a>' },
        { lat: -25.0945, lng: -50.1636, description: '<a href="https://www.google.com/maps?q=-25.0945,-50.1636" target="_blank" class="popUpMap">Ponta Grossa</a>' },
        { lat: -25.4295, lng: -49.2713, description: '<a href="https://www.google.com/maps?q=-25.4295,-49.2713" target="_blank" class="popUpMap">Curitiba</a>' },
        { lat: -23.5505, lng: -46.6333, description: '<a href="https://www.google.com/maps?q=-23.5505,-46.6333" target="_blank" class="popUpMap">São Paulo</a>' },
        { lat: -23.1017, lng: -46.8786, description: '<a href="https://www.google.com/maps?q=-23.1017,-46.8786" target="_blank" class="popUpMap">Cajamar-SP</a>' },
        { lat: -26.9194, lng: -49.0661, description: '<a href="https://www.google.com/maps?q=-26.9194,-49.0661" target="_blank" class="popUpMap">Blumenau</a>' },
        { lat: -27.5954, lng: -48.548, description: '<a href="https://www.google.com/maps?q=-27.5954,-48.548" target="_blank" class="popUpMap">São José</a>' },
        { lat: -30.0346, lng: -51.2177, description: '<a href="https://www.google.com/maps?q=-30.0346,-51.2177" target="_blank" class="popUpMap">Porto Alegre</a>' }
    ];

    // Añadir los pines al mapa
    locations.forEach(function (location) {
        L.marker([location.lat, location.lng])
            .addTo(map)
            .bindPopup(location.description);
    });

    // Limitar la vista a Brasil
    map.setMaxBounds(bounds);

    // Permitir scroll dentro del mapa solo cuando se haga clic en él (solo para desktop)
    if (!isMobile) {
        map.on('click', function () {
            map.scrollWheelZoom.enable();  // Habilitar el zoom con la rueda solo al hacer clic
        });

        // Desactivar el zoom con la rueda al salir del mapa
        map.on('mouseout', function () {
            map.scrollWheelZoom.disable();  // Desactivar el zoom con la rueda al salir del área
        });
    }

    
});
