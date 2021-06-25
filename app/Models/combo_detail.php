<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class combo_detail extends Model
{
    use HasFactory;
    protected $table = 'combo_detail';
    protected $primaryKey = 'id';
    protected $fillable = ['product_id','combo_id'];
    public $timestamps = true;

    public function combo(){
        return $this->belongsTo('App\Models\ombo','combo_id','id');
    }

     // 1-1
     public function product(){
        return $this->belongsTo('App\Models\product','product_id','id');
    }
}
