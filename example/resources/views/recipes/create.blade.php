@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <!-- @if (session('status'))
            <h6 class="alert alert-success">{{session('status')}}</h6>
            @endif -->
            <div class="pull-left">
                <h2>Dodaj nowy przepis</h2>
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
    <form action="{{ route('recipes.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Tytuł:</strong>
                    <input type="text" name="title" class="form-control" placeholder="Tytuł">
                </div>
            </div>   <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Zdjęcie:</strong>
                    <input type="file" name="photo" class="form-control" placeholder="Zdjęcie">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Produkty:</strong>
                    <textarea class="form-control" style="height:50px" name="products"
                        placeholder="Produkty"></textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Maszyny kuchenne:</strong>
                    <input type="text" name="food_processors" class="form-control" placeholder="Maszyny kuchenne">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Opis przygotowania:</strong>
                    <input type="text" name="description" class="form-control" placeholder="Opis przygotowania">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Czas przygotowania:</strong>
                    <input type="number" name="time" class="form-control" placeholder="Czas przygotowania">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Poziom trudności w skali od 1 do 5:</strong>
                    <input type="text" name="level" class="form-control" pattern= "[1-5]{1}" placeholder="Poziom trudności w skali od 1 do 5">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-dark">Submit</button>
            </div>
        </div>
        <br><br>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('recipes.index') }}" title="Powrót" class="fas fa-backward ">Powrót do poprzedniej strony</a>
        </div>
    </form>
@endsection
