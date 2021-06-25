<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user_reward extends Model
{
    use HasFactory;
    protected $table = 'supply';
    protected $primaryKey = 'id';
    protected $fillable = ['reward_id','user_id','quantity','status'];
    public $timestamps = true;

     // 1-1
     public function User(){
        return $this->belongsTo('App\Models\User','user_id','id');
    }

    // 1-1
    public function reward(){
        return $this->belongsTo('App\Models\reward','reward_id','id');
    }
}
