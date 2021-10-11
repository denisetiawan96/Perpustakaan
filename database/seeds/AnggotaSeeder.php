<?php

use App\Anggota;
use Illuminate\Database\Seeder;

class AnggotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         {
	        for ($i = 0; $i < 1; $i++) {
	        	$faker = Faker\Factory::create();

	        	$anggota = new Anggota;
	        	$anggota->name = $faker->name;
	        	$anggota->sex = rand(1,10); 
	        	$anggota->telp = $faker->tollFreePhoneNumber;
	        	$anggota->alamat = $faker->city;
	        	$anggota->email = $faker->email;
	        	
	        	$anggota->save();
	        }
        }
    }
}
