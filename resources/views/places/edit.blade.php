{{--
name
  <input type="text" name="name" value="{{ $place->name }}">
  <br>
  location
  <input type="text" name="location" value="">
  <br>
  address
  <input type="text" name="address" value="">
  <br>
  tel
  <input type="text" name="tel" value="">
  <br>
  description
  <input type="text" name="description" value="">
  <br>
  logo
  <input type="text" name="logo" value="">
  <br>
  resto
  <input type="text" name="restaurant" value="">
  <br>
  comercio
  <input type="text" name="comercio" value="">
  <br><br>
<button type="submit" name="button">Crear</button>
</form> --}}

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edición</div>

                <div class="panel-body">
                  <form class="form-horizontal" action="{{route('places.update', $place)}}" method="post">
                    {{csrf_field()}}
                    {{method_field('PUT')}}

                        <div class="form-group">
                            <label for="user" class="col-md-4 control-label">Nombre</label>

                            <div class="col-md-6">
                                <input id="user" type="text" class="form-control" name="name" value="{{ $place->name }}" required autofocus>


                            </div>
                        </div>

                        <div class="form-group">
                            <label for="user" class="col-md-4 control-label">Provincia</label>

                            <div class="col-md-6">
                                <input id="user" type="user" class="form-control" name="location" value="{{ $place->location }}" required>


                            </div>
                        </div>

                        <div class="form-group">
                            <label for="user" class="col-md-4 control-label">Domicilio</label>

                            <div class="col-md-6">
                                <input id="user" type="user" class="form-control" name="address" value="{{ $place->address }}" required>


                            </div>
                        </div>

                        {{-- <div class="form-group">
                            <label for="user" class="col-md-4 control-label">Tel</label>

                            <div class="col-md-6">
                                <input id="user" type="user" class="form-control" name="tel" required>
                            </div>
                        </div> --}}

                        <div class="form-group">
                            <label for="user" class="col-md-4 control-label">Tel</label>

                            <div class="col-md-6">
                                <input id="user" type="user" class="form-control" name="tel" value="{{$place->tel }}" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="user" class="col-md-4 control-label">Descripción</label>

                            <div class="col-md-6">
                                <input id="user" type="user" class="form-control" name="description" value="{{ $place->description }}" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Agregar
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
