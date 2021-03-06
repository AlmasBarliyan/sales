<?php
/**
* 
*/
class Transaksi extends Eloquent
{
	
	protected $table = 'tx_itemin';
	protected $fillable = array(
		'company',
		'plant',
		'id_transaksi',
		'storage',
		'date_in',
		'no_suratjln',
		'status',
		'user_create',
		'user_update'
		);
	public function InDetail(){
		return $this->belongsToMany('Products','tx_itemindetail','material_code','id_transaksi')->withPivot('material_code','lot_number','qty','status');
	}
	public function InvDaily(){
		return $this->belongsToMany('Products','ss_invdaily','material_code','id')->withPivot('company','plant','material_code','lot_number','in_daily_qty','out_daily_qty','order_daily_qty','storage','date_ym','status','remark');
	}
}