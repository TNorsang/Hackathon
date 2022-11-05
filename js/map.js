
// Initialize and add the map
function initMap(x = 0,y= 0){
  lats = x;
  longs = y;
  window.initMap = campMap;
  
}

function campMap(i=40.7127281,j=-74.0060152) {

    var lats=i;
    var longs=j;
    const area = { lat: lats, lng: longs};
    
    const map = new google.maps.Map(document.getElementById("map"), {
      zoom: 14,
      center: area,
    });
    // Marker
    const marker = new google.maps.Marker({
      position: area,
      map: map,
    });
  }

 
  initMap();
  // document.getElementById("hither").addEventListener("click",alert("hi"));

  // window.initMap is the set syntax to set a map


  
  
