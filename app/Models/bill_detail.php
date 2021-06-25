<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bill_detail extends Model
{
    use HasFactory;
    protected $table = 'bill_detail';
    protected $primaryKey = 'id';
    protected $fillable = ['bill_id','supply_id','quantity','note'];
    public $timestamps = true;

     // 1-1
     public function bill(){
        return $this->belongsTo('App\Models\bill','bill_id','id');
    }

     // 1-1
     public function supply(){
        return $this->belongsTo('App\Models\supply','supply_id','id');
    }
}
