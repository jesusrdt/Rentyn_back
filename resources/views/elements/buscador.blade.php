
          
                <div class="offset-md-3 col-md-6">
                    <i class=""></i>
                    <input type="text" name="Search"  id="SearchPlaces" class="form-control input-lg" placeholder="Enter a location"/>
                </div>
        
<script src="https://maps.googleapis.com/maps/api/js?key={{env('MAPS_GOOGLEAPIS_KEY')}}&libraries=places"></script>
<script type="text/javascript">



 var input = document.getElementById('SearchPlaces');
  var options = {
  componentRestrictions: {country: "es"}
 };
   var autocomplete = new google.maps.places.Autocomplete(input,options);
       google.maps.event.addListener(autocomplete, 'place_changed',   function () {
      var place = autocomplete.getPlace();
      var lat = place.geometry.location.lat();
      var long = place.geometry.location.lng();
      console.log(lat + ", " + long);

  });   
</script>
