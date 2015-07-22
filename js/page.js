var map;
      function centraliza(){
         //var center = map.getCenter();
         google.maps.event.trigger(map, "resize");
         map.setCenter(center); 
      }
      function initialize() {
        var myLatlng = new google.maps.LatLng(-22.961624,-43.165589);
        var mapCanvas = document.getElementById('map-canvas');
        var mapOptions = {
          center: myLatlng,
          zoom: 18,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        var map = new google.maps.Map(mapCanvas, mapOptions);
        var marker = new google.maps.Marker({
          position: myLatlng,
          map: map,
          title: 'Hello World!'
        });
      }
      google.maps.event.addDomListener(window, 'load', initialize);
      google.maps.event.addDomListener(window, 'resize', centraliza);

$(document).ready(function() {
    $('.banner').unslider();
    
});

$('.banner').unslider({
  speed: 500,               //  The speed to animate each slide (in milliseconds)
  delay: 2000,              //  The delay between slide animations (in milliseconds)
  complete: function() {},  //  A function that gets called after every slide animation
  keys: true,               //  Enable keyboard (left, right) arrow shortcuts
  dots: true,               //  Display dot navigation
  fluid: true              //  Support responsive design. May break non-responsive designs
});



