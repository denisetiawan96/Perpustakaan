<?php

use App\Buku;
use Illuminate\Database\Seeder;

class BukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 10; $i++) {
        	$faker = Faker\Factory::create();

        	$buku = new Buku;
        	$buku->isbn = rand(111111111,999999999);
        	$buku->judul = $faker->name;
        	$buku->id_penerbit = rand(10001,10002);
        	$buku->id_pengarang = rand(111001,111002);
        	$buku->id_katalog = rand(1001,1002);                
        	$buku->tahun = rand(2018,2021);
        	$buku->qty_stok = rand(10,50);
        	$buku->harga_pinjam = rand(10000,20000);

        	$buku->save();
        }
    }
}
