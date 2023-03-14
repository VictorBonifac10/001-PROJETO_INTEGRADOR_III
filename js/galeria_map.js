// Initialize the map and assign it to a variable for later use
// there's a few ways to declare a VARIABLE in javascript.
// you might also see people declaring variables using `const` and `let`
var map = L.map("map", {
  // Set latitude and longitude of the map center (required)
  center: [-21.4106335, -48.5006591],
  // Set the initial zoom level, values 0-18, where 0 is most zoomed-out (required)
  zoom: 10,
});

// Create a Tile Layer and add it to the map
var tiles = new L.tileLayer(
  "https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png",
  {
    attribution:
      '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
    minZoom: "15",
  }
).addTo(map);

var marker = L.marker([-21.4106335, -48.5006591, 16], {
  draggable: true,
  title: "",
  opacity: 0.75,
});

marker
  .addTo(map)
  .bindPopup("<p1><b> Rodoviária Taquaritinga  </p1>")
  .openPopup();
