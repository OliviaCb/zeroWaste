@extends('layouts.app')

@section('content')

<h1>Przepisy</h1>
@if(count($recipes)>1)
@foreach($recipes as $recipe)
<div class="well">
    <h3>{{$recipe->title}}</h3>
</div>

@endforeach
@else

@endif
@endsection