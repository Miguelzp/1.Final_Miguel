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

        $names = ['Oliver', 'Harry', 'George', 'Noah', 'Jack', 'Jacob',
            'Leo', 'Oscar', 'Charlie', 'Muhammad'];
        $lastnames = ['Smith', 'Johnson', 'Williams', 'Jones', 'Brown',
            'Davis', 'Miller', 'Wilson', 'Moore', 'Taylor'];
        $genders = ['male', 'female'];

        for ($i = 0; $i < 10; $i++) {
            DB::table('clients')->insert([
                'nif' => random_int(11111111, 99999999) . chr(rand(65,90)),
                'name' => $names[random_int(0, 9)],
                'lastname' => $lastnames[random_int(0, 9)],
                'phone' => random_int(610000000, 699999999),
                'email' => "student@zubirimanteo.com",
                'gender' => $genders[random_int(0, 1)],
            ]);
        }
    }
}
