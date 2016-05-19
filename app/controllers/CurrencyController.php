<?php
/**
* 
*/
class CurrencyController extends \BaseController
{
	
	public function __construct()
    {
        $this->beforeFilter('auth');
    }
    public function index()
    {
    	return View::make('currency.create')
    		->with('list_cur', DB::table('exchange_rate_bi')->get())
    		->with('list_cur_code',CommonCode::where('hcode','=','CUR')->where('code','!=','*')->where('code','!=','IDR')->get());
    }
    public function store()
    {
    	$currency = new Currency();
    	$currency->exchange_date = Input::get('exchange_date');
    	$currency->currency_code = Input::get('currency_code');
    	$currency->currency_rate = Input::get('currency_rate');
    	$currency->emp_create = Auth::user()->employee_code;
    	$currency->emp_update = Auth::user()->employee_code;
    	$currency->save();

    	return Redirect::to('/currency');
    }
    public function update()
    {
    	$currency = Currency::find(Input::get('id'));

    	$currency->exchange_date = Input::get('exchange_date');
    	$currency->currency_code = Input::get('currency_code');
    	$currency->currency_rate = Input::get('currency_rate');
    	$currency->emp_update = Auth::user()->employee_code;
    	$currency->save();

    	return Redirect::to('/currency');
    }
    public function delete($exchange_date)
    {
    	$currency = Currency::find($exchange_date);
        $currency->delete();
        
        return Redirect::to('/currency');
    }
}