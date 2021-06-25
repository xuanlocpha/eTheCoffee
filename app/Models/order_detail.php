<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order_detail extends Model
{
    use HasFactory;
    protected $table = 'order_detail';
    protected $primaryKey = 'id';
    protected $fillable = ['product_id','order_id','quantity','note'];
    public $timestamps = true;

    // 1-1
    public function reward(){
        return $this->belongsTo('App\Models\reward','reward_id','id');
    }

    // 1-1
    public function order(){
        return $this->belongsTo('App\Models\order','order_id','id');
    }
}
