@extends('layouts.web')

@section('title', 'Alquiler de maquinaria')

@section('content')
  @include('elements.nav')

<link href="http://designers.hubspot.com/hs-fs/hub/327485/file-2054199286-css/font-awesome.css"En Inglés rel="stylesheet">
​<main role="main">


      <div class="container" style="padding-top: 50px;">
      <!-- Example row of columns -->
      <div class="row justify-content-md-center">
        <div class="col-md-6">
          <h2>Registrece con Nosotros</h2>
          <p></p>
          <form method="POST" action="/send/form/landing">
            {{ csrf_field() }}
            <div class="form-group {{$errors->has('title')?'is-invalid':''}}">
                <label for="title">Titulo:</label>
                <input name="title" type="text" value="{{old('title')}}" class="form-control" id="title" placeholder="">
                @if($errors->has('title'))
                <div class="invalid-feeback">
                    {{$errors->first('title')}}
                </div>
              @endif
            </div>
          
            <div class="form-group {{$errors->has('characteristic')?'is-invalid':''}}">
              <label for="characteristic">Caracteristicas:</label>
              <input name="characteristic" type="text" value="{{old('characteristic')}}" class="form-control" id="characteristic" placeholder="">
              @if($errors->has('characteristic'))
                <div class="invalid-feeback">
                    {{$errors->first('characteristic')}}
                </div>
              @endif
            </div>

            <div class="form-group {{$errors->has('description')?'is-invalid':''}}">
              <label for="description">Descripcion:</label>
              <input name="description" type="text" value="{{old('description')}}" class="form-control" id="description" placeholder="">
              @if($errors->has('description'))
                <div class="invalid-feeback">
                    {{$errors->first('description')}}
                </div>
              @endif
            </div>
          
            <div class="form-group {{$errors->has('status')?'is-invalid':''}}">
               <label for="status">Estatus</label>
              <input name="status" type="text" value="{{old('status')}}" class="form-control" id="status" placeholder="">
              @if($errors->has('status'))
                <div class="invalid-feeback">
                    {{$errors->first('status')}}
                </div>
              @endif
            </div>
            <div class="form-group {{$errors->has('imagen')?'is-invalid':''}}">
              <label for="imagen">Imagen:</label>
              <input name="imagen" type="text" value="{{old('imagen')}}" class="form-control" id="imagen" placeholder="">
              @if($errors->has('imagen'))
                <div class="invalid-feeback">
                    {{$errors->first('imagen')}}
                </div>
              @endif
            </div>

 <!--                <div class="form-group  ">
              <label class="control-label col-md-2" for="imagen">Imagen:</label>
              <div class="col-md-4">
              <label class="custom-file">
                <input type="file" id="imagen" name="imagen" class="custom-file-input">
                <span class="custom-file-control"></span>
            </label>
            </div>
          </div> -->


            <button type="submit" class="btn btn-primary btn-block mb-2">Registrar</button>
          </form>
        </div>
      </div>

      <hr>

    </div> <!-- /container -->
</main>
    @include('elements.footer')
@endsection


@section('styles')
<style type="text/css">
</style> 
@endsection

@section('scripts')
<script type="text/javascript">
  
function validar_archivo()
{ 
    var file = $('#imagen').val();
    var ext = file.substring(file.lastIndexOf("."));
    alert(ext)
  if ((ext!=".jpg" && ext!=".png") || (ext=null) )
  {
    alert("no es una imagen")
  }
}

function delete_file()
{
  $('#imagen').val(null);
}



</script>
@endsection