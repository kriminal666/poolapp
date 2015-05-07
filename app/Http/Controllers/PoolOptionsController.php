<?php namespace Poolapp\Http\Controllers;

use Poolapp\Http\Requests;
use Poolapp\Http\Controllers\Controller;

use Request;
use Poolapp\PoolOptions;

class PoolOptionsController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        return PoolOptions::all();
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
        $pooloptions = new PoolOptions(Request::all());
        $pooloptions->save();
        return $pooloptions;
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
        $pooloption= PoolOptions::find($id);
        return $pooloption;
	}

    /**
     * @param $id
     * @return \Illuminate\Support\Collection|null|static
     */
    public function addVote($id)
    {
        $pooloption= PoolOptions::find($id);
        $pooloption->vote++;
        $pooloption->save();
        return $pooloption;
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
        $pooloption= PoolOptions::find($id);
        $pooloption->delete();
	}

}
