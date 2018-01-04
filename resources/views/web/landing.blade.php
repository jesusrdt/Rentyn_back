@extends('layouts.web')

@section('title', 'Alquiler de maquinaria')

@section('content')
  @include('elements.nav')

  <main role="main">

    @include('elements.jumbotron')

    <div class="container">
      <!-- Example row of columns -->
      <div class="row justify-content-md-center">
        <div class="col-md-6">
          <h2>¡No se preocupes y cuente con nosotros!</h2>
          <p>Alquilar a través de rentyn significa tener disponible la maquinaria que necesita justo cuando la necesita.</p>
          <form method="POST" action="/send/form/landing">
            {{ csrf_field() }}
            <div class="form-group {{$errors->has('what')?'is-invalid':''}}">
                <label for="what">¿Que necesitas?</label>
                <input name="what" type="text" value="{{old('what')}}" class="form-control" id="what" placeholder="">
                @if($errors->has('what'))
                <div class="invalid-feeback">
                    {{$errors->first('what')}}
                </div>
              @endif
            </div>
          
            <div class="form-group {{$errors->has('where')?'is-invalid':''}}">
              <label for="where">¿Donde estas?</label>
              <input name="where" type="text" value="{{old('where')}}" class="form-control" id="where" placeholder="">
              @if($errors->has('where'))
                <div class="invalid-feeback">
                    {{$errors->first('where')}}
                </div>
              @endif
            </div>
          
            <div class="form-group {{$errors->has('when')?'is-invalid':''}}">
              <label for="when">¿Cuando lo necesitas?</label>
              <input name="when" type="text" value="{{old('when')}}" class="form-control" id="when" placeholder="">
              @if($errors->has('when'))
                <div class="invalid-feeback">
                    {{$errors->first('when')}}
                </div>
              @endif
            </div>
            <div class="form-group {{$errors->has('name')?'is-invalid':''}}">
               <label for="name">Tu nombre</label>
              <input name="name" type="text" value="{{old('name')}}" class="form-control" id="name" placeholder="">
              @if($errors->has('name'))
                <div class="invalid-feeback">
                    {{$errors->first('name')}}
                </div>
              @endif
            </div>
        
            <div class="form-group {{$errors->has('phone')?'is-invalid':''}} ">
              <label for="phone">Tu teléfono</label>
              <input name="phone" type="text" value="{{old('phone')}}" class="form-control" id="phone" placeholder="">
              @if($errors->has('phone'))
                <div class="invalid-feeback">
                    {{$errors->first('phone')}}
                </div>
              @endif
            </div>
        
            <div class="form-group {{$errors->has('email')?'is-invalid':''}}">
              <label for="email">Tu email</label>
              <input name="email" type="text" value="{{old('email')}}" class="form-control" id="email" placeholder="">
              @if($errors->has('email'))
                <div class="invalid-feeback">
                  {{$errors->first('email')}}
                </div>
              @endif
            </div>

            <button type="submit" class="btn btn-primary btn-block mb-2">Buscar</button>
          </form>
        </div>
      </div>

      <hr>

    </div> <!-- /container -->
  </main>

  @include('elements.footer')
@endsection

@section('styles')
  <style>
    /* Stackoverflow preview fix, please ignore */
    .navbar-nav {
      flex-direction: row;
    }
    
    .nav-link {
      padding-right: .5rem !important;
      padding-left: .5rem !important;
    }

    .jumbotron {
      background-image: url('/assets/img/slider_01.jpg');
      min-height: 350px;
    }

    .jumbotron .container {
      padding-top: 40px;
      color: white;
    }

    .is-invalid > input {
      border-color: #dc3545;
    }

    .is-invalid > label {
      color: #dc3545;
    }

    .invalid-feeback {
      display: block;
      width: 100%;
      margin-top: .25rem;
      font-size: 80%;
      color: #dc3545;
    }
  </style>
@endsection

@section('scripts')
  <script src="https://unpkg.com/sweetalert2@7.3.2/dist/sweetalert2.all.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key={{env('MAPS_GOOGLEAPIS_KEY')}}&libraries=places"></script>
  <script type="text/javascript">

      /*script para autocompletado de google play/ destaco que en un futuro si usan la ruta views/elements/buscador se debe eliminar este script para evitar conflictos*/
      var input = document.getElementById('where');
      var options = 
      {
      componentRestrictions: {country: "es"}// restriccion para España
      };
       var autocomplete = new google.maps.places.Autocomplete(input,options);
           google.maps.event.addListener(autocomplete, 'place_changed',   function () {
          var place = autocomplete.getPlace();
          var lat = place.geometry.location.lat();
          var long = place.geometry.location.lng();
          console.log(lat + ", " + long);
      });
      /*fin de script*/

</script>
     
 </script>
  @if (notify()->ready())
    <script>
        swal({
            title: "{!! notify()->message() !!}",
            text: "{!! notify()->option('text') !!}",
            type: "{{ notify()->type() }}",
        });
    </script>
  @endif
@endsection