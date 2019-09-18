@extends('layout')
 
@section('content')
 
</<!DOCTYPE html>
<html>
<head>
   
</head>
<style>
 
 
</style>
<body>
 <br>
<h1 class="title">Players Table</h1>
 
<form action="/players/create">
    <div class="field">
        <div class="control">
           <button type="submit" class="button is-link" >Create New Player</button>
      </div>
   </div>
</form>
 
 
@foreach ($players as $player)
<li> 
    <a href="/players/{{ $player->id }}">
 
    {{ $player->name}}  
 
    </a>
 
</li>
@endforeach
 
 
</body>
</html>
 
 
@endsection