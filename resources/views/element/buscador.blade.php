
            <div class="row"> 
                <div class="offset-md-3 col-md-6" style="padding-top: 15px;">
                    <i class=""></i>
                    <input type="text" name="Search"  id="SearchPlaces" class="form-control input-lg" placeholder="Enter a location"/>
                </div>
            </div>


<script src="https://maps.googleapis.com/maps/api/js?key={{env('MAPS_GOOGLEAPIS_KEY')}}&libraries=places"></script>
<script type="text/javascript">
 var input = document.getElementById('SearchPlaces');
   var autocomplete = new google.maps.places.Autocomplete(input);
       google.maps.event.addListener(autocomplete, 'place_changed',   function () {
      var place = autocomplete.getPlace();
      var lat = place.geometry.location.lat();
      var long = place.geometry.location.lng();
      console.log(lat + ", " + long);

  });   
</script>
