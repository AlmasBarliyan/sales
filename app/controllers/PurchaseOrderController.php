<?php

class PurchaseOrderController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function getIndex()
	{
		$po = DB::table('ss_inventory')->join('ss_po', 'ss_inventory.material_code', '=', 'ss_po.material_code')->distinct()->select('ss_po.po_no')->get();
		return View::make('po.create')
			->with('customers',Customers::all())
			->with('products',Products::all())
			->with('storages',CommonCode::where('hcode','=',70)->where('code','!=',701)->where('code','!=',702)->where('code','!=',703)->where('code','!=',704)->where('code','!=',0)->get())
			->with('purchase_order',$po);
	}

	public function postCreate(){
		
		
		$insert = array();
		foreach (Input::get('material_name') as $key => $material_name) {
			$insert[$key]['material_name'] = $material_name;
		}
		foreach (Input::get('unit_price') as $key => $unit_price) {
			$insert[$key]['unit_price'] = $unit_price;
		}
		foreach (Input::get('order_qty') as $key => $order_qty) {
			$insert[$key]['order_qty'] = $order_qty;
		}
		foreach (Input::get('so_date') as $key => $so_date) {
			$insert[$key]['so_date'] = $so_date;
		}
		foreach (Input::get('etd') as $key => $etd) {
			$insert[$key]['etd'] = $etd;
		}
		foreach (Input::get('source') as $key => $source) {
			$insert[$key]['source'] = $source;
		}
		foreach (Input::get('eta_po') as $key => $eta_po) {
			$insert[$key]['eta_po'] = $eta_po;
		}
		$company = 8888;
		$plant = 8888;
		//$so_date = Input::get('so_date');
		//$etd = Input::get('etd');
		//$source = Input::get('source');
		//$eta_po = Input::get('eta_po');
		$customer_name = Input::get('customer_name');
		$po_no = Input::get('po_no');
		$po_date = Input::get('po_date');
		$customers_code = Customers::where('customer_name','=',$customer_name)->get();
		
		foreach ($insert as $row ) {
			$po = new PurchaseOrder();
			$po->company 	= $company;
			$po->plant 		= $plant;
			$po->so_date	= $row['so_date'];
			$po->etd		= $row['etd'];
			$po->eta_po		= $row['eta_po'];
			$po->po_date	= $po_date;
			$po->po_no 		= $po_no;
			$po->customer_name 	= $customer_name;
			foreach ($customers_code as $cc) {
				$po->customer_code 	= $cc->customer_code;
			}
			foreach (Products::where('material_name','=',$row['material_name'])->get() as $mc) {
				$po->material_code	= $mc->material_code;	
			}
			$po->material_name 	= $row['material_name'];
			$po->source 		= $row['source'];
			$po->order_qty		= $row['order_qty'];
			$po->unit_price		= $row['unit_price'];
			$po->include 		= $row['order_qty'] * $row['unit_price'];
			$po->exclude		= ($row['order_qty'] * $row['unit_price']) * 1.1;
			$po->save();
		}
		/*$po = PurchaseOrder::create([
			'company'		=> $company,
			'plant'			=> $plant,
			'so_date'		=> $so_date,
			'etd'			=> $etd,
			'source'		=> $source,
			'eta_po'		=> $eta_po,
			'customer_name'	=> $customer_name,
			'po_no'		=> $po_no,
			'po_date'	=> $po_date
			]);
		foreach ($insert as $row ) {
			$po->PoDetail()->attach($po_no,[
				'po_no'		=> $po_no,
				'material_name' => $row['material_name'],
				'order_qty'	=> $row['order_qty'],
				'unit_price'=> $row['unit_price'],
				'include' => $row['order_qty'] * $row['unit_price'],
				'exclude' => ($row['order_qty'] * $row['unit_price']) * 1.1
				]);x
			
		}*/

		

		return Redirect::to('/purchase-order');
	}
	public function postData() {
        switch(Input::get('type')):
            case 'dl':
            	$return = "<option></option>";
                foreach(PurchaseOrder::where('po_no','=',Input::get('id'))->get() as $row)
                //	$return = "<input value='$row->material_name'>";
                	$return .= "<option>$row->material_name</option>";
                    /*$return = "<div class='col-md-6 col-xs-12'>
				    	        <div class='x_content'>
				    	          <br />
				    	            <div class='form-group'>
				    	              <label class='control-label col-md-3 col-sm-3 col-xs-12'>PO Number</label>
				    	              <div class='col-md-9 col-sm-9 col-xs-12'>
				    	                <input type='text' name='po_no' class='form-control' placeholder='5000914537' value='$row->po_no'>
				    	              </div>
				    	            </div>
				    	            <div class='form-group'>
				    	              <label class='control-label col-md-3 col-sm-3 col-xs-12'>Customer Name</label>
				    	              <div class='col-md-9 col-sm-9 col-xs-12'>
				    	              	  <input type='text' name='po_no' class='form-control' placeholder='5000914537' value='$row->customer_name'>
				    	              </div>
				    	            </div>
				    	        </div>
				    		    </div>
				    		    <div class='col-md-6 col-xs-12'>
				    		        <div class='x_content'>
				    		          <br />
				    		            <div class='form-group'>
				    		              <label class='control-label col-md-3 col-sm-3 col-xs-12'>PO Date </label>
				    		              <div class='col-md-9 col-sm-9 col-xs-12'>
				    		                <input type='text' name='po_date' class='form-control' id='single_cal2' placeholder='03/31/2016' aria-describedby='inputSuccess2Status2' value='$row->po_date'>
				    		              </div>
				    		            </div>
				    		        </div>
				    		    </div>
				    		    <div class='col-md-12 col-xs-12'>
					              <div class='x_content'>
					      		    	<div class='form-group'>
					                  <table class='table table-striped responsive-utilities jambo_table bulk_action' id='myTable'>
					                    <thead>
					                      <tr class='headings'>
					                      	<th class='column-title'>Product Name</th>
					                      	<th class='column-title'>Order Qty </th>
					                        <th class='column-title'>Unit Price </th>
					                      	<th class='column-title'>SO Date </th>
					                        <th class='column-title'>ETD Date </th>
					                        <th class='column-title'>ETA di PO </th>
					                      	<th class='column-title'>Sourching </th>
					                      </tr>
					                    </thead>
					                    <tbody>
					                    	<?php foreach ($row->po_no as $pn) ;?> 
						                    <tr>
						                    	<td>$row->material_name</td>
						                    	<td>$row->order_qty</td>
						                    	<td>$row->unit_price</td>
						                    	<td>$row->so_date</td>
						                    	<td>$row->etd</td>
						                    	<td>$row->eta_po</td>
						                    	<td>$row->source</td>
						                    </tr>
						                	<?php endforeach ?>
					                    </tbody>
					                  </table>
					                </div>
					      		      <div class='col-md-12 col-sm-12 col-xs-12' style='text-align: center'>
					      		      	<div class='ln_solid'></div>
					                  <button type='submit' class='btn btn-primary'>Cancel</button>
					                  <button type='submit' class='btn btn-success'>Submit</button>
					                </div>
					              </div>
					              </div>";*/
                return $return;
                
            break;
        endswitch;    
    }
}
