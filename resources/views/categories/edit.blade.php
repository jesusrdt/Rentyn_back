@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-md-center mt-2">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Category</div>
                <div class="card-body">
					<div class="row">
						<div class="col-lg-12 margin-tb">
							<div class="pull-left">
								<h2>Edit Category</h2>
							</div>
							<div class="pull-right">
								<a class="btn btn-primary" href="{{ route('categories.index') }}"> Back</a>
							</div>
						</div>
					</div>
					@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> There were some problems with your input.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif
					{!! Form::model($category, ['method' => 'PATCH', 'route' => ['categories.update', $category->id, 'files' => 'true']]) !!}
						@include('categories.form')
					{!! Form::close() !!}
				</div>
            </div>
        </div>
    </div>
</div>
<br>
@endsection