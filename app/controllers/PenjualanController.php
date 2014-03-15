<?php

class PenjualanController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		// tampilkan halaman MasterBarang
		return View::make("pages.trans-penjualan");
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function read()
	{
		// menangkap input parameter pencarian nota_jual
		$query = Input::get('query');

		$data = Penjualan::select(array('id','nota_jual','id_pegawai','tgl_jual','ket','nama_pembeli'))
		->where('nota_jual', 'LIKE', '%'.$query.'%')
		->orderBy('nota_jual')
		->paginate(10);
		return Response::json($data);
	}

	/**
	 * Store a newly created resource in storage.
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
			'nota_jual'    => 'required',
			// 'id_pegawai'   => 'required', // sesuai dengan user sessionnya
			'tgl_jual'     => 'required',
			'nama_pembeli' => 'required',
			'nama_barang'  => 'required',
			'jml'          => 'required'
			);

		$validator = Validator::make(Input::all(), $rules);

		// set data response untuk ditampilkan di alert
		if($validator->fails()){
			$messages = $validator->messages();
			$response = array(
				'Status'       => 'Warning',
				'Msg'          => 'Warning Terjadi Kesalahan, silahkan cek ulang input data anda!',
				'nota_jual'    => $messages->first('nota_jual','No Nota wajib diisi.'),
				'tgl_jual'     => $messages->first('tgl_jual','Tanggal Transaksi wajib diisi.'),
				'nama_pembeli' => $messages->first('nama_pembeli','Nama Pembeli wajib diisi.'),
				'nama_barang'  => $messages->first('id_barang','Nama Barang wajib diisi.'),
				'jml'          => $messages->first('jml','Jumlah Barang wajib diisi.')
				);

			return Response::json($response);

		} else {

			// insert data ke tbl penjualan
			Penjualan::create(array(
				'nota_jual'    => Input::get('nota_jual'),
				'id_pegawai'   => Input::get('id_pegawai'),
				'tgl_jual'     => Input::get('tgl_jual'),
				'nama_pembeli' => Input::get('nama_pembeli'),
				'ket'          => Input::get('ket'),
				));

			// cari harga barang dan stok berdasarkan id_barang
			$id_barang = Input::get('id_barang');
			$jml = Input::get('jml');
			$barang =  DB::table('tmbarang')->where('id', '=', $id_barang)->get();

			// looping array
			foreach ($barang as $value) {
				$harga = $value->harga_satuan * $jml;
				$stok  = $value->stok - $jml;
			}

			// insert data ke tbl detail penjualan
			PenjualanDetail::create(array(
				'nota_jual' => Input::get('nota_jual'),
				'id_barang' => Input::get('id_barang'),
				'jml'       => $jml,
				'nominal'   => $harga, 
				));
			
			// update stok barang
			$data = MasterBarang::find($id_barang);
			$data->stok 			= $stok;
			$data->save();

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
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}