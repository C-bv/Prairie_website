// Initialize and add the map
function initMap() {
    // The location of Flo's Bar
    const flo = { lat: 33.80552769780574, lng: -117.91897141326058 };
    // The map, centered at flo
    const map = new google.maps.Map(document.getElementById("map"), {
      zoom: 15,
      center: flo,
    });
    // The marker, positioned at flo
    const marker = new google.maps.Marker({
      position: flo,
      map: map,
    });
  }