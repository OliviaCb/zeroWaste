@extends('layouts.app')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h1> {{ $recipe->title }}</h1>
            </div>
        </div>
    </div>
<!--
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tytuł:</strong>
                {{ $recipe->title }}

            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Zdjęcie:</strong>
                <img src="{{ asset('../public/uploads/recipes/'.$recipe->photo) }}" width="70px" height = "70px" alt="">

            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Składniki:</strong>
                {{ $recipe->products }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Maszyny kuchenne:</strong>
                {{ $recipe->food_processors }}
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Opis</strong>
                {{ $recipe->description }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Czas przygotowania:</strong>
                {{ $recipe->time }} min
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Trudność przygotowania:</strong>
                {{ $recipe->level }}/5
            </div>
        </div>
    </div>
-->
    <!--bootstrap edyszyn-->

    <dl class="row">
      <dt class="col-sm-3">Nazwa potrawy</dt>
      <dd class="col-sm-9">{{ $recipe->title }}</dd>

      <dt class="col-sm-3">Zdjęcie</dt>
      <dd class="col-sm-9"><img src="{{ asset('../public/uploads/recipes/'.$recipe->photo) }}" width="70px" height = "70px" alt=""></dd>

      <dt class="col-sm-3">Składniki</dt>
      <dd class="col-sm-9">{{ $recipe->products }}</dd>

      <dt class="col-sm-3 text-truncate">Maszyny kuchenne</dt>
      <dd class="col-sm-9">{{ $recipe->food_processors }}</dd>

      <dt class="col-sm-3 text-truncate">Czas przygotowania</dt>
      <dd class="col-sm-9">{{ $recipe->time }} min</dd>

      <dt class="col-sm-3 text-truncate">Trudność przygotowania</dt>
      <dd class="col-sm-9">{{ $recipe->level }}/5</dd>

      <dt class="col-sm-3 text-truncate">Opisz przygotowania</dt>
      <dd class="col-sm-9">{{ $recipe->description }}</dd>
        </dl>
      </dd>
    </dl>
    <br><br>
    <div class="pull-right">
        <a class="btn btn-primary" href="{{ route('recipes.index') }}" title="Powrót" class="fas fa-backward ">Powrót do poprzedniej strony</a>
    </div>
    <!--end of bootstrap-->
@endsection
