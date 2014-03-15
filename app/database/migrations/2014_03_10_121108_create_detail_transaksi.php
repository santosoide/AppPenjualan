<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetailTransaksi extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		// migrate ttdjual : detail transaksi
		Schema::create('ttdjual',function(Blueprint $table){
			$table->increments('id');
			$table->integer('nota_jual');
			$table->integer('id_barang');
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
