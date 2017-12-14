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
                                    {{$place->description}}
                                    <a class="edit" href="/places/{{$place->id}}/edit">Editar</a>
                                    <form class="" action="{{route('places.destroy', $place)}}" method="post">
                                      {{csrf_field()}}
                                      {{method_field('DELETE')}}
                                      <button type="submit" name="button">Borrar</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        @endforeach
    </ul>
@endsection
