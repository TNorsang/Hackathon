
var ic = "default.png";
// Initialize and add the map
function initMap(x = 0,y= 0){
  lats = x;
  longs = y;
 
  window.initMap = campMap;

}
function initMap2(x = 0,y= 0, zoom = 14, imgOFIcon){
  lats = x;
  longs = y;
  zum = zoom;
  ic = imgOFIcon;

  window.initMap = campMap;

}

function campMap(i=40.7127281,j=-74.0060152, zum = 14) {
    
    var lats=i;
    var longs=j;
    const area = { lat: lats, lng: longs};
    const icon = {
      url: `../Icons/${ic}`, // url
      scaledSize: new google.maps.Size(50, 50), // scaled size
      origin: new google.maps.Point(0,0), // origin
      anchor: new google.maps.Point(0, 0) // anchor
  };
    const map = new google.maps.Map(document.getElementById("map"), {
      zoom: zum,
      center: area,
    });
    // Marker

 
    
    var marker = new google.maps.Marker({
      position: area,
      icon: icon,
      map: map,
    });
  }

 
  initMap();
  // document.getElementById("hither").addEventListener("click",alert("hi"));

  // window.initMap is the set syntax to set a map


  
  
