<?php

class ProductController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function getIndex()
	{

		Session::clear();
		$company = CommonCode::where('code','=','10')->get();
		foreach ($company as $cmp) {
			$company = $cmp->code;
		}
		return View::make('products.create')
			->with('tabs',CommonCode::where('code','LIKE','%'.'B2'.'%')->where('hcode','=','ITP')->where('code','!=','*')->get())
			->with('material',Products::all())
			->with('company',$company);
	}
	public function getCode($code){
		Session::put('code',$code);
		$company = CommonCode::where('code','=','10')->get();
		foreach ($company as $cmp) {
			$company = $cmp->code;
		}
		return View::make('products.create')
			->with('tabs',CommonCode::where('code','LIKE','%'.'B2'.'%')->where('hcode','=','ITP')->where('code','!=','*')->get())
			->with('company',$company)
			->with('material',Products::where('plant','=',1010)->where('material_ktg','=',Session::get('code'))->get());	
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function postCreate()
	{
		$products = new Products();
        $products->company  = Input::get('company');
        $products->plant    = Input::get('plant');
        $products->material_code    = Input::get('material_code');
        $products->material_name    = Input::get('material_name');
        $products->material_ktg    = Input::get('material_ktg');
        $products->material_pack    = strtoupper(Input::get('material_pack'));
        $products->material_size    = Input::get('material_size');
        $products->material_unit    = strtoupper(Input::get('material_unit'));
        $products->material_item    = strtoupper(Input::get('material_item'));
        $products->material_type    = strtoupper(Input::get('material_type'));
        $products->nicklot          = strtoupper(Input::get('nicklot'));
        $products->save();

        return Redirect::to('/products/'.Session::get('code'));
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
	public function update()
	{
		$products = Products::find(Input::get('material_code'));
        $products->company  = Input::get('company');
        $products->plant    = Input::get('plant');
        $products->material_code    = Input::get('material_code');
        $products->material_name    = Input::get('material_name');
        $products->material_ktg    	= Input::get('material_ktg');
        $products->material_pack    = strtoupper(Input::get('material_pack'));
        $products->material_size    = Input::get('material_size');
        $products->material_unit    = strtoupper(Input::get('material_unit'));
        $products->material_item    = strtoupper(Input::get('material_item'));
        $products->material_type    = strtoupper(Input::get('material_type'));
        $products->nicklot          = strtoupper(Input::get('nicklot'));
        $products->save();

        return Redirect::to('/products/'.Session::get('code'));
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($code)
	{
		$pr_code = Products::find($code);
        $pr_code->delete();
        
        return Redirect::to('/products/'.Session::get('code'));
	}


}
