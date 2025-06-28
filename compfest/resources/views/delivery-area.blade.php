<x-layout>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delivery Coverage Expansion</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
          integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY="
          crossorigin=""/>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');
        
        body { 
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            margin: 0;
            padding: 0;
            font-family: 'Inter', sans-serif;
            min-height: 100vh;
        }
        
        .glass-morphism {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            box-shadow: 0 25px 45px rgba(0, 0, 0, 0.1);
        }
        
        #map-container {
            height: 600px;
            width: 100%;
            position: relative;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 30px 60px rgba(0, 0, 0, 0.3);
        }
        
        #map {
            height: 100%;
            width: 100%;
            background: linear-gradient(45deg, #1e3c72, #2a5298);
            z-index: 1;
            filter: saturate(1.2) contrast(1.1);
        }
        
        .custom-marker {
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: bold;
            border: 3px solid rgba(255, 255, 255, 0.9);
            box-shadow: 0 8px 25px rgba(0,0,0,0.4);
            position: relative;
            overflow: visible;
        }
        
        .hq-marker::before {
            content: '';
            position: absolute;
            top: -10px;
            left: -10px;
            right: -10px;
            bottom: -10px;
            border-radius: 50%;
            background: linear-gradient(135deg, #ff6b6b, #ee5a24);
            opacity: 0.3;
            animation: ripple 2s infinite;
        }
        
        .city-marker {
            background: linear-gradient(135deg, #00d2ff, #3a7bd5);
            border-radius: 50%;
            width: 32px;
            height: 32px;
            font-size: 12px;
            animation: bounce-in 0.8s cubic-bezier(0.68, -0.55, 0.265, 1.55);
            position: relative;
        }
        
        .city-marker::after {
            content: '';
            position: absolute;
            top: -5px;
            left: -5px;
            right: -5px;
            bottom: -5px;
            border: 2px solid rgba(0, 210, 255, 0.4);
            border-radius: 50%;
            animation: expand-ring 1.5s infinite;
        }
        
        .major-city-marker {
            background: rgba(255, 255, 255, 0.8);
            border: 2px solid #a78bfa;
            border-radius: 50%;
            width: 8px;
            height: 8px;
            opacity: 0.7;
            animation: gentle-pulse 4s infinite ease-in-out;
        }
        
        .route-line {
            stroke: url(#gradient);
            stroke-width: 4;
            stroke-opacity: 1;
            stroke-linecap: round;
            stroke-dasharray: 0;
            filter: drop-shadow(0 0 8px rgba(59, 130, 246, 0.6));
            animation: draw-line 2s ease-in-out forwards;
        }
        
        .plane-icon {
            font-size: 24px;
            animation: fly 0.5s ease-in-out infinite alternate;
            filter: drop-shadow(0 4px 8px rgba(0,0,0,0.3));
            transition: all 0.1s ease;
        }
        
        .year-label {
            position: absolute;
            background: linear-gradient(135deg, rgba(255, 255, 255, 0.95), rgba(255, 255, 255, 0.85));
            backdrop-filter: blur(15px);
            padding: 12px 24px;
            border-radius: 25px;
            font-weight: 700;
            font-size: 16px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
            z-index: 1000;
            top: 20px;
            left: 50%;
            transform: translateX(-50%) scale(0);
            animation: pop-in 0.6s cubic-bezier(0.68, -0.55, 0.265, 1.55) forwards;
            color: #2d3748;
            border: 1px solid rgba(255, 255, 255, 0.3);
        }
        
        .legend {
            position: absolute;
            bottom: 20px;
            right: 20px;
            z-index: 1000;
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(20px);
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0 15px 35px rgba(0,0,0,0.2);
            font-size: 13px;
            border: 1px solid rgba(255, 255, 255, 0.2);
            color: white;
            font-weight: 500;
        }
        
        .legend-item {
            display: flex;
            align-items: center;
            margin: 8px 0;
            transition: transform 0.2s ease;
        }
        
        .legend-item:hover {
            transform: translateX(5px);
        }
        
        .legend-color {
            width: 16px;
            height: 16px;
            margin-right: 10px;
            border-radius: 50%;
            border: 2px solid rgba(255, 255, 255, 0.3);
            box-shadow: 0 4px 8px rgba(0,0,0,0.2);
        }
        
        .control-panel {
            position: absolute;
            top: 20px;
            left: 20px;
            z-index: 1000;
            display: flex;
            gap: 10px;
        }
        
        .control-btn {
            background: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(15px);
            border: 1px solid rgba(255, 255, 255, 0.3);
            padding: 10px 15px;
            border-radius: 12px;
            color: white;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            font-size: 12px;
        }
        
        .control-btn:hover {
            background: rgba(255, 255, 255, 0.3);
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(0,0,0,0.2);
        }
        
        .arrival-effect {
            border-radius: 50%;
            background: radial-gradient(circle, rgba(0, 210, 255, 0.6) 0%, transparent 70%);
        }
        
        .stats-panel {
            position: absolute;
            bottom: 20px;
            left: 20px;
            z-index: 1000;
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(20px);
            padding: 15px 20px;
            border-radius: 12px;
            color: white;
            font-weight: 500;
            font-size: 14px;
            border: 1px solid rgba(255, 255, 255, 0.2);
            min-width: 200px;
        }
        
        .progress-bar {
            position: absolute;
            bottom: 0;
            left: 0;
            height: 4px;
            background: linear-gradient(90deg, #00d2ff, #3a7bd5);
            border-radius: 2px;
            transition: width 0.3s ease;
            box-shadow: 0 0 10px rgba(0, 210, 255, 0.6);
        }
        
        @keyframes pulse-hq {
            0%, 100% { 
                transform: scale(1); 
                box-shadow: 0 0 0 0 rgba(255, 107, 107, 0.7);
            }
            50% { 
                transform: scale(1.1); 
                box-shadow: 0 0 0 20px rgba(255, 107, 107, 0);
            }
        }
        
        @keyframes ripple {
            0% { transform: scale(0.8); opacity: 1; }
            100% { transform: scale(2.4); opacity: 0; }
        }
        
        @keyframes bounce-in {
            0% { transform: scale(0) rotate(0deg); opacity: 0; }
            50% { transform: scale(1.3) rotate(180deg); opacity: 0.8; }
            100% { transform: scale(1) rotate(360deg); opacity: 1; }
        }
        
        @keyframes expand-ring {
            0% { transform: scale(1); opacity: 0.8; }
            100% { transform: scale(1.5); opacity: 0; }
        }
        
        @keyframes gentle-pulse {
            0%, 100% { transform: scale(1); opacity: 0.6; }
            50% { transform: scale(1.2); opacity: 0.9; }
        }
        
        @keyframes draw-line {
            from { stroke-dasharray: 1000; stroke-dashoffset: 1000; }
            to { stroke-dasharray: 1000; stroke-dashoffset: 0; }
        }
        
        @keyframes fly {
            0% { transform: translateY(0px); }
            100% { transform: translateY(-3px); }
        }
        
        @keyframes pop-in {
            0% { transform: translateX(-50%) scale(0) rotate(-10deg); opacity: 0; }
            100% { transform: translateX(-50%) scale(1) rotate(0deg); opacity: 1; }
        }
        
        .leaflet-container {
            background: linear-gradient(45deg, #1e3c72, #2a5298) !important;
        }
        
        .leaflet-tile {
            filter: saturate(1.3) brightness(0.9) contrast(1.2);
        }
        
        .connection-beam {
            position: absolute;
            height: 2px;
            background: linear-gradient(90deg, transparent, #00d2ff, transparent);
            transform-origin: left center;
            opacity: 0;
            animation: beam-flash 1s ease-in-out;
        }
        
        @keyframes beam-flash {
            0% { opacity: 0; width: 0%; }
            50% { opacity: 1; width: 100%; }
            100% { opacity: 0; width: 100%; }
        }
        
        .particle {
            position: absolute;
            width: 4px;
            height: 4px;
            background: #00d2ff;
            border-radius: 50%;
            animation: particle-float 3s infinite ease-in-out;
        }
        
        @keyframes particle-float {
            0%, 100% { transform: translateY(0px); opacity: 0.8; }
            50% { transform: translateY(-20px); opacity: 0.3; }
        }
    </style>
</head>
<body>
    <div class="min-h-screen py-8 px-4">
        <div class="container mx-auto max-w-7xl">
            <h1 class="text-5xl font-bold text-center mb-12 text-white drop-shadow-lg">
                Delivery Coverage Expansion
            </h1>
            
            <div class="glass-morphism rounded-3xl p-8 mb-8">
                <div id="map-container">
                    <div class="control-panel">
                        <button id="play-btn" class="control-btn">▶ Play</button>
                        <button id="pause-btn" class="control-btn">⏸ Pause</button>
                        <button id="reset-btn" class="control-btn">🔄 Reset</button>
                        <button id="speed-btn" class="control-btn">2x Speed</button>
                    </div>
                    
                    <div id="year-display" class="year-label" style="display: none;">
                        2015 - Starting from Malang
                    </div>
                    
                    <div class="stats-panel">
                        <div id="cities-connected">Cities Connected: 0</div>
                        <div id="years-elapsed">Years Elapsed: 0</div>
                        <div id="coverage-area">Coverage Area: Indonesia</div>
                        <div class="progress-bar" id="progress-bar" style="width: 0%"></div>
                    </div>
                    
                    <div class="legend">
                        <div class="legend-item">
                            <div class="legend-color" style="background: linear-gradient(135deg, #ff6b6b, #ee5a24);"></div>
                            <span>Headquarters</span>
                        </div>
                        <div class="legend-item">
                            <div class="legend-color" style="background: linear-gradient(135deg, #00d2ff, #3a7bd5);"></div>
                            <span>Expansion Cities</span>
                        </div>
                        <div class="legend-item">
                            <div class="legend-color" style="background: rgba(255, 255, 255, 0.8);"></div>
                            <span>Major Cities</span>
                        </div>
                    </div>
                    
                    <svg style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; pointer-events: none; z-index: 500;">
                        <defs>
                            <linearGradient id="gradient" x1="0%" y1="0%" x2="100%" y2="0%">
                                <stop offset="0%" style="stop-color:#00d2ff;stop-opacity:0" />
                                <stop offset="50%" style="stop-color:#00d2ff;stop-opacity:1" />
                                <stop offset="100%" style="stop-color:#3a7bd5;stop-opacity:0" />
                            </linearGradient>
                        </defs>
                    </svg>
                    
                    <div id="map"></div>
                    <div id="map-error" class="map-error"></div>
                </div>
                
                <div class="mt-6 text-white text-center">
                    <p class="text-lg mb-2">Our delivery network is expanding across Indonesia</p>
                    <p class="text-sm text-blue-200">Interactive animation shows our expansion from Malang since 2015</p>
                    <div id="animation-status" class="text-sm text-green-300 mt-3 font-medium">Loading map...</div>
                </div>
            </div>

            <div class="text-center">
                <button onclick="window.location.href='delivery'" class="inline-block bg-gradient-to-r from-blue-500 to-purple-600 hover:from-blue-600 hover:to-purple-700 text-white font-bold py-4 px-8 rounded-2xl transition duration-300 transform hover:scale-105 hover:shadow-2xl">
                    Track Your Shipment
                </button>
            </div>
        </div>
    </div>

    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
            integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
            crossorigin=""></script>
    
    <script>
        let map, malangMarker;
        let animationTimeout;
        let currentStep = 0;
        let isAnimating = false;
        let isPaused = false;
        let animationSpeed = 1;
        const routeLines = [];
        const destinationMarkers = [];
        const particles = [];
        let movingPlane;

        function initializeMap() {
            if (typeof L === 'undefined') {
                console.error('Leaflet library not loaded');
                showError('Error: Leaflet library failed to load. Please check your internet connection.');
                return false;
            }

            try {
                map = L.map('map', {
                    preferCanvas: true,
                    zoomControl: true,
                    scrollWheelZoom: true,
                    doubleClickZoom: true,
                    touchZoom: true,
                    attributionControl: true
                }).setView([-2.5489, 118.0149], 5);

                const tileLayer = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    attribution: '© <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
                    maxZoom: 18,
                    minZoom: 3,
                    detectRetina: true
                });

                tileLayer.on('tileerror', function(e) {
                    console.warn('Tile loading error for:', e.tile.src);
                });

                tileLayer.addTo(map);

                map.whenReady(function() {
                    console.log('Map is ready');
                    updateStatus('Map initialized successfully');
                    initializeMapElements();
                    setupControls();
                    
                    setTimeout(() => {
                        startAnimation();
                    }, 1000);
                });

                return true;
            } catch (error) {
                console.error('Map initialization error:', error);
                showError('Error: Failed to initialize map. ' + error.message);
                return false;
            }
        }

        function initializeMapElements() {
            const malang = [-7.9666, 112.6326];
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
            
            window.destinations = destinations;
            window.malang = malang;

            malangMarker = L.marker(malang, {
                icon: L.divIcon({
                    className: 'custom-marker hq-marker',
                    html: 'HQ',
                    iconSize: [40, 40],
                    iconAnchor: [20, 20]
                })
            }).addTo(map);

            malangMarker.bindPopup("<b>🏢 Our Headquarters - Malang</b><br>🚀 Starting point of our expansion in 2015<br>📍 The heart of our operations");

            const majorCities = [
                { name: "Yogyakarta", coords: [-7.7956, 110.3695] },
                { name: "Semarang", coords: [-6.9667, 110.4167] },
                { name: "Palembang", coords: [-2.9761, 104.7754] },
                { name: "Padang", coords: [-0.9471, 100.4172] }
            ];

            majorCities.forEach(city => {
                const marker = L.circleMarker(city.coords, {
                    radius: 4,
                    fillColor: 'rgba(255, 255, 255, 0.8)',
                    color: '#a78bfa',
                    weight: 2,
                    opacity: 0.8,
                    fillOpacity: 0.7
                }).addTo(map);
                
                marker.bindPopup(`<b>🏙️ ${city.name}</b><br>📍 Major City`);
                
                // Add subtle particle effects around major cities
                createParticles(city.coords, 3);
            });

            console.log('Map elements initialized');
        }

        function setupControls() {
            document.getElementById('play-btn').addEventListener('click', () => {
                if (!isAnimating) {
                    startAnimation();
                } else if (isPaused) {
                    resumeAnimation();
                }
            });

            document.getElementById('pause-btn').addEventListener('click', () => {
                pauseAnimation();
            });

            document.getElementById('reset-btn').addEventListener('click', () => {
                resetAnimation();
            });

            document.getElementById('speed-btn').addEventListener('click', (e) => {
                if (animationSpeed === 1) {
                    animationSpeed = 2;
                    e.target.textContent = '1x Speed';
                } else {
                    animationSpeed = 1;
                    e.target.textContent = '2x Speed';
                }
            });
        }

        function startAnimation() {
            if (isAnimating && !isPaused) return;
            
            if (!isPaused) {
                resetAnimation();
            }
            
            isAnimating = true;
            isPaused = false;
            
            const yearDisplay = document.getElementById('year-display');
            yearDisplay.style.display = 'block';
            yearDisplay.textContent = '2015 - Starting from Malang 🚀';
            
            updateStatus('🎬 Animation started...');
            updateStats();
            
            setTimeout(() => {
                animateNextStep();
            }, 2000 / animationSpeed);
        }

        function pauseAnimation() {
            isPaused = true;
            clearTimeout(animationTimeout);
            updateStatus('⏸️ Animation paused');
        }

        function resumeAnimation() {
            if (!isPaused) return;
            isPaused = false;
            updateStatus('▶️ Animation resumed');
            animateNextStep();
        }

        function animateNextStep() {
            if (isPaused) return;
            
            if (currentStep >= window.destinations.length) {
                isAnimating = false;
                updateStatus('🎉 Expansion complete! All cities connected.');
                
                if (movingPlane && map.hasLayer(movingPlane)) {
                    map.removeLayer(movingPlane);
                }
                
                // Final celebration effect
                createCelebrationEffect();
                
                if (destinationMarkers.length > 0) {
                    const group = new L.featureGroup([malangMarker, ...destinationMarkers]);
                    map.fitBounds(group.getBounds().pad(0.1));
                }
                return;
            }
            
            const dest = window.destinations[currentStep];
            const yearDisplay = document.getElementById('year-display');
            yearDisplay.textContent = `${dest.year} - Expanding to ${dest.name} ✈️`;
            
            updateStatus(`🌟 Expanding to ${dest.name} (${dest.year})`);
            updateStats();
            
            // Create animated route line
            const route = L.polyline([window.malang, dest.coords], {
                color: '#00d2ff',
                weight: 4,
                opacity: 1,
                className: 'route-line'
            }).addTo(map);
            
            routeLines.push(route);
            
            // Enhanced plane animation
            const planeIcon = L.divIcon({
                className: 'plane-icon',
                html: '✈️',
                iconSize: [24, 24],
                iconAnchor: [12, 12]
            });
            
            const planeStart = window.malang;
            const planeEnd = dest.coords;
            const steps = 60;
            let currentStepCount = 0;
            
            if (movingPlane && map.hasLayer(movingPlane)) {
                map.removeLayer(movingPlane);
            }
            
            movingPlane = L.marker(planeStart, {
                icon: planeIcon,
                zIndexOffset: 1000
            }).addTo(map);
            
            const planeInterval = setInterval(() => {
                if (isPaused) return;
                
                if (currentStepCount >= steps) {
                    clearInterval(planeInterval);
                    addDestinationMarker(dest);
                    
                    animationTimeout = setTimeout(() => {
                        currentStep++;
                        animateNextStep();
                    }, 1500 / animationSpeed);
                    return;
                }
                
                const ratio = currentStepCount / steps;
                const lat = planeStart[0] + (planeEnd[0] - planeStart[0]) * ratio;
                const lng = planeStart[1] + (planeEnd[1] - planeStart[1]) * ratio;
                
                movingPlane.setLatLng([lat, lng]);
                
                // Smooth rotation
                const angle = Math.atan2(planeEnd[1] - planeStart[1], planeEnd[0] - planeStart[0]) * 180 / Math.PI + 90;
                const element = movingPlane.getElement();
                if (element) {
                    element.style.transform = `rotate(${angle}deg) scale(${1 + Math.sin(currentStepCount * 0.2) * 0.1})`;
                }
                
                // Add trail particles
                if (currentStepCount % 5 === 0) {
                    createTrailParticle([lat, lng]);
                }
                
                currentStepCount++;
            }, 50 / animationSpeed);
        }

        function addDestinationMarker(dest) {
            // Create arrival effect first
            const arrivalRadius = 80000;
            const arrivalCircle = L.circle(dest.coords, {
                color: '#00d2ff',
                fillColor: '#00d2ff',
                fillOpacity: 0.4,
                radius: arrivalRadius,
                className: 'arrival-effect'
            }).addTo(map);
            
            // Animate arrival effect
            let scale = 0;
            const arrivalAnimation = setInterval(() => {
                scale += 0.1;
                arrivalCircle.setRadius(arrivalRadius * scale);
                arrivalCircle.setStyle({
                    fillOpacity: 0.4 * (1 - scale),
                    opacity: 0.8 * (1 - scale)
                });
                
                if (scale >= 1) {
                    clearInterval(arrivalAnimation);
                    map.removeLayer(arrivalCircle);
                }
            }, 50);
            
            // Add destination marker with delay
            setTimeout(() => {
                const destMarker = L.marker(dest.coords, {
                    icon: L.divIcon({
                        className: 'custom-marker city-marker',
                        html: `${currentStep + 1}`,
                        iconSize: [32, 32],
                        iconAnchor: [16, 16]
                    })
                }).addTo(map);
                
                destMarker.bindPopup(`<b>🏢 ${dest.name}</b><br>📅 Service started in ${dest.year}<br>🚚 Delivery hub #${currentStep + 1}`);
                destinationMarkers.push(destMarker);
                
                // Create celebration particles
                createParticles(dest.coords, 5);
                
                // Adjust view to include all markers
                if (destinationMarkers.length > 0) {
                    const group = new L.featureGroup([malangMarker, ...destinationMarkers]);
                    map.fitBounds(group.getBounds().pad(0.1));
                }
            }, 300);
        }

        function createParticles(coords, count) {
            for (let i = 0; i < count; i++) {
                setTimeout(() => {
                    const particle = L.circleMarker([
                        coords[0] + (Math.random() - 0.5) * 0.1,
                        coords[1] + (Math.random() - 0.5) * 0.1
                    ], {
                        radius: 3,
                        fillColor: '#00d2ff',
                        color: '#ffffff',
                        weight: 1,
                        opacity: 0.8,
                        fillOpacity: 0.6
                    }).addTo(map);
                    
                    particles.push(particle);
                    
                    setTimeout(() => {
                        if (map.hasLayer(particle)) {
                            map.removeLayer(particle);
                        }
                        const index = particles.indexOf(particle);
                        if (index > -1) particles.splice(index, 1);
                    }, 3000);
                }, i * 200);
            }
        }

        function createTrailParticle(coords) {
            const trail = L.circleMarker(coords, {
                radius: 2,
                fillColor: '#3a7bd5',
                color: '#00d2ff',
                weight: 1,
                opacity: 0.8,
                fillOpacity: 0.6
            }).addTo(map);
            
            setTimeout(() => {
                if (map.hasLayer(trail)) {
                    map.removeLayer(trail);
                }
            }, 1000);
        }

        function createCelebrationEffect() {
            // Create fireworks effect at headquarters
            for (let i = 0; i < 8; i++) {
                setTimeout(() => {
                    const firework = L.circle(window.malang, {
                        color: `hsl(${Math.random() * 360}, 70%, 60%)`,
                        fillColor: `hsl(${Math.random() * 360}, 70%, 60%)`,
                        fillOpacity: 0.5,
                        radius: 30000 + Math.random() * 50000
                    }).addTo(map);
                    
                    let scale = 0;
                    const fireworkAnimation = setInterval(() => {
                        scale += 0.1;
                        firework.setRadius((30000 + Math.random() * 50000) * scale);
                        firework.setStyle({
                            fillOpacity: 0.5 * (1 - scale),
                            opacity: 0.8 * (1 - scale)
                        });
                        
                        if (scale >= 1) {
                            clearInterval(fireworkAnimation);
                            map.removeLayer(firework);
                        }
                    }, 100);
                }, i * 200);
            }
        }

        function resetAnimation() {
            clearTimeout(animationTimeout);
            isAnimating = false;
            isPaused = false;
            
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
            
            // Remove all particles
            particles.forEach(particle => {
                if (map.hasLayer(particle)) {
                    map.removeLayer(particle);
                }
            });
            particles.length = 0;
            
            // Remove plane if it exists
            if (movingPlane && map.hasLayer(movingPlane)) {
                map.removeLayer(movingPlane);
            }
            
            // Reset map view
            map.setView([-2.5489, 118.0149], 5);
            currentStep = 0;
            
            // Hide year display
            document.getElementById('year-display').style.display = 'none';
            
            updateStatus('🔄 Ready to start animation');
            updateStats();
        }

        function updateStats() {
            document.getElementById('cities-connected').textContent = `Cities Connected: ${currentStep}`;
            document.getElementById('years-elapsed').textContent = `Years Elapsed: ${currentStep}`;
            
            const progressPercent = (currentStep / window.destinations.length) * 100;
            document.getElementById('progress-bar').style.width = `${progressPercent}%`;
        }

        function updateStatus(message) {
            const statusElement = document.getElementById('animation-status');
            if (statusElement) {
                statusElement.textContent = message;
            }
        }

        function showError(message) {
            const errorElement = document.getElementById('map-error');
            if (errorElement) {
                errorElement.style.display = 'block';
                errorElement.innerHTML = message;
            }
            updateStatus('❌ Error loading map');
        }

        // Initialize when DOM is ready
        document.addEventListener('DOMContentLoaded', function() {
            updateStatus('🚀 Initializing map...');
            
            setTimeout(() => {
                if (initializeMap()) {
                    // Handle visibility change
                    document.addEventListener('visibilitychange', function() {
                        if (map && !document.hidden && !isAnimating) {
                            setTimeout(() => {
                                map.invalidateSize();
                                if (currentStep > 0 && currentStep < window.destinations.length) {
                                    startAnimation();
                                }
                            }, 100);
                        }
                    });

                    // Handle window resize
                    window.addEventListener('resize', function() {
                        if (map) {
                            setTimeout(() => {
                                map.invalidateSize();
                            }, 100);
                        }
                    });

                    // Fix map size after everything is loaded
                    setTimeout(() => {
                        if (map) {
                            map.invalidateSize();
                        }
                    }, 500);
                    
                    // Add keyboard shortcuts
                    document.addEventListener('keydown', function(e) {
                        switch(e.key) {
                            case ' ':
                                e.preventDefault();
                                if (!isAnimating) {
                                    startAnimation();
                                } else if (isPaused) {
                                    resumeAnimation();
                                } else {
                                    pauseAnimation();
                                }
                                break;
                            case 'r':
                                e.preventDefault();
                                resetAnimation();
                                break;
                            case 's':
                                e.preventDefault();
                                const speedBtn = document.getElementById('speed-btn');
                                speedBtn.click();
                                break;
                        }
                    });
                }
            }, 100);
        });
    </script>
</body>
</html>
</x-layout>