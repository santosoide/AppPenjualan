<?php

Class JenisBarang extends Eloquent{
	protected $table ='tmjnsbarang';
	public $timestamps = false;
	protected $fillable = array('nama_jenis', 'ket');

	public function barang() {
		return $this->hasOne('MasterBarang','id_jenis_barang');
	}

}