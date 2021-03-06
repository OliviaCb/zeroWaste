@extends('layouts.app')

@section('content')

<div class="row" style="padding-top:120px">
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
<!-- cards -->
<div class="row">
  @foreach($recip as $recipe)
  <div class="col-3  cards mt-2">
    <div class="card mt-2 h-100" style="width: 18rem;">
      <img src="{{ asset('uploads/recipes/'.$recipe->photo) }}" class="card-img-top" height="300px" width="400px" alt="...">
      <div class="card-body">
        <h5 class="card-title">{{$recipe->title}}</h5>
        <p class="card-text">{{$recipe->products}}</p>
        <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->

          <form action="{{ route('recipes.destroy', $recipe->recipe_id) }}" method="POST">
            <a href="{{ route('recipes.show', $recipe->recipe_id) }}" title="wyświetl" class="btn mt-auto btn-success">Wyświetl</a>

            @auth
            @if (Auth::user()->role=='admin' or Auth::user()->name==$recipe->owner)
            <a href="{{ route('recipes.edit', $recipe->recipe_id) }}" title="edytuj" class="btn btn-primary">Edytuj</a>
            @csrf

            @method('DELETE')
            <button type="submit" title="delete" title="usuń" class="btn btn-danger">Usuń</button>
            </button>

        @endif
        @endauth
      </div>
    </div>
  </div>
  @endforeach
</div>
<!-- cards -->
@endsection
