<?php
/**
* 
*/
class SearchController extends \BaseController
{
	public function executeSearch()
	{
		$keywords = Input::get('keywords');

		$inventory = Products::all();

		$searchInventory = new \Illuminate\Database\Eloquent\Collection();

		foreach ($inventory as $si) 
		{
			if (Str::contains(Str::lower($si->material_name),Str::lower($keywords)))
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