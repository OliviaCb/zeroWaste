@extends('layouts.app')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h1> {{ $recipe->title }}</h1>
            </div>
        </div>
    </div>
    <dl class="row">
      <dt class="col-sm-3">Nazwa potrawy</dt>
      <dd class="col-sm-9">{{ $recipe->title }}</dd>
      <HR NOSHADE>

      <dt class="col-sm-3">Zdjęcie</dt>
      <dd class="col-sm-9"><img src="{{ asset('uploads/recipes/'.$recipe->photo) }}" width="300px" height = "300px" alt=""></dd>
      <HR NOSHADE>

      <dt class="col-sm-3">Składniki</dt>
      <dd class="col-sm-9">{{ $recipe->products }}</dd>
      <HR NOSHADE>

      <dt class="col-sm-3 text-truncate">Maszyny kuchenne</dt>
      <dd class="col-sm-9">{{ $recipe->food_processors }}</dd>
      <HR NOSHADE>

      <dt class="col-sm-3 text-truncate">Czas przygotowania</dt>
      <dd class="col-sm-9">{{ $recipe->time }} min</dd>
      <HR NOSHADE>

      <dt class="col-sm-3 text-truncate">Trudność przygotowania</dt>
      <dd class="col-sm-9">{{ $recipe->level }}/5</dd>
      <HR NOSHADE>

      <dt class="col-sm-3 text-truncate">Opisz przygotowania</dt>
      <dd class="col-sm-9">{{ $recipe->description }}</dd>
        </dl>
      </dd>
    </dl>
    <br><br>
    <div class="pull-right">
        <a class="btn btn-primary" href="{{ route('recipes.index') }}" title="Powrót" class="fas fa-backward ">Powrót do poprzedniej strony</a>
    </div>
@endsection
