<?php

class CustomersController extends \BaseController {

	public function getIndex(){
		//Session::clear();
		Session::forget('code');
		return View::make('customer.create')
			->with('hcode',CommonCode::where('hcode','=','CA01')->where('code','!=','*')->get())
			->with('plant',CommonCode::where('hcode','=','CA02')->where('code','!=','*')->get())
			->with('code',CommonCode::where('code','!=',0)->where('hcode','=',10)->get())
			->with('tabs',CommonCode::where('code','LIKE','%'.'B2'.'%')->where('hcode','=','CA03')->where('code','!=','*')->get())
			->with('customers',Customers::all());
	}
	public function getCode($code){
		Session::put('code',$code);
		$company = CommonCode::where('code','=','10')->get();
		foreach ($company as $cmp) {
			$company = $cmp->code;
		}
		return View::make('customer.create')
			->with('hcode',CommonCode::where('hcode','=','CA01')->where('code','!=','*')->get())
			->with('plant',CommonCode::where('hcode','=','CA02')->where('code','!=','*')->get())
			->with('code',CommonCode::where('code','!=',0)->where('hcode','=',10)->get())
			->with('tabs',CommonCode::where('code','LIKE','%'.'B2'.'%')->where('hcode','=','CA03')->where('code','!=','*')->get())
			->with('company',$company)
			->with('customers',Customers::where('plant','=',1010)->where('customer_ktg','=',Session::get('code'))->get());	
	}
	public function postCreate(){
		$hcode = Input::get('company');
        $code  = Input::get('plant');
        $customer_name = Input::get('customer_name');

        $customer = new Customers();
        $customer->company = $hcode;
        $customer->plant = $code;
        $customer->customer_code = Input::get('customer_code');
        $customer->customer_ktg = Input::get('customer_ktg');
        $customer->customer_name = $customer_name;
        $customer->sales_district = Input::get('sales_district');
        $customer->save();

        return Redirect::to('/customers/'.Session::get('code'));
	}
	public function postUpdate(){
		$hcode = Input::get('company');
        $code  = Input::get('plant');
        $customer_name = Input::get('customer_name');

		$customer = Customers::find(Input::get('customer_code'));
        $customer->company = $hcode;
        $customer->plant = $code;
        $customer->customer_code = Input::get('customer_code');
        $customer->customer_ktg = Input::get('customer_ktg');
        $customer->customer_name = $customer_name;
        $customer->sales_district = Input::get('sales_district');
        $customer->save();

        return Redirect::to('/customers/'.Session::get('code'));
	}
	public function destroy($customer_code){
		$customer = Customers::find($customer_code);
		$customer->delete();

		return Redirect::to('/customers/'.Session::get('code'));
	}
}
