<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Name:</strong>
            {!! Form::text('name', null, array('placeholder' => 'Name', 'class' => 'form-control')) !!}
        </div>
    </div>
	
	<div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Description:</strong>
            {!! Form::textarea('description', null, array('placeholder' => 'Description', 'class' => 'form-control')) !!}
        </div>
    </div>
	
	<div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Image:</strong>
            {!! Form::file('img', array('class' => 'form-control')) !!}
        </div>
    </div>
	
	<div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Sub-Category:</strong>
            {!! Form::select('category_sub[]', $subCategories, $selectSubCategory, array('class' => 'form-control select2-multiple', 'multiple' => 'multiple')) !!}
        </div>
    </div>
	
	<div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Status:</strong>
            {!! Form::select('status', ['1' => 'Active', '0' => 'Desactive'], null, array('placeholder' => 'Select', 'class' => 'form-control')) !!}
        </div>
    </div>
	
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
		<button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>

<script>
	var placeholder = "Select";
	$(".select2-multiple" ).select2({
		allowClear: true,
		placeholder: placeholder,
		width: null,
		containerCssClass: ':all:'
	});
</script>