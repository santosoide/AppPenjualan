<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHeaderTransaksi extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		// migrate tthjual : table transaksi penjualan
		Schema::create('tthjual',function(Blueprint $table){
			$table->increments('id');
			$table->integer('nota_jual');
			$table->string('nama_pembeli');
			$table->integer('jml');
			$table->date('tgl_jual');
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
