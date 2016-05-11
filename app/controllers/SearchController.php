<?php
/**
* 
*/
class SearchController extends \BaseController
{
	public function executeSearch()
	{
		$keywords = Input::get('keywords');

		$inventory = DB::table('ss_invdaily')->join('ss_po', 'ss_invdaily.material_name', '=', 'ss_po.material_name')->distinct()->select('ss_po.po_no','ss_po.material_name')->get();

		$searchInventory = new \Illuminate\Database\Eloquent\Collection();

		foreach ($inventory as $si) 
		{
			if (Str::contains(Str::lower($si->po_no),Str::lower($keywords)))
				$searchInventory->add($si);
		}

		return View::make('searchInventory')->with('searchInventory',$searchInventory);
	}
	public function postData() {
        switch(Input::get('type')):
            case 'lotnumber':
                //$return = '<option value=""></option>';
                foreach(Inventory::where('material_name','=',Input::get('id'))->get() as $row)
                    $return = "<p>$row->material_name</p>";
                return $return;
            break;
        endswitch;    
    }
}