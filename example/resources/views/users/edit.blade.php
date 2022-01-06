@extends('layouts.app')

@section('content')
<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
    <div class="row" style="padding-top:120px">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edycja konta użytkownika</h2>
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

    <form action="{{ route('users.update', $user->id) }}" method="POST" enctype="multipart/form-data" >
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nazwa użytkownika:</strong>
                    <input type="text"  required name="name" class="form-control" value="{{ $user->name }}" placeholder="Nick użytkownika">
                </div>
            </div>   <div class="col-xs-12 col-sm-12 col-md-12">
                <!-- <div class="form-group">
                    <strong>Zdjęcie: (powinno być kwadratowe do poprawnego wyświetlania)</strong>
                    <input type="file" name="photo" class="form-control" placeholder="Zdjęcie">
                </div> -->
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Hasło:</strong>
                    <input type="password"  required class="form-control" value="{{ $user->password }}"style="height:50px" name="password"
                        placeholder="Hasło" ></textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Adres E-mail:</strong>
                    <input type="email" required name="email" class="form-control" value="{{ $user->email }}" placeholder="Adres E-mail">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Imię:</strong>
                    <input type="text"  required name="firstname" class="form-control"  value="{{ $user->firstname }}" placeholder="Imię">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nazwisko:</strong>
                    <input type="text"  required name="surname" class="form-control" value="{{ $user->surname }}" placeholder="Nazwisko">
                </div>
            </div>

                </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Data urodzenia:</strong>
                    <!-- <input type="date" name="birthday" class="form-control"  > -->
                    <input id="birthday" required type="date" min="<?php echo date('Y-m-d', strtotime('-150 year')); ?>" max="<?php echo date("Y-m-d"); ?>" value="{{ $user->birthday }}" class="form-control @error('birthday') is-invalid @enderror" name="birthday" value="{{ old('birthday') }}" required autocomplete="birthday" autofocus>

                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                  <label for="gender" required class="col-md-4 col-form-label text-md-right">{{ __('Płeć') }}</label>
          <div class="form-check form-check-inline" >
              @if($user->gender=='male')
              <input class="form-check-input" checked type="radio" name="gender" value="male">
              <label class="form-check-label" for="male">Mężczyzna</label>
              @else
              <input class="form-check-input"type="radio" name="gender" value="male">
              <label class="form-check-label" for="male">Mężczyzna</label>
              @endif
          </div>
          <div class="form-check form-check-inline">
              @if($user->gender=='female')
              <input class="form-check-input" checked type="radio" name="gender" value="female">
              <label class="form-check-label" for="female">Kobieta</label>
              @else
              <input class="form-checask-input" type="radio" name="gender" value="female">
              <label class="form-check-label" for="female">Kobieta</label>
              @endif
          </div>
<div class="form-check form-check-inline">
              @if($user->gender=='other')
              <input class="form-check-input" checked  type="radio" name="gender" value="other">
              <label class="form-check-label" for="other">Inna</label>
              @else
              <input class="form-check-input" type="radio" name="gender" value="other">
              <label class="form-check-label" for="other">Inna</label>
              @endif
          </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                  <label for="role" required class="col-md-4 col-form-label text-md-right">{{ __('Rola') }}</label>
          <div class="form-check form-check-inline" >
              @if($user->role=='admin')
              <input class="form-check-input" checked type="radio" name="role" value="admin">
              <label class="form-check-label" for="admin">Administrator</label>
              @else
              <input class="form-check-input" type="radio" name="role" value="admin">
              <label class="form-check-label" for="admin">Administrator</label>
              @endif
          </div>
          <div class="form-check form-check-inline">
              @if($user->role!='admin')
              <input class="form-check-input" checked type="radio" name="role" value="user">
              <label class="form-check-label" for="user">Użytkownik</label>
              @else
              <input class="form-check-input" type="radio" name="role" value="user">
              <label class="form-check-label" for="user">Użytkownik</label>
              @endif
          </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-dark">Submit</button>
            </div>
        </div>
        <br><br>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('users.index') }}" title="Powrót" class="fas fa-backward ">Powrót do poprzedniej strony</a>
        </div>
    </form>
@endsection
