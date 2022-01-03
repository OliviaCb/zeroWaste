@extends('layouts.app')

@section('content')

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

<table class="table table-bordered table-responsive-lg">
  <thead>
    <tr>
      <th scope="col">Nazwa potrawy</th>
      <th scope="col">Zdjęcie</th>
      <th scope="col">Składniki</th>
      <th scope="col">Urządzenia kuchenne</th>
      <th scope="col">Czas przygotowania</th>
      <th scope="col">Trudność przygotowania</th>
      <th width="240px">Akcja</th>
    </tr>
  </thead>
  <tbody>
    @foreach($recipe as $recipe)
    <tr>
      <td>{{$recipe->title}}</td>
      <td>
        <img src="{{ asset('../public/uploads/recipes/'.$recipe->photo) }}" width="70px" height = "70px" alt="">
      </td>
      <td>{{$recipe->products}}</td>
      <td>{{$recipe->food_processors}}</td>
      <td>{{$recipe->time}} min</td>
      <td>{{$recipe->level}}/5</td>
      <td>
      <form action="{{ route('recipes.destroy', $recipe->recipe_id) }}" method="POST">

                        <a href="{{ route('recipes.show', $recipe->recipe_id) }}" title="wyświetl" class="btn btn-success">Wyświetl</a>
                        @auth
                        @if (Auth::user()->role=='admin')
                        <a href="{{ route('recipes.edit', $recipe->recipe_id) }}" title="edytuj" class="btn btn-primary">Edytuj</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" title="delete" title="usuń" class="btn btn-danger">Usuń</button>

                        </button>
                        @endif
                        @endauth
                    </form>
                  </td>
    </tr>
    @endforeach
  </tbody>
</table>


@endsection
