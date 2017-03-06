<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class InvoiceController extends Controller {

	public function __construct()
	{
		$this->middleware('auth');
	}
		/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$invoices = \App\invoice::All();
		return view ('invoice.index',compact('invoices'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view ('invoice.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		\App\invoice::create([
			'user_id' => $request['user_id'],
		]);
		return back();
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$user = \App\User::find($id);
		$invoices = $user->invoices;
		return view ('invoice.show',compact('invoices'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$products = \App\product::All();
		return view ('invoice.edit',compact('products'));
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
