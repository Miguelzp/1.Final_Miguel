<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alumno;
use App\Models\Empresa;
use Illuminate\Database\Eloquent\Relations\Pivot;

class alumnosController extends Controller
{

    public function formularioCrear(){
        return view('student/createStudent');
    }
    public function validar_DNI($dni){

        $letra = substr($dni, -1);
        $numeros = substr($dni, 0, -1);
        if ( substr("TRWAGMYFPDXBNJZSQVHLCKE", $numeros%23, 1) == $letra && strlen($letra) == 1 && strlen ($numeros) == 8 ){
            return true;
        }
        else{
           return false;
        }

    }
    public function create(Request $request){

        $request->validate([

            //'nif' => ['validar_DNI()=true'],
            'nombre' => ['string'],
            'direccion'=>['max:40'],
            'telefono'=>['required','numeric'],
            'email' => ['required', 'email'],
            'genero' => ['required', 'string'],
        ]);

        $alumnos = new Alumno();
        $alumnos->nif = $request->nif;
        $alumnos->nombre = $request->nombre;
        $alumnos->apellido = $request->apellido;
        $alumnos->direccion = $request->direccion;
        $alumnos->telefono = $request->telefono;
        $alumnos->email = $request->email;
        $alumnos->genero = $request->genero;

       Alumno::create([
           'nif' => $alumnos->nif,
           'nombre' => $alumnos->nombre,
           'apellido' => $alumnos->apellido,
           'direccion' => $alumnos->direccion,
           'telefono' => $alumnos->telefono,
           'email' => $alumnos->email,
           'genero' => $alumnos->genero,
       ]);
       return redirect()->route('/');
    }

    public function asignar(){
        $empresas = Empresa::all();
        $alumnos = Alumno::all();
        return view('asignar')->with('empresas', $empresas)->with('alumnos', $alumnos);
    }
    public function asignarEmpresa(Request $request){

        $asignar = new Pivot();
        $asignar->alumno_id = $request->alumno_id;
        $asignar->empresa_id = $request->empresa_id;

        //empresas es el metodo del modelo de la relacion many to many.
        $asignar->empresas()->attach($asignar);

        return redirect('/');
    }
    public function mostrarTodasEmpresas(){
        $empresas = Empresa::all();
        return view('company/index')->with('empresas', $empresas);
    }
    public function mostrarEmpresas($id){

        $empresa = Empresa::findOrFail($id);
        $alumnos = $empresa->alumnos;
       
        return response()->json($alumnos);
    }
}
