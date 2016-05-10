<?php
/**
* 
*/
class PurchaseOrder extends Eloquent
{
	protected $table = 'ss_po';
	protected $fillable = array(
		'company',
		'plant',
		'so_date',
		'etd',
		'source',
		'eta_po',
		'po_no',
		'po_date'
		);
	/*public function PoDetail(){
		return $this->belongsToMany('Products','ss_po_detail','material_name','po_no')->withPivot('order_qty','unit_price','include','exclude');
	}*/
}