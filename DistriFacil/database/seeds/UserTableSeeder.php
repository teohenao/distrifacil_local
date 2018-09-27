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
        'direccionr' 	=> 'asturias casa 21',
        'nombre_negocio' 	=> 'distrifacil.inc',
        'email' 	=> 'mateohr880@gmail.com',
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
        'telefonor' 	=> '3176778767',
        'direccionr' 	=> 'calarca llanitos 23-21',
        'nombre_negocio' 	=> 'ventanilla ukelele',
        'email' 	=> 'm-teo770@hotmail.com',
        'user' 	=> 'mancilla',
        'password' 	=> \Hash::make('mancilla'),
        'tipo' 		=> 'cliente',
        'active' 	=> 1,

        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
      ],
      [
        'tipod' 		=> 'documento',
        'identificacion' => '12120102',
        'nombre' 	=> 'fabian ernesto',
        'telefonor' 	=> '3141241222',
        'direccionr' 	=> 'la isabella casa 43-21',
        'nombre_negocio' 	=> 'tiendita la isabela',
        'email' 	=> 'mhenaor@uqvirtual.edu.co',
        'user' 	=> 'fabi_ernesto',
        'password' 	=> \Hash::make('cliente1'),
        'tipo' 		=> 'cliente',
        'active' 	=> 1,

        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
      ],
      [
        'tipod' 		=> 'documento',
        'identificacion' => '121201',
        'nombre' 	=> 'gloria bermudez',
        'telefonor' 	=> '3141241242',
        'direccionr' 	=> 'el rincon casa 43-21',
        'nombre_negocio' 	=> 'minimarket la lata',
        'email' 	=> 'teohenao08@gmail.com',
        'user' 	=> 'gloris',
        'password' 	=> \Hash::make('cliente1'),
        'tipo' 		=> 'cliente',
        'active' 	=> 1,

        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
      ],
      [
        'tipod' 		=> 'documento',
        'identificacion' => '1212032',
        'nombre' 	=> 'john henrry',
        'telefonor' 	=> '31412412212',
        'direccionr' 	=> 'estancia casa 7',
        'nombre_negocio' 	=> 'distrifacil',
        'email' 	=> 'distrifacilarmenia@gmail.com',
        'user' 	=> 'disitrifacil',
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
