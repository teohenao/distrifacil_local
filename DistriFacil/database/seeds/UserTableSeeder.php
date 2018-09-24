<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
			[
				'tipod' 		=> 'documento',
				'identificacion' => '1094952608',
				'nombre' 	=> 'mateo henao rodriguez',
        'telefonor' 	=> '73701270',
        'direccionr' 	=> 'asturias',
        'nombre_negocio' 	=> 'armenia',
        'email' 	=> 'mateo@hotmail.com',
        'user' 	=> 'teopc',
				'password' 	=> \Hash::make('mateo'),
				'tipo' 		=> 'administrador',
				'active' 	=> 1,
				
				'created_at'=> new DateTime,
				'updated_at'=> new DateTime
			],
      [
        'tipod' 		=> 'documento',
        'identificacion' => '001',
        'nombre' 	=> 'andres mancilla',
        'telefonor' 	=> '0127',
        'direccionr' 	=> 'llanitos',
        'nombre_negocio' 	=> 'armenia',
        'email' 	=> 'mancilla@hotmail.com',
        'user' 	=> 'mancilla',
        'password' 	=> \Hash::make('mancilla'),
        'tipo' 		=> 'administrador',
        'active' 	=> 1,
      
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
      ],
      [
        'tipod' 		=> 'NIT',
        'identificacion' => '1',
        'nombre' 	=> 'cliente 1',
        'telefonor' 	=> '1',
        'direccionr' 	=> 'direccion 1',
        'nombre_negocio' 	=> 'armenia',
        'email' 	=> 'cliente1@hotmail.com',
        'user' 	=> 'cliente1',
        'password' 	=> \Hash::make('cliente1'),
        'tipo' 		=> 'cliente',
        'active' 	=> 1,
       
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
      ],
		);

		User::insert($data);
    }
}
