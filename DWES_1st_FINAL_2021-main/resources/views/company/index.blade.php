@extends('layouts.app')

@section('title', 'UD5. ORM')

@section('content')
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script>
    
    $(document).ready(iniciar);

    function iniciar(){
      var boton = $('button');
      boton.click(mostrar)
    }

    function mostrar(){
      var id = $("#selector").val();
      llamada(id);
    }

    function llamada(id){
      //Realizamos la llamada ajax
      $.ajax({
        //hacemos referencia a la ruta creada en el archivo api.php en la carpeta routes.
        url:'/api/empresas/'+id,

        data: {
            id: 123
        },
        type: 'GET',
        dataType: 'json',
        success: function (json) {
          var borrar = $('.autocreated');
          borrar.remove();
          var tabla = $('table');

          if(json.length==0){
            alert("Ningún alumno está asignado a esta empresa.");
          }
          for(var i =0; i<json.length; i++){
            var row =$('<tr class="autocreated">');
            var nombre = $('<td>');
            nombre.append(json[i].nombre);
            row.append(nombre);

            var nombre = $('<td>');
            nombre.append(json[i].pivot.alumno_id);
              row.append(nombre);
              tabla.append(nombre);

          }
        },
        error: function (xhr, status) {
            alert('ha ocurrido un error.');
        },
      });
    }
  </script>
  <h2>Asignar alumno/a a empresa</h2>

  <form>

    <select name="empresa" id="selector">
      @foreach($empresas as $empresa)
        <option value="{{$empresas->id}}">{{$empresa->name}}</option>
      @endforeach
    </select>

  </form>
  <button type="btn btn-primary">Mostrar Empresas</button>

  <h3>Listado de alumnos y las empresas a las que están asignados:</h3>

  <table>
    <tr>
      <th>Empresa</th>
      <th>Alumno</th>
    </tr>


  </table>
@endsection
