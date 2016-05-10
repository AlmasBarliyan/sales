<?php

class CustomersController extends \BaseController {

	public function getIndex(){
		Session::clear();
		return View::make('customer.create')
			->with('code',CommonCode::where('code','!=',0)->where('hcode','=',10)->get())
			->with('tabs',CommonCode::where('code','LIKE','%'.'B2'.'%')->where('hcode','=','ITP')->where('code','!=','*')->get())
			->with('customers',Customers::all());
	}
	public function getCode($code){
		Session::put('code',$code);
		$company = CommonCode::where('code','=','10')->get();
		foreach ($company as $cmp) {
			$company = $cmp->code;
		}
		return View::make('customer.create')
			->with('code',CommonCode::where('code','!=',0)->where('hcode','=',10)->get())
			->with('tabs',CommonCode::where('code','LIKE','%'.'B2'.'%')->where('hcode','=','ITP')->where('code','!=','*')->get())
			->with('company',$company)
			->with('customers',Customers::where('plant','=',1010)->where('customer_ktg','=',Session::get('code'))->get());	
	}
	public function postCreate(){
		$co_cd = DB::table('ss_customers')->max('customer_code');
		if ($co_cd=="") {
			$co_cd = 500001;
		}else{
			$co_cd += 1;
		}
		
		$hcode = Input::get('company');
        $code  = Input::get('plant');
        $customer_name = Input::get('customer_name');

        $customer = new Customers();
        $customer->company = $hcode;
        $customer->plant = $code;
        $customer->customer_code = $co_cd;
        $customer->customer_name = $customer_name;
        $customer->desc1 = Input::get('desc1');
        $customer->desc2 = Input::get('desc2');
        $customer->save();

        return Redirect::to('/customers');
	}
}
