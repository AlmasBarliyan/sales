<?php

class InventoryController extends \BaseController {

    public function getIndex() {

        $products = array('' => '');
        foreach(Products::all() as $row)
            $products[$row->material_code] = $row->material_code." - ". $row->material_name ;
        return View::make('inventory.in', array(
            'products'  => $products,
            'storage'   => CommonCode::where('hcode','=','GD01')->where('code','!=','*')->get(),
            'inbound'   => DB::table('tx_itemin')->get()
        ));
    }
    
    public function postData() {
        switch(Input::get('type')):
            case 'nicklot' and 'size':
                //$return = '<option value=""></option>';
                foreach(Products::where('material_code', Input::get('id'))->get() as $row)
                    $return = "<input type='text' readonly='readonly' value='$row->nicklot' class='form-control' name='nicklot'>
                                <input type='hidden' value='$row->material_name' name='material_name'>
                                <input type='hidden' id='good_kg' onkeyup='myFunction()' value='$row->material_size' name='good_qty_bag'>
                                <input type='hidden' id='bad_kg' onkeyup='myFunction()' value='$row->material_size' name='bad_qty_kgs'>
                                <input type='hidden' id='result_kg' onkeyup='myFunction()' value='$row->material_size' name='result_kgs'> ";
                return $return;
            break;
        endswitch;    
    }
    public function postCreate(){
        date_default_timezone_set("Asia/Jakarta");
            $num_of_ids = 1000; //Number of "ids" to generate.
            $i = 0; //Loop counter.
            $n = 0; //"id" number piece.
            $l = "STO"; //"id" letter piece.

            while ($i <= $num_of_ids) { 
                //echo $id . "<br>"; //Print out the id.
                if (DB::table('tx_itemin')->whereNotNull('id_transaksi')->get()) {
                 
                $cek_id = DB::table('tx_itemin')->select('id_transaksi')->get();
                foreach ($cek_id as $ck) {
                    $aa = substr($ck->id_transaksi, -5,5);
                    $dt = substr($ck->id_transaksi, -11,6);
                    if ($aa == $aa) {
                        if ($dt == date("Ym")) {
                            $i++; $aa++; //Letters can be incremented the same as numbers. Adding 1 to "AAA" prints out "AAB".
                            $id = $l .date("Ym"). sprintf("%05d", $aa); //Create "id". Sprintf pads the number to make it 4 digits.             
                            if ($n == 999) { //Once the number reaches 9999, increase the letter by one and reset number to 0.
                                $n = 0;
                            }
                        }else{
                            $id = $l .date("Ym"). sprintf("%05d", $n-1); //Create "id". Sprintf pads the number to make it 4 digits.
                            if ($n == 999) { //Once the number reaches 9999, increase the letter by one and reset number to 0.
                                $n = 0;
                            }
                            $i++; $n++; //Letters can be incremented the same as numbers. Adding 1 to "AAA" prints out "AAB".
                        }
                        
                    }
                    else{
                        $id = $l .date("Ym"). sprintf("%05d", $n); //Create "id". Sprintf pads the number to make it 4 digits.            
                        if ($n == 999) { //Once the number reaches 9999, increase the letter by one and reset number to 0.
                            $n = 0;
                        }

                        $i++; $n++; //Letters can be incremented the same as numbers. Adding 1 to "AAA" prints out "AAB".
            
                    }
                }
                }else{
                $id = $l .date("Ym"). sprintf("%05d", $n); //Create "id". Sprintf pads the number to make it 4 digits.
                if ($n == 999) { //Once the number reaches 9999, increase the letter by one and reset number to 0.
                    $n = 0;
                }
                $i++; $n++; //Letters can be incremented the same as numbers. Adding 1 to "AAA" prints out "AAB".
                }   
            }
            
        $insert = array();
        
        foreach (Input::get('qty') as $key => $qty) {
            $insert[$key]['qty'] = $qty;
        }
        foreach (Input::get('status') as $key => $status) {
            $insert[$key]['status'] = $status;
        }
        $company = 10;
        $plant = 1010;
        $material_code = Input::get('material_code');
        $lot_number = Input::get('nicklot').date("ymd",strtotime(Input::get('nolot')));
        $in = Transaksi::create([
        'company'       => $company,
        'plant'         => $plant,
        'id_transaksi'  => $id,
        'date_ym'       => date("Ym"),
        'storage'       => Input::get('storage')
        ]);
        foreach ($insert as $row ) {
            $in->InDetail()->attach($id,[
                'id_transaksi'  => $id,
                'material_code' => $material_code,
                'lot_number'    => $lot_number,
                'qty'           => $row['qty'],
                'status'        => $row['status'],
                ]);
            $in->InvDaily()->attach($id,[
                'id'            => $id,
                'company'       => $company,
                'plant'         => $plant,
                'material_code' => $material_code,
                'lot_number'    => $lot_number,
                'in_daily_qty'  => $row['qty'],
                'status'        => $row['status'],
                'date_ym'       => date("Ymd")
                ]);
        }
        return Redirect::to('/inbound');
    }
    public function getReturn(){
        $inventory = array('' => '');
        foreach(DB::table('ss_invmonthly')->get() as $row)
            foreach (Products::where('material_code','=',$row->material_code)->get() as $prd) {
                $inventory[$row->material_code] = $row->material_code." - ".$prd->material_name;
            }
            
        return View::make('inventory.return', array(
            'products'  => $inventory
        ));
    }
    public function add(){
        return View::make('inventory.add');
    }
    public function postReturn() {
        switch(Input::get('type')):
            case 'lotnumber':
                $return = '<option value=""></option>';
                foreach(Inventory::where('material_code', Input::get('id'))->get() as $row)
                    //$pro = Products::where('material_code',$row->material_code)->first();
                    $return .= "<option value='$row->lot_number'>$row->lot_number</option> ";
                return $return;
            break;
            case 'material':
                //$return = '<option value=""></option>';
                foreach(Inventory::where('lot_number', Input::get('id'))->get() as $row)
                    $pro = Products::where('material_code',$row->material_code)->first();
                    //$return .= "<option disable value='$row->lot_number'>$pro->material_size</option> ";
                    $return = " <table class='table table-striped responsive-utilities jambo_table bulk_action'>
                                    <thead>
                                      <tr class='headings'>
                                        <th class='column-title'>Qty Bad Bag </th>
                                        <th class='column-title'>Qty Bad Kgs </th>
                                        <th class='column-title'>Qty Return Bag</th>
                                        <th class='column-title'>Qty Return Kgs</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                        <tr class='even pointer'>
                                            <td class='col-md-2'><input name='bad_qty_bag' value='$row->bad_qty_bag' type='text' class='col-md-12' id='bad_bag' onkeyup='myFunction()''></input></td>
                                            <td class='col-md-2'><input name='bad_qty_kgs' type='text' id='result_bad' value='$row->bad_qty_kgs' readonly='readonly' class='col-md-12'></input></td>
                                            <td class='col-md-2'><input name='return_qty_bag' class='col-md-12' type='number' max='$row->bad_qty_bag' id='return_bag' onkeyup='myFunction()'></input></td>
                                            <td class='col-md-2'><input type='text' name='return_qty_kgs' id='result_return' readonly='readonly' class='col-md-12'></input> </td>
                                            
                                        </tr>
                                    </tbody>
                                </table>
                                <input type='hidden' id='return_kg' onkeyup='myFunction()' value='$pro->material_size'>
                                <input type='hidden' id='bad_kg' onkeyup='myFunction()' value='$pro->material_size'>
                                <input type='hidden' value='$row->material_name' name='material_name'>
                                <input type='hidden' value='$row->storage' name='storage'>
                                <input type='hidden' value='$row->good_qty_bag' name='good_qty_bag'>
                                <input type='hidden' value='$row->good_qty_kgs' name='good_qty_kgs'>
                                <input type='hidden' value='$row->good_qty_bag' name='good_qty_bag'>
                                ";
                return $return;
        endswitch;    
    }
         
        

    public function postCreateReturn(){
        date_default_timezone_set("Asia/Jakarta");
            $num_of_ids = 1000; //Number of "ids" to generate.
            $i = 0; //Loop counter.
            $n = 0; //"id" number piece.
            $l = "RTN"; //"id" letter piece.
            $st = "STO";

            while ($i <= $num_of_ids) { 
                
                if (DB::table('ss_transaksi')->whereNotNull('id_transaksi')->get()) {
                 
                $cek_id = DB::table('ss_transaksi')->select('id_transaksi')->get();
                foreach ($cek_id as $ck) {
                    $aa = substr($ck->id_transaksi, -3,3);
                    $dt = substr($ck->id_transaksi, -11,8);
                    $hrf = substr($ck->id_transaksi,0,3);
                    if ($hrf == $l) {
                        if ($aa == $aa) {
                            if ($dt == date("Ymd")) {
                                $i++; $aa++; //Letters can be incremented the same as numbers. Adding 1 to "AAA" prints out "AAB".
                                $id = $l .date("Ymd"). sprintf("%03d", $aa);
                                //$angka_baru = str_repeat("0", 3 - strlen($aa+1)).($aa+1);
                                //$id = $l .date("Ymd"). $angka_baru;
                                if ($n == 999) { //Once the number reaches 9999, increase the letter by one and reset number to 0.
                                    $n = 0;
                                }
                               // $i++; $aa++;
                            }else{
                                $id = $l .date("Ymd"). sprintf("%03d", $n); //Create "id". Sprintf pads the number to make it 4 digits.
                                if ($n == 999) { //Once the number reaches 9999, increase the letter by one and reset number to 0.
                                    $n = 0;
                                }
                                $i++; $n++; //Letters can be incremented the same as numbers. Adding 1 to "AAA" prints out "AAB".
                            }
                            
                        }
                        else{
                            $id = $l .date("Ymd"). sprintf("%03d", $n); //Create "id". Sprintf pads the number to make it 4 digits.            
                            if ($n == 999) { //Once the number reaches 9999, increase the letter by one and reset number to 0.
                                $n = 0;
                            }

                            $i++; $n++; //Letters can be incremented the same as numbers. Adding 1 to "AAA" prints out "AAB".
                
                        }
                    }elseif ($hrf != $l) {
                        $id = $l .date("Ymd"). sprintf("%03d", $n); //Create "id". Sprintf pads the number to make it 4 digits.
                            if ($n == 999) { //Once the number reaches 9999, increase the letter by one and reset number to 0.
                                $n = 0;
                            }
                            $i++; 
                            $n++;
                    }
                }
                }else{
                    
                            $id = $l .date("Ymd"). sprintf("%03d", $n); //Create "id". Sprintf pads the number to make it 4 digits.
                            if ($n == 999) { //Once the number reaches 9999, increase the letter by one and reset number to 0.
                                $n = 0;
                            }
                            $i++; 
                            $n++;
                    

                }   
            }
            
           // echo "$id";
            //exit();

            $transaksi = New Transaksi();
            $transaksi->company = 8888;
            $transaksi->plant   = 8888;
            $transaksi->id_transaksi = $id;
            $transaksi->material_code = Input::get('material_code');
            $transaksi->material_name = Input::get('material_name');
            $transaksi->lot_number = Input::get('lotnumber');
            $transaksi->good_qty_bag = Input::get('good_qty_bag');
            $transaksi->good_qty_kgs = Input::get('good_qty_kgs');
            $transaksi->bad_qty_bag = Input::get('return_qty_bag');
            $transaksi->bad_qty_kgs = Input::get('return_qty_kgs');
            $transaksi->result_bag  = Input::get('good_qty_bag')+Input::get('return_qty_bag');
            $transaksi->result_kgs  = Input::get('good_qty_kgs')+Input::get('return_qty_kgs');
            $transaksi->storage     = Input::get('storage');
            $transaksi->date_ym     = date("Ym");
            $transaksi->status      = "B";
            $transaksi->status2      = "R";
            $transaksi->created_at = date("Y-m-d H:i:s");
            $transaksi->updated_at = date("Y-m-d H:i:s");
            $transaksi->save();
            return Redirect::to('/return');

        
    }
}