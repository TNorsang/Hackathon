
var ic = "default.png";

class Person {
  name;
  geoX;
  geoY;
  icon;
  
  constructor(name) {
    this.name = name;
    this.geoX = 0;
    this.geoY = 0;
    this.icon = "default";
  }

  setGeoXANDY(geoX,geoY){
    this.geoX = geoX;
    this.geoY = geoY;
  }

  setIcon(ic){
    this.icon = ic;
  }

  introduceSelf() {
    console.log(`Hi! I'm ${this.name} I am at location ${this.geoX} , ${this.geoY}`);
  }

}


function initMap(x = 0,y= 0,ic = "img"){
  lats = x;
  longs = y;
  console.log("long is" + longs);
 
  console.log("lat is" + lats);
  
  
  window.initMap = campMap;
  

}

function campMap(i=0.7127281,j=-74.0060152, ic = "girl1") {
  

    var lats=i;
    var longs=j;
    var area = { lat: lats, lng: longs};
    
 
    const map = new google.maps.Map(document.getElementById("map"), {
      zoom: 14,
      center: area,
    });
    // Marker    
    // var marker = new google.maps.Marker({
    //   position: area,
    //   icon:`../Icons/${ic}.png` ,
    //   map: map,
    // });
    createMarker({ lat: lats+0.03, lng: longs-0.02}, "girl2" , map);
    createMarker(area, ic , map);
    createMarker({ lat: lats+0.1, lng: longs}, "guy2" , map);
  }

  function createMarker(area,ic, map){
    new google.maps.Marker({
      position: area,
      icon:`../Icons/${ic}.png` ,
      map: map,
    });
  }
 
  initMap();
  // document.getElementById("hither").addEventListener("click",alert("hi"));

  // window.initMap is the set syntax to set a map

