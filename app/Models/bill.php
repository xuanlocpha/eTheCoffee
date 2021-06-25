<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bill extends Model
{
    use HasFactory;
    protected $table = 'bill';
    protected $primaryKey = 'id';
    protected $fillable = ['staff_id','create_date','status','total_money'];
    public $timestamps = true;

    // 1-n
    public function bill_detail(){
        return $this->hasMany('App\Models\bill_detail','bill_id','id');
    }

     // 1-1
     public function staff(){
        return $this->belongsTo('App\Models\staff','staff_id','id');
    }
}
