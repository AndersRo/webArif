@extends ('layouts.admin')
@section ('contenido')

<style type="text/css">
#map{
display: block;
width: 100%;
height: 600px;
margin: 0 auto;
-moz-box-shadow: 0px 5px 20px #ccc;
-webkit-box-shadow: 0px 5px 20px #ccc;
box-shadow: 0px 5px 20px #ccc;
}
</style>
<script>
  function init() {
    var mapOption = {
      center: new google.maps.LatLng(-13.4098501, -76.1323471),
      zoom: 5,
      mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    var map = new google.maps.Map(document.getElementById("map"), mapOption);
  }
  google.maps.event.addDomListener(window, 'load', init);
</script>
<div class="row">
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div id="map" class="table-responsive">

    </div>
  </div>
</div>

@endsection
