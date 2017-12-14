

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Agregar lugar</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="/places" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="user" class="col-md-4 control-label">Nombre</label>

                            <div class="col-md-6">
                                <input id="user" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>


                            </div>
                        </div>

                        <div class="form-group">
                            <label for="user" class="col-md-4 control-label">Provincia</label>

                            <div class="col-md-6">
                                <input id="user" type="user" class="form-control" name="location" value="{{ old('location') }}" required>


                            </div>
                        </div>

                        <div class="form-group">
                            <label for="user" class="col-md-4 control-label">Domicilio</label>

                            <div class="col-md-6">
                                <input id="user" type="user" class="form-control" name="address" value="{{ old('address') }}" required>


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
                                <input id="user" type="user" class="form-control" name="tel" value="{{ old('tel') }}" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="user" class="col-md-4 control-label">Breve descripción</label>

                            <div class="col-md-6">
                                <input id="user" type="user" class="form-control" name="description" value="{{ old('description') }}" required>
                            </div>
                        {{-- </div>
                        <div class="form-group">/
                          <div class="col-md-6">
                        <input type="file" name="file" value="img">
                          </div> --}}
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
                <div class="panel-heading">
                  @if (count($errors ) > 0)
                    <ul style="color: red">
                      @foreach ($errors->all() as $error)
                        <li> {{ $error }}</li>
                      @endforeach
                    </ul>
                  @endif

                </div>
            </div>

        </div>
    </div>
</div>
@endsection
