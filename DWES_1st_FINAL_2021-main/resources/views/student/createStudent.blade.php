@extends('layouts.app')

@section('title', 'UD5. ORM')

@section('content')

  <h4>Nuevo/a alumno/a</h4>
  <form action="{{route('crear')}}" method="post">
    @csrf

    <p>NIF:</p>
    <input type="string" name="nif" >
    <br>

    <p>Nombre:</p>
    <input type="string" name="nombre" >
    <br>

    <p>Apellido:</p>
    <input type="string" name="apellido" >
    <br>

    <p>Direccion:</p>
    <input type="string" name="direccion" >
    <br>

    <p>Telefono:</p>
    <input type="number" name="nombre" >
    <br>

    <p>Email:</p>
    <input type="email" name="email" >
    <br>

    <p>Genero:</p>
    <input type="string" name="genero">
    <br>
    <!--
    <select name="genero">
      <option>Hombre</option>
      <option>Mujer</option>
      <option>Otros</option>
    </select>
  -->
    <input type="submit" value="crear Alumno">
  </form>
  <br>

@endsection
