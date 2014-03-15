<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJnsBarang extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{	
		// migrate tmjnsbarang : table jenis barang
		Schema::create('tmjnsbarang',function(Blueprint $table){
			$table->increments('id');
			$table->string('nama_jenis',255);
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
