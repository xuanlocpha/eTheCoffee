<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category_voucher extends Model
{
    use HasFactory;
    protected $table = 'category_voucher';
    protected $primaryKey = 'id';
    protected $fillable = ['category_id','voucher_id'];
    public $timestamps = true;

    public function voucher(){
        return $this->belongsTo('App\Models\voucher','voucher_id','id');
    }

     // 1-1
     public function category(){
        return $this->belongsTo('App\Models\category','category_id','id');
    }
}
