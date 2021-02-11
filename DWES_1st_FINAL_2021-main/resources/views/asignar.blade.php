@extends('layouts.app')

@section('title', 'UD5. ORM')

@section('content')

<h2>Asignar una empresa a un alumno</h2>

<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">id de las empresas</th>
      <th scope="col">Nombre de la empresa</th>
    </tr>
  </thead>
  <tbody>
    @foreach($empresas as $empresa)
      <tr>
        <th scope="row">{{$empresa->id}}</th>
        <td>{{$empresa->nombre}}</td>
      </tr>
    @endforeach
  </tbody>
</table>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">id de los alumnos</th>
      <th scope="col">Nombre del alumno</th>
    </tr>
  </thead>
  <tbody>
  @foreach($alumnos as $alumno)
      <tr>
        <th scope="row">{{$alumno->id}}</th>
        <td>{{$alumno->nombre}}</td>
      </tr>
    @endforeach
  </tbody>
</table>

<form action="asignarEmpresa" method="post">
  @csrf
  
  <p>ID del alumno:</p>
  <input type="number" name="alumno_id">
  <br>

  <p>ID de la empresa:</p>
  <input type="number" name="empresa_id">
  <br>

  <input type="submit" value="asignar empresa">
</form>

@endsection
