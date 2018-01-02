@extends('layouts.app')

@section('content')


<div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <a class="btn btn-default btn-xs pull-right"  href="{{ url('/') }}">
                <i class="fa fa-arrow-left " aria-hidden="true"></i>
            </a>Correo</div>
                <div class="panel-body">

                    <form class="form-horizontal" role="form" method="POST" action="{{ route('contact.store') }}">
                        {{ csrf_field() }}
                    
                             <div class="form-group{{ $errors->has('que') ? ' has-error' : '' }}">
                            <label for="que" class="col-md-4 control-label">Que </label>

                            <div class="col-md-6">
                                <input id="que" type="text" class="form-control" name="que" value="{{ old('que') }}" required autofocus>

                                @if ($errors->has('que'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('que') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('cuando') ? ' has-error' : '' }}">
                            <label for="cuando" class="col-md-4 control-label">cuando </label>

                            <div class="col-md-6">
                                <input id="cuando" type="text" class="form-control" name="cuando" value="{{ old('cuando') }}" required autofocus>

                                @if ($errors->has('cuando'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('cuando') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('donde') ? ' has-error' : '' }}">
                            <label for="donde" class="col-md-4 control-label">Donde </label>

                            <div class="col-md-6">
                                <input id="donde" type="text" class="form-control" name="donde" value="{{ old('donde') }}" required autofocus>

                                @if ($errors->has('donde'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('donde') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('nombre') ? ' has-error' : '' }}">
                            <label for="nombre" class="col-md-4 control-label">Nombre </label>

                            <div class="col-md-6">
                                <input id="nombre" type="text" class="form-control" name="nombre" value="{{ old('nombre') }}" required autofocus>

                                @if ($errors->has('nombre'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nombre') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>





                   <div class="form-group{{ $errors->has('correo') ? ' has-error' : '' }}">
                            <label for="correo" class="col-md-4 control-label">Correo </label>

                            <div class="col-md-6">
                                <input id="correo" type="text" class="form-control" name="correo" value="{{ old('correo') }}" required autofocus>

                                @if ($errors->has('correo'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('correo') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

            <div class="form-group{{ $errors->has('telefono') ? ' has-error' : '' }}">
                            <label for="telefono" class="col-md-4 control-label">telefono </label>

                            <div class="col-md-6">
                                <input id="telefono" type="text" class="form-control" name="telefono" value="{{ old('telefono') }}" required autofocus>

                                @if ($errors->has('telefono'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('telefono') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                                      
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Contactanos
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>



@endsection