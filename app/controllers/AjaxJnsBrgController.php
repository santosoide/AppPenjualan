<?php

class AjaxJnsBrgController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		// autocomplete jenis barang
		$param = Input::get('term');
		$data = DB::table('tmjnsbarang')
							->select('id','nama_jenis')
							->where('nama_jenis','LIKE','%'.$param.'%')
							->get();
		
		return Response::json($data);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function autocomplete()
	{
		// menangkap parameter dari ajax 'term'
		$term = Input::get('term');
		$data = MasterBarang::select(array('id','nama_barang'))
		->where('nama_barang','LIKE','%'.$term.'%')
		->get();

		foreach ($data as $value)
		{
			$result[] = array(
			'id' => $value->id,
			'value' => $value->nama_barang
			);    
			
		}							
		
		return Response::json($result);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
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