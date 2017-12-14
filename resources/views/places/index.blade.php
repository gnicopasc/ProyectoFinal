<ul>


@foreach ($places as $place)
<li>{{$place->name}}</li> - <a href="/places/{{$place->id}}/edit">editar</a>
<form class="" action="{{route('places.destroy', $place)}}" method="post">
  {{csrf_field()}}
  {{method_field('DELETE')}}
  <button type="submit" name="button">borrame puto</button>
</form>
@endforeach

</ul>
