<?php

Class PenjualanDetail extends Eloquent{
	protected $table ='ttdjual';
	public $timestamps = false;
	protected $fillable = array('nota_jual', 'id_barang','jml','nominal');

	// public function jual() {
	// 	return $this->hasOne('Penjualan');
	// }
}