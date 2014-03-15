<?php

Class MasterBarang extends Eloquent{
	protected $table ='tmbarang';
	public $timestamps = false;
	protected $fillable = array('id_jenis_barang', 'nama_barang','harga_satuan','stok','ket');

	public function jenis() {
		return $this->belongsTo('JenisBarang','id_jenis_barang');
	}
}