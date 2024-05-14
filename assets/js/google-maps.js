function initMap() {
    // Latitude and Longitude (converted values)
    var myLatLng = {lat: 11.238556, lng: 76.996611};
  
    var map = new google.maps.Map(document.getElementById('google-maps'), {
      zoom: 17,
      center: myLatLng
    });
  
    var marker = new google.maps.Marker({
      position: myLatLng,
      map: map,
      title: 'My Address' 
    });
  }
