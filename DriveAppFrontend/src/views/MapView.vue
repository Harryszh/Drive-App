<template>
    <div>
      <div>
        <label for="startAddress">Startadresse:</label>
        <input 
          id="startAddress" 
          v-model="startAddress" 
          placeholder="Startadresse eingeben" 
          @blur="updateStartAddress" 
        />
      </div>
      <div>
        <label for="endAddress">Zieladresse:</label>
        <input 
          id="endAddress" 
          v-model="endAddress" 
          placeholder="Zieladresse eingeben" 
          @blur="updateEndAddress" 
        />
      </div>
      <div id="map" style="height: 400px;"></div>
    </div>
  </template>
  
  <script>
  import L from 'leaflet';
  import 'leaflet/dist/leaflet.css';
  
  export default {
    name: 'MapView',
    data() {
      return {
        map: null,
        startMarker: null,
        endMarker: null,
        startAddress: '',
        endAddress: '',
      };
    },
    mounted() {
      this.initMap();
    },
    methods: {
      initMap() {
        this.map = L.map('map').setView([47.3769, 8.5417], 13); // Zürich Koordinaten
  
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
          maxZoom: 19,
          attribution: '© OpenStreetMap'
        }).addTo(this.map);
  
        // Event-Listener für Klicks auf die Karte
        this.map.on('click', this.onMapClick);
      },
      onMapClick(e) {
        const { lat, lng } = e.latlng;
  
        // Wenn kein Startmarker gesetzt ist, setze ihn
        if (!this.startMarker) {
          this.startMarker = L.marker([lat, lng]).addTo(this.map)
            .bindPopup('Startpunkt: ' + this.startAddress).openPopup();
          this.startAddress = this.startAddress || `Straße ${lat.toFixed(2)}, ${lng.toFixed(2)}`;
        } 
        // Wenn der Startmarker gesetzt ist, setze den Zielmarker
        else if (!this.endMarker) {
          this.endMarker = L.marker([lat, lng]).addTo(this.map)
            .bindPopup('Zielpunkt: ' + this.endAddress).openPopup();
          this.endAddress = this.endAddress || `Straße ${lat.toFixed(2)}, ${lng.toFixed(2)}`;
        }
      },
      updateStartAddress() {
        // Logic when input loses focus
      },
      updateEndAddress() {
        // Logic when input loses focus
      },
    },
  };
  </script>
  
  <style>
  #map { height: 400px; }
  div { margin-bottom: 10px; }
  label { margin-right: 10px; }
  </style>