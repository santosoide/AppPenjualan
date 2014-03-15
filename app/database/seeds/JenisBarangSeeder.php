<?php

class JenisBarangSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$barang = [
			// jenis 1=bikers_fashion 2=bolts 3=box 4=electrical 5=cares 6=gear 7=alarm 8=other parts 9=suspension 10=tools 11=tires
			['nama_jenis' => 'Fashion','ket'=>''],
			['nama_jenis' => 'Bolts','ket'=>''],
			['nama_jenis' => 'Box','ket'=>''],
			['nama_jenis' => 'Bulb dan Electrical','ket'=>''],
			['nama_jenis' => 'Cares','ket'=>''],
			['nama_jenis' => 'Gear','ket'=>''],
			['nama_jenis' => 'Alarm','ket'=>''],
			['nama_jenis' => 'Other parts','ket'=>''],
			['nama_jenis' => 'Suspension','ket'=>''],
			['nama_jenis' => 'Tools','ket'=>''],
			['nama_jenis' => 'Tires','ket'=>'']
		];

		DB::table('tmjnsbarang')->insert($barang);
	}

}