@extends('layouts.app')

@section('content')

<div class="row">
       <div class="col-lg-12 margin-tb">
           <div class="pull-left">
               <h1>Przepisy</h1>
           </div>
           <div class="pull-right">
               <center><a class="btn btn-warning" href="{{ route('users.create') }}" title="Dodaj przepis">Dodaj nowy przepis</a></center><br>
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
       @foreach($user as $user)
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
                        @if (Auth::user()->role=='admin' or Auth::user()->name==$user->owner)
                        <a href="{{ route('users.edit', $user->id) }}" title="edytuj" class="btn btn-primary">Edytuj</a>

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


@endsection
