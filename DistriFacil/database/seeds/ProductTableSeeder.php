<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Product;

class ProductTableSeeder extends Seeder {

	/**
	 * Run the Products table seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$data = array(
			[
				'nombre' => 'glacial soda 400 ml',
				'direccion' => 'soda-400',
				'cantidad'  => 100,
				'tipo' 	=> 'gaseosa',
				'sabor' 	=> 'soda',
				'descripcion' 	=> 'deliciosa soda de tamaño personal precio sugerido a la venta $800',

				'precio' 		=> 12.000,
				'imagen' 		=> 'http://glacial.com.co/wp-content/uploads/2017/05/sodas-260x260.png',
				'visible' 		=> 1,
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime

			],
			[
				'nombre' 			=> 'glacial manzana 400 ml',
				'direccion' 			=> 'manzana-400',
				'cantidad'  => 100,
				'tipo' 			=> 'gaseosa',
				'sabor' 			=> 'manzana',
				'descripcion' 	=> 'deliciosa manzana glacial 400 ml precio sugerido $800',
			'precio' 		=> 12.000,
				'imagen' 		=> 'http://glacial.com.co/wp-content/uploads/2017/05/manaznamix-260x260.png',
				'visible' 		=> 1,
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime

			],
			[
				'nombre' 			=> 'glacial lima limon 400 ml',
				'direccion' 			=> 'limalimon-400',
				'cantidad'  => 100,
				'tipo' 			=> 'gaseosa',
				'sabor' 			=> 'lima limon',
				'descripcion' 	=> 'deliciosa lima limon glacial 400 ml precio sugerido $800',

					'precio' 		=> 12.000,
				'imagen' 		=> 'http://glacial.com.co/wp-content/uploads/2017/05/limalimon-260x260.png',
				'visible' 		=> 1,
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime

			],
			[
				'nombre' 			=> 'glacial kola roja 400 ml',
				'direccion' 			=> 'kolaroja-400',
				'cantidad'  => 100,
				'tipo' 			=> 'gaseosa',
				'sabor' 			=> 'kola roja',
				'descripcion' 	=> 'deliciosa lima kola roja glacial 400 ml precio sugerido $800',
			'precio' 		=> 12.000,
				'imagen' 		=> 'http://glacial.com.co/wp-content/uploads/2017/05/kolaroja-260x260.png',
				'visible' 		=> 1,
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime

			],
			[
				'nombre' 			=> 'glacial kola 400 ml',
				'direccion' 			=> 'kola-400',
				'cantidad'  => 100,
				'tipo' 			=> 'gaseosa',
				'sabor' 			=> 'kola',
				'descripcion' 	=> 'deliciosa lima kola glacial 400 ml precio sugerido $800',
			'precio' 		=> 12.000,
				'imagen' 		=> 'http://glacial.com.co/wp-content/uploads/2017/05/kola-260x260.png',
				'visible' 		=> 1,
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime

			],
			[
				'nombre' 			=> 'glacial gran cola 400 ml',
				'direccion' 			=> 'grancola-400',
				'cantidad'  => 100,
				'tipo' 			=> 'gaseosa',
				'sabor' 			=> 'gran cola',
				'descripcion' 	=> 'deliciosa gran cola glacial 400 ml precio sugerido $800',
			'precio' 		=> 12.000,
				'imagen' 		=> 'http://glacial.com.co/wp-content/uploads/2017/05/grancola-260x260.png',
				'visible' 		=> 1,
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime

			],
			[
				'nombre' 			=> 'glacial uva 400 ml',
				'direccion' 			=> 'uva-400',
				'cantidad'  => 100,
				'tipo' 			=> 'gaseosa',
				'sabor' 			=> 'uva',
				'descripcion' 	=> 'deliciosa uva glacial 400 ml precio sugerido $800',
			'precio' 		=> 12.000,
				'imagen' 		=> 'http://glacial.com.co/wp-content/uploads/2017/05/uva-260x260.png',
				'visible' 		=> 1,
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime

			],
		);

		Product::insert($data);

	}

}
