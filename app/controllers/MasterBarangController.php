<?php

class MasterBarangController extends \BaseController {

	/**
	 * Menampilkan data pertama kali di load
	 * saat ini masih melalui ajax saja
	 * 
	 * @return Response
	 */
	public function index()
	{
		// tampilkan halaman MasterBarang
		return View::make("pages.master-barang");
	}

	/**
	 * menampilkan data untuk diproses dengan ajax
	 * parameter pencarian nama_barang, jns_barang
	 *
	 * @return Response dalam bentuk json
	 */
	public function read()
	{
		// menangkap input parameter pencarian nama_barang
		$brg = Input::get('nama');

		$data = MasterBarang::with('jenis')
		->select(array('id','id_jenis_barang','nama_barang','harga_satuan','stok','ket'))
		->where('nama_barang', 'LIKE', '%'.$brg.'%')
		->orderBy('nama_barang')
		->paginate(10);
		
		return Response::json($data);
	}

	/**
	 * insert data ke DB
	 *
	 * @return Response
	 */
	public function store()
	{
		// cek apakah dikirim via form
        if ( Session::token() !== Input::get( '_token' ) ) {
            return Response::json( array(
                'msg' => 'Anda tidak memiliki otentikasi untuk input data!'
            ) );
        }

		// cek validasi
		$rules = array(
			'id_jenis_barang' 	=> 'required',
			'nama_barang' 		=> 'required',
			'harga_satuan' 		=> 'required',
			'stok' 				=> 'required'
			);

		$validator = Validator::make(Input::all(), $rules);

		// set data response untuk ditampilkan di alert
		if($validator->fails()){
			$messages = $validator->messages();
			$response = array(
				'Status' 			=> 'Warning',
				'id_jenis_barang' 	=> $messages->first('id_jenis_barang','Pilih dahulu jenis barang.'),
				'nama_barang' 		=> $messages->first('nama_barang','Nama Barang wajib diisi.'),
				'harga_satuan' 		=> $messages->first('harga_satuan','Harga satuan wajib diisi.'),
				'stok' 				=> $messages->first('stok','Jumlah stok barang wajib diisi.')
				);

			return Response::json($response);

		} else {
			// insert data ke DB
			MasterBarang::create(array(
				'id_jenis_barang' 	=> Input::get('id_jenis_barang'),
				'nama_barang' 		=> Input::get('nama_barang'),
				'harga_satuan' 		=> Input::get('harga_satuan'),
				'stok' 				=> Input::get('stok'),
				'ket' 				=> Input::get('ket'),
				));

			// set response jika sukses
			$response = array(
				'Status' => 'Sukses',
	            'msg' => 'Sukses : Data berhasil disimpan.',
	        );
	 
	        return Response::json($response);	
		}
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		// get data by id
		return Response::json(MasterBarang::find($id));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//check if its our form
        if ( Session::token() !== Input::get( '_token' ) ) {
            return Response::json( array(
                'msg' => 'Anda tidak memiliki otentikasi untuk update data!'
            ) );
        }

		//validate
		$rules = array(
			'id_jenis_barang' 	=> 'required',
			'nama_barang' 		=> 'required',
			'harga_satuan' 		=> 'required',
			'stok' 				=> 'required'
			);

		$validator = Validator::make(Input::all(), $rules);

		// set data response untuk ditampilkan di alert
		if($validator->fails()){
			$messages = $validator->messages();
			$response = array(
				'id_jenis_barang' 	=> Input::get('id_jenis_barang'),
				'nama_barang' 		=> Input::get('nama_barang'),
				'harga_satuan' 		=> Input::get('harga_satuan'),
				'stok' 				=> Input::get('stok'),
				'ket' 				=> Input::get('ket'),
				);

			return Response::json($response);

		} else {

			// update
			$data = MasterBarang::find($id);
			$data->id_jenis_barang 	= Input::get('id_jenis_barang');
			$data->nama_barang 		= Input::get('nama_barang');
			$data->harga_satuan 	= Input::get('harga_satuan');
			$data->stok 			= Input::get('stok');
			$data->ket 				= Input::get('ket');
			$data->save();

			// set response jika sukses
			$response = array(
				'Status' => 'Sukses',
	            'msg' => 'Sukses : Data berhasil diupdate.',
	        );
	 
	        return Response::json($response);	
		}
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		// hapus data
		$data = MasterBarang::find($id);
		$data->delete();

		$response = array(
			'Status' => 'Sukses',
	           'msg' => 'Sukses : Data berhasil dihapus.',
	       );
	 	
	    return Response::json($response);	
	}

}