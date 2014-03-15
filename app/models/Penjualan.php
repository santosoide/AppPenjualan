<?php

Class Penjualan extends Eloquent{
	protected $table ='tthjual';
	public $timestamps = false;
	protected $fillable = array('nota_jual', 'nama_pembeli','tgl_jual','ket','id_pegawai');

	public function detail() {
		return $this->belongsTo('PenjualanDetail','nota_jual');
	}
}