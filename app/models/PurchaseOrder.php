<?php
/**
* 
*/
class PurchaseOrder extends Eloquent
{
	protected $table = 'ss_pomaster';
	protected $fillable = array(
		'company',
		'plant',
		'po_no',
		'po_date',
		'customer_code',
		'ship_to_party',
		'source',
		'currency_code',
		'currency_rate',
		'user_create',
		'user_update'
		);
	public function PoDetail(){
		return $this->belongsToMany('Products','ss_podetail','material_code','po_no')->withPivot('material_code','qty', 'price_idr','price_usd','exclude_idr','exclude_usd','include');
	}
}