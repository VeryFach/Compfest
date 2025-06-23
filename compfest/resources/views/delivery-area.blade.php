<x-layout>
    @push('styles')
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
            integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY="
            crossorigin=""/>
        <script src="https://cdn.tailwindcss.com"></script>
        <style>
            body { background-color: white; }
            #map-container {
                height: 500px;
                width: 100%;
                position: relative;
            }
            #map {
                height: 100%;
                width: 100%;
                background-color: #f8fafc;
                border-radius: 0.5rem;
                border: 1px solid #e5e7eb;
            }
            .custom-marker {
                display: flex;
                align-items: center;
                justify-content: center;
                color: white;
                font-weight: bold;
                border: 2px solid white;
                box-shadow: 0 2px 4px rgba(0,0,0,0.3);
            }
            .hq-marker {
                background-color: #DC2626;
                border-radius: 50%;
                width: 25px;
                height: 25px;
                font-size: 10px;
            }
            .city-marker {
                background-color: #10B981;
                border-radius: 50%;
                width: 20px;
                height: 20px;
                font-size: 8px;
                animation: pulse 1.5s infinite;
            }
            .major-city-marker {
                background-color: #D1D5DB;
                border: 1px solid #9CA3AF;
                border-radius: 50%;
                width: 6px;
                height: 6px;
                opacity: 0.8;
            }
            .route-line {
                stroke: #3B82F6;
                stroke-width: 3;
                stroke-opacity: 0.8;
                stroke-dasharray: 10, 5;
            }
            @keyframes pulse {
                0% { transform: scale(1); opacity: 1; }
                50% { transform: scale(1.3); opacity: 0.7; }
                100% { transform: scale(1); opacity: 1; }
            }
            .map-error {
                color: red;
                padding: 10px;
                border: 1px solid red;
                margin-top: 10px;
                display: none;
            }
            .map-controls {
                position: absolute;
                top: 10px;
                left: 10px;
                z-index: 1000;
                background: white;
                padding: 10px;
                border-radius: 5px;
                box-shadow: 0 2px 4px rgba(0,0,0,0.3);
            }
            .control-button {
                background: #3B82F6;
                color: white;
                border: none;
                padding: 5px 10px;
                margin: 2px;
                border-radius: 3px;
                cursor: pointer;
                font-size: 12px;
            }
            .control-button:hover {
                background: #2563EB;
            }
            .legend {
                position: absolute;
                bottom: 10px;
                right: 10px;
                z-index: 1000;
                background: rgba(255, 255, 255, 0.9);
                padding: 10px;
                border-radius: 5px;
                box-shadow: 0 2px 4px rgba(0,0,0,0.3);
                font-size: 12px;
            }
            .legend-item {
                display: flex;
                align-items: center;
                margin: 2px 0;
            }
            .legend-color {
                width: 12px;
                height: 12px;
                margin-right: 5px;
                border-radius: 50%;
                border: 1px solid white;
            }
        </style>
    @endpush

    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold text-center mb-8 text-gray-800">Delivery Coverage Expansion</h1>
        
        <div class="bg-white rounded-lg shadow-lg p-6 mb-8 border border-gray-200">
            <div id="map-container">
                <div class="map-controls">
                    <button id="start-animation" class="control-button">Start Animation</button>
                    <button id="reset-animation" class="control-button">Reset</button>
                    <button id="show-all" class="control-button">Show All</button>
                </div>
                <div class="legend">
                    <div class="legend-item">
                        <div class="legend-color" style="background-color: #DC2626;"></div>
                        <span>Headquarters</span>
                    </div>
                    <div class="legend-item">
                        <div class="legend-color" style="background-color: #10B981;"></div>
                        <span>Expansion Cities</span>
                    </div>
                    <div class="legend-item">
                        <div class="legend-color" style="background-color: #D1D5DB;"></div>
                        <span>Major Cities</span>
                    </div>
                </div>
                <div id="map"></div>
                <div id="map-error" class="map-error"></div>
            </div>
            <div class="mt-4 text-gray-600 text-center">
                <p>Our delivery network is expanding across Indonesia</p>
                <p class="text-sm text-blue-600 mt-2">Animation shows our expansion from Malang since 2015</p>
                <div id="animation-status" class="text-sm text-green-600 mt-2"></div>
            </div>
        </div>

        <div class="text-center">
            <button onclick="window.location.href='{{ route('delivery')}}'" class="inline-block bg-green-600 hover:bg-green-700 text-white font-bold py-3 px-6 rounded-lg transition duration-300 transform hover:scale-105">
                Track Your Shipment
            </button>
        </div>
    </div>

    @push('scripts')
        <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
                integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
                crossorigin=""></script>
        
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                // Debugging: Check if Leaflet is loaded
                if (typeof L === 'undefined') {
                    console.error('Leaflet library not loaded');
                    document.getElementById('map-error').style.display = 'block';
                    document.getElementById('map-error').innerHTML = 
                        'Error: Leaflet library failed to load. Please check your internet connection.';
                    return;
                }

                let map, malangMarker;
                let animationInterval;
                let currentStep = 0;
                let isAnimating = false;
                const routeLines = [];
                const destinationMarkers = [];

                try {
                    // Initialize map with better view of Indonesia
                    map = L.map('map', {
                        preferCanvas: true,
                        zoomControl: true,
                        scrollWheelZoom: true,
                        doubleClickZoom: true,
                        touchZoom: true
                    }).setView([-2.5489, 118.0149], 5);

                    // Add tile layer with multiple fallback options
                    const tileLayer = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                        attribution: '© <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
                        maxZoom: 18,
                        minZoom: 3,
                        detectRetina: true,
                        errorTileUrl: 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAADUlEQVR42mNkYPhfDwAChwGA60e6kgAAAABJRU5ErkJggg=='
                    });

                    // Add alternative tile layer in case the primary fails
                    tileLayer.on('tileerror', function(e) {
                        console.warn('Tile loading error for:', e.tile.src);
                    });

                    tileLayer.addTo(map);

                    // Wait for map to fully load
                    map.whenReady(function() {
                        console.log('Map is ready');
                        
                        // Initialize all elements
                        initializeMapElements();
                        
                        // Start animation after a brief delay
                        setTimeout(() => {
                            startAnimation();
                        }, 1000);
                    });

                    // Our headquarters in Malang
                    const malang = [-7.9666, 112.6326];

                    // Expansion destinations with years
                    const destinations = [
                        { name: "Jakarta", coords: [-6.2088, 106.8456], year: 2016 },
                        { name: "Surabaya", coords: [-7.2575, 112.7521], year: 2017 },
                        { name: "Medan", coords: [3.5952, 98.6722], year: 2018 },
                        { name: "Bandung", coords: [-6.9175, 107.6191], year: 2019 },
                        { name: "Denpasar", coords: [-8.6705, 115.2126], year: 2020 },
                        { name: "Makassar", coords: [-5.1477, 119.4327], year: 2021 },
                        { name: "Balikpapan", coords: [-1.2680, 116.8289], year: 2022 },
                        { name: "Manado", coords: [1.4748, 124.8426], year: 2023 }
                    ];

                    // Other major cities in Indonesia
                    const majorCities = [
                        { name: "Yogyakarta", coords: [-7.7956, 110.3695] },
                        { name: "Semarang", coords: [-6.9667, 110.4167] },
                        { name: "Palembang", coords: [-2.9761, 104.7754] },
                        { name: "Padang", coords: [-0.9471, 100.4172] }
                    ];

                    function initializeMapElements() {
                        // Add headquarters marker
                        malangMarker = L.marker(malang, {
                            icon: L.divIcon({
                                className: 'custom-marker hq-marker',
                                html: 'HQ',
                                iconSize: [25, 25],
                                iconAnchor: [12, 12]
                            })
                        }).addTo(map);

                        malangMarker.bindPopup("<b>Our Headquarters - Malang</b><br>Starting point of our expansion");

                        // Add major cities as gray markers
                        majorCities.forEach(city => {
                            L.circleMarker(city.coords, {
                                radius: 3,
                                fillColor: '#D1D5DB',
                                color: '#9CA3AF',
                                weight: 1,
                                opacity: 0.8,
                                fillOpacity: 0.6
                            }).addTo(map).bindPopup(`<b>${city.name}</b><br>Major City`);
                        });

                        console.log('Map elements initialized');
                    }

                    // Function to animate the expansion
                    function startAnimation() {
                        if (isAnimating) return;
                        
                        resetAnimation();
                        isAnimating = true;
                        currentStep = 0;
                        
                        updateStatus('Animation started...');
                        
                        animationInterval = setInterval(() => {
                            if (currentStep < destinations.length) {
                                const dest = destinations[currentStep];
                                
                                updateStatus(`Expanding to ${dest.name} (${dest.year})`);
                                
                                // Draw the route line with animation effect
                                const route = L.polyline([malang, dest.coords], {
                                    color: '#3B82F6',
                                    weight: 3,
                                    opacity: 0.8,
                                    dashArray: '10, 5'
                                }).addTo(map);
                                
                                routeLines.push(route);
                                
                                // Add destination marker after a short delay
                                setTimeout(() => {
                                    const destMarker = L.marker(dest.coords, {
                                        icon: L.divIcon({
                                            className: 'custom-marker city-marker',
                                            html: `${currentStep + 1}`,
                                            iconSize: [20, 20],
                                            iconAnchor: [10, 10]
                                        })
                                    }).addTo(map);
                                    
                                    destMarker.bindPopup(`<b>${dest.name}</b><br>Reached in ${dest.year}`);
                                    destinationMarkers.push(destMarker);
                                    
                                    // Adjust view to include all markers
                                    if (destinationMarkers.length > 0) {
                                        const group = new L.featureGroup([malangMarker, ...destinationMarkers]);
                                        map.fitBounds(group.getBounds().pad(0.1));
                                    }
                                }, 500);
                                
                                currentStep++;
                            } else {
                                // Animation complete
                                clearInterval(animationInterval);
                                isAnimating = false;
                                updateStatus('Expansion complete! All cities connected.');
                                
                                // Final adjustment of view
                                if (destinationMarkers.length > 0) {
                                    const group = new L.featureGroup([malangMarker, ...destinationMarkers]);
                                    map.fitBounds(group.getBounds().pad(0.1));
                                }
                            }
                        }, 1500);
                    }

                    // Function to reset the animation
                    function resetAnimation() {
                        clearInterval(animationInterval);
                        isAnimating = false;
                        
                        // Remove all route lines
                        routeLines.forEach(line => {
                            if (map.hasLayer(line)) {
                                map.removeLayer(line);
                            }
                        });
                        routeLines.length = 0;
                        
                        // Remove all destination markers
                        destinationMarkers.forEach(marker => {
                            if (map.hasLayer(marker)) {
                                map.removeLayer(marker);
                            }
                        });
                        destinationMarkers.length = 0;
                        
                        // Reset map view
                        map.setView([-2.5489, 118.0149], 5);
                        currentStep = 0;
                        updateStatus('Ready to start animation');
                    }

                    // Function to show all cities at once
                    function showAll() {
                        resetAnimation();
                        
                        destinations.forEach((dest, index) => {
                            // Add route line
                            const route = L.polyline([malang, dest.coords], {
                                color: '#3B82F6',
                                weight: 3,
                                opacity: 0.8,
                                dashArray: '10, 5'
                            }).addTo(map);
                            routeLines.push(route);
                            
                            // Add destination marker
                            const destMarker = L.marker(dest.coords, {
                                icon: L.divIcon({
                                    className: 'custom-marker city-marker',
                                    html: `${index + 1}`,
                                    iconSize: [20, 20],
                                    iconAnchor: [10, 10]
                                })
                            }).addTo(map);
                            
                            destMarker.bindPopup(`<b>${dest.name}</b><br>Reached in ${dest.year}`);
                            destinationMarkers.push(destMarker);
                        });
                        
                        // Fit bounds to show all markers
                        const group = new L.featureGroup([malangMarker, ...destinationMarkers]);
                        map.fitBounds(group.getBounds().pad(0.1));
                        updateStatus('Showing all expansion cities');
                    }

                    // Function to update status message
                    function updateStatus(message) {
                        const statusElement = document.getElementById('animation-status');
                        if (statusElement) {
                            statusElement.textContent = message;
                        }
                    }

                    // Control button event listeners
                    document.getElementById('start-animation').addEventListener('click', startAnimation);
                    document.getElementById('reset-animation').addEventListener('click', resetAnimation);
                    document.getElementById('show-all').addEventListener('click', showAll);

                    // Handle visibility change
                    document.addEventListener('visibilitychange', function() {
                        if (!document.hidden && !isAnimating) {
                            setTimeout(() => {
                                map.invalidateSize();
                            }, 100);
                        }
                    });

                    // Handle window resize
                    window.addEventListener('resize', function() {
                        setTimeout(() => {
                            map.invalidateSize();
                        }, 100);
                    });

                    // Fix map size after layout is fully loaded
                    setTimeout(() => {
                        map.invalidateSize();
                        updateStatus('Map loaded successfully');
                    }, 500);

                } catch (error) {
                    console.error('Map initialization error:', error);
                    document.getElementById('map-error').style.display = 'block';
                    document.getElementById('map-error').innerHTML =
                        'Error: Failed to initialize map. ' + error.message;
                }
            });
        </script>
    @endpush
</x-layout>