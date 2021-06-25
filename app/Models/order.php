<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    use HasFactory;
    protected $table = 'order';
    protected $primaryKey = 'id';
    protected $fillable = ['user_id','staff_id','total_price','status'];
    public $timestamps = true;

    public function order_detail(){
        return $this->hasMany('App\Models\order_detail','order_id','id');
    }

     // 1-1
     public function User(){
        return $this->belongsTo('App\Models\User','user_id','id');
    }

     // 1-1
     public function staff(){
        return $this->belongsTo('App\Models\staff','staff_id','id');
    }
}
