<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product_option extends Model
{
    use HasFactory;
    protected $table = 'product_option';
    protected $primaryKey = 'id';
    protected $fillable = ['product_id','option_id','value','extra_price'];
    public $timestamps = true;

    public function product(){
        return $this->belongsTo('App\Models\product','product_id','id');
    }

     // 1-1
     public function option(){
        return $this->belongsTo('App\Models\option','option_id','id');
    }
}
