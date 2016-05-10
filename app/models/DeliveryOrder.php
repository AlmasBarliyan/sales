<?php
/**
* 
*/
class DeliveryOrder extends Eloquent
{
	protected $table = 'ss_domaster';
	protected $fillable = array(
		'company',
		'plant',
		'do_no',
		'remark'		
		);
	public function DoDetail(){
		return $this->belongsToMany('PurchaseOrder','ss_dodetail','material_code','do_no')->withPivot('material_code','lot_number','qty_bag');
	}
}