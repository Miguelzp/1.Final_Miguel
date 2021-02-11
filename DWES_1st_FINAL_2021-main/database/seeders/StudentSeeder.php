<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     * @throws \Exception
     */
    public function run()
    {

        $nombres = ['Oliver', 'Harry', 'George', 'Noah', 'Jack', 'Jacob',
            'Leo', 'Oscar', 'Charlie', 'Muhammad'];
        $apellidos = ['Smith', 'Johnson', 'Williams', 'Jones', 'Brown',
            'Davis', 'Miller', 'Wilson', 'Moore', 'Taylor'];
        $generos = ['male', 'female'];
        $correos = ['student1@zubirimanteo.com', 'studesfghdfghdfghdfghnt1@zubirimanteo.com','student12@zubirimanteo.com',
        'student13@zubirimanteo.com', 'student1wert@zubirimanteo.com', 'studensdfgsdt1@zubirimanteo.com',
        'studdfgcvbnent1@zubirimanteo.com','studenpot1@zubirimanteo.com','studemjunt1@zubirimanteo.com',
        'studqent1@zubirimanteo.com',
    ];

        for ($i = 0; $i < 10; $i++) {
            DB::table('alumnos')->insert([
                'nif' => random_int(11111111, 99999999) . chr(rand(65,90)),
                'nombre' => $nombres[random_int(0, 9)],
                'apellido' => $apellidos[random_int(0, 9)],
                'telefono' => random_int(610000000, 699999999),
                'direccion' => "la calle",
                'email' => $correos[random_int(0, 9)],
                'genero' => $generos[random_int(0, 1)],
            ]);
        }
    }
}
