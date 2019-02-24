<?php
use Illuminate\Database\Seeder;
use sisVentas\User;


class UsersTableSeeder extends Seeder
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
				
				'name' 	=> 'mateo henao rodriguez',
                'email' 	=> 'mateohr880@gmail.com',
                'password' 	=> \Hash::make('mateo'),
			    'created_at'=> new DateTime,
				'updated_at'=> new DateTime
			],
     
		);

		User::insert($data);
    }
}
    