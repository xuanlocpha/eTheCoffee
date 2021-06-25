<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product_voucher extends Model
{
    use HasFactory;
    protected $table = 'product_voucher';
    protected $primaryKey = 'id';
    protected $fillable = ['product_id','voucher_id'];
    public $timestamps = true;

    public function voucher(){
        return $this->belongsTo('App\Models\voucher','voucher_id','id');
    }

     // 1-1
     public function product(){
        return $this->belongsTo('App\Models\product','product_id','id');
    }
}
