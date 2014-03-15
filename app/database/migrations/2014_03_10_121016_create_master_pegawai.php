<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMasterPegawai extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		// // migrate tmpegawai
		// Schema::create('tmpegawai',function(Blueprint $table){
		// 	$table->increments('id');
		// 	$table->string('nama_pegawai',255);
		// 	$table->text('ket');
		// });
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
