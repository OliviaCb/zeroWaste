@extends('layouts.app')

@section('content')

<h1>Przepisy</h1>

<!--tutaj powstaje wyswietlanie przepisów-->

<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Tytuł</th>
      <th scope="col">Zdjęcie</th>
      <th scope="col">Składniki</th>
      <th scope="col">Urządzenia kuchenne</th>
      <th scope="col">Opis przygotowania</th>
      <th scope="col">Czas przygotowania</th>
      <th scope="col">Trudność przygotowania</th>
    </tr>
  </thead>
  <tbody>
    @foreach($recipes as $recipe)
    <tr>
      <th scope="row">{{$recipe->recipe_id}}</th>
      <td>{{$recipe->title}}</td>
      <td>{{$recipe->photo}}</td>
      <td>{{$recipe->products}}</td>
      <td>{{$recipe->food_processors}}</td>
      <td>{{$recipe->description}}</td>
      <td>{{$recipe->time}} min</td>
      <td>{{$recipe->level}}/5</td>
    </tr>
    @endforeach
  </tbody>
</table>

<!--zakończenie wyświetlania przepisów-->

@if(count($recipes)>1)
@foreach($recipes as $recipe)
<div class="well">
    <h3>{{$recipe->title}}</h3>
</div>

@endforeach
@else

@endif
@endsection
