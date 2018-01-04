   <!-- <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet"> 
   <link href="{{ asset('css/landing.css') }}" rel="stylesheet">
   <script src="{{ asset('js/app.js') }}"></script>	 -->
​	
<link href="http://designers.hubspot.com/hs-fs/hub/327485/file-2054199286-css/font-awesome.css"En Inglés rel="stylesheet">

<div class="container">
  <div class="row centrado">
  <form class="form-horizontal" action="/action_page.php">
  <div class="form-group">
    <label class="control-label col-md-2" for="Title">Titulo:</label>
    <div class="col-md-8">
      <input type="text" required="" class="form-control" id="Title" placeholder="">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-md-2" for="Description">Descripcion:</label>
    <div class="col-md-8">	
      <input type="text" required="" class="form-control" id="Description" placeholder="">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-md-2" for="email">Caracteristicas:</label>
    <div class="col-md-8">
      <textarea class="form-control" id="characterist" placeholder=""></textarea>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-md-2" for="status">Estatus:</label>
    <div class="col-md-8">
      <input type="text" required="" class="form-control" id="status" placeholder="	">
    </div>
  </div>
  	<div class="form-group	">
	    <label class="control-label col-md-2" for="imagen">Imagen:</label>
	    <div class="col-md-4">
	  	<label class="custom-file">
	  		<input type="file" id="imagen" name="imagen" class="custom-file-input">
	  		<span class="custom-file-control"></span>
		</label>
		</div>
		<div class="col-md-2">
	    <a href="#" onclick="delete_file()"><i" title="Borrar Archivo" class="fa fa-trash-o fa-2x"></i></a>
	  	</div>
	</div>
  <div class="form-group">
    <div class="col-md-offset-1 col-md-10">
      <button type="button" class="btn btn-default" onclick="validar_archivo();">Submit</button>
    </div>
  </div>
</form> 
</div>
</div>




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