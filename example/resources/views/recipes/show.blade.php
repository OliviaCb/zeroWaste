@extends('layouts.app')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> {{ $recipe->title }}</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('recipes.index') }}" title="Go back">
                      <i class="fas fa-backward "></i> </a>
            </div>
        </div>
    </div>

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
@endsection
