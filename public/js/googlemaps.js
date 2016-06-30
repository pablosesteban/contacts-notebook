//Create google maps map
function initMap() {
    var mapElement = document.getElementById("map");
    
    var coor = new google.maps.LatLng(43.5577323, -5.926964);
    
    //GLOBAL VARIABLE
    map = new google.maps.Map(mapElement, {
        center: coor,
        zoom: 9
    });
    
    //GLOBAL VARIABLE
    geocoder = new google.maps.Geocoder();
    
    var marker = codeAddress();
}

//Converting address into geographic coordinates for the google map
function codeAddress() {
    var address = document.getElementById("address").innerHTML.replace(/.*<\/span>/, "");
    
    var marker;
    geocoder.geocode({'address': address}, function(results, status) {
        if (status === google.maps.GeocoderStatus.OK) {
            map.setCenter(results[0].geometry.location);
            
            marker = new google.maps.Marker({
                map: map,
                position: results[0].geometry.location
            });
        } else {
            alert("Geocode was not successful for the following reason: " + status);
        }
        
        return marker;
    });
}