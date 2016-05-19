<?php

class PurchaseOrderController extends \BaseController {
	public function __construct()
    {
        $this->beforeFilter('auth');
    }
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function getIndex()
	{

		/*$po = DB::table('ss_invdaily')->join('ss_po', 'ss_invdaily.material_code', '=', 'ss_po.material_code')->distinct()->select('ss_po.po_no')->get();*/
		$currency = (DB::table('cd_code')->join('exchange_rate_bi', 'exchange_rate_bi.currency_code', '=', 'cd_code.code')->get());
		$purchase_order = DB::select(DB::raw("SELECT * FROM ss_pomaster p LEFT JOIN ss_customers c1 ON p.customer_code = c1.customer_code LEFT JOIN ss_customerdtl c2 ON p.ship_to_party = c2.ship_to_party LEFT JOIN cd_code c3 ON p.source = c3.code"));
		$purchase_order_detail = DB::select(DB::raw("SELECT * FROM ss_pomaster p LEFT JOIN ss_podetail d ON p.po_no = d.po_no"));
		return View::make('po.po')
			->with('customers',Customers::where('customer_ktg','=',Auth::user()->emp_ktg)->get())
			->with('source',CommonCode::where('code','!=','*')->where('hcode','LIKE','%'.'PB'.'%')->get())
			//->with('currency',CommonCode::where('code','!=','*')->where('hcode','LIKE','%'.'CUR'.'%')->get());
			->with('currency', $currency)
			->with('purchase_order',$purchase_order)
			->with('po_edit',$purchase_order_detail);
			/*->with('customers',Customers::all())
			->with('products',Products::all())
			->with('storages',CommonCode::where('hcode','=',70)->where('code','!=',701)->where('code','!=',702)->where('code','!=',703)->where('code','!=',704)->where('code','!=',0)->get())
			->with('purchase_order',$po);*/
	}

	public function postCreate(){
		
		
		$insert = array();
		foreach (Input::get('material_code') as $key => $material_code) {
			$insert[$key]['material_code'] = $material_code;
		}
		foreach (Input::get('price_idr') as $key => $price_idr) {
			$insert[$key]['price_idr'] = $price_idr;
		}
		foreach (Input::get('price_usd') as $key => $price_usd) {
			$insert[$key]['price_usd'] = $price_usd;
		}
		foreach (Input::get('qty') as $key => $qty) {
			$insert[$key]['qty'] = $qty;
		}
		foreach (Input::get('exclude_idr') as $key => $exclude_idr) {
			$insert[$key]['exclude_idr'] = $exclude_idr;
		}
		foreach (Input::get('exclude_usd') as $key => $exclude_usd) {
			$insert[$key]['exclude_usd'] = $exclude_usd;
		}
		foreach (Input::get('include') as $key => $include) {
			$insert[$key]['include'] = $include;
		}
		
		$company = Auth::user()->company;
		$plant = Auth::user()->plant;
		$customer_code = Input::get('customer');
		$po_no = Input::get('po_no');
		$po_date = Input::get('po_date');
		$eta_po = Input::get('eta_po');
		$ship_to_party = Input::get('ship_to_party');
		$source = Input::get('source');
		$currency_rate = Input::get('currency_rate');
		$currency_code = Input::get('currency_code');
		$user_create = Auth::user()->employee_code;
		$user_update = Auth::user()->employee_code;
		$po = PurchaseOrder::create([
        'company'       => $company,
        'plant'         => $plant,
        'po_no'			=> $po_no,
        'po_date'       => $po_date,
        'eta_po'        => $eta_po,
        'customer_code' => $customer_code,
        'ship_to_party' => $ship_to_party,
        'source'		=> $source,
        'currency_code' => $currency_code,
        'currency_rate' => $currency_rate,
        'user_create'   => $user_create,
        'user_update'   => $user_update
        ]);
		foreach ($insert as $row ) {
			$po->PoDetail()->attach($po_no,[
				'po_no'			=> $po_no,
				'material_code' => $row['material_code'],
				'qty'			=> $row['qty'],
				'u_price_idr'	=> $row['price_idr'],
				'u_price_usd'	=> $row['price_usd'],
				'exclude_idr'	=> $row['exclude_idr'],
				'exclude_usd'	=> $row['exclude_usd'],
				'include'		=> $row['include'],
				]);
		}

		return Redirect::to('/purchase-order');
	}
	public function postData() {
        switch(Input::get('type')):
            case 'dl':
            	$return = "<option></option>";
                foreach(DB::table('ss_customerdtl')->where('sold_to_party','=',Input::get('id'))->get() as $row)
                	$return .= "<option value='$row->ship_to_party'>$row->ship_to_party - $row->ship_name</option>";
                return $return;
                
            break;
        endswitch;    
    }
    public function postData1() {
        switch(Input::get('type')):
            case 'currency_rate':
            	//$return = "<option></option>";
                foreach(DB::table('exchange_rate_bi')->where('currency_code','=',Input::get('id'))->get() as $row)
                	Session::put('cur_cod',$row->currency_rate);
                	$return = "<input type='text' value='$row->currency_rate' id='currency_rate' name='currency_rate'>";
                return $return;
                
            break;
        endswitch;    
    }
}
