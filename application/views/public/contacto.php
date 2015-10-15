
<!-- MAIN CONTENT -->
<div id="main" role="main">
<div class="container">
    <div class="row sidebar_left ">
    <div class="column_center">
    <div id="main_content" class="col-sm-9">
    <div class="contact-scope">
<h1 class="page_heading">CONTACTO</h1>
    <!--  GOOGLE MAP -->
    <div id="google_map"></div>
<script src="//maps.googleapis.com/maps/api/js?v=3.exp"></script>
<script type="text/javascript">
var map;
function initialize() {
    var latlng = new google.maps.LatLng(0, 0);
    var mapOptions = {
        center: latlng,
        zoom: 14,
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        disableDefaultUI: true,
        scrollwheel: false,
    };
    map = new google.maps.Map(document.getElementById('google_map'), mapOptions);
    var geocoder = new google.maps.Geocoder();
    var address = 'Times Square Manhattan, NY 10036';
    geocoder.geocode( { 'address': address}, function(results, status){
		if (status == google.maps.GeocoderStatus.OK) {
			map.setCenter(results[0].geometry.location);
            var marker = new google.maps.Marker({map: map, position: results[0].geometry.location, icon: markerImage });
        } else {
			alert("Geocode was not successful for the following reason: " + status);
        }
    });
    var markerImage = new google.maps.MarkerImage(
        '//cdn.shopify.com/s/files/1/0815/1651/t/2/assets/marker.png?5807396758501947651',
        new google.maps.Size(60,62),
        new google.maps.Point(0,0),
        new google.maps.Point(25,62)
    );
    var styles = [ { "featureType": "water", "elementType": "geometry.fill", "stylers": [ { "color": "#98befd" } ] },{ "featureType": "water", "elementType": "geometry.stroke", "stylers": [ { "visibility": "off" } ] },{ "featureType": "landscape", "elementType": "geometry.fill", "stylers": [ { "color": "#e9e5dc" } ] },{ "featureType": "poi", "stylers": [ { "color": "#cadfaa" } ] },{ } ];

    map.setOptions({styles: styles});
}
</script>


<p>El equipo Descubre La Libertad se preocupa en garantizar su experiencia como usuario, de tal manera qusieramos conocer sus dudas, inquietudes y/o comentarios para mejorar nuestro servicio y atenderlo a plenitud. !</p>
    
<form method="post" action="/contact" class="contact-form" accept-charset="UTF-8"><input type="hidden" value="contact" name="form_type" /><input type="hidden" name="utf8" value="✓" />
<div id="contactFormWrapper">
    <div class="row">
        <div class="col-sm-4 form-group">
            <label class="sr-only">Nombre Completo:</label>
            <input type="text" class="form-control" id="contactFormName" name="contact[name]" placeholder="Your name..." />
        </div>
        <div class="col-sm-4 form-group">
            <label class="sr-only">Email:</label>
            <input type="email" class="form-control" id="contactFormEmail" name="contact[email]" placeholder="Your email..." />
        </div>
        <div class="col-sm-4 form-group">
            <label class="sr-only">Tel&eaccute;fono Celular:</label>
            <input type="telephone" class="form-control" id="contactFormTelephone" name="contact[phone]" placeholder="Your phone number..." />
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12 form-group">
            <label class="sr-only">Mensaje:</label>
            <textarea class="form-control" rows="5" cols="75" id="contactFormMessage" name="contact[body]" placeholder="Your Message..."></textarea>
        </div>
    </div>

    <div class="btn-toolbar form-group">
        <input type="submit" id="contactFormSubmit" value="Send" class="btn btn-primary" />
      	<input type="reset" value="Clear" class="btn btn-info">
    </div>

</div><!-- contactFormWrapper -->

</form>

</div>
    
    </div>
    </div>