<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{

	protected $fillable =[
		'order_id',
		'amount',
		'title',
		'description'
	];

	public function status(){
        return $this->belongsTo('App\OrderStatus');
    }

    public function setStatus($status){

        $status_id = OrderStatus::where('status', $status)->firstOrFail()->id;
        $this->status_id = $status_id;
        $this->save();
        return $this;
    }

}
