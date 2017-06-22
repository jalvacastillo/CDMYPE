    <script src="http://maps.googleapis.com/maps/api/js?sensor=false" type="text/javascript"></script>
    <div id="map" data-position-latitude="13.8150407" data-position-longitude="-88.8625395"></div>
    <script>
      (function($) {
        $.fn.CustomMap = function(options) {

          var posLatitude = $('#map').data('position-latitude'),
            posLongitude = $('#map').data('position-longitude');

          var settings = $.extend({home: {latitude: posLatitude, longitude: posLongitude }, zoom: 17 }, options);

          var coords = new google.maps.LatLng(settings.home.latitude, settings.home.longitude);

          return this.each(function() {
            var element = $(this);

            var options = {
              zoom: settings.zoom,
              center: coords,
              mapTypeId: google.maps.MapTypeId.ROADMAP,
              mapTypeControl: false,
              scaleControl: true,
              scrollwheel: false,
              streetViewControl: false,
              panControl: true,
              disableDefaultUI: true,
              zoomControlOptions: {
                style: google.maps.ZoomControlStyle.DEFAULT
              },
              overviewMapControl: true,
            };

            var map = new google.maps.Map(element[0], options);

          });

        };
      }(jQuery));

      jQuery(document).ready(function() {
        jQuery('#map').CustomMap();
      });
    </script>