<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    use HasFactory;

    protected $table = 'category';
    protected $primaryKey = 'id';
    protected $fillable = ['name','status'];
    public $timestamps = true;

    // 1-n
    public function product_voucher(){
        return $this->hasMany('App\Models\product_voucher','category_id','id');
    }

    // 1-n
    public function product(){
        return $this->hasMany('App\Models\product','category_id','id');
    }
}
