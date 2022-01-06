@extends('layouts.app')

@section('content')

                     <form role="search" class="search-form" type="get" action="{{ url('/usersearch') }}">
                      <label>
                      <input style="margin-left:10px" class="form-control" name="query" type="serach" placeholder="Wyszukaj użytkownika po nazwie">
                    </label>
                    <button style="margin-left:10px" class="btn btn-outline-secondary" type="submit">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                      </svg>
                        </button>
                    </form>

<div class="row" style="padding-top:120px">
       <div class="col-lg-12 margin-tb">
           <div class="pull-left">
               <h1>Użytkownicy</h1>
           </div>
           <div class="pull-right">
               <center><a class="btn btn-warning" href="{{ route('users.create') }}" title="Dodaj przepis">Dodaj nowego użytkownika</a></center><br>
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
      <th scope="col">Nazwa użytkownika</th>
      <!-- <th scope="col">Hasło</th> -->
      <th scope="col">Adres E-Mail</th>
      <th scope="col">Imię</th>
      <th scope="col">Nazwisko</th>
      <th scope="col">Data urodzenia</th>
      <th scope="col">Płeć</th>
      <th scope="col">Rola</th>
      <th width="240px">Akcja</th>
    </tr>
  </thead>
  <tbody>
    @foreach($users as $user)
    <tr>

      <!-- <td>
        <img src="{{ asset('uploads/users/'.$user->photo) }}" width="200px" height = "200px" alt="">
      </td> -->
      <td>{{$user->name}}</td>
      <!-- <td>TODO</td> -->
      <!-- <td>{{$user->password}}</td> -->
      <td>{{$user->email}}</td>
      <td>{{$user->firstname}}</td>
      <td>{{$user->surname}}</td>
      <td>{{$user->birthday}}</td>
      <td>
        @if($user->gender=='male')
          Mężczyzna
        @endif
        @if($user->gender=='female')
          Kobieta
        @endif
        @if($user->gender=='other')
          Inna
        @endif
      </td>
      <td>
        @if($user->role=='admin')
          Administrator
        @endif
        @if($user->role!='admin')
          Użytkownik
        @endif
      </td>
      <td>
      <form action="{{ route('users.destroy', $user->id) }}" method="POST">

                        <a href="{{ route('users.show', $user->id) }}" title="wyświetl" class="btn btn-success">Wyświetl</a>

                        @auth
                        @if (Auth::user()->role=='admin')
                        <a href="{{ route('users.edit', $user->id) }}" title="edytuj" class="btn btn-primary">Edytuj</a>

                                                @csrf
                                                @method('DELETE')

                                    <button type="submit" title="delete" title="usuń" class="btn btn-danger">Usuń</button>
                        @endif
                        @endauth
                    </form>
                  </td>
    </tr>
    @endforeach
  </tbody>
</table>
{!! $users->links("pagination::bootstrap-4") !!}-

@endsection
