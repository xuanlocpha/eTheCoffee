<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    protected $table = 'product';
    protected $primaryKey = 'id';
    protected $fillable = ['category_id','name','quantity','price','image','popula','status'];
    public $timestamps = true;

    // 1-n
    public function product_voucher(){
        return $this->hasMany('App\Models\product_voucher','product_id','id');
    }

    // 1-n
    public function combo_detail(){
        return $this->hasMany('App\Models\combo_detail','product_id','id');
    }

     // 1-n
     public function product_option(){
        return $this->hasMany('App\Models\product_option','product_id','id');
    }

     // 1-n
     public function reward(){
        return $this->hasMany('App\Models\reward','reward_id','id');
    }

    

     // 1-1
     public function category(){
        return $this->belongsTo('App\Models\category','category_id','id');
    }
}
