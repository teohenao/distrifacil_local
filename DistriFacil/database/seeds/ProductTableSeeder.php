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
				'nombre' => 'Iphone X',
				'direccion' => 'iphone-x',
				'cantidad'  => 15,
				'tipo' 	=> 'celulares',
				'sabor' 	=> '13',
				'descripcion' 	=> 'Las nuevas funcionalidades de iOS 11 convierten tu iPhone en un dispositivo más poderoso, inteligente y personal que nunca. Ahora podrás hacer más cosas de forma más rápida y sencilla.',
				'precio_unit' 		=> 430.000,
				'precio_paca' 		=> 430.000,
				'imagen' 		=> 'https://switch.com.my/wp-content/uploads/2017/11/iphonex_spacegray.png',
				'visible' 		=> 1,
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime

			],
			[
				'nombre' 			=> 'Moto Z',
				'direccion' 			=> 'moto-z',
				'cantidad'  => 20,
				'tipo' 			=> 'celulares',
				'sabor' 			=> '14',
				'descripcion' 	=> 'El Motorola Moto Z es la nueva generación que reemplaza a la serie Moto X e introduce los Moto Mods, carcasas que agregan funcionalidad extra como proyector, parlantes stereo, una extensión de batería y más, o bien personalizarlo con carcasas de cuero, madera o tela.',

				'precio_unit' 		=> 430.000,
				'precio_paca' 		=> 430.000,
				'imagen' 		=> 'https://media.aws.alkosto.com/media/catalog/product/cache/6/image/69ace863370f34bdf190e4e164b6e123/m/o/motoz-3_1.jpg',
				'visible' 		=> 1,
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime

			],
			[
				'nombre' 			=> 'Huawei P10',
				'direccion' 			=> 'huawei-p10',
				'cantidad'  => 6,
				'tipo' 			=> 'celulares',
				'sabor' 			=> 'plastico',
				'descripcion' 	=> 'la esencia del Mate 9 en formato compacto con cámara doble mejorada',

				'precio_unit' 		=> 430.000,
				'precio_paca' 		=> 430.000,
				'imagen' 		=> 'https://media.aws.alkosto.com/media/catalog/product/cache/6/image/69ace863370f34bdf190e4e164b6e123/p/1/p10lite7_2.jpg',
				'visible' 		=> 1,
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime

			],
			[
				'nombre' 			=> 'Huawei p10',
				'direccion' 			=> 'huawei-p10',
				'cantidad'  => 3,
				'tipo' 			=> 'tipejo',
				'sabor' 			=> 'roca',
			
				'descripcion' 	=> 'ale 2',
				
				'precio_unit' 		=> 430.000,
				'precio_paca' 		=> 430.000,
				'imagen' 		=> 'https://http2.mlstatic.com/celular-huawei-p10-lite-D_NQ_NP_620775-MCO25566596032_052017-F.jpg',
				'visible' 		=> 1,
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime
			],
			[
				'nombre' 			=> 'PC Gamer Xtreme',
				'direccion' 			=> 'Gamer-Xtreme',
				'cantidad'  => 4,
				'tipo' 			=> 'computadores',
				'sabor' 			=> 'plastico',
				'descripcion' 	=> 'Sistema informático para juegos de nivel de rendimiento
El CyberPowerPC Gamer Xtreme está optimizado para juegos.',

				'precio_unit' 		=> 430.000,
				'precio_paca' 		=> 430.000,
				'imagen' 		=> 'https://http2.mlstatic.com/pc-gamer-xtreme-gxivr8020a4-torre-intel-i5-8gddr4-1t-7200rpm-D_NQ_NP_730594-MCO26440760337_112017-F.jpg',
				'visible' 		=> 1,
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime
],
			[
				'nombre' 			=> 'Xiaomi Redmi Note 4',
				'direccion' 			=> 'xiaomi-redminote4',
				'cantidad'  => 30,
				'tipo' 			=> 'celulares',
				'sabor' 			=> 'plastico',
				'descripcion' 	=> 'MIUI 8, permite crear dos perfiles separados en su teléfono con Second Space. Utilice diferentes códigos de acceso o huellas dactilares para acceder a ellos, cada uno con su propio fondo de pantalla, aplicaciones, archivos y fotos.',
                'precio_unit' 		=> 430.000,
				'precio_paca' 		=> 430.000,
				'imagen' 		=> 'https://celularescostarica.co.cr/wp-content/uploads/2018/02/Xiaomi-Redmi-Note-4-en-Costa-Rica.jpg',
				'visible' 		=> 1,
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime
			],

		);

		Product::insert($data);

	}

}