@extends('layouts.app')

@section('content')

<!--tutaj powstaje wyswietlanie przepisów-->

<div class="row">
       <div class="col-lg-12 margin-tb">
           <div class="pull-left">
               <h1>Przepisy</h1>
           </div>
           <div class="pull-right">
               <center><a class="btn btn-warning" href="{{ route('recipes.create') }}" title="Dodaj przepis">Dodaj nowy przepis</a></center><br>
           </div>
       </div>
   </div>

   @if ($message = Session::get('success'))
       <div class="alert alert-success">
           <p>{{ $message }}</p>
       </div>
   @endif

<!--<table class="table">-->
<table class="table table-bordered table-responsive-lg">
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
      <th width="280px">Akcja</th>
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
      <!--<td><a href=\'show.php?id={{$recipe->recipe_id}}' class="btn btn-secondary">Sprawdź</a></td>-->
      <!--<td><a href=\show class="btn btn-secondary">Sprawdź</a></td>-->
      <!--nowa treść-->
      <td>
      <form action="{{ route('recipes.destroy', $recipe->recipe_id) }}" method="POST">

                        <a href="{{ route('recipes.show', $recipe->recipe_id) }}" title="wyświetl" class="btn btn-success">Wyświetl</a>

                        <a href="{{ route('recipes.edit', $recipe->recipe_id) }}" title="edytuj" class="btn btn-primary">Edytuj</a>

                        @csrf
                        @method('DELETE')

                        <a type="submit" title="delete" title="usuń" class="btn btn-danger">Usuń</a>

                        </button>
                    </form>
                  </td>
      <!--koniec nowej treści-->
    </tr>
    @endforeach
  </tbody>
</table>

<!--zakończenie wyświetlania przepisów-->
<!--
@if(count($recipes)>1)
@foreach($recipes as $recipe)
<div class="well">
    <h3>{{$recipe->title}}</h3>
</div>

@endforeach
@else

@endif-->
@endsection
