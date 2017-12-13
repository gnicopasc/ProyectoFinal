<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Places</title>
  </head>
  <body>
    @foreach ($places as $place)
        <li>{{$place->name}}</li>
        <li>{{$place->address}}</li>
        <li>{{$place->location}}</li>
    @endforeach

    
