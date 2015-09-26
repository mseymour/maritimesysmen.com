<section id="{{ $map_slug }}-map" style="width: 100%; height: 500px"></section>
<script>
  L.mapbox.accessToken = 'pk.eyJ1IjoibWFya3NleW1vdXIiLCJhIjoiM3NyQlRJayJ9.v4kbFAbqZnHrdFYJtKlPgA';
  var {!! $map_slug !!}_map = L.mapbox.map('{!! $map_slug !!}-map', 'markseymour.ndif9c29');
  {!! $map_slug !!}_map.scrollWheelZoom.disable();
  var {!! $map_slug !!}_geo = {!! $geojson !!};
  var {!! $map_slug !!}_featureLayer = {!! $map_slug !!}_map.featureLayer.setGeoJSON({!! $map_slug !!}_geo);
  {!! $map_slug !!}_featureLayer.addTo({!! $map_slug !!}_map).on('ready', function(e) {
    {!! $map_slug !!}_map.fitBounds({!! $map_slug !!}_featureLayer.getBounds());
  });
</script>