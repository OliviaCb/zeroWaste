@extends('layouts.app')


@section('content')
<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
    <div class="row" style="padding-top:120px">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h1> {{ $user->name }}</h1>
            </div>
        </div>
    </div>
    <!-- <dl class="row">
      <dt class="col-sm-3">Hasło</dt>
      <dd class="col-sm-9">todo</dd>
      <HR NOSHADE> -->

      <!-- <dt class="col-sm-3">Zdjęcie</dt>
      <dd class="col-sm-9"><img src="{{ asset('uploads/users/'.$user->photo) }}" width="300px" height = "300px" alt=""></dd>
      <HR NOSHADE> -->

      <dt class="col-sm-3">Adres E-mail</dt>
      <dd class="col-sm-9">{{ $user->email}}</dd>
      <HR NOSHADE>

      <dt class="col-sm-3 text-truncate">Imię</dt>
      <dd class="col-sm-9">{{ $user->firstname}}</dd>
      <HR NOSHADE>

      <dt class="col-sm-3 text-truncate">Nazwisko</dt>
      <dd class="col-sm-9">{{ $user->surname}}</dd>
      <HR NOSHADE>

      <dt class="col-sm-3 text-truncate">Płeć</dt>
      <dd class="col-sm-9">
        @if($user->gender=='male')
                Mężczyzna
              @endif
              @if($user->gender=='female')
                Kobieta
              @endif
              @if($user->gender=='other')
                Inna
              @endif
      </dd>
      <HR NOSHADE>
      <dt class="col-sm-3 text-truncate">Data urodzenia</dt>
      <dd class="col-sm-9">{{$user->birthday}}</dd>
      <HR NOSHADE>

      <dt class="col-sm-3 text-truncate">Rola</dt>
      <dd class="col-sm-9">
        @if($user->role=='admin')
          Administrator
        @endif
        @if($user->role!='admin')
          Użytkownik
        @endif
      </dd>
      <HR NOSHADE>
        <dt class="col-sm-3 text-truncate">Data utworzenia konta</dt>
        <dd class="col-sm-9">{{$user->created_at}}</dd>
        <HR NOSHADE>
          <dt class="col-sm-3 text-truncate">Data modyfikacji konta</dt>
          <dd class="col-sm-9">{{$user->updated_at}}</dd>
        </dl>
        </dl>
      </dd>
    </dl>
    <br><br>
    <div class="pull-right">
        <a class="btn btn-primary" href="{{ route('users.index') }}" title="Powrót" class="fas fa-backward ">Powrót do poprzedniej strony</a>
    </div>
@endsection
