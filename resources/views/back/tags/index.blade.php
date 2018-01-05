
@extends('back.template.admin')

@section('title', trans('tags.tags'))

@section('jumbotron')
	<br><br>
@endsection

@section('panel_title', trans('tags.tags'))

@section('content')
	<i class="fa fa-address-book-o" aria-hidden="true"></i>
	<div id="app">
		<vue-table-2></vue-table-2>
	</div>
@endsection