@extends('layout')
 
@section('content')
 
<!DOCTYPE html>
<html>
<head>
<style>
a:link, a:visited {
  background-color: #05ba16;
  color: white;
  padding: 14px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}
 
a:hover, a:active {
  background-color: red;
}
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}
 
td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}
 
tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>
 
<br>
 
<h1 class="title" > Below is the details of player </h1>
 
<table>
  <tr>
    <td>Name: {{ $player->name }}</td>
  </tr>
 
  <tr>
     <td>Sport: {{ $player->sport }}</td>
  </tr>  
  <tr>
     <td>Country: {{ $player->country }}</td>
  </tr> 
 
 </table> 
 
<br>
<p>
 
    <a href="/players/{{ $player->id }}/edit"> Edit Player </a>
 
</p>
 
@endsection