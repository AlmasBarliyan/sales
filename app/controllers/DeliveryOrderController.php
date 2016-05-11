<?php

class DeliveryOrderController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//$po = DB::table('ss_po')->distinct()->select('po_no')->get();
		//$po = array(''=>'');
		/*foreach (DB::table('ss_invdaily')->join('ss_po', 'ss_invdaily.material_name', '=', 'ss_po.material_name')->select('ss_po.po_no','ss_po.material_name')->get() as $row) {
		 	$po[$row->material_name] = $row->material_name;
		 }*/ 
		
		$po = DB::table('ss_invdaily')->join('ss_po', 'ss_invdaily.material_code', '=', 'ss_po.material_code')->distinct()->select('ss_po.po_no','ss_po.material_code')->distinct()->get();
		
		return View::make('do.create')
			->with('purchase_order',$po);
	}

	public function create(){
		
		date_default_timezone_set("Asia/Jakarta");
            $num_of_ids = 1000; //Number of "ids" to generate.
            $i = 0; //Loop counter.
            $n = 0; //"id" number piece.
            $l = "DO"; //"id" letter piece.

            while ($i <= $num_of_ids) { 
                //echo $id . "<br>"; //Print out the id.
                if (DB::table('ss_domaster')->whereNotNull('do_no')->get()) {
                 
                $cek_id = DB::table('ss_domaster')->select('do_no')->get();
                foreach ($cek_id as $ck) {
                    $aa = substr($ck->do_no, -3,3);
                    $dt = substr($ck->do_no, -12,8);

                    if ($aa == $aa) {
                        if ($dt == date("Ymd")) {
                        	if (Input::get('source') == "A") {
	                            $i++; $aa++; //Letters can be incremented the same as numbers. Adding 1 to "AAA" prints out "AAB".
	                            $id = $l .date("Ymd")."A". sprintf("%03d", $aa); //Create "id". Sprintf pads the number to make it 4 digits.             
	                            if ($n == 999) { //Once the number reaches 9999, increase the letter by one and reset number to 0.
	                                $n = 0;
	                            }
	                        }else{
	                        	$i++; $aa++; //Letters can be incremented the same as numbers. Adding 1 to "AAA" prints out "AAB".
	                            $id = $l .date("Ymd")."B".sprintf("%03d", $aa); //Create "id". Sprintf pads the number to make it 4 digits.             
	                            if ($n == 999) { //Once the number reaches 9999, increase the letter by one and reset number to 0.
	                                $n = 0;
	                            }
	                        }
                        }else{
                        	if (Input::get('source') == "A") {
	                            $id = $l .date("Ymd")."A". sprintf("%03d", $n-1); //Create "id". Sprintf pads the number to make it 4 digits.
	                            if ($n == 999) { //Once the number reaches 9999, increase the letter by one and reset number to 0.
	                                $n = 0;
	                            }
	                            $i++; $n++; //Letters can be incremented the same as numbers. Adding 1 to "AAA" prints out "AAB".
	                        }else{
	                        	$id = $l .date("Ymd")."B". sprintf("%03d", $n-1); //Create "id". Sprintf pads the number to make it 4 digits.
	                            if ($n == 999) { //Once the number reaches 9999, increase the letter by one and reset number to 0.
	                                $n = 0;
	                            }
	                            $i++; $n++; //Letters can be incremented the same as numbers. Adding 1 to "AAA" prints out "AAB".
	                        }
                        }
                        
                    }
                    else{
                    	if (Input::get('source') == "A") {
	                        $id = $l .date("Ymd")."A". sprintf("%03d", $n); //Create "id". Sprintf pads the number to make it 4 digits.            
	                        if ($n == 999) { //Once the number reaches 9999, increase the letter by one and reset number to 0.
	                            $n = 0;
	                        }

	                        $i++; $n++; //Letters can be incremented the same as numbers. Adding 1 to "AAA" prints out "AAB".
            			}else{
            				$id = $l .date("Ymd")."B". sprintf("%03d", $n); //Create "id". Sprintf pads the number to make it 4 digits.            
	                        if ($n == 999) { //Once the number reaches 9999, increase the letter by one and reset number to 0.
	                            $n = 0;
	                        }

	                        $i++; $n++; //Letters can be incremented the same as numbers. Adding 1 to "AAA" prints out "AAB".
            			}
                    }
                }
                }else{
                if (Input::get('source') == "A") {
                	
	                $id = $l .date("Ymd")."A".sprintf("%03d", $n); //Create "id". Sprintf pads the number to make it 4 digits.
	                if ($n == 999) { //Once the number reaches 9999, increase the letter by one and reset number to 0.
	                    $n = 0;
	                }
	                $i++; $n++; //Letters can be incremented the same as numbers. Adding 1 to "AAA" prints out "AAB".
	            }else{
	            	$id = $l .date("Ymd")."B".sprintf("%03d", $n); //Create "id". Sprintf pads the number to make it 4 digits.
	                if ($n == 999) { //Once the number reaches 9999, increase the letter by one and reset number to 0.
	                    $n = 0;
	                }
	                $i++; $n++; //Letters can be incremented the same as numbers. Adding 1 to "AAA" prints out "AAB".
	            }
                }   
            }
            
		$insert = array();
		
		foreach (Input::get('lotnumber') as $key => $lotnumber) {
			$insert[$key]['lotnumber'] = $lotnumber;
		}
		foreach (Input::get('qty_bag') as $key => $qty_bag) {
			$insert[$key]['qty_bag'] = $qty_bag;
		}
		
		//$material_size = Products::where('material_code','=',Input::get('material_code'))->get();

		$company = 8888;
		$plant = 8888;
		$material_code = Input::get('material_code');
		$do = DeliveryOrder::create([
			'company'		=> $company,
			'plant'			=> $plant,
			'do_no'			=> $id,
			'remark'		=> Input::get('remark')
			]);
		foreach ($insert as $row ) {
			$do->DoDetail()->attach($id,[
				'do_no'			=> $id,
				'material_code'	=> $material_code,
				'lot_number'	=> $row['lotnumber'],
				'qty_bag'		=> $row['qty_bag'],
				]);
			
		}
		return Redirect::to('delivery-order');
	}

	public function postData() {
        switch(Input::get('type')):
            case 'lotnumber':
                $return = '<option value=""></option>';
                foreach(Inventory::where('material_code','=',Input::get('id'))->get() as $row)
                    $return .= "<option value='$row->lot_number'>$row->material_name $row->lot_number $row->good_qty_bag BAG</option>";
                return $return;
                
            break;
        endswitch;    
    }
}
