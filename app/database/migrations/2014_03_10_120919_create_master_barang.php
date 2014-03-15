<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMasterBarang extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		// migrate tmbarang : table master barang
		Schema::create('tmbarang',function(Blueprint $table){
			$table->increments('id');
			$table->smallInteger('id_jenis_barang');
			$table->string('nama_barang',255);
			$table->integer('harga_satuan');
			$table->smallInteger('stok');
			$table->text('ket');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
	}

}
