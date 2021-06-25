<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reward extends Model
{
    use HasFactory;
    protected $table = 'reward';
    protected $primaryKey = 'id';
    protected $fillable = ['name','description','image','start_date','end_date','point'];
    public $timestamps = true;

    public function users_reward(){
        return $this->hasMany('App\Models\users_reward','reward_id','id');
    }

    public function order_detail(){
        return $this->hasMany('App\Models\order_detail','reward_id','id');
    }

    public function product(){
        return $this->belongsTo('App\Models\product','product_id','id');
    }
}
