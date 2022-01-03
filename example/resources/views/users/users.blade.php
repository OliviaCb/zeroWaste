@extends('layouts.app')

@section('content')

<div class="row">
       <div class="col-lg-12 margin-tb">
           <div class="pull-left">
               <h1>Przepisy</h1>
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
      <th scope="col">Hasło todo</th>
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
      <td>{{$user->title}}</td>
      <td>
        <img src="{{ asset('uploads/users/'.$user->photo) }}" width="200px" height = "200px" alt="">
      </td>
      <td>{{$user->products}}</td>
      <td>{{$user->food_processors}}</td>
      <td>{{$user->time}} min</td>
      <td>{{$user->level}}/5</td>
      <td></td>
      <td></td>
      <td>
      <form action="{{ route('users.destroy', $user->user_id) }}" method="POST">

                        <a href="{{ route('users.show', $user->user_id) }}" title="wyświetl" class="btn btn-success">Wyświetl</a>

                        @auth
                        @if (Auth::user()->role=='admin')
                        <a href="{{ route('users.edit', $user->user_id) }}" title="edytuj" class="btn btn-primary">Edytuj</a>

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
{!! $users->links("pagination::bootstrap-4") !!}-

@endsection
