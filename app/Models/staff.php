<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class staff extends Model
{
    use HasFactory;
    protected $table = 'staff';
    protected $primaryKey = 'id';
    protected $fillable = ['username','password','first_name','last_name',
    'gender','birthday','phone_number','email','address','permission','status'];
    public $timestamps = true;

    public function order(){
        return $this->hasMany('App\Models\order','staff_id','id');
    }
    // 1-n
    public function bill(){
        return $this->hasMany('App\Models\bill','staff_id','id');
    }
}
