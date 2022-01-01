@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edycja przepisu</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('recipes.index') }}" title="Powrót" class="fas fa-backward ">Powrót do poprzedniej strony</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('recipes.update', $recipe->recipe_id) }}" method="POST "enctype="multipart/form-data" >
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Tytuł:</strong>
                    <input type="text" name="title" value="{{ $recipe->title }}" class="form-control" placeholder="Tytuł">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Zdjęcie:</strong>

                    <input type="file" name="photo" value="{{ $recipe->photo }}" class="form-control" placeholder="Zdjęcie">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Produkty:</strong>
                    <textarea class="form-control" style="height:50px" name="products"
                        placeholder="Produkty">{{ $recipe->products }}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Sprzęty kuchenne:</strong>
                    <input type="text" name="food_processors" class="form-control" placeholder="{{ $recipe->food_processors }}"
                        value="{{ $recipe->food_processors }}">
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Opis:</strong>
                    <textarea class="form-control" style="height:50px" name="description"
                        placeholder="Opis">{{ $recipe->description }}</textarea>
                </div>
            </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Czas wykonania:</strong>
                    <input type="number" name="time" class="form-control" placeholder="{{ $recipe->time }}"
                        value="{{ $recipe->time }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Poziom trudności :</strong>
                    <input type="number" name="level" class="form-control" placeholder="{{ $recipe->level }}"
                        value="{{ $recipe->level }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>
@endsection
