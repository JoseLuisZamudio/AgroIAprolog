<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(DB::table('users')->get()->count() == 0){

            DB::table('users')->insert([

                [
                    'persona_id' => 1,
                    'nombre' => 'Felipe Antonio Ramierez',
                    'matricula' => '016016016',
                    'password' => Hash::make('123456'),
                    'confirmed' => 1,
                    'confirmation_code' => null,
                    'remember_token' => null,
                    'foto' => 'bsbmd/imsges/user.png',
                    'carrera' => 'SISTEMAS',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                    'password_changed_at' =>  date('Y-m-d H:i:s'),
                ],
[
                    'persona_id' => 2,
                    'nombre' => 'Juan Perez Perez',
                    'matricula' => '015015015',
                    'password' => Hash::make('123456'),
                    'confirmed' => 1,
                    'confirmation_code' => null,
                    'remember_token' => null,
                    'foto' => 'bsbmd/imsges/user.png',
                    'carrera' => 'MECATRONICA',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                    'password_changed_at' =>  date('Y-m-d H:i:s'),
                ],

            ]);

        } else { echo "Error :: La tabla users no está vacia."; }
    }
}
