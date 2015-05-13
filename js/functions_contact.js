jQuery(document).ready(function($) {
	$('.contact-form').css('visibility', 'hidden');
	
	$('.match1').matchHeight();

	$('.work-with-us').click(function(e) {
		blurContent(true);
		showPopup('work-with-us');
		e.preventDefault();
		return false;
	});

	setTimeout(function() {
		$('.contact-form').addClass('magictime slideDownRetourn').css('visibility', 'visible');
	}, 1000);
});


//google maps
function initialize() {
  // Create an array of styles.
  /*var styles = [
    {
      stylers: [
        { hue: "#00ffe6" },
        { saturation: -20 }
      ]
    },{
      featureType: "road",
      elementType: "geometry",
      stylers: [
        { lightness: 100 },
        { visibility: "simplified" }
      ]
    },{
      featureType: "road",
      elementType: "labels",
      stylers: [
        { visibility: "off" }
      ]
    }
  ];*/

  // Create a new StyledMapType object, passing it the array of styles,
  // as well as the name to be displayed on the map type control.
  /*var styledMap = new google.maps.StyledMapType(styles,
    {name: "Styled Map"});*/

  // Create a map object, and include the MapTypeId to add
  // to the map type control.
  var myLatlng = new google.maps.LatLng(_loc_lat,_loc_lng);

  var mapOptions = {
    zoom: 16,
    streetViewControl: false,
    center: myLatlng/*,
    mapTypeControlOptions: {
      mapTypeIds: [google.maps.MapTypeId.ROADMAP, 'map_style']
    }*/
  };
  var map = new google.maps.Map(document.getElementById('google_map'),
    mapOptions);

  //Associate the styled map with the MapTypeId and set it to display.
  /*map.mapTypes.set('map_style', styledMap);
  map.setMapTypeId('map_style');*/

  var marker = new google.maps.Marker({
      position: myLatlng,
      map: map,
      title: 'MedicSemka'
  });
}

google.maps.event.addDomListener(window, 'load', initialize);