<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class supply extends Model
{
    use HasFactory;
    protected $table = 'supply';
    protected $primaryKey = 'id';
    protected $fillable = ['name','unit','price'];
    public $timestamps = true;

     // 1-n
     public function bill_detail(){
        return $this->hasMany('App\Models\bill_detail','supply_id','id');
    }
}
