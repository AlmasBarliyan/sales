<?php
/**
* 
*/
class Currency extends Eloquent
{
	protected $table = 'exchange_rate_bi';
	protected $primaryKey = 'exchange_date';
}