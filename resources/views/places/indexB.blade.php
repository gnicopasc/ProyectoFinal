@extends('layouts.app')

@section('content')

    <ul class="posteo">
        @foreach ($places as $place)
            <li>
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="panel panel-default">
                                <div class="panel-heading">{{$place->name}}</div>

                                <div class="panel-body">
                                    <div class="placename">
                                    {{$place->description}}
                                    </div>
                                    <div class="placebuttons">
                                        @if ($place->user_id == Auth::User()->id)
                                            <a class="edit" href="/places/{{$place->id}}/edit">Editar</a>
                                            <form id="borrarpost" action="{{route('places.destroy', $place)}}" method="post">
                                              {{csrf_field()}}
                                              {{method_field('DELETE')}}
                                              <button id="delete" type="submit" name="button" onclick="return confirm('¿Estás seguro que quieres eliminar tu lugar?')">Borrar</button>
                                            </form>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        @endforeach
    </ul>

@endsection
