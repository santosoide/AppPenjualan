<?php

class JenisBarangController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		// tampilkan halaman Jenis Barang
		return View::make("pages.jenis-barang");
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function read()
	{
		// menangkap input parameter pencarian nama_barang dan jns_barang
		$brg = Input::get('nama');

		$data = JenisBarang::select(array('id','nama_jenis','ket'))
		->where('nama_jenis', 'LIKE', '%'.$brg.'%')
		->orderBy('id')
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
			'nama_jenis' => 'required',
			);

		$validator = Validator::make(Input::all(), $rules);

		// set data response untuk ditampilkan di alert
		if($validator->fails()){
			$messages = $validator->messages();
			$response = array(
				'Status' 		=> "Warning",
				'nama_jenis' 	=> $messages->first('nama_jenis'),
				);

			return Response::json($response);

		} else {
			// insert data ke DB
			JenisBarang::create(array(
				'nama_jenis' => Input::get('nama_jenis'),
				'ket' => Input::get('ket'),
				));

			// set response jika sukses
			$response = array(
				'Status' 	=> 'Sukses',
	            'msg' 		=> 'Sukses : Data berhasil disimpan.',
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
		// get data by id
		return Response::json(JenisBarang::find($id));
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
			'nama_jenis' 		=> 'required',
			);

		$validator = Validator::make(Input::all(), $rules);

		// set data response untuk ditampilkan di alert
		if($validator->fails()){
			$messages = $validator->messages();
			$response = array(
				'nama_jenis' 		=> Input::get('nama_barang'),
				'ket' 				=> Input::get('ket'),
				);

			return Response::json($response);

		} else {

			// update
			$data = JenisBarang::find($id);
			$data->nama_jenis 		= Input::get('nama_jenis');
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
		//
	}

}